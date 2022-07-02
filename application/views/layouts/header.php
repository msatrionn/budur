<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<link rel = "stylesheet" 
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="<?= base_url("assets/client/css/style.css") ?>" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-8/css/all.css" integrity="sha512-FoiDc40LwNkhzC9yHQU/yOEHV2+SvUvN4/XZEkcGvlPr14tfocjIM63TD9kmoLkPG3YGrwZL/NglmdKM5+hCnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Borobudur</title>
  </head>
  <body>
		<style>
			@import url(https://fonts.googleapis.com/css?family=Raleway);
			#text-desc {
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 8; /* number of lines to show */
				-webkit-box-orient: vertical;
			}
			#img_size{
				height: 200px;
				min-width: 100%;
				object-fit: cover;
			}
			#img-travel {
				transition: 1s all ease;
				object-fit: cover;
			}
			#img-travel:hover {
				cursor: pointer;
			}
			body {
				background: #f9f9f9;
				font-size: 16px;
				font-family: "Raleway", sans-serif;
			}
			.title {
				color: #1a1a1a;
				text-align: center;
				margin-bottom: 10px;
			}
			.content {
				position: relative;
				margin: auto;
				overflow: hidden;
			}
			.content .content-overlay {
				background: rgba(0, 0, 0, 0.7);
				position: absolute;
				height: 99%;
				width: 100%;
				left: 0;
				top: 0;
				bottom: 0;
				right: 0;
				opacity: 0;
				-webkit-transition: all 0.4s ease-in-out 0s;
				-moz-transition: all 0.4s ease-in-out 0s;
				transition: all 0.4s ease-in-out 0s;
			}
			.content:hover .content-overlay {
				opacity: 1;
			}
			.content-image {
				width: 100%;
			}
			img {
				box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
				border-radius: 5px;
			}
			.content-details {
				position: absolute;
				text-align: center;
				padding-left: 1em;
				padding-right: 1em;
				width: 100%;
				top: 50%;
				left: 50%;
				opacity: 0;
				-webkit-transform: translate(-50%, -50%);
				-moz-transform: translate(-50%, -50%);
				transform: translate(-50%, -50%);
				-webkit-transition: all 0.3s ease-in-out 0s;
				-moz-transition: all 0.3s ease-in-out 0s;
				transition: all 0.3s ease-in-out 0s;
			}
			.content:hover .content-details {
				top: 50%;
				left: 50%;
				opacity: 1;
			}
			.content-details h3 {
				color: #fff;
				font-weight: 500;
				letter-spacing: 0.15em;
				margin-bottom: 0.5em;
				text-transform: uppercase;
			}
			.content-details p {
				color: #fff;
				font-size: 0.8em;
			}
			.fadeIn-bottom {
				top: 80%;
			}
			</style>
	  <!-- Navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
		<div class="container">

		<!-- Brand -->
		<a class="navbar-brand" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
			<strong>Borobudur</strong>
		</a>

		<!-- Collapse -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<!-- Left -->
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link text-color" href="<?= base_url('home') ?>">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-color" href="<?= base_url('home/about') ?>">Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-color" href="<?= base_url('home/berita') ?>">Berita</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-color" href="<?= base_url('home/wisata') ?>">Wisata</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-color" href="<?= base_url('home/candi') ?>">Candi</a>
			</li>
			</ul>
			<?php if ($this->session->userdata('id_user')!=null) { ?>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-white btn btn-success" href="<?= base_url('admin') ?>">Dashboard</a>
					</li>
				</ul>
			<?php }else{ ?>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-white btn btn-success" href="<?= base_url('admin/login') ?>">Login</a>
					</li>
				</ul>
			<?php } ?>
		</div>

		</div>
  	</nav>
  <!-- Navbar -->
