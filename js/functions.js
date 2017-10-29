/**
 * Custom JavaScript Functionality
 *
 * This document contains the custom JavaScript functionality for WordPress
 * theme. This is written using jQuery to simplify code complexity.
 *
 * @package WordPress
 * @subpackage EyeCare_Partners
 * @since EyeCare Partners 1.0.0
 */

// Encapsulate Code
( function( $ ) {

	// After Document is Ready
	$(document).ready( function() {

		// Location Hours Toggle Functionality
		$('.location-hours-link').click( function (event) {
			event.preventDefault();
			$(this).parent().slideUp(300);
			$(this).parents('.location').find('.location-hours').slideDown(300);
		} );

		// LASIK Appointment Schedule Toggle Functionality
		$('.location-appointment-link.lasik').click( function (event) {
			event.preventDefault();
			$('.lasik-appointment-form').slideToggle(300);
			$('html, body').animate({
				scrollTop: $('.lasik-appointment-form').offset().top
			} );
		} );

		// Store Initial Variables
		var locationContent, locationLat, locationLng,
			locationsData = [],
			$locations = $('.featured-location, .location'),
			$locationsWrapper = $('.locations-wrapper');

		// Stop If Not Locations Page
		if ( !$locationsWrapper.length ) {
			return;
		}

		// When User Searches
		$('.locations-filters').submit( function (event) {

			// Prevent Form Submission
			event.preventDefault();

			// Build Locations URL
			var locationsURL = window.location.origin;
			locationsURL += window.location.pathname;

			// Process Search Text
			var searchText = $(this).find('input[type="text"]').val();
			if ( !searchText ) {
				location.href = locationsURL;
				return;
			}

			// Process Radius
			var searchRadius = $(this).find('select').val();
			if ( !searchRadius ) {
				location.href = locationsURL;
				return;
			}

			// Geocode Search and Change URL
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode( {address:searchText}, function(results, status) {
				if ( status == google.maps.GeocoderStatus.OK ) {
					locationsURL += '?searchtext=' + searchText;
					locationsURL += '&radius=' + searchRadius;
					locationsURL += '&lat=' + results[0].geometry.location.lat();
					locationsURL += '&lng=' + results[0].geometry.location.lng();
					locationsURL = encodeURI(locationsURL);
					location.href = locationsURL;
				}
				else {
					alert('We are sorry but we could not process your search.');
				}
			} );

		} );


		// Populate Search Fields
		var searchParameters = window.location.search;
		if ( searchParameters ) {

			// Populate Search Field
			if ( searchParameters.indexOf('searchtext') !== -1 ) {
				var searchText = searchParameters.replace('?searchtext=', '').split('&', 1)[0];
				searchText = decodeURI(searchText);
				$('.locations-search').val(searchText);
			}

			// Populate Radius Field
			if ( searchParameters.indexOf('radius') !== -1 ) {
				var radiusValue = searchParameters.split('radius=', 2)[1].split('&', 1)[0];
				$('.locations-radius').val(radiusValue);
			}

		}

		// Stop If No Locations
		if ( !$locations.length ) {
			return;
		}

		// Get Location Data
		$locations.each( function() {
			locationContent = $(this).clone();
			locationContent.find('.featured-location-hours, .featured-location-hours-label, .location-hours, .location-hours-item').remove();
			locationContent = locationContent.html();
			locationLat = $(this).data('lat');
			locationLng = $(this).data('lng');
			locationsData.push([locationContent, locationLat, locationLng]);
		} );

		// Create Google Map
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			maxZoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		// Add Pins and Auto Zoom Map
		var bounds = new google.maps.LatLngBounds();
		var infowindow = new google.maps.InfoWindow();
		for (i = 0; i < locationsData.length; i++) {
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(locationsData[i][1], locationsData[i][2]),
				map: map
			});
			bounds.extend(marker.position);
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(locationsData[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
			marker.addListener('click', function() {
				if ( typeof _st !== 'undefined' ){
					_st.render();
				}
	        });
		}
		map.fitBounds(bounds);

		// Rerender DialogTech Call Tracking
		$(window).load(function(){
			if ( typeof _st !== 'undefined' ){
				_st.render();
			}
		});

		// Adjust Map When Screen Is Resized
		$(window).resize(function(){
			map.fitBounds(bounds);
		});

	} );

} )( jQuery );
