student

<form method="post" action="{{ route('student.joinclass') }}">
    {{ csrf_field() }}
    <input type="string" name="code" placeholder="Enter class code">
    <input type="submit" name="submit" value="Join Class">
</form>

@if(!empty($classlist))
    
    <ul>Running Classes

    @foreach($classlist as $class)

        <li>
            {{ $class->code }}    
        </li>

    @endforeach

    </ul>

@endif

@if(!empty($classes))
	
	@foreach($classes as $myclass)

        <p>Joined new class : {{ $myclass->main_class->code }}</p>
		<p>Class Assignment : {{ $myclass->main_class->assignment }}</p>


	@endforeach

@endif

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

