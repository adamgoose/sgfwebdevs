@extends('admin.layout')

@section('content')

  <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>
              {!! $post->getTableLinks() !!}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@stop