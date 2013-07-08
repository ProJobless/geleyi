<!-- PRE-LOADER -->
<div id="preloader">
    <div class="back">
        <div class="white"></div>
        <div class="left"></div>
        <div class="right"></div>
    </div>

    <div class="line"></div>
</div>
<!-- // PRE-LOADER -->

<!-- HEADER -->
<header>
    <div class="logo">
        <a href="{{URL::to('/')}}"><img src="img/logo.png"></a>
    </div>
</header>

<div id="head-space"></div>
<!-- // HEADER -->


<!-- SLIDER -->
<section id="slider" class="inview">
    <div class="pattern"></div>
    <div class="text">
        <h1><span class="emp">SHOP</span> African Fashion. <span class="emp">MEET</span> Emerging Designers. <span class="emp">DISCOVER</span> Your Style.</h1>

        @if( isset($success_email) )
        <div class="msg success">
            <?php $emailDomain = explode('@', $success_email) ?>
            <h3>Thank you subscribing, please <a href="http://{{ $emailDomain[1] }}">check your email</a> now</h3>
        </div>

        @elseif( isset($error_msg))
        <div class="msg error">
            <h3>{{ $error_msg }}</h3>
        </div>

        @elseif( isset($feedback_sent))
        <div class="msg success">
            <h3>Thanks {{$feedback_sent['username'] }}! We will be contacting you soonest.</h3>
        </div>

        @elseif( isset($feedback_not_sent))
        <div class="msg error">
            <h3>{{ $$feedback_not_sent }}</h3>
        </div>

        @endif
    </div>

    <!-- PHOTOS -->
    <div class="photos">
        <div></div>
    </div>
    <!-- // PHOTOS -->

    <div id="just-scroll" class="white">
        <div>there's more... &#9786;</div>
    </div>
</section>
<!-- // SLIDER -->

