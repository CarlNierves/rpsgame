<!DOCTYPE html>
<html>
  <head>
	 <meta charset="utf-8">
	 <title>Bato² Pick!</title>
	 <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

	</head>

  <body>
	<header>
		<h1>Bato² Pick!</h1>
	</header>

	<div class="name-board">
		{!! Form::open(['action' => 'PageController@game', 'method' => 'GET']) !!}
			<span>Enter your name</span>
			{{	Form::text('uName', '', ['id' => 'input-form']) }}
			{{ Form::submit('submit', ['value' => 'Submit']) }}
		{!! Form::close() !!}
	</div>

	<script type="text/javascript" src="{{ asset('js/customscript.js') }}"></script>

  </body>
</html>