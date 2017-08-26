@extends('layouts.app')

@section('content')
<v-content>
	<v-container class="Container">
		@if ($errors->any())
        <div class="Errors">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('flash_message'))
        <div class="Alert Alert-success"><p>{!! session('flash_message') !!}</p></div>
        @endif
		<div class="Subhead">
			<h2 class="Subhead__heading">Rapporteer schade</h2>
			<span></span>
		</div>
		<p>Geef via dit formulier schade aan. Beschrijf het probleem zo precies mogelijk en lever voldoende bewijzen aan (via foto's).</p>
		<form action="{{ url('report') }}" class="ReportForm u--sizeHalf" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<v-form-item class="FormItem">
				<label class="FormItem__label">
					<p>Email</p>
					<input class="Input Input--text-default u--sizeFull" type="text" placeholder="E-mail" name="email">
				</label>
			</v-form-item>
			<v-form-item class="FormItem">
				<label class="FormItem__label">
					<p>Bewijzen</p>
					<input class="Input u--sizeFull" type="file" name="proof">
				</label>
				<p class="u--mt-8">Upload hier de schade. Indien je meerdere foto's hebt kan je dit doen via <b>een .zip file</b>.</p>
			</v-form-item>
			<v-form-item class="FormItem">
				<label class="FormItem__label">
					<p>Beschrijving schade</p>
					<textarea class="Input Input--text-default u--sizeFull" placeholder="Beschrijf het probleem en de schade" style="min-height: 150px" name="description"></textarea>
				</label>
			</v-form-item>
			<v-form-item class="FormItem">
				<input type="submit" class="Button Button--primary u--floatRight">
			</v-form-item>
		</form>
	</v-container>
</v-content>
@endsection