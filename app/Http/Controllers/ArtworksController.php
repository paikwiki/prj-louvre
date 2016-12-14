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
      $artwork = new \App\Artwork;
      $students = \App\Student::get();
      $tags = \App\Tag::get();
      $types = \App\Type::get();
      return view('artworks.create', [
        'artwork' => $artwork,
        'students' => $students,
        'tags' => $tags,
        'types' => $types,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'name' => 'required',
          'files' => ['array'],
          'files.*' => ['mimes:jpg,jpeg,png,bmp,gif', 'max:30000'],
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
        }

// 사진 경로 따고 옮기기
$url = $_FILES["photo"]["tmp_name"];
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

// 사진 경로를 photo에 저장하기
$photoUrl = '/files/'.$_FILES["photo"]["name"];

        $artwork = \App\Artwork::create([
          // 'photo' => $request['photo'],
          'photo' => $photoUrl,
          'name' => $request['name'],
          'date' => $request['date'],
          'type_id' => $request['type_id'],
          'student_id' => $request['student_id'],
          'size' => $request['size'],
          'engagement' => $request['engagement'],
          'completeness' => $request['completeness'],
          'feedback' => $request['feedback'],
        ]);
        // $artwork->tag()->sync($request->input('tags'));
        // $aTags = explode(",", $request['tags']);
        // foreach ( $aTags as $key=>$aTag )
        // {
        //   $aTags[$key] = trim($aTag);
        // }

        $selectTags = [];

        for( $i=0; $i<20; $i++ )
        {
          $selectTag = 'tag'.($i+1);
          if( $request[$selectTag] == 'on' )
          {
            array_push($selectTags, $i+1);
          }
        }

        $artwork->tag()->sync($selectTags);

        if (! $artwork) {
          return back()->with('flash_message', '작품이 저장되지 않았습니다.')->withInput();
        }
        return redirect('artworks/'.$artwork->id)->with('flash_message', '작품이 저장됐습니다.');



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
