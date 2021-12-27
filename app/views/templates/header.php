<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman <?php echo $data['judul']; ?></title>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#">PHP MVC</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo BASEURL; ?>/home">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
		      </li> 
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo BASEURL; ?>/mahasiswa">Mahasiswa</a>
		      </li>
		    </ul>
		  </div>
	  </div>
	</nav>