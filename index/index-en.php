<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3c06a3258d.js" crossorigin="anonymous"></script>
    <!--Links-->
        <link rel="stylesheet" href="assets/CSS/style.css?ver=<?php echo date("YmdHis") ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="CSS/bootstrap.css">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="assets/image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="assets/image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#fbe101">
        <meta name="msapplication-TileColor" content="#fbe101">
        <meta name="theme-color" content="#fbe101">
        <link rel="manifest" href="assets/img/favicon/manifest.json">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
          <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <title>Kerem Ünce Personal Web Site</title>
    <!--Meta-->  
    <meta name=description content="Ben Kerem Ünce, bu da benim kişisel web sitem!">
    <meta name=keywords content="Kerem Ünce,Web,Tasarım,Kişisel Web Sitesi,Kerem Unce">
    <meta name=author content="Kerem Ünce">
    <meta http-equiv=Content-Language content=tr>
    <meta name=robots content="index, follow"/>
    <meta name=theme-color content="#fbe101">
    <meta name=msapplication-navbutton-color content="#fbe101">
    <meta name=apple-mobile-web-app-capable content=yes>
    <meta name=apple-mobile-web-app-status-bar-style content="#fbe101">
    
</head>

<body class="bg-blackcolor">

<header class="header-seciton" id="home">
            <!--Navbar-->
                <nav class="row navbar fixed-top navbar-expand-lg navbar-light p-md-3 rounded-3" >
                    <div class="container" >
                        <div class="navbar-header">
                           
                            
                                <button
                                    type="button"
                                    class="navbar-toggler  border border-dark position-absolute"
                                    data-target="#navbarNav"
                                    data-toggle="collapse"
                                    aria-controls="#navbarNav"
                                    aria-expended="false"
                                    aria-lable="Toggle Navbar">
                                    <span class="navbar-toggler-icon "></span>
                                </button>
                                <div class="kerem">
                                    <a class="text-white navbar-brand font-weight-bolder content-zindex " href="#home">Kerem UNCE</a>
                                 </div>
                        </div> 
                                <div class="collapse navbar-collapse  " id="navbarNav">
                                    <div class="mx-auto"></div>
                                    <ul class="navbar-nav ">
                                        <li class="nav-item">
                                            <a href="#home"  id="div1" class="nav-link text-white ahover behance smooth-scroll">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#about" id="div2" class="nav-link text-white ahover behance smooth-scroll">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" id="div3" class="nav-link text-white ahover smooth-scroll">Contact</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="lang_link  ahover clr-pink" style="font-weight: bolder; " href="/index.php">TR</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="lang_link  ahover clr-pink" style="font-weight: bolder; "  href="/index-en.php">EN</a>
                                        </li>
                                    </ul>
                                </div>
                            
                        
                    </div>
                </nav>
        
            <!-- Banner Image-->
             
                    <div class="particles  w-100 vh-100 d-flex justify-content-center " >   
                            <!--particles.js container-->  <div id="particles-js" class="col-12 w-100 h-100 brightness"></div> 
                         <!--particles.js lib - https://github.com/VincentGarreau/particles.js-->  
                         <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
                         <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>


                        <!--Header TEXT  header-icons social-icon headertext 
                            <div class=" container position-absolute  " style="top:30%;">
                                <div class="img w-75 mx-auto" >
                                    <a href="#home"><img class="w-100" src="/img/Untitled-2.png" ></a>
                                </div>
                                
                                <div class="content-zindex w-100 d-flex justify-content-center">
                                    <a href="https://github.com/Keremunce/Keremunce"  target="_blank">
                                        <i class="fa  fa-github iconh  content-zindex " id="githubicon" ></i>
                                    </a>

                                    <h3 class="text-light w-50 text-center " style="font-size:1.5rem;">Frontend Development/UI Designer</h3>

                                    <a href="https://www.linkedin.com/in/keremunce/"  target=_blank>
                                        <i class="fa  content-zindex iconh fa-linkedin " ></i>
                                    </a>
                                </div>
                            </div>--> 
                            <!--Header TEXT  header-icons social-icon headertext --> 
                            <div class=" container position-absolute  " style="top:30%;">
                                <div class="img w-75 mx-auto" >
                                    <a href="#home"><img class="w-100" src="assets/img/Untitled-2.png" ></a>
                                </div>
                                
                                <div class="content-header w-100 d-flex justify-content-center">
                                    <a href="https://github.com/Keremunce/Keremunce"  target=_blank>
                                        <i class="fa  fa-github iconh  content-header w-25" id="githubicon" ></i>
                                    </a>

                                    <h3 class="text-light w-50 text-center " style="font-size:1.5rem;">Frontend Development/UI Designer</h3>

                                    <a href="https://www.linkedin.com/in/keremunce/"  target=_blank>
                                        <i class="fa  content-header iconh fa-linkedin w-25" ></i>
                                    </a>
                                </div>
                            </div>



                        <!--DDArrow-->
                            <div class="position-absolute  " style="top:85%;">
                                <a href="#about" class="behance smooth-scroll">
                                    <i class="fa fa-angle-double-down  bounce color-fbe text-center content-zindex"  aria-hidden=true></i>
                                </a>
                            </div>
                    </div>

