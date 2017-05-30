<style>

</style>
<template>
	<v-modal>
		<div class="Subhead">
			<h2 clas="Subhead__heading">Voeg een product toe</h2>
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
			this.$children[0].bindModal(this.reference);
		}
	}
</script>
