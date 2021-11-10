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
		}

		.menu {
			background: url(https://media-cdn.tripadvisor.com/media/photo-s/17/75/3f/d1/restaurant-in-valkenswaard.jpg) no-repeat center; 
  			background-size: cover;
  			height: 700px;
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
			color: #ddd;
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
			color: #ddd;

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
			bottom: 0;
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

		div.barang {
  			margin: 50px;
			border: 1px solid #ccc;
			float: left;
			width: 25%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		div.barang:hover {
		  	border: 1px solid #777;
		}

		div.barang img {
			width: 100%;
			height: auto;
		}

		div.desc {
		  	padding: 15px;
		  	text-align: center;
		}

		div.marg{
			margin-top: 5%;
			margin-bottom: 75%;
		}

		div.beli {
			background: red;
			width: 100%;
			height: 50px;
			text-align: center;
			line-height: 3.0;
		}

		div.beli:hover{
			background-color: green;
		}

		div.keranjang {
			background: orange;
			width: 100%;
			height: 50px;
			text-align: center;
			line-height: 3.0;
		}

		div.keranjang:hover{
			background-color: green;
		}

		div.harga {
			font-size: x-large;
			color: orange;
			text-align: center;
		}

		p.makan {
			text-align: center;
			line-height: 3.0;
			font-size: xx-large;
 		 	text-shadow: 2px 2px 5px red;

		}


	</style>

</head>
<body>

<div class="menu">
	<label>Restaurant</label>

<ul>
	<li><a href="home.php">Home</a></li>
	<li><a href="kontak.php">Kontak</a></li>
	<li><a href="tentang.php">Tentang</a></li>
	<li><a href="login.php">Login</a></li>
</ul>

 <div class="menutext">
    <h1 style="font-size:50px">Selamat Datang Di Website Kami</h1>
    <h3></h3>
  </div>

</div>

<p class="makan">Menu Makanan</p>

<div class="marg">
<div class="barang">
  <a target="_blank" href="">
    <img src="https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90" alt="" width="600" height="400">
  </a>
  <div class="desc">Mie cuy</div>
  <div class="harga">Rp.2.000</div>
  <div class="beli">Beli</div>
  <div class="keranjang">Masukkan Keranjang</div>
</div>

<div class="barang">
  <a target="_blank" href="">
    <img src="https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90" alt="" width="600" height="400">
  </a>
  <div class="desc">Mie cuy</div>
  <div class="harga">Rp.2.000</div>
  <div class="beli">Beli</div>
  <div class="keranjang">Masukkan Keranjang</div>
</div>

<div class="barang">
  <a target="_blank" href="">
    <img src="https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90" alt="" width="600" height="400">
  </a>
  <div class="desc">Mie cuy</div>
  <div class="harga">Rp.2.000</div>
  <div class="beli">Beli</div>
  <div class="keranjang">Masukkan Keranjang</div>
</div>

<div class="barang">
  <a target="_blank" href="">
    <img src="https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90" alt="" width="600" height="400">
  </a>
  <div class="desc">Mie cuy</div>
  <div class="harga">Rp.2.000</div>
  <div class="beli">Beli</div>
  <div class="keranjang">Masukkan Keranjang</div>
</div>

<div class="barang">
  <a target="_blank" href="">
    <img src="https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90" alt="" width="600" height="400">
  </a>
  <div class="desc">Mie cuy</div>
  <div class="harga">Rp.2.000</div>
  <div class="beli">Beli</div>
  <div class="keranjang">Masukkan Keranjang</div>
</div>

<div class="barang">
  <a target="_blank" href="">
    <img src="https://awsimages.detik.net.id/community/media/visual/2021/04/22/5-makanan-enak-dari-indonesia-dan-malaysia-yang-terkenal-enak-5.jpeg?w=700&q=90" alt="" width="600" height="400">
  </a>
  <div class="desc">Mie cuy</div>
  <div class="harga">Rp.2.000</div>
  <div class="beli">Beli</div>
  <div class="keranjang">Masukkan Keranjang</div>
</div>
</div>

<div class="footer">
		<p><a href="kontak" style="text-decoration: none;">Hubungi Kami</a></p>
</div>
</body>
</html>