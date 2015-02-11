<html>

<h1>Masonry - layout</h1>
<p>Click to toggle item size</p>
<div class="masonry">
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
  <div class="item"></div>
</div>

</html>

<style>



.masonry {
  background: #EEE;
  max-width: 724px;
}

/* clearfix */
.masonry:after {
  content: '';
  display: block;
  clear: both;
}

.masonry .item {
  width:  290px;
  height: 300px;
  background: #D26;
  margin: 0 0 0 45px;
  border: 1px solid #000;
}

.item.gigante {
  width: 625px;
  height: 600px;
}

.item:hover {
  cursor: pointer;
}
</style>

<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
<script src="https://rawgithub.com/desandro/classie/master/classie.js"></script>

<script>
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

