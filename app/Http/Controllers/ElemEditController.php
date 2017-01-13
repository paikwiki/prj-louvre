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
      dd('test');
        return 'test';
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
