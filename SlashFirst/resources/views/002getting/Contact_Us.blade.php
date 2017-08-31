@extends('002getting.Main')
@section('title','Contact Us')
@section('bodypage')


<div class="head-space">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.084695978349!2d104.89912701420229!3d11.545781991802293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095102f084a533%3A0xd1fa14b956a60cb6!2z4Z6V4Z-S4Z6f4Z624Z6a4oCL4Z6R4Z-G4Z6T4Z6-4Z6UIOGen-Geu-GenOGejuGfkuGejuGetg!5e0!3m2!1skm!2skh!4v1502853800681" frameborder="0" style="border:0" allowfullscreen>

    </iframe>
</div><!-- endl Header-->

<div class="container-fluid background-gray">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

            <h3 class="styleh3">Contact Us</h3><br>

         </div>
     </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 make-center">
            <p  >YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
            </p>

        </div>
    </div>

        <div class="row makemargin">
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 make-center">
                <i class="glyphicon glyphicon-earphone"  style=" color: #ffcc00; font-size: 50px"></i>
                <h4 class="makesizeh4">Any Question?</h4>
                <p>+855 61 333 117<br/>+855 61 333 500</p>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 make-center">
                <div class="glyphicon glyphicon-envelope" style=" color: #ffcc00; font-size: 50px"></div>
                <h4 class="makesizeh4">Write Us A Message</h4>
                <p class="makecolor-email" >csmng@yellowsea.asia </p>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 make-center">
                <div class="glyphicon glyphicon-map-marker" style=" color: #ffcc00; font-size: 50px"></div>
                <h4 class="makesizeh4">Find Us On Map</h4>
                <p >#G26, Street Gold, Sangkat<br/>Tumnub Terk, Khan Chamkarmon,<br/>Phnom Penh</p>
            </div>
        </div>
    </div>
</div>
<!-- end contact detail section-->
<div class="container-fluid background-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <h3 class="styleh3">how can we help you?</h3><br>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 make-center">
                <p  >We love to hear from you! So leave us your inquiry and we will get back to you as soon as we got your message.</p>

            </div>
        </div>

        <div class="row makemargin">
            <form action="">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name*"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="email*"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone number*"/>
                        </div>
                    </div>
            </form>
        </div>

        <div class="row makemargin">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="description*"></textarea>
                </div>
            </div>
        </div>

        <div class="row makemargin">
            <div class="col-sm-12  make-center">
                <button class="btn btn-primary btn-bigger makeshadow-btn-send">
                    <b>Send</b>
                </button>
            </div>
        </div>
    </div>
</div>
@stop