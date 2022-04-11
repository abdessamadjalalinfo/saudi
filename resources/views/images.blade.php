<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>View Media</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="View-Media.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "MAHFOUD",
		"sameAs": [
				"https://www.instagram.com/",
				"https://twitter.com/",
				"mailto:mahfoud.iau@gmail.com?subject=website",
				"tel:0550000000"
		]
}</script>
    <meta name="theme-color" content="#ef997a">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="View Media">
    <meta name="twitter:description" content="MAHFOUD">
    <meta property="og:title" content="View Media">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-image u-valign-middle u-header" id="sec-b82e" data-image-width="750" data-image-height="375"><div class="u-custom-color-3 u-expanded-width u-opacity u-opacity-20 u-shape u-shape-rectangle u-shape-1"></div><nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="NAV" data-responsive-from="MD">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
          <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-23 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" href="{{route('dashboard')}}" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" style="padding: 10px 0px;">Categories</a><div class="u-nav-popup">
    <ul class="u-h-spacing-31 u-nav u-unstyled u-v-spacing-6 u-nav-2">
        @foreach($categories as $categorie)
<li class="u-nav-item"><a href="{{route('categorie',$categorie->id)}}" class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link u-text-hover-custom-color-2">{{$categorie->name}}</a>
</li>
@endforeach
</ul>


</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" href="{{route('profile')}}"  style="padding: 10px 0px;">Profile</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2"  href="{{route('uploadcontent')}}" style="padding: 10px 0px;">Upload Contant</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" href="{{route('admin')}}" style="padding: 10px 0px;">Admin Panel</a>
</li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 0px;">Categories</a><div class="u-nav-popup"><ul class="u-h-spacing-31 u-nav u-unstyled u-v-spacing-6 u-nav-5"><li class="u-nav-item"><a class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link">Articles</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link" href="View-Category.html">Books</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link">Certificates</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link">Letters</a><div class="u-nav-popup"><ul class="u-h-spacing-31 u-nav u-unstyled u-v-spacing-6 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link">Cover letters</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-8 u-hover-custom-color-3 u-nav-link">Presentation</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="User-profile.html" style="padding: 10px 0px;">Profile</a>
</li>@if(Auth::user()->role_id==1)
<li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" href="{{route('uploadcontent')}}"  style="padding: 10px 0px;">Upload Contant</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2"href="{{route('admin')}}" style="padding: 10px 0px;">Admin Panel</a>
</li>
@endif</ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    
      <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
    <span class="u-file-icon u-hover-feature u-icon u-text-black u-icon-1" data-href="https://google.com"><img src="images/1.png" alt=""></span><span class="u-file-icon u-hover-feature u-icon u-icon-rectangle u-text-black u-icon-2" data-href="614619716"><img src="images/2.png" alt=""> 
       
   </a>
  
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form></span></header>
    <section class="u-clearfix u-white u-section-1" id="sec-2654">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-georgia u-subtitle u-text u-text-default u-text-1">Images</h2>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($images as $image)
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h3 class="u-custom-font u-custom-item u-font-roboto-slab u-text u-text-default u-text-2">{{$image->name}}</h3>
                <div class="u-border-4 u-border-custom-color-2 u-line u-line-horizontal u-opacity u-opacity-70 u-line-1"></div>
                <div class="u-custom-color-3 u-radius-10 u-shape u-shape-round u-shape-1"></div>
               
                  <img class="u-image u-image-default u-image-1" src="{{$image->path}}" alt="">
                
                <a href="" class="u-border-2 u-border-custom-color-2 u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-custom-color-2 u-none u-radius-47 u-text-black u-btn-1">View</a>
              </div>
            </div>
            @endforeach
            
            
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-image u-footer" id="sec-1422" data-image-width="1920" data-image-height="573"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="Instgram" target="_blank" href="https://www.instagram.com/"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-text-custom-color-2 u-icon-1"><img src="images/5.png" alt=""></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/"><span class="u-file-icon u-icon u-social-icon u-social-twitter u-text-custom-color-2 u-icon-2"><img src="images/6.png" alt=""></span>
          </a>
          <a class="u-social-url" title="Email" target="_blank" href="mailto:mahfoud.iau@gmail.com?subject=website"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-text-custom-color-2 u-icon-3"><img src="images/7.png" alt=""></span>
          </a>
          <a class="u-social-url" title="phone" target="_blank" href="tel:0550000000"><span class="u-file-icon u-icon u-social-icon u-social-linkedin u-text-custom-color-2 u-icon-4"><img src="images/8.png" alt=""></span>
          </a>
        </div>
        <p class="u-custom-font u-font-roboto-slab u-text u-text-palette-5-dark-2 u-text-1"> ©2022 Imam Abdulrahman Bin Faisal University. All rights <span style="font-size: 0.8125rem;"></span>reserved.
        </p>
        <a href="https://www.iau.edu.sa/en" class="u-active-none u-border-2 u-border-palette-5-dark-2 u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-hover-palette-5-dark-1 u-text-palette-5-dark-2 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">IAU Website</a>
        <p class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-palette-5-dark-1 u-text-2">Contact us via</p>
      </div></footer>
    <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-85 u-palette-1-base u-spacing-13" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>