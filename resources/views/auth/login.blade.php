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

			<!-- Header -->
			<v-header class="Header Header--logged-out" v-cloak>
				<a class="Logo" href="/">
					<v-img class="Logo__img" src="{{ URL::asset('images/TravelShare_logo.png') }}"></v-img>
				</a>
			</v-header>

			<!-- Content -->
			<v-container class="Container Container--logged-out" v-cloak>
				<p>Omdat wij de betrouwbaarheid en veiligheid van onze website willen garanderen laten we enkel toe aan te melden via Facebook. Persoonlijke gegevens kunnen in de instellingen van je profiel worden aangepast.</p>
				<p>Voor meer info kan u terecht op <v-link class="Link Link--default" href="#">onze gebruikersvoorwaarden</v-link>.</p>
				<div class="u--textCenter">
					<v-button href="{{ url('auth/facebook') }}" class="Button Button Button--borderless Button--blue Button--default Button--login-fb Button--center u--linkClean u--inlineBlock">
						Doorgaan met Facebook
					</v-button>
					<v-button href="/" class="Button Button--back Button--link u--block">Ga terug naar de startpagina.</v-button>
				</div>

				<!-- Footer -->
			</v-container>
			<v-footer class="Footer Footer--logged-out u--textCenter" v-cloak>
				<v-ul class="List List--inline">
					<li class="List__item"><v-link href="#" class="Link Link--black">Gebruikersvoorwaarden</v-link></li>
					<li class="List__item"><v-link href="#" class="Link Link--black">Over TravelShare</v-link></li>
					<li class="List__item"><v-link href="#" class="Link Link--black">Contacteer ons</v-link></li>
				</v-ul>
			</v-footer>
		</div>
		<!-- Scripts -->
		<script src="/js/app.js"></script>
	</body>
	</html>