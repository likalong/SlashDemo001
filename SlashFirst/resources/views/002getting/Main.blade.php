<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')|Yellow Sea Logistics </title>
<link rel="icon" type="image/png" href="{{asset('Picture/SocialLogo/Y.png')}}">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Condensed')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')  }}">
    <script src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('css/css/homeStyle.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/newStyle.css')}}"/>
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
<script type="text/javascript" src="{{asset('js/under_line.js')}}"></script>

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
