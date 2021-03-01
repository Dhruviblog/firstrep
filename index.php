<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="vieport" content="width=device-width, innitial-scale=1">

	<title>Eye Ball Move on Mousemove</title>
	<link rel="stylesheet"  href="style.css">

</head>
<body>
	<div class="box">
		<div class="eye"></div>
		<div class="eye"></div>
	</div>
	<script>
		document.querySelector('body').addEventListener('mousemove',eyeball);
		function eyeball(){
			const eye = document.querySelectorAll('.eye');
			eye.forEach(function(eye){
				let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
				let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);

				let radian = Math.atan2(event.pageX - x, event.pageY - y);
				let rotation = (radian * (180 / Math.PI) = -1) + 270;
				eye.style.transform = "rotate("+rotation+"deg)"		


			});
		}
	</script>


</body>
</html>