@extends('layouts.master')

@section('content')
<div class="settings settings-elem">
  <h2>{{ $targetElemType }} 관리</h2>
  <h3>등록된 {{ $targetElemType }} 목록</h3>
  <ul>
    @if( count($targetElemArr)>0 )
      @foreach( $targetElemArr as $targetElem )
        <li><span class="elem-name">{{ $targetElem->name }}</span><div class="btn-box">
          {{--
          <form class="">
              <button type="submit" name="button">수정</button>
          </form>
          --}}
          <form class="elem-edit" action="" method="post">
            <input type="text" name="elem_update" class="elem-update" value="">
            <button type="submit" name="button">수정하기</button>
          </form>
          <form class="elem-del" action="" method="post">
            <button type="submit" name="button">삭제</button>
          </form>
        </div></li>
      @endforeach
    @else
      <li>아직 없어요. :(</li>
    @endif
  </ul>
  <h3>새로운 {{ $targetElemType }} 추가하기 </h3>
  <ul>
    <li>
      <form class="a-add" action="{{ route('elemedit.store') }}" method="POST">
        {!! csrf_field() !!}
        <input type="text" name="new_elem" class="new-elem" value="">
        <button type="submit"><span class="icon-submit"></span>저장</button>
      </form>
    </li>
    <li>{{ $targetElemType }} 이름에 공백을 쓸 수 없습니다.</li>
    <li>콤마로 구분해서 입력하면 여러 개의 {{ $targetElemType }} 추가가 가능합니다.</li>
  </ul>
</div>

@endsection

@section('footer')

@endsection
