<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant</title>

	<style type="text/css">
		
		.container {
			margin:auto;
		}

		body {
	
			margin: auto;
			min-width: 920px;
			background-color: #bdbdbd;
		}

		.menu {
			background-color: white;
  		background-size: cover;
  		height: 60px;
  		position: relative;
			font-family: tahoma;
			font-weight: bold;
			font-size: 20px;
			width: 100%;
			line-height: 0%;
			padding-top: 10px;


		}

		.menutext {
		  text-align: center;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  color: #ddd;
		}

		label {
			font-family: comic sans ms;
			font-size: 20pt;
			color: black;
			margin: 10px;
			padding: 5px;
			float: left;
			padding-top: 20px;
		}

		.menu ul {
			margin: 0px;
			padding: 5px;
			background: none;
			display: block;
			float: right;
			padding-top: 10px;

		}

		.menu ul li {
			list-style: none;
			display: inline-block;

		}

		.menu ul li a {
			display: block;
			text-decoration: none;
			padding: 20px;
			color: black;

		}

		.menu ul li a:hover {
			display: block;
			color: #d99b0b;
		}

		.menu ul li .dropdown {
			display: none;
		}

		.menu ul li:hover .dropdown {
			display: block;
			background: black;
			position: absolute;
			padding: 10px;
		}

		.menu ul li:hover .dropdown li {
			display: block;
		}

		.menu ul li:hover .dropdown a {
			padding: 10px;
			border-radius: 5px;
			margin-bottom: 5px;
		}

		.menu ul li:hover .dropdown a:hover {
			background: #222;
			box-shadow: inset 0px 0px 5px #000;
		}

		div.footer {
			background-color: black;
			padding: 10px;
			text-align: center;
			margin-top: 1000px;
		}

		div.footer a:link {
			color: white;
		}

		.text1 {
			margin: 200px;
			font-size: larger;
		}

		.text2 {
			margin-left: 200px;
			margin-top: 100px;
			
			padding-left: 200px;
		}

		.card {
		  background-color: white;
		  padding: 20px;
		  margin-top: 20%;
		  width: 75%;
		  margin-left: 10%;

		}

	</style>

</head>
<body>

<div class="menu">
	<label>Restaurant</label>

<ul>
	<li><a href="home2.php">Home</a></li>
	<li><a href="Keranjang.php">Keranjang</a></li>
	<li><a href="kontak.php">Kontak</a></li>
	<li><a href="tentang.php">Tentang</a></li>
	<li><a href="home.php">Logout</a></li>
</ul>

<div class="card">
<p>Kontak.........</p></div>

<div class="footer">
		<p><a href="kontak" style="text-decoration: none;">Hubungi Kami</a></p>
</div>
</body>
</html>