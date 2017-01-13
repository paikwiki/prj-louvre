<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElemEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (!auth()->check())
      {
        return redirect('users');
      }

      $user = \Auth::user();
      $parseUrl = parse_url(url()->current());
      $urlPath = $parseUrl['path'];

      if( $urlPath == '/tags' )
      {
        $targetElemType = '태그';
        $targetElemArr = \App\Tag::whereUserId($user->id)->get();
      }
      if( $urlPath == '/types' )
      {
        $targetElemType = '유형';
        $targetElemArr = \App\Type::whereUserId($user->id)->get();
      }
      if( $urlPath == '/materials' )
      {
        $targetElemType = '재료';
        $targetElemArr = \App\Material::whereUserId($user->id)->get();
      }
      // dd($targetElemArr);

      return view('elemEdit.index', [
        'targetElemType' => $targetElemType,
        'targetElemArr' => $targetElemArr,
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = \Auth::user();
      $elemType = $request['new_elem_type'];
      $elemArr = str_replace(' ', '', $request['new_elem']);
      $newElemArr = explode(",", $elemArr); // 배열로 만들기
      $newElemArr = array_unique($newElemArr); // 중복요소 제거
      $existElemNameArr = [];

      if( $elemType == '유형' )
      {
        $existElemArr = \App\Type::whereUserId($user->id)->get();
      } elseif ( $elemType == '태그' ) {
        $existElemArr = \App\Tag::whereUserId($user->id)->get();
      } elseif ( $elemType == '재료' ) {
        $existElemArr = \App\Material::whereUserId($user->id)->get();
      }


      foreach( $existElemArr as $existElem )
      {
        array_push($existElemNameArr, $existElem->name);
      }
      foreach( $newElemArr as $newElem )
      {
        if( !in_array($newElem, $existElemNameArr) )
        {
          if( $elemType == '유형' )
          {
            \App\Type::create([
              'name' => $newElem,
              'user_id' => $user->id,
            ]);
          } elseif ( $elemType == '태그' ) {
            \App\Tag::create([
              'name' => $newElem,
              'user_id' => $user->id,
            ]);
          } elseif ( $elemType == '재료' ) {
            \App\Material::create([
              'name' => $newElem,
              'user_id' => $user->id,
            ]);
          }
        }
      }

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if( $request['elemtype'] == 'types' )
      {
        $elem = \App\Type::whereId($id)->first();
      } elseif($request['elemtype'] == 'tags') {
        $elem = \App\Tag::whereId($id)->first();
      } elseif($request['elemtype'] == 'materials') {
        $elem = \App\Material::whereId($id)->first();
      }
      // dd($request['elemtype'], $request['elem_update']);
      $elem->update($request->all());

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      if( $request['elemtype'] == 'types' )
      {
        $elem = \App\Type::whereId($id)->first();
      } elseif($request['elemtype'] == 'tags') {
        $elem = \App\Tag::whereId($id)->first();
      } elseif($request['elemtype'] == 'materials') {
        $elem = \App\Material::whereId($id)->first();
      }

      $elem->delete();
      return back()->with('message','프로젝트'.$elem->name.'이 삭제되었습니다.');
    }
}
