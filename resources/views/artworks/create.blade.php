@extends('layouts.master')

@section('content')
<div class="a-add-box">
  <form class="a-add" action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <ul>
      <li class="addpicture">
        <label for="imgInp"> <img src='/image/final-image/icon_plus.png' alt='작품 사진'><span>작품을 추가하세요</span> </label>
        <input type="file" id="imgInp" name="photo" value="{{ old('photo') }}" >
        
      </li>
      
      <img id="blah" src="#" alt="your image"/>
      
      <div class='write-box'>
          <li>
            <label for="name">작품명</label><input type="text" id="name" name="name">
            <select id="type-id" name="type_id">
              <option>유형 선택</option>
              @foreach ( $types as $key=>$type )
                <option value="{{ $key+1 }}">{{ $type->name }}</option>
              @endforeach
            </select>
          </li>
          <li>
            <label for="student-id">학생명</label>
            <select id="student-id" class="student-id" name="student_id">
              <option>학생 선택</option>
              @foreach ( $students as $key=>$student )
                <option value="{{ $key+1 }}">{{ $student->name }}</option>
              @endforeach
            </select>
          </li>
          <li>
            <label for="date">등록일</label>
            <input type="date" id="date" name="date">
          </li>
        </div>
      <div class="sliders">
          <li>
            <label for="completeness">완성도</label>
            <div id="output"></div>
            <input type="range" id="completeness" min="0" max="5" name="completeness">
          </li>
          <li>
            <label for="engagement">몰입도</label>
            <div id="output"></div>
            <input type="range" id="engagement" min="0" max="5" name="engagement">
          </li>
      </div>
      <li>
        @foreach ( $tags as $key=>$tag )
          <input type="checkbox" name="tag{{ $key+1 }}">{{ $tag->name }}
        @endforeach
      </li>
{{-- 새로운 태그 기능 잠시 막아둠
      <li>
        <label for="tags">새로운 태그</label>
        <input type="text" id="tags" name="tags"><span>(콤마로 구분)</span>
      </li>
--}}
      <li>
        <label for="feedback">코멘트</label>
        <input type="text" id="feedback" name="feedback">
      </li>
    </ul>
           <div class='buttons'>
            <button><span class="icon-cancel"></span>취소</button>
            <button type="submit"><span class="icon-submit"></span>저장</button>
            </div>
            
  </form>
</div>
@endsection

@section('footer')

@endsection
