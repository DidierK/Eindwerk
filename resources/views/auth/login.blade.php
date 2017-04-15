<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" />

	<!-- Styles -->
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
			]); ?>
		</script>
	</head>
	<body class="logged-out">
		<div id="app">
			<v-header class="header--logged-out" v-cloak>
				<a class="logo" href="/">
					<v-img class="logo__img" src="{{ URL::asset('images/TravelShare_logo.png') }}"></v-img>
				</a>
			</v-header>
			<v-container class="container--logged-out" v-cloak>
				<p>Omdat wij de betrouwbaarheid en veiligheid van onze website willen garanderen laten we enkel toe aan te melden via Facebook. Persoonlijke gegevens kunnen in de instellingen van je profiel worden aangepast.</p>
				<p>Voor meer info kan u terecht op <v-link class="link--default" href="#">onze gebruikersvoorwaarden</v-link>.</p>
				<v-layout class="layout--centered" v-cloak>
				<v-button href="{{ url('auth/facebook') }}" class="button button button--borderless button--blue button--default button--login-fb button--center">
				Doorgaan met Facebook
				</v-button>
				<v-button href="/" class="button--block button--back button--link">Ga terug naar de startpagina.</v-button>
				</v-layout>
			</v-container>
			<v-footer class="footer footer--layout-centered footer--logged-out" v-cloak>
				<v-ul class="list--inline">
					<li><v-link href="#" class="link--black">Gebruikersvoorwaarden</v-link></li>
					<li><v-link href="#" class="link--black">Over TravelShare</v-link></li>
					<li><v-link href="#" class="link--black">Contacteer ons</v-link></li>
				</v-ul>
			</v-footer>
		</div>
		<!-- Scripts -->
		<script src="/js/app.js"></script>
	</body>
	</html>