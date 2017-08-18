<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')|Yellow Sea Logistics </title>
<link rel="icon" type="image/png" href="{{asset('Picture/SocialLogo/Y.png')}}">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')  }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Condensed')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/002style.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/css/News.css')}}"/>
</head>



<body >


<nav class="navbar navbar-inverse navbar-fixed-top navigation-bar navigation-shadow ">
    <div class="container-fluid">
        <div class="logo">
            <img src="{{asset('/Picture/SocialLogo/companyLogo.png')}}" alt="logo">
            <p>Yellow Sea Logistic co.,Ltd</p>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-right navigation-list " id="myNavbar">
            <ul class="nav navbar-nav " id="menu">
                <li id="nav-hide"><a href="#" class="hidden-xs "></a></li>
                <li><a class="{{  Html::clever_link('home')  }}" href="{{url('/home')}}" >Home</a></li>
                <li><a  href="/home#about-section" id="aboutus">About Us</a></li>
                <li><a href="/home#product-section" id="product">Product &amp; Services</a></li>
                <li><a class="{{  Html::clever_link('news')  }}" href="{{url('/news')}}">News</a></li>
                <li><a class="{{  Html::clever_link('quoteRequest')  }}" href="{{url('/quoteRequest')}}"> Quote Request</a></li>
                <li><a class="{{  Html::clever_link('contactUs')  }}" href="{{url('/contactUs')}}">Contact Us</a></li>
            </ul>
        </div>
    </div>


</nav>
<script>

    $(document).ready(function() {
        $("#aboutus,#product").on('focus', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body, #about-section,#product-section').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function () {
                    window.location.hash = hash;
                });
            }
        });
    });

</script>
<script>

$(document).ready(function(){
    $("#menu li a").click(function(){
        console.log($('#menu li a'));
        $("a").each(function(){
            $('a').removeClass('focus');
        });
        $(this).addClass('focus');

    });
});

</script>

@yield('bodypage')

    <div class="follow-us-contain"  id="contact-section">
        <div class="product-title" style="padding-top:40px;">
            <h3> FOLLOW US</h3>
        </div>
        <div class="contain-social-media ">
                <!-- Add font awesome icons -->
            <a href="#"><img src="{{asset('../Picture/SocialLogo/fb.png')}}"  class="Fb"></a>
            <a href="#"><img src="{{asset('../Picture/SocialLogo/tw.png')}}"  class="Tw"></a>
            <a href="#"><img src="{{asset('../Picture/SocialLogo/instagram-logo.png')}}" class="In"></a>
            <a href="#"><img src="{{asset('../Picture/SocialLogo/google.png')}}" class="Gp"></a>
            <a href="#" ><img src="{{asset('../Picture/SocialLogo/YouTube.png')}}" class="Yt"></a>
        </div>
    </div>
    <div class="at-bottom">
                <ul>
                    <li><a href="#" >Home</a></li>
                    <li><a href="#about-section" >About Us</a></li>
                    <li><a href="#product-section" >Product &amp; Services</a></li>
                    <li><a class="{{  Html::clever_link('news')  }}" href="{{url('/news')}}">News</a></li>
                    <li><a class="{{  Html::clever_link('quoteRequest')  }}" href="{{url('/quoteRequest')}}" > Quote Request</a></li>
                    <li><a class="{{  Html::clever_link('contactUs')  }}" href="{{url('/contactUs')}}" >Contact Us</a></li>
                </ul>
                <hr  class="line-col-fade-left-right marg-md">
              <p>@2017 Yellow Sea  Logistic .All right reserved Designed by<a> Flexitech</a></p>

    </div>

</body>
</html>
