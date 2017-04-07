<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
			]); ?>
		</script>
	</head>
	<body class="logged-out container">
		<div id="app">
			<div class="header">
				<a href="/">
					<img class="logo" src="{{ URL::asset('images/TravelShare_logo.png') }}">
				</a>
			</div>
			<div class="auth">
				<p>Omdat wij de betrouwbaarheid en veiligheid van onze website willen garanderen laten we enkel toe aan te melden via Facebook. Persoonlijke gegevens kunnen in de instellingen van je profiel worden aangepast.</p>
				<p>Voor meer info kan u terecht op <a href="#">onze gebruikersvoorwaarden</a>.</p>
				<form action="auth/facebook">
					<button type="submit" class="button button--blue button--facebook">Doorgaan met Facebook</button>
				</form>
				<div class="back">
					<a href="/">Ga terug naar de startpagina.</a>
				</div>
			</div>
			<div class="footer">
				<ul class="list-inline">
					<li><a href="#">Gebruikersvoorwaarden</a></li>
					<li><a href="#">Over TravelShare</a></li>
					<li><a href="#">Contacteer ons</a></li>
				</ul>
			</div>
		</div>
		<!-- Scripts -->
		<script src="/js/app.js"></script>
	</body>
	</html>