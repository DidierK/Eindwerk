<style>

</style>
<template>
	<v-modal>
		<h1>LOL</h1>
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
