@extends('layouts.teacher')
@section('content')
		<form method="post" action="{{route('teacher.save_assignment')}}">
        {{csrf_field()}}
          <label for="title"><b>Enter the title of assignment:</b></label>
          <input type="text" name="title"> 
          <br><br>
          <label for="code"><b>Enter the code of class:</b></label>
          <input type="text" name="code">
          <br><br>
          <label for="file"><b>Attach File:</b></label>
          <input type="file" name="file">
          <br><br>
          <label for="msg"><b>Assignment Description</b></label>
          <div>
          	<textarea name="msg" rows="5" cols="50"></textarea>
      	</div>

          <button type="submit" class="btn btn-primary">Add</button>
        </form>
@stop