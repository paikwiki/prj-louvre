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
      $parseUrl = parse_url(url()->current());
      $urlPath = $parseUrl['path'];

      if( $urlPath == '/tags' )
      {
        $targetModel = \App\Tag::get();
      }
      if( $urlPath == '/types' )
      {
        $targetModel = \App\Type::get();
      }
      if( $urlPath == '/materials' )
      {
          // $targetModel = ;
      }
      dd($targetModel);

      return view('elemEdit.index', [
        'urlPath' => $urlPath,
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
        //
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
