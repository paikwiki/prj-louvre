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
    </ul>
    <div class='write-box'>
      <h2>작품정보</h2>
      <ul>
        <li>
          <!-- <label for="name">작품명</label> -->
          <input type="text" id="name" name="name" class="text-input" placeholder="작품명">
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
        <li>
          <label for="completeness">완성도</label>
          <input type="range" id="completeness" min="0" max="10" name="completeness">
          <div id="output"></div>
        </li>
        <li>
          <label for="engagement">몰입도</label>
          <input type="range" id="engagement" min="0" max="10" name="engagement">
          <div id="output"></div>
        </li>
        <li class="tags">
          @foreach ( $tags as $key=>$tag )
            <input type="checkbox" id="tag{{ $key+1 }}" name="tag{{ $key+1 }}"><label for="tag{{ $key+1 }}"><span>{{ $tag->name }}</span></label>
          @endforeach
        </li>
        {{-- 새로운 태그 기능 잠시 막아둠
        <li>
          <label for="tags">새로운 태그</label>
          <input type="text" id="tags" name="tags"><span>(콤마로 구분)</span>
        </li>
        --}}
        <li>
          <!-- <label for="feedback">코멘트</label> -->
          <input type="text" id="feedback" name="feedback" class="text-input" placeholder="코멘트">
        </li>
      </ul>
      <div class='buttons'>
        <button><span class="icon-cancel"></span>취소</button>
        <button type="submit"><span class="icon-submit"></span>저장</button>
      </div>
      <div class="edge-triangle">
      </div>
    </div>
  </form>
</div>
@endsection

@section('footer')

@endsection
