<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
      $students = Auth::user()->student()->get();
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
      if($request['testName'] == 'louvre' ) {
        $result_n=[];
        $result_d=[];
        $result_tp=[];
        $result_tg=[];
        $result_a_d=[];
        $result_types=[];
        $val = $request["search_word"];
        $op_val = $request["a_type"];
        $result_aw_names=[];
        $result_tag1=[];
        $result_tags=[];
        $val2 = '%'.$val.'%';
        $currentArtworks=[];
        $currentStudents=Auth::user()->student()->get();
        //검색
        foreach($currentStudents as $currentStudent)
        {
          $csArtworks = \App\Artwork::whereStudentId($currentStudent['id'])->get();
          foreach($csArtworks as $csArtwork)
          {
            array_push($currentArtworks,$csArtwork);
          }
        }
        //작품이름관련
        if($op_val ==0)
        {
          $result_aw_names=\App\Artwork::where('name', 'like', $val2)->orderBy('id', 'desc')->get();
          if(isset($result_aw_names))
          {
            foreach($result_aw_names as $result_aw_name)
            {
              foreach($currentArtworks as $currentArtwork)
              {
                if($result_aw_name->id == $currentArtwork->id)
                {
                  array_push($result_n,$result_aw_name);
                }
              }
            }
          }
        }
        //작품날짜관련
        if($op_val == 1)
        {
          $result_aw_dates=\App\Artwork::where('date','like', $val2)->orderBy('id', 'desc')->get();
          if(isset($result_aw_dates))
          {
            foreach($result_aw_dates as $result_aw_date)
            {
              foreach($currentArtworks as $currentArtwork)
              {
                if($result_aw_date->id==$currentArtwork->id)
                {
                  array_push($result_d, $result_aw_date);
                }
              }
            }
            // foreach($result_a_d as $result_a_ds)
            // {
            //   array_push($result_d,$result_a_ds->id);
            // }
          }
        }
          //작품유형관련
          if($op_val == 2)
          {
            $result_type0=\App\Type::where('name','like', $val2)->first();
            if(isset($result_type0))
            {
              $result_types=\App\Artwork::where('type_id',$result_type0->id)->orderBy('id', 'desc')->get();
              foreach($result_types as $result_type)
              {
                foreach($currentArtworks as $currentArtwork)
                {
                  if($result_type->id==$currentArtwork->id)
                  {
                    array_push($result_tp,$result_type);
                  }
                }
              }
            }
          }
        //작품태그관련

        if($op_val == 3)
        {
          $result_tag0=\App\Tag::where('name','like', $val2)->first();
          //비슷한 태그 없다는 가정 하에 first사용했음.  아니면 get필요!  <-아마도..?
          if(isset($result_tag0))
          {
            $result_tag1=\App\Artwork_tag::where('tag_id',$result_tag0->id)->orderBy('id', 'desc')->get();
            foreach($result_tag1 as $result_tag11)
            {
              array_push($result_tags,\App\Artwork::where('id',$result_tag11->artwork_id)->first());
            }
            foreach($result_tags as $result_tag)
            {
              foreach($currentArtworks as $currentArtwork)
              {
                if($result_tag->id==$currentArtwork->id)
                {
                  array_push($result_tg, $result_tag);
                }
              }
            }
          }
        }
          $sum_result=count($result_n)+count($result_d)+count($result_tg)+count($result_tp);
        return view('artworks.serchresult', [
            'result_n' => $result_n,
          'result_d' => $result_d,
          'result_tp' => $result_tp,
          'result_tg' => $result_tg,
          'sum_result' => $sum_result,
          'op_val' => $op_val,
        ]);
      }
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
        if ( isset($_FILES["photo"]["name"]) ) {
          $photoUrl = '/files/'.$_FILES["photo"]["name"];
        } else {
          $profilePicUrl = '/files/noimg.png';
        }

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
             if (is_null($artworkTagObjArr->first())){
               $tags = [];
               array_push($tags, \App\Tag::create([
                 'id'=>1,
                 'name'=>"기타태그",
               ]));
             }
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
