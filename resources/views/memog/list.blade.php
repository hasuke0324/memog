@extends('layout')
@section('title', 'メモグ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>メモグ記事一覧</h2>
    @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
    @endif
    <table class="table table-striped">
        <tr>
            <th>記事番号</th>
            <th>タイトル</th>
            <th>日付</th>
        </tr>
        @foreach($memogs as $memog)
        <tr>
            <td>{{ $memog->id }}</td>
            <td><a href="/memog/{{ $memog->id }}">{{ $memog->title }}</a></td>
            <td>{{ $memog->updated_at }}</td>
        </tr>
        @endforeach
    </table>
  </div>
</div>
@endsection