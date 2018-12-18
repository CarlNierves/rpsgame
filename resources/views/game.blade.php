<?php $uName = $_GET['uName']; ?>
<!DOCTYPE html>
<html>
  <head>
	 <meta charset="utf-8">
	 <title>Bato² Pick!</title>
	 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body onload="main()">
	<header>
		<h1>Bato² Pick!</h1>
	</header>

	<div class="score-board">
		<div id="user-label" class="badge"><?php echo $uName; ?></div>
		<div id="computer-label" class="badge">Comp</div>
		<span id="user-score">0</span>:<span id="computer-score">0</span>
	</div>

	<div class="result">
		<p>Rock Paper Scissors!</p>
	</div>

	<div class="choices">
		<div class="choice" id="rock">
			<img src="{{ asset('images/rock.png') }}" alt="rock">
		</div>
		<div class="choice" id="paper">
			<img src="{{ asset('images/paper.png') }}" alt="paper">
		</div>
		<div class="choice" id="scissors">
			<img src="{{ asset('images/scissors.png') }}" alt="scissors">
		</div>	
	</div>

	<p id="action-message">Hello {{$uName}}, Make your move.</p>
	<p id="computer-action">Computer is Picking.</p>	

		{!! Form::open(['id' => 'game-btn', 'action' => 'ScoreController@store', 'method' => 'POST']) !!}
			{{ Form::text('uName', '', ['id' => 'uName', 'hidden']) }}
			{{ Form::text('score', '', ['id' => 'score', 'hidden']) }}
			{{ Form::reset('Reset', ['id' => 'reset-btn', 'onclick' => 'resetGame()']) }}
			{{ Form::submit('Save Score', ['onclick' => 'saveScore()', 'id' => 'save-btn']) }}
		{!! Form::close() !!}

	<script src="{{ asset('js/customscript.js') }}" charset="utf-8"></script>
	
  </body>
</html>