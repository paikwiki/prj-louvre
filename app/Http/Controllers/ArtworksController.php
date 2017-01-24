<?php
namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

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
    public function create(Request $request)
    {
      $user = Auth::user();
      $artwork = new \App\Artwork;
      $students = $user->student()->get();
      $tags = \App\Tag::whereUserId($user->id)->get();
      $types = \App\Type::whereUserId($user->id)->get();
      $student_id = $request['std_id'] ? $request['std_id'] : 0;

      return view('artworks.create', [
        'artwork' => $artwork,
        'students' => $students,
        'tags' => $tags,
        'types' => $types,
        'student_id' => $student_id,
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
      // 검색 기능
      if($request['testName'] == 'louvre' ) {
        $optionVal = $request["a_type"];
        $searchWord = $request["search_word"];
        $searchTarget = '%'.$searchWord.'%'; // 검색어를 포함한 모든 것을 찾기 위해 앞뒤로 %추가
        $currentArtworks=[]; //
        $currentStudents=Auth::user()->student()->get();
        $searchedArtworkArr = []; // DB 쿼리 결과
        $resultArtworkArr = []; // view에 던져줄 최종 검색 결과
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
        if( $optionVal==0 )
        {
          $searchedArtworkArr=\App\Artwork::where('name', 'like', $searchTarget)->orderBy('id', 'desc')->get();
        }
        //작품날짜관련
        if( $optionVal==1 )
        {
          $searchedArtworkArr=\App\Artwork::where('date','like', $searchTarget)->orderBy('id', 'desc')->get();
        }
        //작품유형관련
        if( $optionVal==2 )
        {
          $resultType=\App\Type::where('name','like', $searchTarget)->first();
          if(isset($resultType))
          {
            $searchedArtworkArr=\App\Artwork::where('type_id',$resultType->id)->orderBy('id', 'desc')->get();
          }
        }
        //작품태그관련
        if( $optionVal==3 )
        {
          $resultTag=\App\Tag::where('name','like', $searchTarget)->first();
          if(isset($resultTag))
          {
            $resultArworkTagArr=\App\Artwork_tag::where('tag_id',$resultTag->id)->orderBy('id', 'desc')->get();
            foreach($resultArworkTagArr as $resultArworkTag)
            {
              array_push($searchedArtworkArr,\App\Artwork::where('id',$resultArworkTag->artwork_id)->first());
            }
          }
        }
        // 결과 가공
        if(isset($searchedArtworkArr))
        {
          foreach($searchedArtworkArr as $searchedArtwork)
          {
            foreach($currentArtworks as $currentArtwork)
            {
              if($searchedArtwork->id==$currentArtwork->id)
              {
                array_push($resultArtworkArr, $searchedArtwork);
              }
            }
          }
        }
        // 검색 범위
        $searchCategory = ['작품명', '날짜', '유형', '태그'];

        return view('artworks.serchresult', [
          'searchCategory' => $searchCategory,
          'optionVal' => $optionVal,
          'searchWord' => $searchWord,
          'resultArtworkArr' => $resultArtworkArr,
        ]);
      } // 검색 기능 끝

      $rules = [
        'type_id' => ['required'],
        'student_id' => ['required'],
        'date' => ['required'],
      ];
      $messages = [
        'type_id.required' => '작품 유형을 선택해 주세요.',
        'student_id.required' => '작품을 그린 학생을 선택해 주세요.',
        'date.required' => '완성한 날짜를 선택해 주세요.',
      ];
      $validator = \Validator::make($request->all(), $rules, $messages);
      if ($validator->fails()) {
        // var_dump('발리데이터 실패');
          return back()->withErrors($validator)->withInput();
      }

      if(strlen($_FILES["photo"]["name"])>0)
      {
        $imageFileName = time() . '.' . basename($_FILES["photo"]["name"]);
        $s3 = \Storage::disk('s3');
        $photoPath = '/artworkuploads/' . $imageFileName;
        $s3->put($photoPath, file_get_contents($_FILES["photo"]["tmp_name"]), 'public');
        //$photoUrl=\Storage::url($imageFileName);
        //$photo = Storage::disk('s3')->get($photoPath);
      } else {
        $imageFileName = "default";
        //$imageFileName = '/public/files/noimg.png';
      }

      // 작품 이미지 저장
      $artwork = \App\Artwork::create([
        // 'photo' => $request['photo'],
        'photo' => $imageFileName,
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
            //  dd($type);
             $student = \App\Student::whereId($artwork->student_id)->first();


             $artworkTagObjArr= \App\Artwork_tag::where('artwork_id', $id)->get();

             //태그가 있을 때
             if( !is_null($artworkTagObjArr->first()) )
             {
               $tagIdArr = []; //tag 찍기
               foreach ($artworkTagObjArr as $key=>$artworkTagObj) {
                 $tagIdArr[$key] = $artworkTagObj->tag_id;
                //  var_dump($key .' / '. $tagIdArr[$key]);
                 $tags[$key] = \App\Tag::whereId($tagIdArr[$key])->first();
               }
             } else {
               $tags = [];
             }

            //  if (is_null($artworkTagObjArr->first())){
            //    $tags = [];
            //    array_push($tags, \App\Tag::create([
            //      'id'=>1,
            //      'name'=>"기타태그",
            //    ]));
            //  }




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
      $artwork = \App\Artwork::whereId($id)->first();
      $user = Auth::user();
      $students = $user->student()->get();
      $tags = \App\Tag::whereUserId($user->id)->get(); //나의 태그만 불러오기
      $old_tags=[];
      foreach($artwork->tag as $old_tag){
        if($old_tag->user_id==Auth::user()->id) //작품에 해당하는 모든 태그들중 해당 유저가 기록한 태그만 불러오기
        {
          array_push($old_tags,$old_tag->id);
        }
      }
      //dd(\App\Tag::whereIn('id', [7,8,9])->first());
      $types = \App\Type::whereUserId($user->id)->get();
      return view('artworks.edit', [
        'artwork' => $artwork,
        'students' => $students,
        'tags' => $tags,
        'types' => $types,
        'oldtags' => $old_tags,
      ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Artwork $artwork)
    {
      if( isset($_FILES["photo"]["name"]) )
      {
        $imageFileName = time() . '.' . basename($_FILES["photo"]["name"]);
        $s3 = \Storage::disk('s3');
        $photoPath = '/artworkuploads/' . $imageFileName;
        $s3->put($photoPath, file_get_contents($_FILES["photo"]["tmp_name"]), 'public');
        //$photoUrl=\Storage::url($imageFileName);
        //$photo = Storage::disk('s3')->get($photoPath);
      } else {
        // 기존의 이미지가 있었거나 여전히 없을 경우
        $imageFileName = isset($request["photo"]) ? $request["photo"] : "default";
      }

      $artwork ->update([
        // 'photo' => $request['photo'],
        'photo' => $imageFileName,
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

        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Artwork $artwork)
    {
      $artwork->album()->delete();
      $artwork->delete();
      return redirect('/')->with('message','작품'.$artwork->name.'이 삭제되었습니다.');//
    }
}
