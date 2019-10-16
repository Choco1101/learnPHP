<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
	.multi-item-carousel{
	  .carousel-inner{
	    > .item{
	      transition: 500ms ease-in-out left;
	    }
	    .active{
	      &.left{
	        left:-33%;
	      }
	      &.right{
	        left:33%;
	      }
	    }
	    .next{
	      left: 33%;
	    }
	    .prev{
	      left: -33%;
	    }
	    @media all and (transform-3d), (-webkit-transform-3d) {
	      > .item{
	        /*use your favourite prefixer here*/
	        transition: 500ms ease-in-out left;
	        transition: 500ms ease-in-out all;
	        backface-visibility: visible;
	        transform: none!important;
	      }
	    }
	  }
	  .carousel-control{
	    &.left, &.right{
	      background-image: none;
	    }
	  }
	}

	/* non-related styling:*/
	body{
	  background: #333;
	  color: #ddd;
	}
	h1{
	  color: white;
	  font-size: 2.25em;
	  text-align: center;
	  margin-top: 1em;
	  margin-bottom: 2em;
	  text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
	}  	
  </style>

<script>

$(document).ready(function(){
	// Instantiate the Bootstrap carousel
	$('.carousel').carousel({
	  interval: false,
	 
	});

	// for every slide in carousel, copy the next slide's item in the slide.
	// Do the same for the next, next item.
	$('.multi-item-carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
	    next.next().children(':first-child').clone().appendTo($(this));
	  } else {
	  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});  	

});
</script>
</head>
<body>

	<div class="container">
  <h1>Use Bootstrap 3's carousel to show multiple items per slide.</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel" >
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Chrysanthemum.jpg" class="img-responsive"></a>   
            	<div class="carousel-caption">
	          		<h3>1</h3>
	            </div>

            </div>

      	  </div>


          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Desert.jpg" class="img-responsive"></a>

            	<div class="carousel-caption">
	          		<h3>2</h3>
	            </div>


            </div>




          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Hydrangeas.jpg" class="img-responsive"></a>

            	<div class="carousel-caption">
	          		<h3>3</h3>
	            </div>


            </div>




          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Jellyfish.jpg" class="img-responsive"></a>

           		<div class="carousel-caption">
	          		<h3>4</h3>
	            </div>

            </div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Koala.jpg" class="img-responsive"></a>


           		<div class="carousel-caption">
	          		<h3>5</h3>
	            </div>


	    </div>





          </div>
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Lighthouse.jpg" class="img-responsive"></a>

           		<div class="carousel-caption">
	          		<h3>6</h3>
	            </div>

            </div>


          </div>
          <!-- add  more items here -->
          <!-- Example item start:  -->
          
          <div class="item">
            <div class="col-xs-4"><a href="#1"><img src="Sample%20Pictures/Penguins.jpg" class="img-responsive"></a>

           		<div class="carousel-caption">
	          		<h3>7</h3>
	            </div>

            </div>
          </div>
          
          <!--  Example item end -->
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>