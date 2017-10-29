<?php
/**
 * Main Template
 *
 * This file is the main template for the WordPress theme. It displays a list of
 * posts in the main content area.
 *
 * @package WordPress
 * @subpackage EyeCare_Partners
 * @since EyeCare Partners 1.0.0
 */
get_header(); ?>

<?php if ( get_field( 'hero_image', 'option' ) ) : ?>
	<div class="hero" style="background-image: url(<?php the_field( 'hero_image', 'option' ); ?>);">
<?php else: ?>
	<div class="hero">
<?php endif; ?>
	<div class="wrapper">
		<h1 class="hero-title">
			<?php the_field( 'location_headline', 'option' ); ?>
		</h1>
	</div>
</div>

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


<div class="locations-wrapper">
	<div class="wrapper">
		<?php if ( have_posts() ) : ?>



			<div class="locations">
				<?php while ( have_posts() ) : the_post(); ?>
						<div class="location" data-lat="<?php the_field( 'latitude' ); ?>" data-lng="<?php the_field( 'longitude' ); ?>">
							<div class="location-wrapper">

								<h2 class="location-title">
									<?php the_title(); ?>
								</h2>

								<?php if ( !empty( get_post_meta( get_the_ID(), 'distance' ) ) ) : ?>
									<p class="location-distance">
										<?php echo get_post_meta( get_the_ID(), 'distance' )[0]; ?>
										<?php echo __( 'mi', 'transhealthnc' ); ?>
									</p>
								<?php endif; ?>

								<p class="location-care-type">
                  <?php the_field( 'type_of_care' ); ?><br>
                </p>

								<p class="location-phone-number">
									<?php if ( get_field( 'phone_number' ) ) : ?>
												phone: <?php the_field( 'phone_number' ); ?><br>
									<?php endif; ?>
									<?php if ( get_field( 'fax_number' ) ) : ?>
												fax: <?php the_field( 'fax_number' ); ?><br>
									<?php endif; ?>
									<?php if ( get_field( 'email' ) ) : ?>
												<?php the_field( 'email' ); ?>
									<?php endif; ?>
									<?php if ( get_field( 'website' ) ) : ?>
											<a class="location-website" href="<?php the_field( 'website' ); ?>" target="_blank">
												<?php
													$subject = get_field( 'website' ) ;
	                        $search = 'http://' ;
	                        $trimmed = str_replace($search, '', $subject) ;
	                        echo $trimmed ;
												?>
											</a>
									<?php endif; ?>
							  </p>

								<p class="location-address">
									<?php the_field( 'address' ); ?><br>
									<?php the_field( 'city' ); ?>,
									<?php the_field( 'state' ); ?>
									<?php the_field( 'zip_code' ); ?><br>
									<a class="location-directions-link" href="<?php echo thnc_acf_directions_link(); ?>" target="_blank">
										<?php echo __( 'Directions', 'transhealthnc' ); ?>
									</a>
								</p>

								<p class="location-espanol">
		              <?php if ( !empty(the_field( 'espanol' ))) : ?>
		                  <?php the_field( 'espanol' );  ?>
		              <?php endif; ?>
		            </p>
		            <p class="location-report">
		              report
		            </p>

							</div>
						</div>
				<?php endwhile; ?>
			</div>

		<?php else: ?>

			<div class="locations-no-results">
				<?php the_field( 'no_results_message', 13 ); ?>
			</div>

		<?php endif; ?>
	</div>
</div>
<div class="map-holder">
	<div class="locations-map" id="map"></div>
</div>

<?php get_footer(); ?>
