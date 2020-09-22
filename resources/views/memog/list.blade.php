@extends('layout')
@section('title', 'メモグ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>メモグ記事一覧</h2>
    <table class="table table-striped">
        <tr>
            <th>記事番号</th>
            <th>日付</th>
            <th>タイトル</th>
            <th>内容</th>
        </tr>
        @foreach($memogs as $memog)
        <tr>
            <td>{{ $memog->id }}</td>
            <td>{{ $memog->updated_at }}</td>
            <td>{{ $memog->title }}</td>
            <td>{{ $memog->content }}</td>
        </tr>
        @endforeach
    </table>
  </div>
</div>
@endsection