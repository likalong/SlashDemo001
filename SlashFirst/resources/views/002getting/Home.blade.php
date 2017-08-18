@extends('002getting.Main')
@section('title','Landing Page')
@section('bodypage')


<div class="container-header ">
	<div class="slide-contain " >
        <img src="../Picture/web-comp/new-slide-1.jpg" class="background-img">
        <div class="intro-in-header">
            <p >
             YELLOW SEA LOGISTICS offers the suports for the goosds transportation both locally and globally as ,Rail Freight,Intermodal,Air Freight,Ocean Freigth,Custom Broker, and Warehousing/Distribution.
            </p>
            
        </div>
        <button class="button-head">QUOTE REQUEST</button>
    </div>
    <!-- endl slide 1-->
    
    <div class="slide-contain " >
        <img src="../Picture/web-comp/y-about-2.jpg" class="background-img">
        <div class="intro-in-header">
            <p >
             By Ocean or Air, FCL or LCL, we believe that we are the one for you. We focus to offer the fast and premium service, from Door to Door / Port to Port / Door to Port / Port to Door.
            </p>
        </div>
      <button class="button-head">QUOTE REQUEST</button>
     </div>
        
    <!-- endl slide 2-->
    
    <div class="slide-contain ">
        <img  src="../Picture/web-comp/new-slide-3.jpg" class="background-img">
        <div class="intro-in-header">
            <p >
            YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
            </p>
        </div>  
        <button class="button-head">QUOTE REQUEST</button>
   </div>  
   
 <!-- endl slide 3-->
   <div class="slide-contain ">
        <img  src="../Picture/web-comp/y-slide-3.JPG" class="background-img">
        <div class="intro-in-header">
            <p >
           Storage is crucially important for your cargos as it is the starting point before bringing your cargos to the world or to your retails shop.
            </p>
        </div>
        <button class="button-head">QUOTE REQUEST</button>  
   </div>
  <!-- endl slide 4-->
      <div class="slide-contain ">
        <img src="../Picture/web-comp/y-slide-2.JPG" class="background-img">
        <div class="intro-in-header">
            <p >
          YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution
            </p>
        </div> 
        <button class="button-head">QUOTE REQUEST</button> 
   </div>
  <!-- endl slide 5-->
<a class="prev" onclick="plusDivs(-1)">&#10094;</a>
<a class="next" onclick="plusDivs(1)">&#10095;</a>   

<div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
          <span class="dot" onclick="currentSlide(5)"></span>
</div>

</div><!-- endl Header-->
<script>
var slideIndex = 1;
var dots = document.getElementsByClassName("dot");
showSlides(slideIndex);
function plusDivs(n) {
	showDivs(slideIndex += n);
}
// function for click next and prev
function showDivs(n) {	
		var i;
		var x = document.getElementsByClassName("slide-contain");
		if (n > x.length) {slideIndex = 1}
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		}
		  
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" make-background", "");
	  }
	  x[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " make-background";
}
// for Automatical slide

function plusSlides(n) {
 	showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide-contain");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
	  slides[slideIndex-1].className.replace("fade",""); 
  }
   
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" make-background", "");// it replace class active to dots as empty class active with dot
  }
  slides[slideIndex-1].style.display = "block";
  slides[slideIndex-1].className+= " fade";  
  dots[slideIndex-1].className += " make-background";
  slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
  setTimeout(showSlides,10000); // Change image every 10 seconds*/
 
}
</script>
<div class=" container-about" id="about-section">
    <div class="container">
        <div class="about-text">
            <h3>About</h3>
            <h3 class="yellow">Yellowsea Logistic</h3>
            <p>
            Yellow Sea Logistics offers the supports for the goods transportation both locally and globallly such as Rail Freight. Intermodal, Air Freight, Custom Broker, and WarehousingDistrubute.<br><br>
            Bason on our strong assets and facilities, we have beenmotivated to start out first service providing in 2016, and then with many more services from the start to the end. We would like our customers to rest assured and let us take care of the rest for you.We are new in term of company,but we havea talented and experience learn here to ensure a high quality servicebeing delivered and satisfiedour cutomers.<br><br>
            We are doing our best as a respondiblr budinrdd partner and a customer tocused service provider to bring value and solution to your business developmentas well as ours.
            </p>
        </div>
        <div class=" about-contain-img" >
            <img class="about-image" src="../Picture/web-comp/truck-logistic.jpg">
            <div class="about-logo">
                <img src="{{asset('/Picture/SocialLogo/companyLogo.png')}}">
                <p>Yellow Sea Logistic co.,Ltd</p>
            </div>

        </div>
    </div>
  </div>
