@extends('002getting.Main')
@section('title','News')
@section('bodypage')

<div class="container-header">
	<div class="slide-contain " >
        <img src="{{asset('/Picture/web-comp/y-news.JPG')}}" class="background-img">
        <div class="news-and-event-background">
            <p >News &amp; Event</p>
            
        </div>
    </div>
    
</div><!-- endl Header-->

<div class="contain-news" id="titleNews">
	<div class="news-title">
    	<p>News &amp; Events</p><br>
    </div>
</div>
<div class="container" id="newscontent">
    <div class="row  makemargin">
        <div class="col-lg-4 col-sm-4 col-xs-6  ">
            <div class="img-item">
                <a href="#" >
                    <img src="{{asset('Picture\web-comp\air-logistic.jpg')}}" class="box-shadow-on-img news-img">
                    <div class="overlay-img-box"></div>
                </a>

            </div>
            <p class="pcolor">Air Logistic service</p>
            <div class="row">
                <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        1 month ago
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-xs-6  ">
            <div class="img-item">
                <a href="#" >
                    <img src="{{asset('Picture\web-comp\sea-port.jpg')}}" class="box-shadow-on-img news-img">
                    <div class="overlay-img-box"></div>
                </a>

            </div>
            <p class="pcolor">sea port service</p>
            <div class="row">
                <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        1 month ago
                    </span>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-sm-4 col-xs-6  ">
            <div class="img-item">
                <a href="#" >
                    <img src="{{asset('Picture\web-comp\y-quotation.JPG')}}" class="box-shadow-on-img news-img" >
                    <div class="overlay-img-box"></div>
                </a>

            </div>
            <p class="pcolor">yellow quotation service</p>
            <div class="row">
                <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        4 month ago
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-xs-6  ">
            <div class="img-item">
                <a href="#" >
                    <img src="{{asset('Picture\web-comp\port-logistic-2.jpg')}}" class="box-shadow-on-img news-img">
                    <div class="overlay-img-box"></div>
                </a>

            </div>
            <p class="pcolor">Port Logistic service</p>
            <div class="row">
                <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        7 month ago
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-xs-6  ">
            <div class="img-item">
                <a href="#" >
                    <img src="{{asset('Picture\web-comp\warehouse.jpg')}}" class="box-shadow-on-img news-img">
                    <div class="overlay-img-box"></div>
                </a>

            </div>
            <p class="pcolor"> Look at Warehouse </p>
            <div class="row">
                <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        2 month ago
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-xs-6  ">
            <div class="img-item">
                <a href="#" >
                    <img src="{{asset('Picture\web-comp\y-about-4.JPG')}}" class="box-shadow-on-img news-img">
                    <div class="overlay-img-box"></div>
                </a>

            </div>
            <p class="pcolor">Export brokerage </p>
            <div class="row">
                <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        5 month ago
                    </span>
                </div>
            </div>
        </div>
</div>


</div>
<!-- end News section-->

@stop