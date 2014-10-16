<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Developer's Best Friend</title>
	
	<style media="screen" type="text/css">@import "/css/styles.css";</style>

</head>
<body>
<h1>P3: Developer's Best Friend</h1>

<p>This tool will provide you with either a list of users or <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">pseudo-latin</a> text to aid you in building out designs or web tools. </p>

{{ Form::open(array('url' => $uri)) }}

<p>Ready to get started?  Give me 
    {{ Form::input('number', 'paras', $data_paras, array('min' => 0, 'max' => 5)) }}
    {{ Form::label('paras', 'paragraphs') }}
    and/or 
    {{ Form::input('number', 'users', $data_users, array('min' => 0, 'max' => 50)) }}
    {{ Form::label('users', 'users') }}.
</p>

<p>
    {{ Form::submit('Go!') }}
</p>

{{ Form::close() }}

</form>

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


</body>
</html>
