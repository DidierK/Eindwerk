<style>
	.EditItemModal .Modal__content {
		min-height: 320px;
		max-height: 320px;
	}	

	@media (min-height: 571px){
		.EditItemModal .Modal__content {
			min-height: 571px;
			max-height: 571px;
		}		
	}
</style>
<template>
	<v-modal class="EditItemModal">
		<div class="Subhead">
			<h2 clas="Subhead__heading">Bewerk je product</h2>
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

