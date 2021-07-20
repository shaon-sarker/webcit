<?php session_start(); ?>
<?php 
	include 'db.php'; 
?>
<?php 
$select_logo = "SELECT * FROM logo";
$select_result_logo = mysqli_query($db_conn,$select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_result_logo);

$select_slider = "SELECT * FROM sliders";
$select_result_slider = mysqli_query($db_conn,$select_slider);

$select_about = "SELECT * FROM abouts";
$select_result_about = mysqli_query($db_conn,$select_about);

$select_about_right = "SELECT * FROM aboutsright";
$select_result_about_right = mysqli_query($db_conn,$select_about_right);

$select_project = "SELECT * FROM projects";
$select_result_project = mysqli_query($db_conn,$select_project);

$select_services = "SELECT * FROM services";
$select_result_services = mysqli_query($db_conn,$select_services);

$select_teams = "SELECT * FROM teams";
$select_result_teams = mysqli_query($db_conn,$select_teams);

$select_skills = "SELECT * FROM skills";
$select_result_skills = mysqli_query($db_conn,$select_skills);

$select_feedbacks = "SELECT * FROM feedbacks";
$select_result_feedbacks = mysqli_query($db_conn,$select_feedbacks);

$select_plans = "SELECT * FROM plans";
$select_result_plans = mysqli_query($db_conn,$select_plans);

$select_videos = "SELECT * FROM videos";
$select_result_videos = mysqli_query($db_conn,$select_videos);
$after_assoc_videos = mysqli_fetch_assoc($select_result_videos);

$select_blogs = "SELECT * FROM blogs";
$select_result_blogs = mysqli_query($db_conn,$select_blogs);

$select_slideshows = "SELECT * FROM slideshows";
$select_result_slideshows = mysqli_query($db_conn,$select_slideshows);

$select_categorys = "SELECT * FROM categorys";
$select_result_categorys = mysqli_query($db_conn,$select_categorys);

$select_works = "SELECT * FROM works";
$select_result_works = mysqli_query($db_conn,$select_works);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Zakkash Protfolio HTML  Template</title>
	<link rel="icon" href="images/logo_icon.png">
	<!-- google fonts css -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- font awesome icon css -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- slick slider  css -->
	<link href="css/slick.css" rel="stylesheet">
	<!-- lightbox css -->
	<link href="css/jquery.fancybox.css" rel="stylesheet">
	<!-- animate css -->
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- main css -->
	<link href="css/style.css" rel="stylesheet">
	
</head>

