
<style>
.wrapperk {
	width: 100%;
	height: 11cm;
	overflow: hidden;
	position: relative;
	background-color: #000;
}
.wrapperk>div {
	width: 100%;
	height: 100%;
	position: absolute;
	animation: animate 25s infinite;
	opacity: 0;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.wrapperk>div:nth-child(2) {
	animation-delay: 5s;
}
.wrapperk>div:nth-child(3) {
	animation-delay: 10s;
}
.wrapperk>div:nth-child(4) {
	animation-delay: 15s;
}
.wrapperk>div:nth-child(5) {
	animation-delay: 20s;
}
@keyframes animate {
	10% {
		opacity: 1;
	}
	20% {
		opacity: 1;
	}
	30% {
		opacity: 0;
	}
	40% {
		transform: scale(1.2);
	}
}

</style>
<body>
	<div class="wrapperk">
		<div style="background-image:url(/yabi/images/shopnow.png )"></div>
      <div style="background-image:url(/yabi/images/shopnow3.png )"></div>
      <div style="background-image:url(/yabi/images/shopnow2.png )"></div>
      <div style="background-image:url(/yabi/images/shopnow.png )"></div>
      <div style="background-image:url(/yabi/images/shopnow1.png )"></div>
	</div>
    <script>

    </script>
</body>
</html>
