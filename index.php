<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>


<?php include 'menu.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a.png" alt="九州" width="1800" height="800">
      <div class="carousel-caption">
        <h3>九州</h3>
        <p>自然!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/t.jpg" alt="東京" width="1800" height="800">
      <div class="carousel-caption">
        <h3>東京</h3>
        <p>Thank you, 東京!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/f.jpg" alt="福岡" width="1800" height="800">
      <div class="carousel-caption">
        <h3>福岡</h3>
        <p>地震がない!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluids">
	 <div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img class="card-img-top" src="images/11.png" class="img-fluid aboutimg">
		</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">私はシン パルビンデルです。</h2>
			<p class="py-3">私の夢は IT エンジニアになることで、そのために自分の分野について日々新しいことを学んでいます。よろしくお願いいたします。</p>
			<a href="about.php" class="btn btn-success"> check More</a>
		</div>
	 </div>
	</div>
</section>
		


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Sevices</h2>
	</div>

	<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
  		<img class="card-img-top" src="images/yy.jpg" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">Beautiful Nature</h4>
    				<p class="card-text">Some example text.</p>
    				<a href="#" class="btn btn-primary">See Profile</a>
  				 	 </div>
       			</div>
       			
			</div>


<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  		<img class="card-img-top" src="images/yy.jpg" alt="Card image">
  			
  				  <div class="card-body">
    				<h4 class="card-title">Beautiful Nature</h4>
    				<p class="card-text">Some example text.</p>
    				<a href="#" class="btn btn-primary">See Profile</a>
  				 	 </div>
       				</div>
       			</div>


<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  		<img class="card-img-top" src="images/yy.jpg" alt="Card image">
  			
  				  <div class="card-body">
    				<h4 class="card-title">Beautiful Nature</h4>
    				<p class="card-text">Some example text.</p>
    				<a href="#" class="btn btn-primary">See Profile</a>
  				 	 </div>
       				</div>
       			</div>
</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/w.jpg" class="img-fluid pb-4">
			</div>

		</div>
	</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comments">
				</textarea>

				 <button type="submit" class="btn btn-success">Submit
				 </button>
			</div>
			
		</form>
	</div>

</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@WarviTechProduction</p>
</footer>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>