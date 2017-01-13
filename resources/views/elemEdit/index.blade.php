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

          @if( $targetElemType == '유형')
            <form class="elem-edit" method="POST" action="{{ route('types.update',  [$targetElem->id, 'elemtype' => 'types']) }}">
              {{ csrf_field()}}
              {{method_field('PUT')}}
              <input type="text" name="name" class="elem-update" value="">
              <button type="submit" name="button">수정하기</button>
            </form>
            <form class="elem-del" method="POST" action="{{ route('types.destroy',  [$targetElem->id, 'elemtype' => 'types']) }}">
          @elseif( $targetElemType == '재료')
            <form class="elem-edit" method="POST" action="{{ route('materials.update',  [$targetElem->id, 'elemtype' => 'materials']) }}">
              {{ csrf_field()}}
              {{method_field('PUT')}}
              <input type="text" name="name" class="elem-update" value="">
              <button type="submit" name="button">수정하기</button>
            </form>
            <form class="elem-del" method="POST" action="{{ route('materials.destroy', [$targetElem->id, 'elemtype' => 'materials']) }}">
          @elseif( $targetElemType == '태그')
            <form class="elem-edit" method="POST" action="{{ route('tags.update',  [$targetElem->id, 'elemtype' => 'tags']) }}">
              {{ csrf_field()}}
              {{method_field('PUT')}}
              <input type="text" name="name" class="elem-update" value="">
              <button type="submit" name="button">수정하기</button>
            </form>
            <form class="elem-del" method="POST" action="{{ route('tags.destroy',[$targetElem->id, 'elemtype' => 'tags']) }}">
          @endif
            {{ csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">삭제</button>
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
        <input type="hidden" name="new_elem_type" class="new-elem-type" value="{{ $targetElemType }}">
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
