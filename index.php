<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/weblogo.ico" type="image/x-icon">
    <title>E-LEARNING LIBRARY</title>

    <link rel="stylesheet" href="style.css?v=<? echo time() ?>">
    <link rel="stylesheet" href="fonts.css?v=<? echo time() ?>">
    <link rel="stylesheet" href="style/logo.css">


    <script src="https://kit.fontawesome.com/6aee68dd4e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
</head>
<body>

    <header>
        <div class="container" id="myHeader">
            <nav>
                <a href="https://www.facebook.com/coe.plsp/" target="_blank"><img src="image/coe logo.jpg" alt="logo" class="logo"></a> 
                <ul class="tabs">
                    <li class="tab is-active">
                        <a data-switcher data-tab="1">Home</a>
                    </li>
                    <li class="tab">
                        <a data-switcher data-tab="2">Motivational</a>
                    </li>
                    <li class="tab">
                        <a data-switcher data-tab="3">Contact Us</a>
                    </li>
                    <li class="tab">
                        <a data-switcher data-tab="4">About Us</a>
                    </li>
                </ul>
            </nav>
        </div>



        <section class="pages">
            <div class="page is-active" data-page="1">
                <div class="search" >
                    <h1><span>COE</span> Online Library</h1>
                    <div id="bar">
                        <form action="search.php" method="post" class="searchbar"  enctype="multipart/form-data"  target= "_blank">
                            <input type="text" name="search" id="type" placeholder="Search Module" class="placeholder" >
                            <button type="submit"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: black;"></i></button>
                        </form>
                    </div>
                </div>
        
                <div class="allcourse">
                    <a href="secondPage.php">
                        <!-- <button>Explore More<i class="fa-solid fa-arrows-turn-right"></i></button> -->
                        <button>Explore More</button>
                    </a>
                </div>
        
                <div class="container1">
                    <p>PADAYON</p>
                </div>
                <div class="share-icon">
                    <a href="https://www.facebook.com" target="_blank" ><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.messenger.com" target="_blank" ><i class="fab fa-facebook-messenger fa-2x"></i></a>
                    <a href="https://www.instagram.com" target="_blank" ><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://www.twitter.com" target="_blank" ><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://twitter.com" target="_blank" ><i class="fa-brands fa-x-twitter fa-2x"></i></i></a>
                    <a href="https://www.discord.com" target="_blank" ><i class="fab fa-discord fa-2x"></i></a>
                </div>
        
                
        
                <div class="mission">
                    <div class="PVM">
                        <h1><span class="_vmp"></span></h1>
                        <div class="pvm-orig-box">
                            <div class="pvm-box">
                                <h2>PHILOSOPHY</h2>
                                <p>The school is deeply committed towards the integral formation of the human person, with a profound faith in God, in his fellow men and himself by providing its students the full development of their physical, intellectual, social and cultural endowment for effective participation in various professions and industrial occupations and to enable them to enjoy reasonable quality of life to be able to contribute to the upliftment of the human society.</p>
                            </div>
                            <div class="pvm-box">
                                <h2>VISION</h2>
                                <p>The school is a Center of Excellence upholding glocally-responsive education dedicated to transform lives and empower communities.</p>
                            </div>
                            <div class="pvm-box">
                                <h2>MISSION</h2>
                                <p>To strengthen and synergize instruction, research and extension, administration and student development creating a learning community that ensures the generation of God-loving and holistic graduates prepared for civic engagement and academic and life success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="coeVM">
                        <h1><span class="_vmp"></span></h1>
                        <div class="vison">
                            <div class="pvm-box">
                                <h2>VISION</h2>
                                <p>The College of Engineering is a Center of Development that is glocally competitive engineering center in Calabarzon.</p> 
                            </div>
                            <div class="pvm-box">
                                <h2>MISSION</h2>
                                <p>College of Engineering (CoE) prepares the learners to acquire quality education in the fields of engineering such as computing, industrial, electrical, electronics, and civil equipped with relevant balanced training and integrates engineering research with strong Filipino values for long-term employability, contributing to the country’s development goals and global economy.</p>
                            </div>
                         </div>
                    </div>
                </div>
        
                <div class="what">
                    <h1>E-LEARNING LIBRARY</h1>
                    <p>The E-Learning Library Evolution is a cutting-edge online platform meticulously crafted to serve as the central hub for learning materials, modules, and resources essential to the academic success of computer engineering students at the Pamantasan ng Lungsod ng San Pablo (PLSP). Driven by a strong commitment to user-centricity, the project aims to transform the educational experience by fostering collaboration, encouraging discovery, and promoting excellence within the field. Recognizing the increasing relevance of technology integration in reshaping educational paradigms, the platform underscores the pivotal role of digital repositories in enhancing learning outcomes. Specifically tailored to the unique needs of computer engineering students, the initiative strives to provide easy access to resources while creating an environment conducive to exploration and collaboration. By centralizing academic materials, the E-Learning Library Evolution seeks to empower students, cultivating a community of informed and inspired learners prepared to excel in the dynamic landscape of computer engineering. In essence, it stands as a beacon for redefining educational paradigms and advancing knowledge within PLSP's computer engineering domain. </p>
                </div>
        
        
                <div class="footer">
                    <p>&copy2023 Group1. All rights reserved.</p>
                </div>
            </div>



            <!-- MOTIVITIONAL -->
            <div class="page" data-page="2">
                <div id="motiv">
                    <h2><span>MOTIV</span>ATIONAL</h2>
                    <div class="slideshow-container">
                        <div class="mySlides"><q>Embrace challenges as opportunities for growth and success.</q><p class="author">- John Maxwell</p></div>
                        <div class="mySlides"><q>Your attitude determines your direction. Stay positive and reach for the stars.</q><p class="author">- Zig Ziglar</p></div>
                        <div class="mySlides"><q>Believe in yourself, for confidence is the foundation of all great achievements.</q><p class="author">- Ralph Waldo Emerson</p></div>
                        <div class="mySlides"><q>Every setback is a setup for a comeback. Rise stronger each time you fall.</q><p class="author">- Les Brown</p></div>
                        <div class="mySlides"><q>Success is not final, failure is not fatal: It's the courage to continue that counts.</q><p class="author">- Winston Churchill</p></div>
                        <div class="mySlides"><q>Seize the day! The only limits that exist are the ones you place on yourself.</q><p class="author">- Tony Robbins</p></div>
                        <div class="mySlides"><q>Dream big, work hard, stay focused, and surround yourself with good people.</q><p class="author">- T. D. Jakes</p></div>
                        <div class="mySlides"><q>The only way to do great work is to love what you do. Find your passion and pursue it relentlessly.</q><p class="author">- Steve Jobs</p></div>
                        <div class="mySlides"><q>Success is not just about making money; it's about making a difference.</q><p class="author">- Unknown</p></div>
                        <div class="mySlides"><q>Don't be afraid to fail; be afraid not to try. Mistakes are stepping stones to success.</q><p class="author">- Robert Kiyosaki</p></div>
                        <div class="mySlides"><q>Your time is limited, so don't waste it living someone else's life.</q><p class="author">- Oprah Winfrey</p></div>
                        <div class="mySlides"><q>Challenges are what make life interesting; overcoming them is what makes life meaningful.</q><p class="author">- Joshua J. Marine</p></div>
                        <div class="mySlides"><q>Your potential is endless. Don't limit yourself based on other people's limited imaginations.</q><p class="author">- Mae Jemison</p></div>
                        <div class="mySlides"><q>The only person you are destined to become is the person you decide to be.</q><p class="author">- Ralph Waldo Emerson</p></div>
                        <div class="mySlides"><q>You are never too old to set another goal or to dream a new dream.</q><p class="author">- C.S. Lewis</p></div>
                        <div class="mySlides"><q>Don't wait for the perfect moment; take the moment and make it perfect.</q><p class="author">- Unknown</p></div>
                        <div class="mySlides"><q>The future belongs to those who believe in the beauty of their dreams.</q><p class="author">- Eleanor Roosevelt</p></div>
                        <div class="mySlides"><q>Success is stumbling from failure to failure with no loss of enthusiasm.</q><p class="author">- Winston Churchill</p></div>
                        <div class="mySlides"><q>Life is 10% what happens to us and 90% how we react to it.</q><p class="author">- Charles R. Swindoll</p></div>
                        <div class="mySlides"><q>The only way to achieve the impossible is to believe it is possible.</q><p class="author">- Charles Kingsleigh (from Alice in Wonderland)</p></div>


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>

                    <div class="dot-container">
                        <span class="dot" onclick="currentSlide(1)"></span>
                    </div>

                    <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) { showSlides(slideIndex += n); }
                        function currentSlide(n) { showSlides(slideIndex = n); }

                        function showSlides(n) {
                        var i, slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) { slideIndex = 1; }
                        if (n < 1) { slideIndex = slides.length; }
                        for (i = 0; i < slides.length; i++) { slides[i].style.display = "none"; }
                        for (i = 0; i < dots.length; i++) { dots[i].className = dots[i].className.replace(" active", ""); }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        }
                    </script>
                 </div>
            </div>
                


            <!-- CONTACT US -->
            <div class="page" data-page="3">
                <div class="contact">
                  <h2><span>CONTACT</span> US</h2>
                    <form action="sendemail.php" method="post" enctype="multipart/form-data" name="contact-form">
                        <div class="half">
                            <div class="item">
                                <input type="text" id="name" name="name"> <label for="name">NAME</label>
                            </div>
                            <div class="item">
                                <input type="text" id="email" name="email"> <label for="email">EMAIL</label>
                            </div>
                        </div>
                        <div class="full">
                            <textarea id="message" name="message"></textarea> <label for="message">MESSAGE</label>
                        </div>
                        <div class="bottom">
                            <div class="upload">
                                <input type="file" id="file" name="file"> <label for="file">UPLOAD FILE</label>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="button" value="SEND MESSAGE">
                    </form>
                </div>
            </div>






    
            <!-- ABOUT US -->
            <div class="page" data-page="4">
                <div id="about">
                    <h2><span>ABOUT</span> US</h2>
                    <div class="container">
                        <div class="sub-container">
                            <div class="teams">
                                <img src="image\imgdp\josh.jpg" alt="">
                                <div class="name">Libunao, <br> Marc Joshua  A. </div>
                                <div class="desig">Researher</div>
                                <div class="about">March 25, 2003 <br>Brgy. Sto. Cristo, Magcase Ville. <br><span>marcjoshuaalanislibunao@gmail.com</span> <br>“Don't sweat small stuff”</div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\jby.jpg" alt="">
                                <div class="name">Boguen, <br> Jby A.</div>
                                <div class="desig">Researher</div>
                                <div class="about">June 25,2002 <br>Brgy. Masiit, Calauan, Laguna <br><span>jbyboguen0410@gmail.com</span> <br>“Try and try, until you die”</div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\ace.jpg" alt="">
                                <div class="name">Lanuza, <br>John Ace O.</div>
                                <div class="desig">Researcher</div>
                                <div class="about">April 2, 2003 <br>Brgy. Barandal Calamba, Laguna <br><span>acelanuza5@gmail.com</span> <br>“Determine your priorities and focus on them.”</div>
                            </div>

                            <div class="teams">
                                <img src="image\imgdp\pablio.png" alt="">
                                <div class="name">Pablio, <br> Joshua T.</div>
                                <div class="desig">Researcher</div>
                                <div class="about">January 01, 2003 <br>Brgy. Sto. Cristo SPC Laguna <br><span>joshuapablio00@gmail.com </span><br>“Tuloy lang sa agos patungo sa parangap”</div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\berto.jpg" alt="">
                                <div class="name">Roberto,<br>Ferdinand Joseph A.</div>
                                <div class="desig">Researcher</div>
                                <div class="about">May 07,2001 <br>Soledad San Pablo city, Laguna <br><span>Cpe.roberto.ferdinandjoseph@gmail.com</span> <br><!-- "Sa una lang yan masakit bukas malandi kaa ulit" --> "ERROR"</div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\marag.jpg" alt="">
                                <div class="name">Marasigan,<br> Majaica Polline A.</div>
                                <div class="desig">Researcher</div>
                                <div class="about">February 06, 2003 <br>Brgy. Lusacan, Tiaong, Quezon <br><span>marasigan.majaicapolline@gmail.com</span> <br>“All things take time, <br>wait for it.”</div>
                            </div>

                            <div class="teams">
                                <img src="image\imgdp\maru.jpeg" alt="">
                                <div class="name">Melodillar,<br> Marco Russel C.</div>
                                <div class="desig">Researcher</div>
                                <div class="about">September 10, 2001 <br>Brgy. Mayondon Los Banos Laguna <br><span>melodillarmaru010@gmail.com </span> <br>“be the energy you want to attract”</div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\teri.jpg" alt="">
                                <div class="name">Basilio, <br>Teodorico N. III </div>
                                <div class="desig">Researcher</div>
                                <div class="about">September 15 2001 <br>Brgy. San Isidro Tiaong, Quezong <br><span>teribasilio@gmail.com </span> <br>Don't let anyone tell you that you can't do something.</div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\arevs.jpg" alt="">
                                <div class="name">Arevalo,<br> Christian Justine B.</div>
                                <div class="desig">Researcher</div>
                                <div class="about">March 23, 2003 <br>Santo Niño, SPC, Laguna <br> <span>cj.barevalo0123@outlook.com</span> <br>“But if you want me, I'm yours.”</div>
                            </div>

                            <div class="teams">
                                <img src="image\imgdp\louel.jpg" alt="">
                                <div class="name">Laydia, <br>Luoel M.</div>
                                <div class="desig">Leader/Researcher</div>
                                <div class="about">December 10, 2002 <br>Cabatang, Tiaong, Quezon <br> <span>luoellaydia01@gmail.com</span> <br>"Don't work hard, work smart"
                                </div>
                            </div>
            
                            <div class="teams">
                                <img src="image\imgdp\ayan.jpg" alt="">
                                <div class="name">Madrigallos,<br> Ryan Q.</div>
                                <div class="desig">Programmer</div>
                                <div class="about">January 13, 2003 <br> Bagong Anyo, Dolores Quezon <br> <span>quintomadrigallosryan@gmail.com</span> <br> "If The CODE Works, Don't TOUCH It</div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


    </header>
    <script src="main.js"></script>
    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

</body>
</html>