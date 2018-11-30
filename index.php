<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Hello Embo!</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/style.index.css" rel="stylesheet">
</head>
<body>

<div class="container" id='myApp'>
	<div class="wrap rata-tengah">
		<a :href="myLink">click on me!</a>
		<br />
		<input type="text" v-model="myLink">
	</div>
</div>

<script src="aset/js/vue.js"></script>
<script src="aset/js/script.index.js"></script>
</body>
</html>
