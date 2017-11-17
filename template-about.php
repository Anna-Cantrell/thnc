<?php /* Template Name: About Page Template */ ?><?php get_header(); ?>


<section class="hero">
	<!-- <div class="background-color"></div> -->
	<img class="hero-bg" src="<?php echo get_template_directory_uri(); ?>/img/thnc-hero1.png">
</section>

<section class="callout">
	<p class="callout-copy">
		<?php if ( get_field( 'callout' ) ) : ?>
					<?php the_field( 'callout' ); ?><br>
		<?php endif; ?>
	</p>
</section>

<section class="about-content">
	<div class="row">

		<div class="content-title col-md-5">
			<ul>
				<li>finding quality</li><br>
				<li>healthcare</li>
			</ul>
		</div>

		<div class="content-body col-md-7">
			<?php if ( get_field( 'about_copy' ) ) : ?>
						<?php the_field( 'about_copy' ); ?><br>
			<?php endif; ?>
		</div>

  </div>
</section>

<section class="helping">
	<div class="helping-title">
		<p>
			<?php if ( get_field( 'help_headline' ) ) : ?>
						<?php the_field( 'help_headline' ); ?><br>
			<?php endif; ?>
		</p>
	</div>

	<div class="help-selections row">

		<div class="col-sm-4">

			<a href="http://transhealthnc.com/form">
				<div class="help-card card1">
					<h3 class="card-title">
						<?php if ( get_field( 'card1_title' ) ) : ?>
									<?php the_field( 'card1_title' ); ?><br>
						<?php endif; ?>
					</h3>
					<p class="card-copy">
						<?php if ( get_field( 'card1-body' ) ) : ?>
							<?php the_field( 'card1-body' ); ?>
						<?php endif; ?>
					</p>
				</div>
		  </a>

		</div>

		<div class="col-sm-4">

			<div class="help-card card2">
				<h3 class="card-title">
					<?php if ( get_field( 'card2-title' ) ) : ?>
						<?php the_field( 'card2-title' ); ?><br>
					<?php endif; ?>
				</h3>
				<p class="card-copy">
					<?php if ( get_field( 'card2_body' ) ) : ?>
						<?php the_field( 'card2_body' ); ?>
					<?php endif; ?>
				</p>
				<div class="help-social">
					<a href="https://www.facebook.com/transhealthnc/" target="_blank">
						<div class='social-icon help-fb'></div>
					</a>
					<a href="https://twitter.com/transhealthNC" target="_blank">
						<div class='social-icon help-tw'></div>
					</a>
				</div>
			</div>

		</div>

		<div class="col-sm-4">
			<div class="help-card card3">
				<h3 class="card-title">
					<?php if ( get_field( 'card3_title' ) ) : ?>
						<?php the_field( 'card3_title' ); ?><br>
					<?php endif; ?>
				</h3>
				<p class="card-copy">
					<?php if ( get_field( 'card3_body' ) ) : ?>
						<?php the_field( 'card3_body' ); ?>
					<?php endif; ?>
				</p>
			</div>
		</div>

	</div>

</section>


<section class="contact">
	<div class="contact">

		<div class="contact-title">
			<p>
				<?php if ( get_field( 'contact_title' ) ) : ?>
					<?php the_field( 'contact_title' ); ?>
				<?php endif; ?>
			</p>
		</div>
    <div class="row">
			<div class="col-md-10 col-md-offset-1 contact-body">
				<?php if ( get_field( 'contact_body' ) ) : ?>
					<?php the_field( 'contact_body' ); ?>
				<?php endif; ?>
				<br><br>
			</div>
	  </div>

		<div class='contact-email'>
			<?php if ( get_field( 'email_address' ) ) : ?>
				<?php the_field( 'email_address' ); ?>
			<?php endif; ?>
		</div>

	</div>
</section>

<?php get_footer(sub); ?>