</header>

<div id="about"></div>
<!----------------------Main Content Area-------------------->
<section class="about-section fix   text-white">
<!--POPUP-->
    <div class="popup  " id="popup-1">
                <div class="overlay"></div>

                    <div class="content1 ">
                        
                        <div class="container   ">
                        <!-------FORM------------------------------->
                            
                                <form class="needs-validation form-inline" action="" method="post" id="form">
                                    <!-- <div class="close-btn" onclick="togglePopup()">&times;</div> -->
                                        <div class="contact-form">  
                                          <h1 class="text-dark">Contact Me</h1>
                                          <div id="sonuc"></div>
                                            <div class="txtb">  
                                            <label for="">Full Name:</label>
                                              <input type="text" id="isim" name="adsoyad" placeholder="Enter Your Name">
                                              <div id="isim-uyari"></div>
                                            </div>
                                            
                                             <div class="txtb">  
                                            <label for="">Email:</label>
                                              <input type="text" id="eposta" name="email" placeholder="Enter Your Email" id="eposta">
                                              <div id="eposta-uyari"></div>
                                              </div>
                                            
                                             <div class="txtb">  
                                            <label for="">Message:</label>
                                              <textarea name="mesaj" id="mesaj"></textarea>
                                              <div id="mesaj-uyari"></div>
                                            </div>
                                            <a class="btn btn-primary" id="button">Bana Ulaş</a>
                                        </div>
                                    <!-- <button type="button" onclick="gonder();" class="btn btn-primary">Bana Ulaş</button> -->

                                </form>
                                <script src="assets/JS/mail.js?ver=<?php echo date("YmdHis"); ?>"></script>

                        <!-------------------------------------->
                        </div>
                    </div>
                    <div id="paperDiv" class="">
                        <a onclick="togglePopup()" ><i class="fas fa-paper-plane m-4  fixed-bottom " ></i></a>
                    </div>

    </div>

       
<!--MAIN CONTENT-->    
   <div class="hakkinda-container">
            <div class="hakkinda reveal">
                <h1>About Me</h1>
                <p>I was born on December 19, 2004, in Istanbul. After completing my primary education in Istanbul/Pendik, I entered Pendik Türk Telekom Vocational and Technical High School and started my high school life.  I met C# in high school but then I saw myself more suitable for the frontend part.  As taught in school, I have Photoshop and Animate knowledge at a level that can do my job. I have an intermediate (B1) level of English that I developed from TV series and games. </p>
            </div><!--hakkinda-->
            <div class="hakkinda-img revealup">
                <div><img src="/img/html5.png"></div>
            </div><!--hakkinda-img-->
    </div><!--hakkinda-container-->


       <div class="html-css-container">
            <div class="html-css-img revealup">
                <img src="/img/css3.png">
            </div>
            <div class="html-css reveal">
                <h1>HTML&CSS</h1>
                <p>I define myself as HTML&CSS, I practice more in these languages in general and it is really enjoyable to write and design. I am happier to see the colors and animations that I designed and designed beautiful things, so I did not choose the backend when choosing a career path. I am happy with my decision and seeing my development makes me happy. </p>
            </div><!--html-css-->
    </div><!--html-css-container-->
        

    <div class="js-vue-container">
            <div class="js-img reveal ">
                <img  src="/img/js-logo.png">
            </div>
            <div class="js-vue revealdown ">
                <h1>Javascript Vue.js</h1>
                <p>Of course, the language that a Frontend should definitely and predominantly know is Javascript. Frankly, I don't have as much practice and experience in Javascript as in HTML&CSS, for now, I'm building static websites and I have an internship year ahead of me. After this project, my goal will be to start learning and practicing Vue.js without wasting time.</p>
                
            </div><!--js-vue-->
            <div class="vue-img ">
                <img src="/img/vuejs.png " class="revealright">
            </div><!--vue-img-->
    </div><!--js-veu-container-->


    <div class="bilgi-container">
            <div>
                <h1>What kind of person I am?</h1>
                <p>I'm open to every bit of information, I would surf the internet all day if I had time. Experiencing different things, places, seeing, and traveling. I want to spread what I have learned to people I can reach. Why do I want to do this, because I like to feel helpful and help. Apart from that, I am a personality who takes initiative, loves to <b>explore</b> and <b>research</b>, and enjoys it. </p>
                
            </div>
            
    </div>
    <script type="text/javascript">
        // SCROLL REVEAL
        window.addEventListener('scroll', reveal);


            function reveal(){
              var reveals = document.querySelectorAll(".reveal, .revealright, .revealup, .revealdown");

              for(var i = 0; i < reveals.length; i++){

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windowheight - revealpoint){
                  reveals[i].classList.add('active');
                }
                else{
                  reveals[i].classList.remove('active');
                }
              }
            }
    </script>
