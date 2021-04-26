<?php
/*
Template Name: POST-DELIVERY
*/
get_header();
?>

<html>
<head>
  <title>Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/js/jquery.min.js"></script>
</head>

<body>
	<div class="my-first-page container-fluid">
		<div class="row back">
			<i class="fa fa-angle-left"></i><a href="">Back  </a>
		</div>
		<div class="row title-2021">
			<h1>2021 Long-Range Model</h1>
		</div>
		<div class="row serial">
			<span>SERIAL #XXXXXXXXXXXX</span>
		</div>
		<div class="row foil-area">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<img src="assets/img/foil.png">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8">
				<div class="row part-one">
					<div class="col-sm-6">
						<label>Specs</label><i class="fa fa-angle-down"></i>
						<p>Learn more about your board</p>
					</div>
					<div class="col-sm-6">
						<label>Video Guides</label><i class="fa fa-angle-down"></i>
						<p>Learn more about your board</p>
					</div>
				</div>
				<div class="row part-two">
					<div class="col-sm-6">
						<label>Docs</label><i class="fa fa-angle-down"></i>
						<p>View documents related to your board</p>
					</div>
					<div class="col-sm-6 sold">
						<label>Sold your board to a third party?</label>
						<div><a href="">Remove Dashboard</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row board-area">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<label>Issues with your board</label>
				<div><a href="">Remove Dashboard</a></div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<label>Need Add-Ons?</label>
						<div><a href="">Remove Dashboard</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>

</html>


<?php get_footer(); ?>
