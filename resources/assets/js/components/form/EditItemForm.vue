<style>


</style>
<template>
	<form class="Form Form--item-creation" :method="method" enctype="multipart/form-data" v-on:submit.prevent="editItem" v-else>
		<div class="Errors" v-if="showErrors">
			<h3>Sommige velden zijn incorrect</h3>
			<ul>
				<li v-for="error in errors"><p>{{ error[0] }}</p></li>
			</ul>
		</div>
		<slot name="csrf"></slot>
		<v-form-item class="FormItem">
			<label class="FormItem__label">
				<p>Kies een item</p>
				<select v-model="formData.itemName" name="item_names" class="Input Input--select-default">
					<option disabled value="">Selecteer een item</option>
					<v-option v-for="itemName in data">{{ itemName.label }}</v-option>
				</select>
			</label>
			<p class="u--textSmall u--mt-8">Staat uw item er nog niet tussen? <a href="/contact">Laat het ons weten en doe een suggestie!</a></p>
		</v-form-item>


		<v-form-item class="FormItem">
			<label class="FormItem__label">
				<p>Prijs per dag</p>
				<input v-model="formData.price" class="Input Input--text-default Input--price" type="text" placeholder="Bv. 50,00" name="price"><span>€</span>
			</label>
		</v-form-item>

		<v-form-item class="FormItem">
			<label class="FormItem__label">
				<p>Een foto van jou item</p>
				<input v-on:change="getThumbnail" class="Input u--fullWidth" type="file" name="thumbnail" accept="image/*" />
			</label>
		</v-form-item>

		<v-form-item class="FormItem">
			<label class="FormItem__label">
				<p>Meer informatie</p>
				<textarea v-model="formData.description" class="Input Input--textarea-default u--fullWidth" type="textarea" placeholder="Wat moet de huurder weten over jou materiaal?" name="description"></textarea>
			</label>
		</v-form-item>

		<v-form-item class="FormItem u--flex u--flexAlignItemsCenter">
			<input type="submit" class="Button Button--default Button--white u--mr-16" value="Bewerken" />
			<v-spinner class="Spinner--add-item-submit" v-if="showSpinner"></v-spinner>
		</v-form-item>
	</form>
</template>
<script>
	export default {
		props: ["action", "method", "data", "itemName", "price", "description", "itemId"],
		mounted() {
			this.formData.itemName = this.itemName;
			this.formData.price = this.price;
			this.formData.description = this.description;
		},
		data: function() {
			return {
				formData: {
					itemName: '',
					price: '',
					thumbnail: '',
					description: ''
				},
				errors: [],
				showErrors: false,
				showSpinner: false
			}
		},
		methods: {
			editItem: function(){
				this.showSpinner = true;
				axios.post('/user-item/' + this.itemId, this.fillForm()).then((response) => {
					if(response.data.length === 0 ) {
						this.showErrors = false;
						window.location.href = "/user-item/" + this.itemId;
					} else {
						this.errors = response.data;
						this.showErrors = true;
					}

					this.showSpinner = false;
				});

			},
			getThumbnail: function(e){
				let files = e.target.files || e.dataTransfer.files;
				this.formData.thumbnail = files[0];
			},
			fillForm: function() {
      			// We use the formData global object because only this way we can also transport the image object
      			// We also convert comma to dot to also be able to validate the dot
      			var convertedPrice = this.formData.price.replace(/,/g, '.').replace(/\s/g, '');

      			var form = new FormData();
      			form.append('item_name', this.formData.itemName);
      			form.append('price', convertedPrice);
      			form.append('thumbnail', this.formData.thumbnail);
      			form.append('description', this.formData.description);
      			return form;
      		}
      	}
      }
  </script>
