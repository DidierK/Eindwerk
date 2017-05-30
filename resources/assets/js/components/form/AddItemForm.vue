<style>
</style>
<template>
	<form class="Form Form--item-creation" :action="action" :method="method" enctype="multipart/form-data" v-else>
		<slot name="csrf"></slot>
		<v-form-item class="FormItem">
			<v-select label="Wat wil je verhuren?" name="item_names" class="input--full-width">
				<v-option v-for="itemName in data">{{ itemName.label }}</v-option>
			</v-select>
			<p class="u--textSmall u--mt-8">Staat uw item er nog niet tussen? <a href="#">Laat het ons weten en doe een suggestie!</a></p>
		</v-form-item>


		<v-form-item class="FormItem">
			<v-input class="Input Input--text-default Input--price" type="text" label="Prijs/dag"placeholder="50.00" name="price"></v-input><span>€</span>
		</v-form-item>

		<v-form-item class="FormItem">
			<v-input class="Input u--fullWidth" type="file" label="Foto" name="thumbnail"></v-input>
		</v-form-item>

		<v-form-item class="FormItem">
			<v-input class="Input Input--textarea-default u--fullWidth" type="textarea" label="Meer informatie" placeholder="Wat moet de huurder weten over jou materiaal?" name="description"></v-input>
		</v-form-item>

		<v-form-item>
			<v-input type="submit" class="Button Button--default Button--white" value="Toevoegen"></v-input>
		</v-form-item>
	</form>
</template>
<script>
	export default {
		props: ["action", "method", "data"],
	}
</script>
