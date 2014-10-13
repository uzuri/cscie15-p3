<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Developer's Best Friend</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
<h1>P3: Developer's Best Friend</h1>

<p>This tool will provide you with either a list of users or <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">pseudo-latin</a> text to aid you in building out designs or web tools. </p>

{{ Form::open(array('url' => '/')) }}

<p>Ready to get started?  Give me 
    {{ Form::input('number', 'paras', 1, array('min' => 1, 'max' => 5)) }}
    {{ Form::label('paras', 'paragraphs') }}
    or 
    {{ Form::input('number', 'users', 1, array('min' => 1, 'max' => 50)) }}
    {{ Form::label('users', 'users') }}.
</p>

<p>
    {{ Form::submit('Go!') }}
</p>

{{ Form::close() }}

</form>

</body>
</html>
