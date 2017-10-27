<?php /* Template Name: Location Archives */ ?><?php get_header(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


<!-- contains the search bar -->
<div class="search-holder">
  <div class="wrapper">

    <form class="locations-filters">
        <input class="locations-search" type="text" placeholder="<?php the_field('location_field_label', 13); ?>">
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
        <input class="locations-submit" type="submit" value="<?php the_field( 'search_button_label', 13 ); ?>">
    </form>

  </div>
</div> <!-- end search holder -->


<!-- holds all the location cards -->
<div class="locations-wrapper">
  <div class="wrapper">
    <?php if ( have_posts() ) : ?>
      <div class="locations">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="location" data-lat="<?php echo get_field('location')['lat']; ?>" data-lng="<?php echo get_field('location')['lng']; ?>">

            <h3><?php the_title(); ?></h3>

            <?php if ( !empty( get_post_meta( get_the_ID(), 'distance'))) : ?>
              <p class="location-distance">
                <?php echo get_post_meta( get_the_ID(), 'distance' )[0]; ?>
                <?php echo __( 'mi', 'transhealthnc' ); ?>
              </p>
            <?php endif; ?>

            <p class="location-care-type">
              <?php the_field( 'type_of_care' ); ?><br>
            </p>

            <p class="location-contact">
              phone:
              <a href="tel:<?php the_field( 'phone_number' ); ?>">
                <?php the_field( 'phone_number' ); ?>
              </a><br>

              fax: <?php the_field( 'fax_number' ); ?><br>
              <a href="mailto:<?php the_field( 'email' ); ?>">
                <?php the_field( 'email' ); ?>
              </a><br>

              <a href="<?php echo 'http://www.' . get_field( 'website' ); ?>" target="_blank">
                <?php the_field( 'website' ); ?>
              </a><br>
            </p>

            <p class="location-address">
              <?php the_field( 'street_address' ); ?><br>
              <?php the_field( 'city' ); ?>,
              <?php the_field( 'state' ); ?>
              <?php the_field( 'zipcode' ); ?><br>
              <a href="<?php echo thnc_directions_link(); ?>" target="_blank">
                <?php echo __('Directions', 'transhealthnc'); ?>
              </a>
            </p><br>

            <p class="location-espanol">
              <?php if ( !empty(the_field( 'espanol' ))) : ?>
                  <?php the_field( 'espanol' );  ?>
              <?php endif; ?>
            </p>
            <p class="location-report">
              report
            </p>


          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <div class="no-results">
        <h3>
         <?php the_field( 'no_results_message', 13 ); ?>
        </h3>
      </div>
    <?php endif; ?>
  </div> <!-- end wrapper -->
</div> <!-- end locations-wrapper -->



<!-- <div class='test-area'>
  <?php the_field('type_of_care', 23); ?>
  <?php echo get_field('location', 23)['lat']; ?>
  <?php echo get_field('location', 23)['lng']; ?>
</div> -->


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


<?php wp_footer(); ?>
