@extends('layouts.master')

@section('title', 'Artwork-create')

@section('content')
<div class="a-add-box">
  @if( count($students) > 0 )
  <form class="a-add" action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <ul>
      <li class="addpicture">
        <label for="imgInp"> <img src='/image/final-image/icon_plus.png' alt='작품 사진'><span>작품을 추가하세요</span> </label>
        <input type="file" id="imgInp" name="photo" value="{{ old('photo') }}" >
      </li>
      <img id="image_preview" class="hide" src="" alt="your image"/>
    </ul>
    <div class='write-box'>
      <h2>작품정보</h2>
      <ul>
        <li>
          <!-- <label for="name">작품명</label> -->
          <input type="text" id="name" name="name" class="a-name" placeholder="작품명">
          <select id="type-id" class="type-id" name="type_id">
            <option value="">유형 선택</option>
            @foreach ( $types as $type )
              <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
          {!! $errors->first('type_id', '<span class="form-error form-error-type">:message</span>') !!}
        </li>
        <li>
          <label for="student-id">학생명</label>
          <select id="student-id" class="student-id" name="student_id">
            <option value="">학생 선택</option>
            @foreach ( $students as $student )
              @if( $student->id == $student_id )
                <option value="{{ $student->id }}" selected>{{ $student->name }}</option>
              @else
                <option value="{{ $student->id }}">{{ $student->name }}</option>
              @endif
            @endforeach
          </select>
          {!! $errors->first('student_id', '<span class="form-error">:message</span>') !!}
        </li>
        <li>
          <label for="date">등록일</label>
          <input type="date" id="date" class="date" name="date">
          {!! $errors->first('date', '<span class="form-error">:message</span>') !!}
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
        <li class="tags-box">
          @if( count($tags)>0 )
            @foreach ( $tags as $tag )
              <input type="checkbox" id="tag{{ $tag->id }}" name="tag{{ $tag->id }}"><label for="tag{{ $tag->id }}"><span>{{ $tag->name }}</span></label>
            @endforeach
          @else
            <p class="empty-alert">생성한 태그가 없습니다.</p>
          @endif

        </li>
        <li class="feedback-box">
          <!-- <label for="feedback">코멘트</label> -->
          <input type="textarea" id="feedback" name="feedback" class="feedback" placeholder="코멘트">
        </li>
      </ul>
      <div class='buttons'>
        <button><span class="icon-cancel"></span>취소</button>
        <button id="a-add-btn" type="submit" onclick="this.disabled=true;this.form.submit();"><span class="icon-submit"></span>저장</button>
      </div>
      <div class="edge-triangle">
      </div>
    </div> <!-- /.write-box -->
  </form>


  <form class="a-add" action="{{ route('elemedit.store') }}" method="POST">
    <div class="write-box">
      <ul>
        <li>
          {!! csrf_field() !!}
          <label for="new-elem">태그 생성</label>
          <input type="text" name="new_elem" id="new-elem" class="new-elem" value="">
          <input type="hidden" name="new_elem_type" class="new-elem-type" value="태그">
          <button type="submit"><span class="icon-submit"></span>저장</button>

        </li>
        <li>지금 태그를 생성하면 입력하던 게 사라집니다!</li>
        <li>태그 이름에 공백을 쓸 수 없습니다.</li>
        <li>콤마로 구분해서 입력하면 여러 개의 태그 추가가 가능합니다.</li>
      </ul>
    </div>
  </form>
  @else
  <div class='write-box'>
    <h2>앗! 작품을 등록하시려면 수강생이 있어야 합니다.</h2>
    <ul>
      <li>담당하고 계신 수강생이 없어요. :(</li>
      <li>작품을 등록하기 전에 학생을 등록해주세요.</li>
    </ul>

    <div class="edge-triangle">
    </div>
  </div> <!-- /.write-box -->
  @endif
</div> <!-- /.a-add-box-->
<script src="/js/artworkCreate.js" charset="utf-8"></script>
@endsection

@section('footer')

@endsection
