/*
*
* Custom Javascript
*
* This document works primarily to manage the map
* and searching.
*
*/

(function( $ ) {
  $(document).ready( function() {

    setting initial variables
    var locationContent, locationLat, locationLng,
      locationsData = [],
    $locations = $('.location'),
    $locationsWrapper = $('.locations-wrapper');

    // return if not the locations page
    if ( !$locationsWrapper.length ) {
      return;
    }

    $('.locations-filters').submit( function (event) {

      // prevent default form submission
      event.preventDefault();

      // Build locations url
      var locationsURL = window.location.origin;
      locationsURL += window.location.pathname;

      // process the searched text
      var searchText = $(this).find('input[type="text"]').val();
      if ( !searchText ) {
        location.href = locationsURL;
        return;
      }

      // process the radius
      var searchRadius = $(this).find('select.locations-radius').val();
      if ( !searchRadius ) {
        location.href = locationsURL;
        return;
      }

    });



  });
})(jQuery);
