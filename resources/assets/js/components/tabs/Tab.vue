<template>
	<li class="tab__item">
		<button class="button" v-on:click="loadTab(link)"><slot></slot></button>
	</li>
</template>
<script>
	export default {
		props: ["link"],
		methods: {
			loadTab: function(link){
				var self = this;

				axios.get(link).then(function (response) {

					var result = $('<div />').append(response.data).find('.user-content').html();
					$('.user-content').html(result);
					// Change pagetitle to something dynamic
					document.title = response.pageTitle;
					window.history.pushState({"html":response.data,"pageTitle": response.pageTitle},"", link);

				})

			}
		}
	}
</script>