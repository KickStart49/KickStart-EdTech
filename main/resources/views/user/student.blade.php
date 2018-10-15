student

<form method="post" action="joinclass">
    {{ csrf_field() }}
    <input type="string" name="code" placeholder="Enter class code">
    <input type="submit" name="submit" value="Join Class">
</form>

@if(!empty($classes))
	
	@foreach($classes as $class)

        <p>Joined new class : {{ $class->main_class->code }}</p>
		<p>Class Assignment : {{ $class->main_class->assignment }}</p>


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

