<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtworksController extends Controller
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
      return view('artworks.search', [
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('artworks.create');
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
         if ((int)$id)
         {
           $artwork = \App\Artwork::whereId($id)->first();
           $type = \App\Type::whereId($artwork->type_id)->first();
           $student = \App\Student::whereId($artwork->student_id)->first();
           $artworkTagObjArr= \App\Artwork_tag::where('artwork_id', $id)->get();
           $tagIdArr = []; //tag 찍기
           foreach ($artworkTagObjArr as $key=>$artworkTagObj) {
             $tagIdArr[$key] = $artworkTagObj->tag_id;
            //  var_dump($key .' / '. $tagIdArr[$key]);
             $tags[$key] = \App\Tag::whereId($tagIdArr[$key])->first();
           }


           return view('artworks.show', [
             'artwork' => $artwork,
             'type' => $type,
             'student' => $student,
             'tags' => $tags,
           ]);
         } elseif ($id == 'create') {
           return view('artworks.create');
         } else {
           return view('artworks.serchresult');
         }
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
