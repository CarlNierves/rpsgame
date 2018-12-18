<!DOCTYPE html>
<html>
  <head>
	 <meta charset="utf-8">
	 <title>Bato² Pick!</title>
	 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
	<header>
		<h1>Bato² Pick</h1>
	</header>

	<div class="score-title">
		<h3>Rock Paper Scissors Top Scores</h3>
		@if(count($scores) > 0)
			@foreach($scores as $score)
				<table class="score-tile">
					<tr>
						<td>{{$score->name}}</td>
						<td>{{$score->score}}</td>
					</tr>
				</table>
			@endforeach
		@else
			<p>No scores recorded yes</p>
		@endif
	</div>
	<div>
		<form action="/welcome" id="game-btn">
			<input type="submit" value="Home" id="reset-btn">
		</form>
	</div>
  </body>
</html>