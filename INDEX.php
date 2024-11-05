 
<html>
   <head>  
      <title>Global Vision</title>
      <meta http-equiv="cache-control" content="no-cache" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="-1" />
      <meta name="keywords" content="Global Vision">
      <meta name="description" content="Global Vision">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0"> 
      <link href="css/animate.css" rel="stylesheet" type="text/css">
      <link href="css/root.css" rel="stylesheet" type="text/css"> 
      <link href="css/server-default.css" rel="stylesheet" type="text/css"> 
      <link rel="stylesheet" type="text/css" href="css/global-vision-corporate.css" media="all"> 
   </head>
   <body>
      <div>
         <div id="fullscreenId">
            
            <div class="signup bounceInUp animated">
               <div class="columnsTitle" style="text-align:center;padding-top:20px">
                  <span class="white-border-white-background-bubble bubble-padding italic-bold justify" style="color:#15BB39;text-transform:capitalize;">COMPANIES DIRECTORY</span>
               </div>
               <div class="signupIcon" id="signupIconId">
                  <table style="width:100%;display:initial;">
                     <tbody>
                        <tr>
                           <td>
                              <a href="https://global-vision.world">
                              </a>
                     </tbody>
                     </td></tr>
                  </table>
               </div>
              
               <div class="signupContainer white_box" id="signupContainerId">  
                  <div class="no-border-white-background-bubble max-width-static-minimal bubble-5mm-padding">
                     
                     <div class="italic-bold custom-top-margin-top">
                        <div class="custom-margin-bottom">
                           <div class="search-container">
                             <input type="text" class="search-input" id="searchInput" placeholder="Search Companies..." autocomplete="off">
                             <button class="voice-button" id="voiceButton"> 
                               <img src="img/search.png" style="height:20px;" alt="">
                             </button>
                           </div>
                        </div>
                         
                        <div class="custom-margin-bottom">
                           <div class="custom-body-whole">
                           <table class="styled-table">
                                 <thead>
                                    <tr>
                                          <th>Company   </th> 
                                          <th>Ranking  </th>
                                          <th>Stock Ticker </th> 
                                          <th>Industry</th>
                                          <th>Country</th> 
                                          <th>Phone</th> 
                                          <th>Corporate Website</th>  
                                         
 
                                    </tr>
                                 </thead>
                                 <tbody id="data-showing">  </tbody>
                              </table>
                           </div> 
                        </div>
                    
                        
                    </div>
                    
                  </div>
               </div>
            </div>
         </div>

       
         <div id="menu-navigator-payment">
         
        </div>
        <div id="bubble_navigator" class="fadeIn animated">
         <div class="bubble_navigator">        
            <div class="white-border-white-background-bubble float-left bubble-padding italic-bold justify" style="margin-bottom:50px;">
                <div class="gray-border-transparent-background-bubble bubble-padding italic-bold justify margin-top-bottom to-black-border-black-background" style="color:#15BB39;font-style:italic; padding: 11px 10px 11px 8px;" onmouseover="this.style.color='#15BB39';" onmouseout="this.style.color='#15BB39';" data-logname="MENU::hamburger-1-1" onclick="navigateToNewTabWithRootAndAnchorAttributes('INDEX.php');">COMPANIES DIRECTORY<img class="svg-right-navigator" src="https://global-vision.world/img/RightArrow17BC3AActiveBorderlessSVG.svg"><img class="svg-right-navigator" src="https://global-vision.world/img/RightArrowActiveBorderlessSVG.svg" alt="Right Arrow SVG"></div>
             
               </div>
         </div>
      </div>
      <script type="text/javascript">
         document.getElementById("menu-navigator-payment").addEventListener("click", function() {
            console.log("menu-navigator-payment")
            if(document.getElementById("bubble_navigator") && document.getElementById("bubble_navigator").style.display == "none") {
               document.getElementById("bubble_navigator").style.display = "block";
               
            } else if(document.getElementById("bubble_navigator") && document.getElementById("bubble_navigator").style.display == "block") {
               document.getElementById("bubble_navigator").style.display = "none";
   
            } else {
             if(document.getElementById("bubble_navigator")) {
               document.getElementById("bubble_navigator").style.display = "block";
             }
            }
         }, false);
         if(document.getElementById("bubble_navigator")) {
           document.getElementById("bubble_navigator").addEventListener("click", function() {
             console.log("buuble_navigator click")
             if(document.getElementById("bubble_navigator").style.display == "none") {
               document.getElementById("bubble_navigator").style.display = "block";
             } else if(document.getElementById("bubble_navigator").style.display == "block") {
               document.getElementById("bubble_navigator").style.display = "none";
             } else {
               document.getElementById("bubble_navigator").style.display = "block";
             }
           }, false);
         }

   
         function navigateToNewTabWithRootAndAnchorAttributes(targetRoot) {  
          
            window.open(targetRoot).focus();
         }
         function solutionproviders(targetRoot) {  
            window.open(targetRoot).focus();
         }
         function openprojects(targetRoot) {  
            window.open(targetRoot).focus();
         }
         
      </script>

      
    
        <style>
          .search-container {
                  display: flex;
                  align-items: center;
                  background-color: #fff;
                  border-radius: 25px;
                  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                  overflow: hidden;
               }
            .search-input {
               border: none;
               padding: 15px 20px;
               font-size: 16px;
               outline: none;
               flex: 1;
            }
            .voice-button {
               background-color: #fff;
               border: none;
               padding: 14px 15px;
               color: white;
               cursor: pointer;
               border-radius: 0 25px 25px 0;
               transition: background-color 0.3s;
            }
            .custom-body-whole{
               color: #ffffff;
               border: 0px solid #ffffff;
               background: #ffffff;
               padding: 11px 16px 11px 14px;
               border-radius: 28px;
               width: 552px;
            } 
      
      
         
         .project-header {
            text-transform: uppercase;
            font-weight: bold;
         }
         .project-body {
            margin-top: 8px;
             
         }
         .to-open-projects-border-black-background {
            background: #9BC141 !important; /* Initial background color */
            color: #fff; /* Corrected color to white */
         }

      .to-open-projects-border-black-background:hover {
         background: #000 !important; /* Change background to black on hover */
          color: #fff !important; /* Ensure text color stays white on hover */
         }
         .solution-provider-background {
         background: #15BB39 !important; /* Initial background color */
         color: #fff; /* Corrected color to white */
      }

      .solution-provider-background:hover {
         background: #000 !important; /* Change background to black on hover */
          color: #fff !important; /* Ensure text color stays white on hover */
         }

         .custom-margin-bottom{
            margin-bottom: 10px;
            width: 254px;
         }
         * {
         -webkit-transition:none !important;
         -moz-transition:none !important;
         -o-transition:none !important;
         transition:none !important;	
         }
         #menu-navigator-payment {
         height: 45px;
         width: 45px;
         position: fixed;
         /* left: calc(100vw - 110px); */
         left: 20px;
         top: 20px;
         border: 2px solid #ffffff;
         -webkit-border-radius: 28px;
         -moz-border-radius: 28px;
         border-radius: 28px;
         cursor: pointer;
         z-index: 1000;
         background: url(https://global-vision.world/img/RainbowGlobalVisionTransparentFavicon_rcsckh.avif);
         background-size: contain;
         border: 0px;  
         }
      
         .bordered {
         border: 2px solid #ffffff;
         -webkit-border-radius: 28px;
         -moz-border-radius: 28px;
         border-radius: 28px;
         font-family: 'Roboto Condensed';
         color: #000000;
         font-size: 16px;
         height: 45px !important;
         min-width: 45px !important;
         text-align: center;
         vertical-align: middle;
         }
         .navicon:hover {
         border: 2px solid #000000 !important;
         background-color: #000000;			
         }
         .navicon:hover {
         filter: brightness(10);
         }
 
            * {
            -webkit-overflow-scrolling: touch;
            -webkit-text-size-adjust:none;
            text-size-adjust:none;		
            }
          
            .testimonialsSubPageTitle {
            max-width: unset;
            }
            .button-sub-menu-main {
            margin-top: -10px;
            }
            .button-sub-menu-item {
            margin-top: -10px;
            }
            .no-border-transparent-background-bubble {
            color: #000000;
            border: 0px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            width: max-content;
            min-height: 32px !important;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            margin-bottom: 0px;
            display: inline-block;
            }
            .no-border-white-background-bubble {
            color: #fff;
            border: 0px solid #ffffff;
            /* background: #ffffff; */
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            width: max-content;
            min-height: 32px !important;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            margin-bottom: 0px;
            display: inline-block;
            }
            .white-border-white-background-bubble {
            color: #000000;
            border: 2px solid #ffffff;
            background: #ffffff;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            width: max-content;
            min-height: 32px !important;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            margin-bottom: 0px;
            display: inline-block;
            }
            .black-border-black-background-bubble {
            color: #ffffff;
            border: 2px solid #000000;
            background: #000000;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            width: max-content;
            min-height: 32px !important;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            margin-bottom: 0px;
            display: inline-block;
            }
            .white-border-transparent-background-bubble {
            color: #ffffff;
            border: 2px solid #ffffff;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            width: max-content;
            min-height: 32px !important;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            margin-bottom: 0px;
            display: inline-block;
            }
            .gray-border-transparent-background-bubble {
            color: #ffffff;
            border: 2px solid #d3d3d3;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            width: max-content;
            min-height: 32px !important;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            margin-bottom: 0px;
            display: inline-block;
            }
            .gray-border-transparent-background-bubble img {
            padding-right: 0px;
            margin-right: -3px;
            }
            .gray-border-transparent-background-bubble img:last-child {
            display: none;  
            }
            .gray-border-transparent-background-bubble:hover img:last-child {
            display: inline-block;  
            }
            .gray-border-transparent-background-bubble:hover img:first-child {
            display: none;  
            }
            .solution-provider-background:hover {
            cursor: pointer;
            color: #ffffff; 
            background: #000000;
            }
            .bubble-padding {
            /* padding: 7px 14px 7px 12px; */
            /* padding: 7px 14px 6px 12px; */
            padding: 11px 16px 11px 14px;
            }
            .bubble-padding-capital-letters {
            /* padding: 7px 14px 6px 12px; */
            padding: 11px 16px 11px 14px;
            }
            .block {
            display: block;
            }
            .justify {
            /* text-align: justify; */
            text-align: center;
            text-align-last: center;
            }
            .italic-bold {
            font-weight: bold;
            font-style: italic;
            }
            .margin-top-bottom {
            margin-top: 1mm;
            margin-bottom: 1mm;	
            }
            .margin-left-right {
            margin-left: 1mm;
            margin-right: 1mm;	
            }
            .margin-top-more-px-bottom {
            margin-top: 10px;
            }
            .margin-top-3px-bottom-7px {
            margin-top: 3px;
            margin-bottom: 7px;
            }
            .corporate-sub-menu-system-top {
            position: relative;
            top: 0px;
            left: 0px;
            display: block;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            min-height: 32px !important;
            border: 2px solid #d3d3d3;
            background: #ffffff;
            color: #000000;
            cursor: pointer;  
            text-align: center;
            z-index: 5;
            }
            .corporate-sub-menu-system-top:hover {
            color: #ffffff !important;
            border: 2px solid #000000 !important;
            background: #000000 !important;	
            }
            .corporate-sub-menu-system-sub {
            position: relative;
            top: 0px;
            left: 0px;
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            max-width: 254px; /* E.g. VW=490px SVG=52px SVG=52px */
            min-height: 32px !important;
            border: 2px solid #d3d3d3;
            background: #ffffff;
            color: #000000;
            cursor: pointer;
            margin: -2px 0px 0px 0px;
            margin-left: auto;
            margin-right: auto;
            display: inline-block;		
            }
            .corporate-sub-menu-system-sub:hover {
            border-color: #000000 !important;
            background: #000000 !important;
            color: #ffffff !important;
            z-index: 6;
            }
            .starsColumnsBorder {
            -webkit-border-radius: 28px;
            -moz-border-radius: 28px;
            border-radius: 28px;
            border: 2px solid #ffffff;	
            padding: 11px 16px 11px 14px;
            margin: 11px 1mm 11px 1mm;
            }
            .starsColumnsContainer {
            top: calc(30px + 2cm);
            }
            .naviconcontainer:hover {
            border: 2px solid #000000 !important;
            background-color: #000000;			
            }
            .navicon:hover {
            filter: brightness(10);
            }
            #reachSubMenuContainer {
            z-index:1000;
            width:100%;
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            height: 100%;
            display: none; 
            background: rgba(0,0,0,0.9);
            }
            img {
            vertical-align: middle;
            }
            .button-sub-menu-item {
            margin-top: -2px !important;
            }
            @supports (-webkit-touch-callout: none) {
            .no-border-transparent-background-bubble {
            max-width: calc(100vw - 104px - 4mm); /* E.g. VW=490px SVG=52px SVG=52px */
            }		
            .no-border-white-background-bubble {
            max-width: calc(100vw - 104px - 4mm); /* E.g. VW=490px SVG=52px SVG=52px */
            }		
            .white-border-white-background-bubble {
            max-width: calc(100vw - 104px - 4mm); /* E.g. VW=490px SVG=52px SVG=52px */
            }	
            .black-border-black-background-bubble {
            max-width: calc(100vw - 104px - 4mm); /* E.g. VW=490px SVG=52px SVG=52px */
            }
            .white-border-transparent-background-bubble {
            max-width: calc(100vw - 104px - 4mm); /* E.g. VW=490px SVG=52px SVG=52px */
            }
            .gray-border-transparent-background-bubble {
            max-width: calc(100vw - 104px - 4mm); /* E.g. VW=490px SVG=52px SVG=52px */		
            }
            .justify {
            text-align: center;
            }
            .white_box form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            }
            .white_box form input[type="button"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            }	
            .white_box form textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            }	
            *	{
            -webkit-text-size-adjust:none;
            text-size-adjust:none;
            }	
            }
            .float-left {
            max-width: calc(100vw - 120px);
            margin-left: 70px;
            }
            @supports (-webkit-overflow-scrolling: touch) { /* iPhone */
            .float-left {
            max-width: calc(100vw - 100px);
            margin-left: 0px;
            }
            }
            @supports not (-webkit-touch-callout: none) { /* Android */
            .float-left {
            max-width: calc(100vw - 100px);
            left: 0px;
            }
            @media only screen and (min-width: 700px) {
            .float-left {
            max-width: calc(100vw - 120px);
            }
            }
            @media only screen and (max-width: 360px) {
            .float-left {
            max-width: calc(100vw - 100px);
            }
            } 
            }
            /***********************************
            * GLOBAL OVERRIDING EVEN FOR iPHONE
            */
            .no-border-white-background-bubble {
            max-width: unset;
            } 
            @supports not (-webkit-touch-callout: none) {
            }
            @media only screen and (max-width: 1280px) {
            form textarea {
            width: calc(100vw - 165px);
            max-width: 234px;
            }
            }
            @media only screen and (max-width: 960px) {
            form textarea {
            width: calc(100vw - 165px);
            max-width: 234px;
            }
            }
            .custom-br {
            display: none;
            }
            @media only screen and (max-width: 610px) {
            .custom-br {
            display: inline;
            }
            }
            * {
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }
            input:focus,
            select:focus,
            textarea:focus,
            button:focus {
            outline: none;
            }
            #bubble_navigator {
            z-index: 999;
            position: fixed;
            top: 0px;
            left: -20px;
            right: 0px;
            height: 100%;
            width: calc(100vw + 20px);
            display: none;
            background: rgba(0,0,0,0.9);
            overflow-y: auto;
            overflow-x: hidden;
            }
            .bubble_navigator {
            z-index: 1200;
            position: absolute;
            left: 30px; /* 50%; */
            /* top: calc(67px + 2mm); */
            top: 79px; /* 20px; */
            /* transform: translate(-50%, 0%); */
            /* max-width: calc(100vw - 18px); */
            text-align: center;
            width: 100%;
            }
            @supports (-webkit-overflow-scrolling: touch) {
            .bubble_navigator {
            left: 40px;
            }
            }
            @supports not (-webkit-touch-callout: none) {
            .bubble_navigator {
            left: 30px;
            }  
            }
            .bubble-padding {
            padding: 11px 16px 11px 14px !important;
            }
            .margin-top-bottom {
            margin-left: 0.5mm !important;
            margin-right: 0.5mm !important;
            }
    
               @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700');
               
               .inlineLogoHtmlSpan {
                 font-family: 'Roboto Condensed';
                 font-size: 24px !important;
                 font-weight: bold;
                 /* display: inline-block; */
                 padding: 5px 10px 5px 10px;
                 white-space: nowrap;
                 background-color: rgba(255, 255, 255, 1.0);
                 border: 1px solid #d3d3d3;
                 border: 2px solid #ffffff;
                 -webkit-border-radius: 11.5px;
                 -moz-border-radius: 11.5px; 
                 height: 48px !important;
                 margin: 1mm 1mm 1mm 1mm;
               }
               a:link {
                 text-decoration: none;
               }
               
               a:visited {
                 text-decoration: none;
               }
               
               a:hover {
                 text-decoration: none;
               }
               
               a:active {
                 text-decoration: none;
               }
               .letter-letter-spacing-4-px {
                  letter-spacing: 4px;
               }
               .letter-letter-spacing-4-4-px {
                  letter-spacing: 4.4px;
               }
               .letter-letter-spacing-4-5-px {
                  letter-spacing: 4.5px;
               }
               .letter-letter-spacing-4-8-px {
                  letter-spacing: 4.8px;
               }
               .letter-letter-spacing-4-4-1-px {
                  letter-spacing:4.41px;
               }
               .margin-right-3-5-px {
                  margin-right:3.5px;
               }
               
               
               
               @-moz-document url-prefix() {
               .letter-letter-spacing-4-px {
                  letter-spacing: -1.2px;
               }
               .letter-letter-spacing-4-4-px {
                  letter-spacing: -1.0px;
               }
               .letter-letter-spacing-4-5-px {
                  letter-spacing: -1.2px;
               }
               .letter-letter-spacing-4-8-px {
                  letter-spacing: -0.2px;
               }
               .letter-letter-spacing-4-4-1-px {
                  letter-spacing: -1.4px;
               }
               .margin-right-3-5-px {
                  margin-right: -2.4px;
               }
               }
        
               #svg-up-navigator {
               display: block;
               right: unset;
               bottom: unset;
               top: 176px;
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a;
               }
               #svg-down-navigator {
               display: block;
               right: unset;
               bottom: unset;
               top: 218px;
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a;
               }
               #svg-right-navigator {
               display: block;
               right: unset;
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a; 
               }
               #svg-left-navigator {
               display: none;
               right: unset;
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a; 
               }
               #svg-learn-right-navigator {
               display: none;
               right: unset;
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a; 
               }
               #svg-learn-left-navigator {
               display: none;
               right: unset;
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a; 
               }
               #svg-back-navigator {
               display: block;
               right: unset;
               bottom: unset;
               top: 270px;  
               left: 35px;
               background-color: #97bf3a;
               border-color: #97bf3a;
               }
               #svg-close-navigator {
               display: block;
               height: 32px !important;
               width: 32px !important;
               position: fixed;
               background-color: #97bf3a;
               border: 2px solid #97bf3a;
               -webkit-border-radius: 28px;
               -moz-border-radius: 28px;
               border-radius: 28px;
               cursor: pointer;
               z-index: 1000;  
               top: 365px;
               left: 35px;
               }
               /* OVERRIDE CSS */
               #menu-navigator-payment {
               height: 45px;
               width: 45px;  
               top: 20px;
               left: 20px;
               animation-name: out;
               animation-duration: 0.7s;
               animation-iteration-count: 1;
               animation-direction: normal;
               animation-timing-function: linear;
               animation-fill-mode: forwards;  
               }
               #menu-navigator-payment:hover {
               /*
               height: 62px !important;
               width: 62px !important;
               top: 12px !important;
               left: 12px !important;
               */
               animation-name: in;
               animation-duration: 0.7s;
               animation-iteration-count: 1;
               animation-direction: normal;
               animation-timing-function: linear;
               animation-fill-mode: forwards;
               }
               @keyframes in {
               0% {
               height: 45px;
               top: 20px;
               width: 45px;
               left: 20px;
               }  
               100% {
               height: 62px;
               top: 12px;
               width: 62px;
               left: 12px;
               }
               }
               @keyframes out {
               0% {
               height: 62px;
               top: 12px;
               width: 62px;
               left: 12px;
               }  
               100% {
               height: 45px;
               top: 20px;
               width: 45px;
               left: 20px;
               }
               }
               #svg-close-navigator {
               left: 27px !important;
               }
               #svg-back-navigator {
               left: 27px !important;
               }
               #svg-down-navigator {
               left: 27px !important;
               }
               #svg-up-navigator {
               left: 27px !important;
               }
               #svg-right-navigator {
               left: 27px !important;
               }
               #svg-left-navigator {
               left: 27px !important;
               }
               #svg-learn-right-navigator {
               left: 27px !important;
               }
               #svg-learn-left-navigator {
               left: 27px !important;
               }
               .bubble-padding {
               padding: 11px 16px 11px 14px !important;
               }
               .margin-top-bottom {
               margin-left: 0.5mm !important;
               margin-right: 0.5mm !important;
               }
            </style>
            
    
      </div>
         
   </body>
 <script>
   function navigateToNewTabWithRootAndAnchorSubpageAttributes(page, root, anchor) {
    const url = `${page}`;
    window.open(url, '_blank');
}

 </script> 
         
   <style>
      .no-border-3e9721-background-bubble{
         font-size: 15px !important;
      }
   </style>
   <script src="js/vh-check.js"></script>
   <script src="js/heightMeasurement.js"></script>
   <?php include('appjs.php');?> 
</html>