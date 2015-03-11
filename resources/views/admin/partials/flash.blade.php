@foreach(['success', 'warning', 'info'] as $level)
  @if(Session::has($level))
    <div class="alert alert-{{$level}}">
      {!! Session::get($level) !!}
    </div>
  @endif
@endforeach