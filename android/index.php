<?php include 'header-links.php'; ?>
<?php include 'header.php' ?>

<section class="slider">
  <div class="content">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../data1/images/New/01.jpg" alt="Los Angeles" style="width: 100%;">
        </div>
        <div class="carousel-item">
          <img src="../data1/images/New/02.jpg" alt="Los Angeles" style="width: 100%;">
        </div>
        <div class="carousel-item">
        	<img src="../data1/images/New/03.jpg" alt="Chicago" style="width: 100%;">
        </div>
        <div class="carousel-item">
        	<img src="../data1/images/New/04.jpg" alt="New York" style="width: 100%;">
        </div>
        <!-- <div class="carousel-item">
          <img src="<?php //echo file_url('assets/website/images/slider/3d-Rendering-Company.jpg'); ?>" alt="New York" style="width: 100%;">
        </div> -->
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</section>
<section class="news-scroll" >
    <div class="container">
        <div class="row">
            <div class="col-3 col-sm-3 col-md-3 col-lg-4 pr-0"><h6>New Batch:</h6></div>
            <div class="col-5 col-sm-5 col-md-5  col-lg-4 pl-0"><marquee behavior="scroll" direction="left" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()">1st january 2022 , Online Classes is also Available</marquee></div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 mob-btn"><a href="pay.php" class="btn btn-success">Pay Now</a></div>
        </div>
    </div>
</section>

<section class="banner-bottom" >
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>
                    <a href="center/" class="btn btn-warning blink mb-2"><strong>Centre Login</strong></a>
                    <a href="student/" class="btn btn-warning blink mb-2"><strong>Student Login</strong></a>
                    <a href="centerlist.php" class="btn btn-warning blink mb-2"><strong>Centre List</strong></a>
                    <a href="newcenterenquery.php?page=courses" class="btn btn-warning blink mb-2"><strong>Apply For New Centre Franchise</strong></a>
                    <!-- <a href="results.php" class="btn btn-warning blink"><strong>Results</strong></a> -->
                    
                </h2>
            </div>
        </div>

    </div>
</section>

<!-- <section class="category">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center pt-2 cat">
					<p>Residential House Designs</p>
				</div>
			</div>
			<div class="col-md-6 cat_img">
				<a href="">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">SIMPLEX</p>
				</a>
			</div>
			<div class="col-md-6 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">DUPLEX</p>
				</a>
			</div>
			<div class="col-md-6 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">TRIPLEX</p>
				</a>
			</div>
			<div class="col-md-6 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">APPARTMENT</p>
				</a>
			</div>
			<div class="col-md-12">
				<div class="text-center pt-2 cat">
					<p>Interior Designs</p>
				</div>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">LIVING ROOM</p>
				</a>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">BED ROOM</p>
				</a>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">POOJA ROOM</p>
				</a>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="#">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">STUDY ROOM</p>
				</a>
			</div>
			<div class="col-md-12">
				<div class="text-center pt-2 cat">
					<p>Commercial Designs</p>
				</div>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">SHOPPING MALL</p>
				</a>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">RESTAURANT</p>
				</a>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">HOSPITAL</p>
				</a>
			</div>
			<div class="col-md-6 pb-2 cat_img">
				<a href="">
					<img src="#" class="img-fluid catimg">
					<p class="text-center subcat">COLLEGE</p>
				</a>
			</div>
		</div>
	</div>
</section> -->
<?php include 'footer.php'; ?>
<?php include 'footer-links.php' ?>