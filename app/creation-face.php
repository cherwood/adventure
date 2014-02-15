<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Creation face | Adventure chain</title>	
		<meta charset="utf-8" />
		<meta name="description" content="Adventure chain." />
		<meta name="keywords" content="Adventure, chain" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../font/font.css">
		<link rel="stylesheet" type="text/css" href="../css/royalslider.css">
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<link rel="icon" href="img/favicon.ico"/>
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
    
	</head>
	
  <body>
  
  <div id="page">
  
    <div id="creationFace">

      <div class="wrapper">
        <h1>Creation</h1>
        <h2>Choose your character's face</h2>
      </div><!-- *** END WRAPPER *** -->  
      
        <div id="gallery-1" class="royalSlider rsDefault visibleNearby">
          <a class="rsImg" href="../img/slider-face/girl-face-1.png" >Girl 1<span>Lorem ipsum</span></a>
          <a class="rsImg" href="../img/slider-face/girl-face-1.png" >Girl 2<span>Lorem ipsum</span></a>          <a class="rsImg" href="../img/slider-face/girl-face-1.png" >Girl 3<span>Lorem ipsum</span></a>
          <a class="rsImg" href="../img/slider-face/girl-face-1.png" >Girl 4<span>Lorem ipsum</span></a>
          
        </div>
        
        
        <div class="wrapper">
          <hr class="clear" />
          <a class="face-button face-back" href="#">back</a>
          <a class="face-button face-complete" href="#">Perfect !</a>
        </div>

    </div><!-- *** END CREATION FACE *** -->
    
  </div><!-- *** END PAGE *** -->
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="../js/jquery.royalslider.min.js"></script>
  <script id="addJS">// Important note! If you're adding CSS3 transition to slides, fadeInLoadedSlide should be disabled to avoid fade-conflicts.
  jQuery(document).ready(function($) {
    var si = $('#gallery-1').royalSlider({
      addActiveClass: true,
      arrowsNav: false,
      controlNavigation: 'none',
      autoScaleSlider: true, 
      autoScaleSliderWidth: 960,     
      autoScaleSliderHeight: 340,
      loop: true,
      fadeinLoadedSlide: false,
      globalCaption: true,
      keyboardNavEnabled: true,
      globalCaptionInside: false,
  
      visibleNearby: {
        enabled: true,
        centerArea: 0.5,
        center: true,
        breakpoint: 650,
        breakpointCenterArea: 0.64,
        navigateByCenterClick: true
      }
    }).data('royalSlider');
  
    // link to fifth slide from slider description.
    $('.slide4link').click(function(e) {
      si.goTo(4);
      return false;
    });
  });
  </script>
  
  </body>
	 
</html>