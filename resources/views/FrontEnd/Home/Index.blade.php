@extends('Layouts.HomeApp')


@section('Content')
    

{{-- @foreach ($navbar as $nav)

			@if ($nav->sub_menu[0]['title'] == null)

				<li>
					<a href="/{{$nav->url}}" title="">{{$nav->title}}</a>
				</li>
			
			@else
    
        <li>
            <a href="/{{$nav->url}}" title="">{{$nav->title}}</a>
    
            @foreach ($nav->sub_menu as $sub_menu)
       
                <ul>
                    <li><a href="{{$sub_menu['url']}}" title="">{{$sub_menu['title']}}</a></li>
                </ul>
            @endforeach
        </li>
   
    @endif

@endforeach --}}

    <h1>Welcome to our website</h1>


@endsection