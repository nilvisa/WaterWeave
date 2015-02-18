


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WaterWeave</title>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	
	
	<!--<script src="js/jquery-1.11.2.min.js"></script>-->
	<script src="js/hamburger.js"></script>

	<!--Using Media Queries, if the viewport is smaller than 700px use another stylesheet-->
    <link rel="stylesheet" type="text/css" media="all" href="css/hamburger.css"/>
</head>
<body>



<script type="text/javascript">
    jQuery(function($){
             $( '.menu-btn' ).click(function(){
             $('.responsive-menu').toggleClass('expand')
             })
        })
</script>





<div class="mobile-nav">
    <div class="menu-btn" id="menu-btn">
        <div></div>
        <span></span>
        <span></span>
        <span></span>
    </div>
 
    <div class="responsive-menu">
        <ul>
           <li>1. Object</li>
           <li>2. Object</li>
        </ul>
    </div>
</div>

</body>
</html>




