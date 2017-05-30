<style>

</style>
<template>
	<v-modal>
		<!-- Form: Item creation -->
		<div class="Subhead">
			<h2 clas="Subhead__heading">Voeg een product toe</h2>
		</div>
		<v-form class="Form Form--item-creation" action="#" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="">

			<v-form-item class="FormItem">
				<v-select label="Wat wil je verhuren?" name="item_names" class="input--full-width">
					<v-option>Dakkoffer</v-option>
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
		</v-form>
	</v-modal>
</header>
</template>
<script>
	export default {
		data: function() {
			return {
				reference: '',
			}
		},
		mounted(){
			this.$children[0].bindModal(this.reference);
		}
	}
</script>
