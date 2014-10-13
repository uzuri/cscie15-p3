<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Developer's Best Friend</title>
	<style>
		body
		{
			text-align: center;
		}
		
		h1 
		{
			font-size: 32px;
			margin: 16px 0 0 0;
			text-align: center;
		}
		
		.paras
		{
			margin: 4%;
			width: 40%;
			float: left;
			text-align: left;
		}
		
		.users
		{
			margin: 4%;
			width: 40%;
			float: right;
			text-align: left;
		}
	</style>
</head>
<body>
<h1>P3: Developer's Best Friend</h1>

<p>This tool will provide you with either a list of users or <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">pseudo-latin</a> text to aid you in building out designs or web tools. </p>

{{ Form::open(array('url' => 'Request::path()')) }}

<p>Ready to get started?  Give me 
    {{ Form::input('number', 'paras', 0, array('min' => 0, 'max' => 5)) }}
    {{ Form::label('paras', 'paragraphs') }}
    and/or 
    {{ Form::input('number', 'users', 0, array('min' => 0, 'max' => 50)) }}
    {{ Form::label('users', 'users') }}.
</p>

<p>
    {{ Form::submit('Go!') }}
</p>

{{ Form::close() }}

</form>

<div class="paras">
{{$paras}}
</div>

<div class="users">
@foreach ($users as $user)
    <p>{{ $user['name'] }}</p>
@endforeach
</div>


</body>
</html>
