<?php /* Template Name: Form Page Template */ ?><?php get_header(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-form.css">
</div>

<div class="wrapper form-lp-wrapper">
	<main role="main">


		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-5 col-sm-offset-1 form-column">
					<div class="form-title">
						Help us by filling out the
					</div><br>
					<div class="form-title2">
						form below.
					</div>
					<div class="form-secure-text">
						This form is confidential and secure <br>provide as much or as little information as you can
					</div>



<!-- FORM -->
		<div id="form-holder" class="row-form">
              <div class="form-holder">

				  <?php
if($_POST["drname"]) {
    $recipient="transhealthnc@gmail.com";
    $subject=$_POST["drname"] . '-transhealthNC - FORM';
    $drname=$_POST["drname"];
		$location=$_POST["location"];
		$typeOfCare=$_POST["type"];
		$spanish=$_POST["selector"];
		$comments=$_POST["message"];

    $mailBody="Dr Name: $drname\nLocation: $location\nType of care: $typeOfCare\nSpanish: $spanish\nComments: $comments\n\n";

    mail($recipient, $subject, $mailBody, "From: transhealthNC.com");

    if ( preg_match( "/[\r\n]/", $drname ) || preg_match( "/[\r\n]/", $location ) || preg_match( "/[\r\n]/", $comments ) ) {
        $url = 'http://transhealthnc.com/form/?success=false';
        header('Location: ' . $url, false, 302);
        exit;
    } else {

    $url = 'http://transhealthnc.com/form/?success=true';
    header('Location: ' . $url, false, 302);
    exit; }
}
?>

                  <form method="post" action="<?php the_permalink(); ?>" id='actual-form'>
                      <br>

												<input required='' type='text' name='drname' />
	                        <label alt="healthcare professional's name" placeholder="healthcare professional's name"></label>

                        <input required='' type='text' name='location' />
	                        <label alt='city/address' placeholder='city/address'></label>

												<div class="select">
													<select id="myList" name="type">
														<option value="null">- type of care -</option>
														<option value = "psychological">psychological</option>
														<option value = "hormonal">hormonal</option>
														<option value = "general">general</option>
														<option value = "surgical">surgical</option>
													</select>
												</div>
													<br>

												<label id="spanish">Do they speak Spanish?</label>
													<ul>
													  <li>
													    <input type="radio" id="yes" name="selector" value="yes">
													    <label for="yes">yes</label>

													    <div class="check"></div>
													  </li>

													  <li>
													    <input type="radio" id="no" name="selector" value="no">
													    <label for="no">no</label>

													    <div class="check"><div class="inside"></div></div>
													  </li>

													  <li>
													    <input type="radio" id="dont_know" name="selector" value="dont_know">
													    <label for="dont_know">don't know</label>

													    <div class="check"><div class="inside"></div></div>
													  </li>
													</ul>


					              <textarea type='text' name='message'></textarea>
	                        <label alt='additional comments' placeholder='additional comments'></label>

                        <input type="submit" value="Submit">

                   </form>
              </div> <!-- end form holder -->
          </div> <!-- end row -->

<!-- END FORM -->
</div> <!-- end col -->

<div class="col-sm-5 intro-column">
	<div class="title-text">Help us create a happier, healthier transgender community in North Carolina
	</div>
	<div class="body-copy">
		We’re gathering information from trans people across the state on the healthcare professionals from whom they have personally recieved treatment. We’ll use this information to create the state’s first interactive map connecting the trans community to quality and experienced healthcare.
	</div>
		<div class='more-info'>Please email transhealthnc@gmail.com for any questions or comments.
		</div>
		<div class="facebook-holder">
			<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//transhealthnc.com/form/" target="_blank">Share on Facebook</a>
		</div>
</div>


</div> <!-- end row -->


		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		</section>
		<!-- /section -->
	</div> <!-- end container -->
	</main>



<div class="darken" id="darken">
	<div class="node" id="node11">
	     <div class="closeButton">
	            <div class="close1">
	                <div class="close2"></div>
	            </div>
	        </div>

	        <div class="container-fluid">

	        <div class="row">
	          <div class="col-sm-4 nodeimg">
	              <img src="<?php echo get_template_directory_uri(); ?>/img/THNC-logo-solid-white-pink.png" alt="Logo" class="logo-img">
	          </div>

	          <div class="col-sm-8 nodetext" id="texti">
	              <h4 class="successTitle">THANK YOU</h4><br>
	          </div>
	        </div>

					<div class="row">
						<div class="col-sm-12">
							<p class="successBody">Thank you so much for contributing to transhealthNC. Your contribution will help trans people find quality and experienced healthcare in the future.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 center">
							<button id="repeatBtn" class="btn button">Fill out the form again</button>
						</div>
						<div class="col-sm-6 center">
							<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//transhealthnc.com/form/" target="_blank">
							<button class="btn fb-share button">Share on Facebook</button></a>
						</div>
					</div>

	    </div>
	    </div>
</div>

<?php wp_footer(); ?>
