<style>
	.Errors {
		background-color: #ea4031;
		border-radius: 5px;
		color: #fff;
		padding: 16px;
	}

	.Errors h3 {
		color: #fff;
		margin-bottom: .5em;
	}

	.Errors ul {
		padding: 0;
	}

</style>
<template>
	<form class="Form Form--item-creation" :action="action" :method="method" enctype="multipart/form-data" v-on:submit.prevent="addItem" v-else>
		<div class="Errors" v-if="showErrors">
			<h3>Sommige velden zijn incorrect</h3>
			<ul>
				<li v-for="error in errors"><p>{{ error[0] }}</p></li>
			</ul>
		</div>
		<slot name="csrf"></slot>
		<v-form-item class="FormItem">
			<select v-model="formData.itemName" name="item_names" class="input--full-width">
				<option disabled value="">Selecteer een item</option>
				<v-option v-for="itemName in data">{{ itemName.label }}</v-option>
			</select>
			<p class="u--textSmall u--mt-8">Staat uw item er nog niet tussen? <a href="#">Laat het ons weten en doe een suggestie!</a></p>
		</v-form-item>


		<v-form-item class="FormItem">
			<input v-model="formData.price" class="Input Input--text-default Input--price" type="text" placeholder="50.00" name="price"><span>€</span>
		</v-form-item>

		<v-form-item class="FormItem">
			<input v-on:change="getThumbnail" class="Input u--fullWidth" type="file" name="thumbnail" />
		</v-form-item>

		<v-form-item class="FormItem">
			<input v-model="formData.description" class="Input Input--textarea-default u--fullWidth" type="textarea" label="Meer informatie" placeholder="Wat moet de huurder weten over jou materiaal?" name="description" />
		</v-form-item>

		<v-form-item class="FormItem u--flex u--flexAlignItemsCenter">
			<input type="submit" class="Button Button--default Button--white u--mr-16" value="Toevoegen" />
			<v-spinner class="Spinner--add-item-submit" v-if="showSpinner"></v-spinner>
		</v-form-item>
	</form>
</template>
<script>
	export default {
		props: ["action", "method", "data"],
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
			addItem: function(){
				this.showSpinner = true;
				axios.post('/user-item', this.fillForm()).then((response) => {
					if(response.data.length === 0 ) {
						this.showErrors = false;
						window.location.href = "/profile/my-items";
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
