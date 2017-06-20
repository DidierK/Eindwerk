<style>
	.AddItemModal .Modal__content {
		min-height: 320px;
		max-height: 320px;
	}	

	@media (min-height: 571px){
		.AddItemModal .Modal__content {
			min-height: 571px;
			max-height: 571px;
		}		
	}
</style>
<template>
	<v-modal class="AddItemModal">
		<div class="Subhead">
			<h2 class="Subhead__heading">Voeg een product toe</h2>
			<span></span>
		</div>
		<slot></slot>
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
			if(this.reference !== '') {
				this.$children[0].bindModal(this.reference);
			}
		}
	}
</script>
