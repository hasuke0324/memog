@extends('layout')
@section('title', 'メモグ詳細')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>{{ $memog->title }}</h2>
    <span>作成日：{{ $memog->created_at }}</span>
    <span>更新日：{{ $memog->updated_at }}</span>
    <p>{{ $memog->content }}</p>
  </div>
</div>
@endsection