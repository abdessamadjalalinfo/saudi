<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>User profile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="User-profile.css" media="screen">
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
    <meta name="twitter:title" content="User profile">
    <meta name="twitter:description" content="MAHFOUD">
    <meta property="og:title" content="User profile">
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
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" href="{{route('profile')}}" style="padding: 10px 0px;">Profile</a>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2"  href="{{route('uploadcontent')}}"  style="padding: 10px 0px;">Upload Contant</a>
  </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-2" href="Admin-Panel.html" style="padding: 10px 0px;">Admin Panel</a>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('uploadcontent')}}" style="padding: 10px 0px;">Upload Contant</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin-Panel.html" style="padding: 10px 0px;">Admin Panel</a>
</li></ul>
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
   </form></header>
    <section class="u-clearfix u-white u-section-1" id="sec-f0a0">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-container-style u-custom-color-3 u-layout-cell u-size-18 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-66bb"></use></svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-66bb" style="enable-background:new 0 0 55 55;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.519,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.345-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z M42.459,48.132c-0.35,0.254-0.706,0.5-1.067,0.735
	c-0.166,0.108-0.331,0.216-0.5,0.321c-0.472,0.292-0.952,0.57-1.442,0.83c-0.108,0.057-0.217,0.111-0.326,0.167
	c-1.126,0.577-2.291,1.073-3.488,1.476c-0.042,0.014-0.084,0.029-0.127,0.043c-0.627,0.208-1.262,0.393-1.904,0.552
	c-0.002,0-0.004,0.001-0.006,0.001c-0.648,0.16-1.304,0.293-1.964,0.402c-0.018,0.003-0.036,0.007-0.054,0.01
	c-0.621,0.101-1.247,0.174-1.875,0.229c-0.111,0.01-0.222,0.017-0.334,0.025C28.751,52.97,28.127,53,27.5,53
	c-0.634,0-1.266-0.031-1.895-0.078c-0.109-0.008-0.218-0.015-0.326-0.025c-0.634-0.056-1.265-0.131-1.89-0.233
	c-0.028-0.005-0.056-0.01-0.084-0.015c-1.322-0.221-2.623-0.546-3.89-0.971c-0.039-0.013-0.079-0.027-0.118-0.04
	c-0.629-0.214-1.251-0.451-1.862-0.713c-0.004-0.002-0.009-0.004-0.013-0.006c-0.578-0.249-1.145-0.525-1.705-0.816
	c-0.073-0.038-0.147-0.074-0.219-0.113c-0.511-0.273-1.011-0.568-1.504-0.876c-0.146-0.092-0.291-0.185-0.435-0.279
	c-0.454-0.297-0.902-0.606-1.338-0.933c-0.045-0.034-0.088-0.07-0.133-0.104c0.032-0.018,0.064-0.036,0.096-0.054l7.907-4.313
	c1.36-0.742,2.205-2.165,2.205-3.714l-0.001-3.602l-0.23-0.278c-0.022-0.025-2.184-2.655-3.001-6.216l-0.091-0.396l-0.341-0.221
	c-0.481-0.311-0.769-0.831-0.769-1.392v-3.545c0-0.465,0.197-0.898,0.557-1.223l0.33-0.298v-5.57l-0.009-0.131
	c-0.003-0.024-0.298-2.429,1.396-4.36C21.583,10.837,24.061,10,27.5,10c3.426,0,5.896,0.83,7.346,2.466
	c1.692,1.911,1.415,4.361,1.413,4.381l-0.009,5.701l0.33,0.298c0.359,0.324,0.557,0.758,0.557,1.223v3.545
	c0,0.713-0.485,1.36-1.181,1.575l-0.497,0.153l-0.16,0.495c-0.59,1.833-1.43,3.526-2.496,5.032c-0.262,0.37-0.517,0.698-0.736,0.949
	l-0.248,0.283V39.8c0,1.612,0.896,3.062,2.338,3.782l8.467,4.233c0.054,0.027,0.107,0.055,0.16,0.083
	C42.677,47.979,42.567,48.054,42.459,48.132z"></path></svg></span>
                  <p class="u-align-center u-large-text u-text u-text-variant u-text-1">Saleh Almadni&nbsp;</p>
                  <p class="u-align-center u-large-text u-text u-text-variant u-text-2">Admin&nbsp;</p>
                  <p class="u-text u-text-default u-text-3">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-dialog-link u-hover-none u-none u-text-white u-btn-1" href="#ChPass"><span class="u-dialog-link u-file-icon u-icon u-text-white u-icon-2" data-href="#ChPass"><img src="images/3.png" alt=""></span>&nbsp;Change Password
                    </a>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-42 u-layout-cell-2">
                <div class="u-border-2 u-border-custom-color-9 u-container-layout u-container-layout-2">
                  <h2 class="u-align-center u-subtitle u-text u-text-4">Information</h2>
                  <div class="u-align-center u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                  <p class="u-align-center u-large-text u-text u-text-variant u-text-5">Email</p>
                  <p class="u-align-center u-large-text u-text u-text-variant u-text-6">Phone</p>
                  <p class="u-align-center u-large-text u-text u-text-variant u-text-7">ID</p>
                  <p class="u-align-center u-small-text u-text u-text-palette-5-dark-2 u-text-variant u-text-8">{{$user->phone}}</p>
                  <p class="u-align-center u-small-text u-text u-text-palette-5-dark-2 u-text-variant u-text-9">{{$user->email}}</p>
                  <p class="u-align-center u-small-text u-text u-text-palette-5-dark-2 u-text-variant u-text-10">{{$user->id}}</p>
                  
                  <div class="u-align-left u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-line-2"></div>
                  <img class="u-expanded-width-lg u-expanded-width-md u-image u-image-default u-image-1" src="images/background.png" data-image-width="793" data-image-height="563">
                  
                </div>
              </div>
            </div>
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
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-40 u-valign-middle u-section-4" id="ChPass">
      <div class="u-align-center u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <div class="u-form u-form-1">
            <form action="#" method="POST" class="u-clearfix u-form-spacing-4 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
              <div class="u-form-group">
                <label for="name-4e1b" class="u-label">Current password</label>
                <input type="text" placeholder="Enter your Name" id="name-4e1b" name="CurPass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-28 u-white" required="required">
              </div>
              <div class="u-form-group">
                <label for="email-4e1b" class="u-label">New Password</label>
                <input type="text" placeholder="Enter you new Password" id="email-4e1b" name="Npass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-28 u-white" required="required">
              </div>
              <div class="u-form-group">
                <label for="text-5448" class="u-label">Confirm NewPassword</label>
                <input type="text" placeholder="Enter new Password Again" id="text-5448" name="ConNpass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-28 u-white" required="required">
              </div>
              <div class="u-align-right u-form-group u-form-submit">
                <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-50 u-btn-1">Submit</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success">Your Password has been updated successfully!</div>
              <div class="u-form-send-error u-form-send-message">Unable to update your Password. Please fix errors then try again.</div>
              <input type="hidden" value="" name="recaptchaResponse">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style> .u-section-4 {
  min-height: 858px;
}

.u-section-4 .u-dialog-1 {
  width: 623px;
  min-height: 330px;
  margin: 60px auto;
}

.u-section-4 .u-container-layout-1 {
  padding: 20px 30px;
}

.u-section-4 .u-form-1 {
  height: 221px;
  width: 563px;
  margin: 0 auto;
}

.u-section-4 .u-btn-1 {
  background-image: none;
  border-style: none;
}

.u-section-4 .u-icon-1 {
  width: 20px;
  height: 20px;
}

@media (max-width: 1199px) {
  .u-section-4 .u-dialog-1 {
    height: auto;
  }
}

@media (max-width: 767px) {
  .u-section-4 .u-dialog-1 {
    width: 540px;
  }

  .u-section-4 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-section-4 .u-form-1 {
    width: 520px;
  }
}

@media (max-width: 575px) {
  .u-section-4 .u-dialog-1 {
    width: 340px;
  }

  .u-section-4 .u-form-1 {
    width: 320px;
  }
}</style></body>
</html>