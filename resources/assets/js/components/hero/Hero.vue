<style>
	.Hero--front > a,
	.Hero__heading,
	.Hero__subheading,
	.Hero__subheading > a {
		color: #FFF;
	}

	.Hero--front {
		background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/images/material_blue.png);
		background-position: 50% 50%; 
		background-size: cover; 
		background-repeat: no-repeat;
		height: 100vh;
	}

	.Hero--front a {
		font-weight: 500;
	}

	.Hero--front .Hero__heading {
		padding-top: 2em;
		font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 40px;
            text-align: center;
            color: #F8F8F8;
            line-height:30px;
	}

	.Hero--front .Hero__heading span{
	    font-weight: bold;
	}

	.Hero--front .Hero__subheading {
		padding-bottom: 2em;
		    font-size: 15px;
            color: #F8F8F8;
            text-align: center;
            font-weight: 100;
            font-family: "Montserrat", sans-serif;
	}

	@media (min-width: 768px){
		.Hero--front .Hero__heading {

		}

		.Hero--front .Hero__subheading {

		}
	}

	.Hero--category {
		/* DIT IS EEN FALLBACK IMAGE */
		background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(/images/background1.jpg);
		background-size: cover;
		min-height: 320px;
	}

	.Hero--item {
		background-color: #F7F7F7;
		min-height: 320px;
	}

</style>
<template>
	<div>
		<slot></slot>
	</div>
</template>