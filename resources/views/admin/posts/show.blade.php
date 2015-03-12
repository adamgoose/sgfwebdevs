@extends('admin.layout')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> {{$post->title}}</h4>
        <hr>
        {!! $post->content !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Post Details</h4>
        <hr/>

        <dl>
          <dt>ID</dt>
          <dd>{{$post->id}}</dd>
          <dt>Created At</dt>
          <dd>{{$post->created_at->format('m/d/Y')}}</dd>
        </dl>
      </div>
    </div>
  </div>

@stop