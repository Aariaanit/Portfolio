
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WArianit Tershnjaku - Personal Portfolio Website Template" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="Arianit Tershnjaku" />
    <title>Arianit Tershnjaku - Personal Portfolio Website Template</title>
  <!--favicon-img--> 
   @include('includes/styles')
    <!--main css file-->
   
</head>
<body>
    <!--contains all the div-->
    <div id="all">
    <!--mouse  follower-->
        <div class="cursor"></div>
    <!--mouse  follower-->
    <!--loader-->
        <div id="loader">
            <span class="color">Bubu</span>Dudu
        </div>
    <!--loader-end-->
    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
    <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
            @include('includes/navbar')
        <!--Navigator-Fullscreen END-->
          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="{{ asset('assets/images/willy wonka logo.png') }}" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
            @include('includes/header')
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->
        <!--about-->
            @include('includes/about')
        <!--about end-->
        <!--portfolio-->
            @include('includes/portfolio')
        <!--portfolio end-->
        <!--blog-->
            @include('includes/blog')
        <!--blog end-->
        <!--contact-->
            @include('includes/contact')
        <!--contact end-->
    </div>
    <!--all the divisions-->
            @include('includes/scripts')

</body>
</html>