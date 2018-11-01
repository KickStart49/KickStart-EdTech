@extends('layouts.teacher')
@section('content')
		<form method="post" action="{{route('teacher.save_chapter',['code'=>$code])}}">
        {{csrf_field()}}
          <label for="title"><b>Enter the title of chapter:</b></label>
          <input type="text" name="title"> 
          <br><br>
          {{-- <label for="classname"><b>Name of class:</b></label>
          <input type="text" name="classname" @foreach($classes as $class)value="{{$class->name}}"@endforeach> 
          <br><br> --}}
          <label for="file"><b>Attach File:</b></label>
          <input type="file" name="file">
          <br><br>
          

          <button type="submit" class="btn btn-primary">Add</button>
        </form>
@stop