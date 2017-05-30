<style>

	.isLoading {
		height: 462px;
	}

	.Form-enter-active, .Form-leave-active {
		transition: opacity .3s
	};

	.Form-enter, .Form-leave-to {
		opacity: 0;
	}

</style>
<template>
	<div class="isLoading" v-if="isLoading">
		<span>Loading...</span>
	</div>
	
		<form class="Form Form--item-creation" :action="action" :method="method" enctype="multipart/form-data" v-else>
			<slot name="csrf"></slot>

			<v-form-item class="FormItem">
				<v-select label="Wat wil je verhuren?" name="item_names" class="input--full-width">
					<v-option v-for="itemName in itemNames ">{{ itemName.label }}</v-option>
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
		data: function(){
			return {
				itemNames: [],
				isLoading: false,
			}
		},
		props: ["action", "method"],
		mounted() {
			// This gets mounted everytime the modal opens
			// So the itemNames will always become empty again
			// We should find a way how it can keep this in memory
			this.getItems();
		},
		methods: {
			getItems: function() {
				var self = this;
				this.isLoading = true;

				axios.get('/api/items').then((response) => {
					self.itemNames = response.data;
					self.isLoading = false;
				});
			}
		}
	}
</script>
