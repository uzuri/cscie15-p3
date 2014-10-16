@extends('helperapp')

@section('results')
	<div class="paras">
	@foreach ($paras as $para)
	    <p class="para">{{ $para }}</p>
	@endforeach
	</div>
	
	<div class="users">
	@foreach ($users as $user)
	    <p class="user"><img src="{{ $user['image'] }}" /><a href="mailto:{{ $user['email'] }}">{{ $user['name'] }}</a><br />{{ $user['phone'] }}<br />{{ $user['username'] }}</p>
	@endforeach
	</div>
@stop
