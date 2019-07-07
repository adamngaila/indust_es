<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Industrial | Energy Management</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Molten Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
	<script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/p5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/addons/p5.dom.min.js"></script>   
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	 <script src="lib/p5.speech.js"></script>
     
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.5/p5.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.5/addons/p5.dom.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
   <script src="../lib/p5.speech.js"></script>
   <script>

var ongea;
var energy;
//function preload(){
//energy = loadJSON("gemintroduction.json");
//}


function setup() {
  
  
  
  var ongea = new p5.Speech();
//  ongea.speak('habari za asubuhi naona kumekucha umeamka salama Adam Mwangaila? Adam my creator and father I love him so much he is the awesomest dude ever in the universe');
  let lang = navigator.language || 'en-US';
  let speechRec = new p5.SpeechRec(lang);
  //let continuous = true;
 // let interim = false;
 speechRec.onResult = showResult; // bind callback function to trigger when speech is recognized
speechRec.start(); // start listening
  speechRec.continuous = true; // do continuous recognition
  speechRec.onEnd= maliza;
//  ongea.speak(speechRec.resultString);
  //function maliza(){ speechRec.start();}
  function maliza(){ speechRec.start();} 
  speakbutton = createButton('Speak');
      speakbutton.position(20, 100);
      speakbutton.mousePressed(doSpeak);

  function doSpeak()
  {
   // ongea.interrupt = checkbox.elt.checked;
    ongea.speak('habari welcome to energy management expert system'); // debug printer for voice options
  }
  

function showResult()
{
  if(speechRec.resultValue){
    
 //   if(speechRec.resultString == 'what is energy management'){
   // var t = energy.INTRODUCTION[0];
    //  var a = energy.INTRODUCTION[1];
    //  var b = energy.INTRODUCTION[2];
    //  ongea.speak(t);
    //  ongea.speak(b);
    //  ongea.speak(a);
      
    
    
   // }
    
    if(speechRec.resultString == 'introduce yourself'){
 //  console.log(speechRec.resultString); 
    createP(speechRec.resultSring);
  ongea.speak('Greetings members of the panel. My name is project IE7-18-4. I am still under development process. I was created by Adam Mwangaila. an industrial engineering student from Coet. in department of mechanical and industrial engineering at. university of daressalaam with the great assistance from doctor Victoria Mahabi. I hope once I am finished I will provide a good help and assistance to the community especially on Industrial Energy management. Ooooohooooh! I am so excited. Thank you');// log the result
// createP(speechRec.resultString);
    }
  if(speechRec.resultString == 'how are you'){ createP(speechRec.resultString);
ongea.speak('I am very fine however I can not feel anything. You know what I mean ha ha ha ha. YOU are Such an Idiot am just a computer program');}        
    
   if(speechRec.resultString == 'who is idiot'){ createP(speechRec.resultString);
ongea.speak('hahahaha sense of humor, what do you want to talk about. What is in your mind');}        
    
  
  if(speechRec.resultString == 'tell us more about yourself'){ 
  ongea.speak('I am an expert system, which you can say I am artificial intelligence software that is capable of reasoning like energy management expert.I help to bring energy management expertise in the hands of those who are not experts and have no idea what energy management is in the industry. Studies shows one can save two percent up to 5 percent of production cost with proper energy management with tools like me.');
  ongea.speak('with me you dont need to go to shcool to get knowledge on energy management so as to solve enegry problems and decision making. I have knowledge base that consist of knowledge acquired from experts and literatures. I have an inference engine that my master Adam Mwangaila gave me that helps to manupulate knowledge base so I can perform energy and cost intensity analysis. Planning. Forecasting, auditing. I also explain things why they happens and how to deal with them. I have ability to learn things just like a human thanks to my master Adam Mwangaila  ');
 ongea.speak('I am a web based system with four section. first section involves consultancy where qustions concerning energy management can be asked and I answer them, second section involves data entry where energy data are entered in the database, third section involves monitoring and analysis and the fourth invloves decision support function where I can perform forecasting and planning. which one do you want to know more? ');
  
  }
   if(speechRec.resultString == 'how can you perform energy and cost intensity'){
     ongea.speak('Energy intensity and cost intensity are simply measurements units of performance. Meaning they guide you to know how you are performing interms of energy consuption and cost based on production volume. These quantities can be compared with previous ones and determine how you are performing. Energy intensity is the ratio of total energy consuption to number of units produced. Likewise cost intensity is the ratio of total energy cost to number of units produced. There are implications of these quantities but a better performance is when the ratio becomes smaller and smaller'); 
                 
     
     }
     if(speechRec.resultString == 'tell us about consultancy'){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    if(speechRec.resultString == 'i want to know about consultancy'){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    
    if(speechRec.resultString == 'what about consultancy '){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    if(speechRec.resultString == 'explain about consultancy '){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
    if(speechRec.resultString == 'explain consultancy '){
     ongea.speak('the basic explanation to that is compairing the situation when you go to visit and ask questions a doctor about your health or to asssk customer care in acertain company about the services or visiting your teacher to help you out with some questins. I act like your teacher or doctor or customer care to help you out with some questions about energy and energy management.That is how I perform consultancy.'); 
                 
     }
     if(speechRec.resultString == 'tell us about data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
    if(speechRec.resultString == 'how do you do data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
     if(speechRec.resultString == 'explain about data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
    if(speechRec.resultString == 'what about data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
    if(speechRec.resultString == 'how data entry'){
     ongea.speak('data entry involves feeding energy consumption data to the database through me where I first convert them into common unity that is gigajoule so as to have consistency in units befor storing the data to the database'); 
       
     }
  
  
  
}
  
  }
}
  

</script>
   </head>
   <body>
	      <script src="lib/p5.speech.js"></script>
      <div class="header-outs" id="header">
         <!--banner -->
         <div class="header-most-top">
            <div class="headder-nav-icon pagescrollfix">
               <div class="container-fluid">
                  <div class="nav-headder-top">
                     <!--//navigation section -->
                     <nav class="navbar navbar-expand-lg navbar-light pagescrollfix">
                        <div class="hedder-up">
                           <h1><a class="navbar-brand" href="index.html"><span class="fas fa-cogs"></span>Industry</a></h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                           <ul class="navbar-nav ">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                 <a href="consu.php" class="nav-link">Energy Data</a>
                              </li>
                              <li class="nav-item">
                                 <a href="index2.html" class="nav-link">Energy Monitoring</a>
                              </li>
                              <li class="nav-item">
                                 <a href="heat.php" class="nav-link">Decision Suport System</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
         </div>
         <!-- //Navigation -->
         <!-- Slideshow 4 -->
         <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Industrial Energy Management Expert System</h5>
                              <div class="bottom-info">
                                 <p>
                                    Using best approach to energy management
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Industrial Energy Management Expert System.
                              </h5>
                              <div class="bottom-info">
                                 <p>Aims at investigating how Expert system can be used to assist energy management in manufacturing industries.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Industrial Energy Management Expert System</h5>
                              <div class="bottom-info">
                                 <p>Involves judicial and effective use of energy to maximize profit.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>

      <section class="fun-facts py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
         <div class="row">
            <div class="col-lg-4 funt-list-grids">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-4 funt-agile-grids text-right">
                     <h6>01</h6>
                  </div>
                  <div class="col-md-8 col-sm-8 col-8 funt-agile-text text-left">
                     <h4 class="mb-3">Energy management activities</h4>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 funt-list-grids">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-4 funt-agile-grids text-right">
                     <h6>02</h6>
                  </div>
                  <div class="col-md-8 col-sm-8 col-8 funt-agile-text text-left">
                     <h4 class="mb-3">Electric metering tariffs</h4>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 funt-list-grids">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-4 funt-agile-grids text-right">
                     <h6>03</h6>
                  </div>
                  <div class="col-md-8 col-sm-8 col-8 funt-agile-text text-left">
                     <h4 class="mb-3">Financial analysis</h4>
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
		 </div>
      </section>
      <!--//Fun-facts-->
      <!--services-->
      
      <!--Footer -->
      <section class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
         <div class="title text-center mb-lg-4 mb-md-3 mb-3">
            <h3>Energy Assisting Question</h3>
         </div>
         <div class="mt-lg-4 mt-3 address_mail_footer_grids">
            <div class="news-about-us">
               <form action="#" method="post">
                  <div class=" subscribe-form ">
                     <div class="form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Enter" required="">
                     </div>
                     <div class="text-center click-subscribe">
                        <button type="submit" class="btn click-me">Search</button>
                     </div>
                  </div>
               </form>
               <div class="info-sub-w3 text-center mt-lg-4 mt-3">
                  <h5>
                  </h5>
               </div>
            </div>
         </div>
		 </div>
	      
      </section>
      <section class="images-position-grid">
         <div class="container">
            <div class="row imgs-both-side">
               <div class="col-lg-6 col-md-6 col-sm-6 img-first-left">
                  <h5>Energy managing</h5>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 img-second-left">
                  <h5>Finicial Improment</h5>
               </div>
            </div>
         </div>
      </section>
      <footer class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">

         <div class="copy-agile-right text-center">
            
         </div>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working--> 
      <!--Nav script scrollon--> 
      <script>
         $(window).scroll(function() {
             if ($(document).scrollTop() > 150) {
                 $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
             } else {
                 $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
             }
         });
      </script>
      <!--//Nav script scrollon--> 
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true ,
         		nav:false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>

    <script src="sketch.js"></script>
    <script src="p5.speech.js"></script>
     <script src="p5.dom.js"></script>
     <script src="p5.sound.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->  
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1100,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
	  
   </body>
</html>
