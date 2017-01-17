<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

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
        $albumArtworksObjs = \App\Album::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $albumArtworksIds = [];
        $albumArtworks = [];
        if(!empty($albumArtworksObjs[0]))
        {
          foreach( $albumArtworksObjs as $albumArtworksObj )
          {
            array_push($albumArtworksIds, $albumArtworksObj->artwork_id);
          }
          // var_dump($albumArtworksIds);

          foreach( $albumArtworksIds as $albumArtworksId )
          {
            array_push($albumArtworks, $artworks->where('id', $albumArtworksId)->first());
          }
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
      // $rules = [
      // ];
      // $validator = \Validator::make($request->all(), $rules);
      // if ($validator->fails()) {
      //   var_dump('발리데이터 실패');
      //   return back()->withErrors($validator)->withInput();
      // }

    if ($album=\App\Album::where('artwork_id', $request['artwork_id'])->first() and \App\Album::where('user_id','=',Auth::user()->id))
    {

      \App\Album::destroy($album->id);

      return redirect('artworks/'.$request['artwork_id'])->with('flash_message', '이미 앨범에 있는 작품입니다.');
    }
    else{
      $album = new \App\Album;
      $album->create([
        'user_id' => Auth::user()->id,
        'artwork_id' => $request['artwork_id'],
      ]);
      if (! $album) {
        return back()->with('flash_message', '작품을 앨범에 담지 못 했습니다.')->withInput();
      }
      return redirect('artworks/'.$request['artwork_id'])->with('flash_message', '작품을 앨범에 담았습니다.');
    }

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