<body>
	<!-- preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- head start -->
	<header>
		<div class="nav_wrapper">
			<nav class="navbar custom_nav">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="mobil_logo visible-xs" href="#">
							<img src="images/logo.png" class="img-responsive" alt="logo">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav nav_left">
							<li class="active"><a href="#slider">Home</a></li>
							<li><a href="#about_part">about us</a></li>
							<li><a href="#work_part">works</a></li>
							<li><a href="#services_part">services</a></li>
						</ul>

						<div class="logo hidden-xs">
							<a href="#">
								<img src="/webcit/uploads/logo/<?= $after_assoc_logo['logo_pic']; ?>" alt="logo" class="img-responsive">
							</a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#team_part">team</a></li>
							<li><a href="#price_part">prices</a></li>
							<li><a href="#blog_part">blog</a></li>
							<li><a href="#contact_part">contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- / nav part end -->
		
		<!-- slider part start -->
		<section id="slider">
			<i class="fa fa-long-arrow-left slidPrv"></i>
			<i class="fa fa-long-arrow-right slidNext"></i>
			<div class="slider_img text-center">

			<?php foreach($select_result_slider as $slider){ ?>
				<div class="slid_div" style="background:url(/webcit/uploads/sliders/<?= $slider['slider_pic']; ?>);">
					<div class="caprion_wrapper" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
						<div class="container text-center">
							<div class="slide-caption">
								<h2><?php echo $slider['heading']; ?></h2>
								<p class="hidden-xs"><?php echo $slider['description']; ?></p>
								<a href="#"><?php echo $slider['button']; ?></a>
								<a href="#">Buy now</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			</div>
		</section>
	</header>
	<!-- /end header part -->

	<!-- about part start -->
	<section id="about_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>about us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
			
				<div class="col-sm-5 text-right " data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">

				<?php foreach($select_result_about as $aboutleft){ ?>
					<div class="about_left">
						<div class="about_text">
							<h3><i class="fa fa-globe visible-xs"></i><?= $aboutleft['heading'];  ?><i class=""><img width="50" src="/webcit/uploads/abouts/<?= $aboutleft['about_pic']; ?>" alt=""></i></h3>
							<p><?= $aboutleft['description'];  ?></p>
						</div>
					</div>
					<?php } ?>

				</div>
			
				<div class="col-sm-2 hidden-xs">
					<div class="abtdr"></div>
				</div>
				
				<div class="col-sm-5 " data-anijs="if: scroll, on: window, do: fadeInRight   animated, before: scrollReveal">
				
				<?php foreach($select_result_about_right  as $aboutright){ ?>

					<div class="about_right">
						<div class="about_text">
							<h3><i class=""><img width="50" src="/webcit/uploads/aboutr/<?= $aboutright['aboutr_pic']; ?>" alt=""></i><?= $aboutright['heading']; ?></h3>
							<p><?= $aboutright['description']; ?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /about part end -->

	<!-- counter part start -->
	<section id="counter_part" >
		<div class="container text-center">
			<div class="row">
			<?php foreach($select_result_project as $projects){ ?>
				<div class="col-sm-3 col-xs-6" data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">
					<div class="counter">
						<i class=""><img width="80" src="/webcit/uploads/projects/<?= $projects['project_pic']; ?>" alt=""></i>
						<span class="number-count"><?= $projects['project_no']; ?></span>
						<h2><?= $projects['project_head']; ?></h2>
					</div>
				</div>
				<?php } ?>
			
			</div>
		</div>
	</section>
	<!-- counter part end -->

	<!-- work part start -->
	<section id="work_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>Our work</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">
					<ul class="simplefilter">
						<li class="active" data-filter="all">All</li>

						<?php foreach($select_result_categorys as $category){ ?>
							<li data-filter="<?= $category['id']; ?>"><?= $category['category_name']; ?></li>
						<?php } ?>

					</ul>
				</div>
			</div>
		</div>
		<div class="work_filter" data-anijs="if: scroll, on: window, do: fadeInDown   animated, before: scrollReveal">
			<div class="filtr-container">
				<?php foreach($select_result_works as $works){ ?>

				<div class=" col-sm-4 col-md-3 filtr-item plr" data-category="<?= $works['category_no']; ?>" data-sort="Busy streets">
					<img class="img-responsive" src="/webcit/uploads/works/<?= $works['work_photo']; ?>" alt="sample image">
					<div class="overly">
						<h3><?= $works['work_title']; ?></h3>
						<p><?=  $works['work_subtitle']; ?></p>
						<a class="fancybox" href="/webcit/uploads/works/<?= $works['work_photo']; ?>"><i class="fa fa-eye"></i></a>
						<a href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>

				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- work  part end -->

	<!-- services part start -->
	<section id="services_part">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>Our services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-12">
					<div class="services_inner">
					<?php foreach($select_result_services as $servics){ ?>
						<div class="col-md-4 col-sm-6 plr" data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">
							<div class="services_item">
								<i class=""><img width="60px" src="/webcit/uploads/services/<?= $servics['service_pic']; ?>" alt=""></i>
								<h3><?= $servics['service_head']; ?></h3>
								<p><?= $servics['description']; ?></p>
							</div>
						</div>
					<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- services part end -->

	<!-- skill part start -->
	<section id="skill_part">
		<div class="col-sm-6 skill_text plr" data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">
				<div class="slick_inner">
					<h2>Some Of Our Skills</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem odio a, consequatur quibusdam sunt veritatis ea! Et dolore architecto harum aliquam, in quis iusto quo, similique dignissimos. Laboriosam, minima?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem odio a, consequatur quibusdam sunt veritatis ea! Et dolore architecto harum aliquam, in quis iusto quo, similique dignissimos. Laboriosam, minima?</p>
				</div>
			</div>
			<div class="col-sm-6 progress_bar_bg" data-anijs="if: scroll, on: window, do: fadeInRight   animated, before: scrollReveal">
				<div class="progress_bar_div">
				<?php foreach($select_result_skills as $skill){ ?>
					<span class="progressText"><?= $skill['skill_name']; ?></span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100">
							<span class="popOver" data-toggle="tooltip" data-placement="top" title="<?= $skill['skill_title']; ?>%"> </span>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="clearfix"></div>
	</section>
	<!-- skill part end -->

	<!-- team part start -->
	<section id="team_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>Our Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			
				<div class="team">
					<div class="team_slider" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<?php foreach($select_result_teams as $team){ ?>
						<div class="col-sm-4 time_image">
							<img src="/webcit/uploads/teams/<?= $team['team_pic'] ?>" alt="team-image">
						</div>
		
					<?php } ?>
					</div>
	
					<i class="fa fa-long-arrow-left slid-laft-btn tem-pev"></i>
					<i class="fa fa-long-arrow-right slid-right-btn tem-nex"></i>
				</div>
			
				<div class="col-md-10 col-md-offset-1" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="member_info">
					<?php foreach($select_result_teams as $team_des){ ?>
						<div>
							<div class="team_member_info pl">
								<h3><?= $team_des['team_heading']; ?></h3>
								<h4><?= $team_des['team_subhead']; ?></h4>
								<p><?= $team_des['description']; ?></p>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- team part start -->

	<!-- comments  part start -->
	<section id="comments_part">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="comments_head">
						<h2>feedback</h2>
					</div>
					<div class="comments_mess" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<?php foreach($select_result_feedbacks as $feedback){ ?>	
						
						<div>
							<p><?= $feedback['description']; ?></p>
							<h3><?= $feedback['title']; ?> <span>client</span></h3>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- comments  part end -->

	<!-- pricing part start -->
	<section id="price_part">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>OUR PLANS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="price">
					<i class="fa fa-long-arrow-left slid-laft-btn price-prv visible-sm visible-xs"></i>
					<i class="fa fa-long-arrow-right slid-right-btn price-next visible-sm visible-xs"></i>
					<div class="proce_table_slider">
					<?php foreach($select_result_plans as $plan){ ?>
						<div class="col-md-3 col-sm-6" data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">
							<div class="price_table">
								<h2><?= $plan['heading']; ?></h2>
								<h3>$ <?= $plan['sub_head']; ?><span>Per Month</span></h3>
								<p><?= $plan['plan_title1']; ?></p>
								<p><?= $plan['plan_title2']; ?></p>
								<p><?= $plan['plan_title3']; ?></p>
								<p><?= $plan['plan_title4']; ?></p>
								<p><?= $plan['plan_title5']; ?></p>
								<a href="#">buy now</a>
							</div>
						</div>

					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /pricing part end -->

	<!-- video part start -->
	<section id="video_part" >
		<div class="container" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
			<div class="row">
				<div class="col-sm-12 text-center">
					<i data-toggle="modal" data-target=".bs-example-modal-lg" class="fa fa-youtube-play"></i>
				</div>
			</div>
			<!-- video modal -->
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					 
					<div class="modal-content ">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Video title</h4>
					 </div>
					 <!-- <div class="modal-body video_modal">
						
					 <iframe src="/webcit/uploads/videos/<?= $after_assoc_videos['video_title']; ?>" allowfullscreen></iframe>
					  </div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- video part end -->

	<!-- bolg part start -->
	<section id="blog_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>OUR Blog</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="blog">
					<div class="blog_slid" data-anijs="if: scroll, on: window, do: fadeInUp   animated, before: scrollReveal">
					<?php foreach($select_result_blogs as $blog){ ?>	
						
						<div class="col-sm-4" >
							<div class="blog_post">
								<a href="#"><img src="/webcit/uploads/blogs/<?= $blog['blog_pic']; ?>" alt="blog"></a>
								<h2><?= $blog['blog_title']; ?></h2>
								<h3>by<span>admin</span><?= $blog['blog_date']; ?>  at 11:00 AM</h3>
								<p><?= $blog['blog_descrip']; ?></p>
								<a href="#">read more..</a>
							</div>
						</div>
					<?php } ?>
					</div>
					<i class="fa fa-long-arrow-left slid-laft-btn blog-prv"></i>
					<i class="fa fa-long-arrow-right slid-right-btn blog-next"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- bolg part end -->

	<!-- client part stat -->
	<section id="client_part">
		<div class="container text-center">
			<div class="row">
				<div class="client_ligo" data-anijs="if: scroll, on: window, do: fadeInUp   animated, before: scrollReveal">
				<?php foreach($select_result_slideshows as $slideshow){ ?>	
					<div class="col-sm-2">
						<a href="#"><img width="100" src="/webcit/uploads/slideshow/<?= $slideshow['slide_pic']; ?>" alt="" class="img-responsive"></a>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!--  client part  end -->

	<!-- contact part start -->
	<section id="contact_part">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
					<div class="all_heading">
						<h2>contact us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contact_box">
			<div class="col-sm-6 plr" data-anijs="if: scroll, on: window, do: fadeInLeft   animated, before: scrollReveal">
				<div id="map" class="map_part">
					
				</div>
			</div>
			<div class="col-sm-6 plr contact_form text-center" data-anijs="if: scroll, on: window, do: fadeInRight   animated, before: scrollReveal">
				<h2> get in touch</h2>
				<form action="/webcit/contact/contact_post.php" method="POST">
					<div class="form-group col-md-6 pl">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<?php if(isset($_SESSION['name_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['name_err']; ?>        
                                        </div>
                    <?php } unset($_SESSION['name_err']);?>
					<div class="form-group col-md-6 pr">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<?php if(isset($_SESSION['email_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['email_err']; ?>        
                                        </div>
                    <?php }?>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="subject" name="subject">
					</div>
					<?php if(isset($_SESSION['subject_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['subject_err']; ?>        
                                        </div>
                    <?php }?>

					<div class="form-group">
						<textarea class="form-control area_text" placeholder="Message" name="message"></textarea>
					</div>

					<?php if(isset($_SESSION['message_err'])){ ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            <?php echo $_SESSION['message_err']; ?>        
                                        </div>
                    <?php } ?>


					<input type="submit" value="Submit" class="cotact_btn">
				</form>
				<?php if(isset($_SESSION['contact_success'])){ ?>
                        <div class="alert alert-success mt-2" role="alert">
                            <?php echo $_SESSION['contact_success']; ?>        
                        </div>
                <?php } unset($_SESSION['contact_success']); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- contact part end -->

	<!-- footer part start -->
	<footer id="footer_part" >
	<a class="bc2top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
		<div class="container" data-anijs="if: scroll, on: window, do: fadeIn   animated, before: scrollReveal">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="footer_contant">
						<div class="footer_logo">
							<img width="200" src="/webcit/uploads/logo/<?= $after_assoc_logo['logo_pic']; ?>"  class="img-responsive" alt="logo">
						</div>
						<div class="col-sm-4 footer_left">
							<p><i class="fa fa-home"></i>
								Momtaz Plaza (4th Floor)
								House#7, Road#4, Dhanmondi
								Dhaka-1205. Bangladesh</p>
						</div>
						<div class="col-sm-4 footer_mid ">
							<p><i class="fa fa-volume-control-phone"></i>+880 1624666000</p> 
							<p><i class="fa fa-volume-control-phone"></i>+880 1624888444</p>
						</div>
						<div class="col-sm-4 footer_right">
							<a href="mailto:cit.info@gamil.com"><i class="fa fa-envelope"></i>cit.info@gamil.com</a>
						</div>
						<div class="col-sm-12">
							<div class="footer_icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer part end -->
	
	<!-- main jquery file  js -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- google mape  js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdq3B2pNW6tzShvaVQ1TDmon1dBSw0KtY"></script>
	<script src="js/waypoints.min.js"></script>
	<!-- counter  js -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- bootstrap  js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- slick  js -->
	<script src="js/slick.js"></script>
	<!-- filterizr  js -->
	<script src="js/jquery.filterizr.js"></script>
	<!-- light box  js -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- animate js -->
	<script src="js/anijs-min.js"></script>
	<script src="js/anijs-helper-scrollreveal-min.js"></script>
	<!-- video js -->
	<script src="js/jquery.tubular.1.0.js"></script>
	
	<!-- main  js -->
	<script src="js/script.js"></script>
</body>

</html>
