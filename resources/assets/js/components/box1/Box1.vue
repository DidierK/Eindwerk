<style>

.box1 .box1-container{
    margin: 0 auto;
    max-width: 1024px;
    padding: 50px;
    display: flex;
        justify-content: center;
        align-items: center;
}

.box1 p{


    line-height: 30px;
    width: 50%;
}

.box1 .box1-logo{
    display:block;
    width: 400px;
    height:178px;
    background: url(/images/TravelShare_logo.png);
        background-size: 400px 178px;

        background-repeat: no-repeat;
}



</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>