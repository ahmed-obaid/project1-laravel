 @extends('master')



@section('content')

<h3>the results:</h3>
@if($posts)
@foreach($posts as $post)
<div class='bridge'></div>
<a href='onepost/{{{$post->id}}}'><h4> {{$post->title}}</h4></a>




@endforeach
@else
<h3 class='alert-danger'> {{$failed}}</h3>

@endif


@stop