<!-- end About section-->
{{--<div class="product-container" id="product-section">--}}
 <div class="container" id="product-section"  >
    <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-title">
                <h3>PRODUCT &amp; SERVICE</h3>
            </div>
          </div>
     </div>
    <div class="row">
       	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
            <h4 class="caption">Intermodal Service</h4>
            <p>
                Our core product is to provide you the stable but qualified delivery service. We have a station where you can easily drop your cargo and leave everything to us. On top of that, we have the intermodal service to support you an all-in delivery to/from your warehouse directly. <br><br>
                We have a strong product designed as we have a warehouse combined with local intermodal service. It will save you time, cost and security. Your cargos will delivered at the destination all at the same time.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " >
        	<img src="../Picture/web-comp/intermodal.jpg" class="product-img"/>
        </div>
    </div>
    <hr class="line-btm">

  <!-- end Intermodal Service-->
     <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">
                    <h4 class="caption">Freight Forwarding</h4>
                    <p>
                        By Ocean or Air, FCL or LCL, we believe that we are the one for you. We focus to offer the fast and premium service, from Door to Door / Port to Port / Door to Port / Port to Door. <br><br>
                        We design our service as per your individual requirements - from/to almost anywhere you wish to ship your cargo in the globe. We handle them with Care and Responsibility. Given your available time range, we will support you to present your cargos to any place of your request with the cost effectiveness.
                    </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        	<img src="../Picture/web-comp/export_brokerage.jpg" style="margin-left:0px;" class="product-img"/>
        </div>
        <hr >
     </div>
     <hr class="line-btm">
<!-- endl Freight Forwarding -->
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h4 class="caption">Custom House Brokerage</h4>
                <p>
                    For ease of doing your trading business, we urge to provide you - Customs House Brokerage service supporting your exports and imports businesses.<br><br>
                    We will cover all the preparations of required documents, taxes/duties calculation and payment, ensuring customs formality completion in the fast manner, so your cargo will be available as planned.
                </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
        	<img src="../Picture/web-comp/custom-brokerage.jpg" class="product-img"/>
        </div>
        <hr>
    </div>
     <hr class="line-btm">
  <!-- end  Customer House Brikerage-->

   <div class="row padding-btm">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">

                    <h4 class="caption">Warehousing And Distribution</h4>
                    <p>
                        Storage is crucially important for your cargos as it is the starting point before bringing your cargos to the world or to your retails shop. <br><br>
                        We keep it a priority when it comes to this. That is why we have our own warehouse which is standardize, highly maintained, and ideally safe. There is also our value added service to distribute your wish-list cargo to you whether it is in a small or big volume. Add Comment
                    </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                <img src="../Picture/web-comp/new-warehousing.jpg" style="margin-left:0px;" class="product-img"/>
            </div>
        <hr>
    </div>
</div>
{{--</div><!-- end product view-->--}}

<!-- section of scroll image fix at background-->
<div class="bottom-img">
<div class="contain"></div>
    <div class="intro-in-header more-on-intro">
            <p>
             YELLOW SEA LOGISTICS offers the suports for the goosds transportation both locally and globally as ,Rail Freight,Intermodal,Air Freight,Ocean Freigth,Custom Broker, and Warehousing/Distribution.
            </p>
        </div>
        <button class="button-head more-on-btn">QUOTE REQUEST</button>
</div>
<!-- end image at bottom-->
@stop