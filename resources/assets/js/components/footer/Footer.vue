<style>
.Footer--logged-out {
	margin-top: 80px;
}

.Footer--main {
	background-color: #10a4ff;
	z-index: 1;
	display: flex;
    flex-direction: column;
    margin-top: 160px;
}

.copyright{
    color: #FFF;
    margin: 30px auto;
    text-align:center;
}

.facebook{
    display:block;
    margin: 0 auto;
    width: 12px;
    height: 24px;

    text-align:center;
    margin-top: 30px;
}

.facebook a{
display:block;
width: 12px;
    height: 24px;
    background: url(/images/fb-logo.png);
    background-repeat:no-repeat;
    background-size: 12px 24px;
}

.Footer--main a {
	color: #FFF;
}

.Footer--user-item {
	border-top: 1px solid #DDD;
	padding: 8px;
}

</style>
<template>
	<footer>
		<slot></slot>
	</footer>
</template>
<script>
	export default {
	}
</script>
