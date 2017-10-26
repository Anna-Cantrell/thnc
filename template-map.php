<?php /* Template Name: Map page Template */ ?><?php get_header(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


<div class="search-holder">
  <div class="wrapper">

    <form class="locations-filters">
        <input class="locations-search" type="text" placeholder="<?php the_field('location_field_label'); ?>">
        <select class="locations-radius">
          <option value="10">
            <?php echo __( '10 mi', 'transhealthnc' ); ?>
          </option>
          <option value="25">
            <?php echo __( '25 mi', 'transhealthnc' ); ?>
          </option>
          <option value="50">
            <?php echo __( '50 mi', 'transhealthnc' ); ?>
          </option>
          <option value="100">
            <?php echo __( '100 mi', 'transhealthnc' ); ?>
          </option>
        </select>
        <select class="type-of-care">
          <option value="general">
            <?php echo __('general', 'transhealthnc'); ?>
          </option>
          <option value="hormonal">
            <?php echo __('hormonal', 'transhealthnc'); ?>
          </option>
          <option value="mental health">
            <?php echo __('mental health', 'transhealthnc'); ?>
          </option>
          <option value="surgical">
            <?php echo __('surgical', 'transhealthnc'); ?>
          </option>
        </select>
        <label for="espanol">Habla espa&ntilde;ol</label>
        <input type="checkbox" id="espanol" name="espanol" value="espanol">
        <input class="locations-submit" type="submit" value="<?php the_field( 'search_button_label' ); ?>">
    </form>

  </div>
</div> <!-- end search holder -->


<div class="location-wrapper">
  <div class="wrapper">
    <div class="locations">
    				<?php $row = 1; ?>
    				<?php while ( have_posts() ) : the_post(); ?>
    					<?php if ( $row > 1 ) : ?>

    						<div class="location test-area" data-lat="<?php the_field( 'latitude' ); ?>" data-lng="<?php the_field( 'longitude' ); ?>">
    							<div class="location-wrapper">

    								<h2 class="location-title">
    									<?php the_title(); ?>
    								</h2>

    								<?php if ( !empty( get_post_meta( get_the_ID(), 'distance' ) ) ) : ?>
    									<p class="location-distance">
    										<?php echo get_post_meta( get_the_ID(), 'distance' )[0]; ?>
    										<?php echo __( 'Miles', 'eyecarecenter' ); ?>
    									</p>
    								<?php endif; ?>

    								<p class="location-address">
    									<?php the_field( 'address' ); ?><br>
    									<?php the_field( 'city' ); ?>,
    									<?php the_field( 'state' ); ?>
    									<?php the_field( 'zip_code' ); ?>
    								</p>

    								<?php if ( get_field( 'phone_number' ) ) : ?>
    									<p class="location-phone-number">
    										<a class="location-phone-number-link <?php the_field( 'phone_number_class'); ?>" href="tel:<?php echo eyecarepartners_acf_call_number(); ?>">
    											<?php the_field( 'phone_number' ); ?>
    										</a>
    									</p>
    								<?php endif; ?>

    								<div class="location-hours">
    									<?php the_field( 'hours' ); ?>
    								</div>

    								<ul class="location-links">

    									<li class="location-link location-hours-item">
    										<a class="location-hours-link" href="#">
    											<?php echo __( 'Hours', 'eyecarepartners' ); ?>
    										</a>
    									</li>

    									<?php if ( get_field( 'appointment_link' ) ) : ?>
    										<li class="location-link">
    											<a class="location-appointment-link" href="<?php the_field( 'appointment_link' ); ?>" target="_blank">
    												<?php echo __( 'Schedule an Appointment', 'eyecarepartners' ); ?>
    											</a>
    										</li>
    									<?php endif; ?>

    									<li class="location-link">
    										<a class="location-directions-link" href="<?php echo eyecarepartners_acf_directions_link(); ?>" target="_blank">
    											<?php echo __( 'Directions', 'eyecarepartners' ); ?>
    										</a>
    									</li>

    								</ul>

    							</div>
    						</div>

    					<?php endif; ?>
    					<?php $row++; ?>
    				<?php endwhile; ?>
    			</div>
    </div>
</div>




<div class='test-area'>
  <?php the_field('type_of_care', 23); ?>
  <?php echo get_field('location', 23)['lat']; ?>
  <?php echo get_field('location', 23)['lng']; ?>
</div>


<div class="map-holder">
<div id="map"></div>
</div>

    <script>
      function initMap() {
        var northCarolina = {lat: 35.496249, lng: -79.623966};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: northCarolina,
          gestureHandling: 'cooperative',
          fullscreenControl: true


        });
        // var marker = new google.maps.Marker({
        //   position: northCarolina,
        //   map: map
        // });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN52rMtw3s6Uh4L5st0CIIKaCOOg1xY7Y&callback=initMap">
    </script>

</div>
<?php wp_footer(); ?>