<!------END----------------------------MAIN CONTENT------------>   
               
<!----------------------------------GOTO BUTTON------------>                

                            <a href="#" id="scroll" ><span></span></a>


                                <script type="text/javascript">
                                $(document).ready(function(){ 
                                    $(window).scroll(function(){ 
                                        if ($(this).scrollTop() > 100) { 
                                            $('#scroll').fadeIn(); 
                                        } else { 
                                            $('#scroll').fadeOut(); 
                                        } 
                                    }); 
                                    $('#scroll').click(function(){ 
                                        $("html, body").animate({ scrollTop: 0 }, auto); 
                                        return false; 
                                    }); 
                                });

                            </script>
<!-------END---------------------------GOTO BUTTON------------> 

             

<!----------------------------------Projects------------>  
    <div class="container ">
        <span class="btndiv projectstext"><h2>Projeler</h2></span>

    <div id=" slider">  
        <div class="slides w-100">  
          <img src="assets/img/TICTAC.png" width="100%" style="max-height: 35rem; position: relative;" /> 
          <div class="btndiv">
                <a href="assets/Projects/JS-TIC-TAC-game/index.html" target="_blank" ><button class="neon-button " >>See More..</button></a>        
          </div>
         </div>
          
          <div class="slides w-100">  
          <img src="assets/img/typing.png" width="100%"style="max-height: 35rem; position: relative;" />
          <div class="btndiv">
                <a href="assets/Projects/Typing_Game/index.html"target="_blank" ><button class="neon-button  " >>See More..</button></a>   
            </div>
        </div>
          
          <div class="slides w-100">  
          <img src="assets/img/ecommerce.png" width="100%"style="max-height: 35rem; position: relative;" />
            <div class="btndiv ">
                <a ><button class="neon-button" style="cursor: not-allowed;">>Coming Soon..</button></a>   
            </div>

        </div>   
          <div id="dot">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            
        </div>
    </div>
    </div>
    <script type="text/javascript">
            var index = 0;
        var slides = document.querySelectorAll(".slides");
        var dot = document.querySelectorAll(".dot");

        function changeSlide(){

          if(index<0){
            index = slides.length-1;
          }
          
          if(index>slides.length-1){
            index = 0;
          }
          
          for(let i=0;i<slides.length;i++){
            slides[i].style.display = "none";
            dot[i].classList.remove("active1");
          }
          
          slides[index].style.display= "block";
          dot[index].classList.add("active1");
          
          index++;
          
          setTimeout(changeSlide,2000);
          
        }

        changeSlide();

    </script>
          


<!-----END-----------------------------Projects------------>                

</section>

<!-- Footer -->
<footer>
  <!-- Footer Text -->
    <div class="footer-contaier" id="contact">

          <!-- Grid column -->
       <!--  <div class="ismail-hakkinda">
            <div>
                <p >Yaklaşık 5-6 günlük sürede HTML,CSS,BS kullanarak statik bir websitesi yapmaya çalıştım ben kendimce amacıma ulaştım.Bundan sonraki amacım tasarımımı geliştirmek ve Vue.js öğrenip bildiklerimi pekiştirmek adına yeni bir projeye başlamak.Backend için yardım eden <a href="https://www.linkedin.com/in/ismailcankaratas/">İsmail Can Karataş</a>'a teşekkürler.</p>
            </div>
        </div> -->
     
    </div>
  
    <div class="content-zindex">
      <!-- Copyright -->
      <div class="footer-copyright text-center text-secondary py-3">© 2021 | Keremunce@hotmail.com | +905394829004 | Tüm hakları saklıdır.
      </div>
      <div class="footer-copyright text-center text-secondary py-3"><a href="assets/MAIN/PP.html" class="text-secondary">Privacy Policy </a>|<a class="text-secondary" href="assets/MAIN/KK.html"> Terms of Use 
 </a>|<a class="text-secondary" href="assets/MAIN/Cookies.html"> Cookies</a>
      </div>
      <!-- Copyright -->
    </div>

</footer>
<!-- Footer -->
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<script>
    $(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});
</script>
      
        

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer="defer"></script>
    <script  src="https://www.googletagmanager.com/gtag/js?id=UA-89294946-1" defer="defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer="defer"></script>
    <!--BS.js CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous" defer="defer"></script>
    <!--BS&jQuery CDN-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer="defer"></script>        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer="defer"></script>
    <!--LOCAL DOCS-->
    <script  src="assets/JS/form.js?ver=<?php echo date("YmdHis") ?>"></script>
    <script  src="assets/JS/script.js?ver=<?php echo date("YmdHis") ?>" ></script>
<!--     <script src="/JS/jQuery-3.6.0.min.js" ></script>
   <script src="/JS/bootstrap.js" ></script>-->  

</body>

</html>