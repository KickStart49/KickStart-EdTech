teacher

<a href="/testclass">Add Class</a>
@if(!empty($classes))
	
	@foreach($classes as $class)

		<p>New Class Created : {{ $class->main_class->code }}</p>
		<p>It's Assignment : {{ $class->main_class->assignment }}</p>


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