@extends('layouts.app')

@section('content')
<v-content>
	<v-container class="Container">
		<div class="Subhead">
			<h2 class="Subhead__heading">Contacteer ons</h2>
			<span></span>
		</div>
		<p>Contacteer ons of doe een suggestie voor een item dat jij graag op onze website zou willen verhuren.</p>
		<form action="{{ url('contact/sendMail') }}" class="ContactForm">
			<div class="Col-sm-1-2">
				<v-form-item class="FormItem">
					<label class="FormItem__label">
						<p>Naam</p>
						<input class="Input Input--text-default" type="text" placeholder="Naam">
					</label>
				</v-form-item>
				<v-form-item class="FormItem">
					<label class="FormItem__label">
						<p>Email</p>
						<input class="Input Input--text-default" type="text" placeholder="E-mail">
					</label>
				</v-form-item>
			</div>
			<div class="Col-sm-1-2">
				<v-form-item class="FormItem">
					<label class="FormItem__label">
						<p>Bericht</p>
						<textarea class="Input Input--text-default" placeholder="Jou bericht..."></textarea>
					</label>
				</v-form-item>
				<v-form-item class="FormItem">
					<input type="submit" class="Button Button--default Button--white u--floatRight">
				</v-form-item>
			</div>
		</form>
	</v-container>
</v-content>
@endsection