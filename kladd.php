<script src="js/jquery-1.11.2.min.js"></script>
<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
<script scr="js/imagesloaded.pkgd.min.js"></script>
<script src="https://rawgithub.com/desandro/classie/master/classie.js"></script>

<script>
// resize
docReady( function() {

  var container = document.querySelector('.masonry');
  var msnry = new Masonry( container, {
    columnWidth: 60
  });

  eventie.bind( container, 'click', function( event ) {
    // don't proceed if item was not clicked on
    if ( !classie.has( event.target, 'item' ) ) {
      return;
    }
    // change size of item via class
    classie.toggle( event.target, 'gigante' );
    // trigger layout
    msnry.layout();
  });

});
</script>

<script>
// masonryscript
$(window).load(function(){
	var $container = $('#container').masonry();
});

// väntar in bilderna
var $container = $('#container').masonry();
$container.imagesLoaded( function() {
  $container.masonry();
});
</script>

