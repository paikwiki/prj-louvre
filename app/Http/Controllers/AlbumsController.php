<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = \App\Artwork::get();
        $albumArtworksObjs = \App\Album::where('user_id', 1)->get();
        $albumArtworksIds = [];
        $albumArtworks = [];

        foreach( $albumArtworksObjs as $albumArtworksObj )
        {
          array_push($albumArtworksIds, $albumArtworksObj->artwork_id);
        }
        // var_dump($albumArtworksIds);

        foreach( $albumArtworksIds as $albumArtworksId )
        {
          array_push($albumArtworks, $artworks->where('id', $albumArtworksId)->first());
        }
        // var_dump($albumArtworks);

        return view('albums.index', [
          'albumArtworks' => $albumArtworks
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
