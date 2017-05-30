<style>
	.Modal {
		position: relative;
		/* Only put on parent modal a z-index so it gets shown properly */
		z-index: 2;
	}

	.Modal .Modal__overlay {
		background-color: rgba(0, 0, 0, 0.5);
		position: fixed; /* This way it will always cover all area */
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	.Modal .Modal__content {
		background-color: #FFF;
		border-radius: 2px;
		box-shadow: 0 2px 6px 0 rgba(0,0,0,.44);
		box-sizing: border-box;
		overflow-y: auto;
		padding: 16px;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 90%;
		max-width: 640px;
		max-height: 360px;
	}

	@media screen and (min-width: 520px) {
		.Modal .Modal__content {
			max-height: 100%;
			padding: 32px;
			transform: translate(-50%, -50%);
			left: 50%;
		}
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
