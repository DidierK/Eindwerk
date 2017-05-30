<style>

	.Modal .Modal__overlay {
		background-color: rgba(0, 0, 0, 0.5);
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: 1;
	}

	.Modal .Modal__content {
		background-color: #FFF;
		box-shadow: 0 2px 6px 0 rgba(0,0,0,.44);
		padding: 32px;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 100%;
		max-width: 520px;
		z-index: 2;
	}

	.Modal-enter-active, .Modal-leave-active {
		transition: opacity .3s
	};

	.Modal-enter, .Modal-leave-to {
		opacity: 0;
	}
</style>
<template>
	<transition name="Modal">
		<div v-if="showModal" class="Modal">
			<div class="Modal__overlay"  v-on:click="doToggle"></div>
			<div class="Modal__content">
				<slot></slot>
			</div>
		</div>
	</transition>
</template>
<script>
	export default {
		data: function(){
			return {
				showModal: false
			}
		},
		methods: {
			bindModal: function(reference){
				reference.addEventListener("click", this.doToggle); 
			},
			doToggle: function(){
				this.showModal = !this.showModal;
			}
		}
	}
</script>
