/**
 * Custom JavaScript Functionality
 *
 * This document contains the custom JavaScript functionality for WordPress
 * theme. This is written using jQuery to simplify code complexity.
 *
 * @package WordPress
 */

// Encapsulate Code
( function( $ ) {
	// After Document is Ready
	$(document).ready( function() {

		var mapStyle = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fec3e5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#464646"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ffe1f2"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.province",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f087c3"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#feb9e1"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#feb9e1"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffebf6"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#feabda"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b4f4ff"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]



		// // Location Hours Toggle Functionality
		// $('.location-hours-link').click( function (event) {
		// 	event.preventDefault();
		// 	$(this).parent().slideUp(300);
		// 	$(this).parents('.location').find('.location-hours').slideDown(300);
		// } );

		// LASIK Appointment Schedule Toggle Functionality
		// $('.location-appointment-link.lasik').click( function (event) {
		// 	event.preventDefault();
		// 	$('.lasik-appointment-form').slideToggle(300);
		// 	$('html, body').animate({
		// 		scrollTop: $('.lasik-appointment-form').offset().top
		// 	} );
		// } );

		// Store Initial Variables
		var locationContent, locationLat, locationLng,
			locationsData = [],
			$locations = $('.location'),
			$locationsWrapper = $('.locations-wrapper');

		// Stop If Not Locations Page
		if ( !$locationsWrapper.length ) {
			return;
		}


		$('input[name=espanol]').change(function(){
		    if($(this).is(':checked')) {
					document.filters.care.options.length=0;
					document.filters.care.options[0]=new Option("general", "general", true, false);
					document.filters.care.options[1]=new Option("hormonas", "hormonal", false, false);
					document.filters.care.options[2]=new Option("salud mental", "mental health", false, false);
					document.filters.care.options[3]=new Option("cirugía", "surgical", false, false);
		    } else {
					document.filters.care.options.length=0;
					document.filters.care.options[0]=new Option("general", "general", true, false);
					document.filters.care.options[1]=new Option("hormonal", "hormonal", false, false);
					document.filters.care.options[2]=new Option("mental health", "mental health", false, false);
					document.filters.care.options[3]=new Option("surgical", "surgical", false, false);
				}
		});


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
			var searchText = searchText + ' nc';

			// Process Radius
			var searchRadius = $(this).find('.locations-radius').val();
			if ( !searchRadius ) {
				location.href = locationsURL;
				return;
			}

			// Process type of care
      var typeOfCare = $(this).find('.type-of-care').val();
			if ( !typeOfCare ) {
				location.href = locationsURL;
				return;
			}


			// Process Spanish
			var spanish = 'no';
			if ( document.getElementById("espanol").checked ) {
				spanish = 'hablaespanol';
			}


			// Geocode Search and Change URL
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode( {address:searchText}, function(results, status) {
				if ( status == google.maps.GeocoderStatus.OK ) {
					locationsURL += '?searchtext=' + searchText;
					locationsURL += '&radius=' + searchRadius;
					locationsURL += '&lat=' + results[0].geometry.location.lat();
					locationsURL += '&lng=' + results[0].geometry.location.lng();
					locationsURL += '&care=' + typeOfCare;
					locationsURL += '&spanish=' + spanish;
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

			if ( searchParameters.indexOf('searchtext') !== -1 && !$locations.length ) {
				$('.locations-no-results').css('display', 'block');
			}

			// Populate Search Field
			if ( searchParameters.indexOf('searchtext') !== -1 ) {
				var searchText = searchParameters.replace('?searchtext=', '').split('&', 1)[0];
				searchText = decodeURI(searchText);
				searchText = searchText.replace(' nc', '');
				$('.locations-search').val(searchText);
			}

			// Populate Radius Field
			if ( searchParameters.indexOf('radius') !== -1 ) {
				var radiusValue = searchParameters.split('radius=', 2)[1].split('&', 1)[0];
				$('.locations-radius').val(radiusValue);
			}

			if ( searchParameters.indexOf('care') !== -1 ) {
				var care = searchParameters.split('care=', 2)[1].split('&', 1)[0].replace('%20', ' ');
				$('.type-of-care').val(care);
			}

			if ( searchParameters.indexOf('spanish') !== -1 ) {
				var spanish = searchParameters.split('spanish=', 2)[1].split('&', 1)[0];
				if ( spanish == 'hablaespanol' ) {
					document.getElementById('espanol').checked = true;
					document.filters.care.options.length=0;
					document.filters.care.options[0]=new Option("general", "general", true, false);
					document.filters.care.options[1]=new Option("hormonas", "hormonal", false, false);
					document.filters.care.options[2]=new Option("salud mental", "mental health", false, false);
					document.filters.care.options[3]=new Option("cirugía", "surgical", false, false);
					var care = searchParameters.split('care=', 2)[1].split('&', 1)[0].replace('%20', ' ');
					$('.type-of-care').val(care);
				}
			}

		}

		// Stop If No Locations
		if ( !$locations.length ) {
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 7,
				maxZoom: 15,
				center: {lat: 35.197, lng: -80.044},
				styles: mapStyle,
				mapTypeControl: false,
				streetViewControl: false,
				fullscreenControl: false
			});
			map.fitBounds(bounds);
			alert('nope');
			$('.locations-no-results').css('display', 'block');
		}


		// Get Location Data
		$locations.each( function() {
			locationContent = $(this).clone();
			locationContent = locationContent.html();
			locationLat = $(this).data('lat');
			locationLng = $(this).data('lng');
			locationsData.push([locationContent, locationLat, locationLng]);
		} );

		// Create Google Map
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 7,
			maxZoom: 15,
			styles: mapStyle,
			mapTypeControl: false,
			streetViewControl: false,
			fullscreenControl: false
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
		}

		map.fitBounds(bounds);


		// Adjust Map When Screen Is Resized
		$(window).resize(function(){
			map.fitBounds(bounds);
		});




	} ); // wrapper

} )( jQuery );
