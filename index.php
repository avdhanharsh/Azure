<?php

// include 'components/connect.php';

?>
<!DOCTYPE html>
<html lang="en" style=" scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechEduca</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <link rel="stylesheet" href="style.css">
    <style>
        .course-cards:hover {
    transform: scale(1.03);
    }

    </style>
</head>

<body>
    <main>
        <div class="nav">
            <div class="nav-logo">
                <i class="ri-graduation-cap-fill"></i><h2>Tech <span>Educa</span></h2>
            </div>
            <div class="nav-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#course-head">Courses</a></li>
                <li><a href="#teachers">Teachers</a></li>
                <li><a href="#review">Feedback</a></li>
                <li><a href="#contact">Contact</a></li>


            </div>
            <div class="nav-but">
                <button onclick="popup('register-popup')">SignUP</button>
                <button onclick="popup('login-popup')">LoginUp</button>
                <i class="ri-menu-3-line"></i>
            </div>
        </div>

        <!-- home section  -->
        <div class="home" id="home">
            <div class="home-left">
                <img src="images/harsh.png" alt="">
            </div>
            <div class="home-right">
                <h1>Inspiration , Innovation and Discovery.</h1>
                <p>Any Successfull Career starts with good education.Together with us you will have direct knowledge of
                    the subjects that will be especially useful for you when climbing the carrer ladder</p>
                <!-- <button >Explore More</button> -->
                <a href="#about" class="exploremore">Explore More</a>
            </div>
        </div>

        <!-- about section  -->
        <div class="about" id="about">
            <div class="about-left">
                <img src="images/ab1.jpeg" alt="">
            </div>
            <div class="about-right">
                <h3>Welcome to TechEduca , Enhance your skills with best online courses</h3>
                <p>you can start and finish one of these popular courses in under a day - for free! check out the list
                    below.. Take the course for free</p>
                <div class="about-rightinfo">
                    <img src="images/ab2.jpeg" alt="" height="20%">
                    <div class="about-rightinforight">
                        <h4>400+ courses</h4>
                        <p>you can start and finish one of these popular courses in under our site</p>
                    </div>
                </div><br>
                <div class="about-rightinfo">
                    <img src="images/ab3.jpg" alt="">
                    <div class="about-rightinforight">
                        <h4>400+ courses</h4>
                        <p>you can start and finish one of these popular courses in under our site</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- features section  -->
        <div class="features">
            <h2>Awesome Features</h2>
            <p>We offer a range of awesome features that enhance the learning experience and make it more engaging and
                interactive</p>
            <div class="allfeature">
                <div class="featureinfo">
                    <i class="fas fa-award"></i>
                    <h3>Scholarship Facility</h3>
                    <p>One make creepath man bearing their firmanent won't great heaven</p>
                </div>

                <div class="featureinfo">
                    <i class="fas fa-award"></i>
                    <h3>Dell online Courses</h3>
                    <p>One make creepath man bearing their firmanent won't great heaven</p>
                </div>

                <div class="featureinfo">
                    <i class="fas fa-award"></i>
                    <h3>Global certification</h3>
                    <p>One make creepath man bearing their firmanent won't great heaven</p>
                </div>
            </div>
        </div><br>

        <!-- courese  -->

        <div id="course-head" >
            <h2>Popular Courses</h2>
           
        </div>

        <div class="courses">

        <div class="course-cards">
            <div class="course-img">
                <img src="images/c2.jpg" alt="">
            </div>
            <div class="course-body">
                <h4>Javascript Playlist</h4>
                <p>Javascript full playlist from scartch.</p>
            </div>
            <div class="course-footer">
                <h4>Price : &#8377; 3500</h4>
                <a href="#" onclick="popup('register-popup')">Enroll for free</a>
            </div>
        </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c3.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>Python Playlist</h4>
                    <p>Python full playlist from scartch.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#" onclick="popup('register-popup')">Enroll for free</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/react.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>React Playlist</h4>
                    <p>Learn reactjs with techeduca. This is one of beginner friendly reactjs series that will teach you foundation of reactjs by building projects in react.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#" onclick="popup('register-popup')">Enroll for free</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c5.png" alt="">
                </div>
                <div class="course-body">
                    <h4>Advance Java</h4>
                    <p>JDBC, Servlet and JSP Beginners....</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 2000</h4>
                    <a href="#" onclick="popup('register-popup')">Enroll for free</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c4.png" alt="">
                </div>
                <div class="course-body">
                    <h4>DBMS (Database Management system) Complete Playlist</h4>
                    <p>Complete Database management videos.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 2999</h4>
                    <a href="#" onclick="popup('register-popup')">Enroll for free</a>
                </div>
            </div>
        </div>

        <!-- Teachers   -->
        <div class="experts" id="teachers">
            <h2>Community Experts</h2>
        <!-- <div class="expertinfo">
            <div class="expert-card">
                <img src="images/g1.jpg" alt="">
                <h3>Dr. Ashma Aggarwal</h3>
                <p>Advance java</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g2.jpg" alt="">
                <h3>Mr. Marazban Kotwal</h3>
                <p>Data Structure</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g3.jpg" alt="">
                <h3>Dr. Prasita Mukherjee</h3>
                <p>Python</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g4.jpg" alt="">
                <h3>Mr. Kevin D'Cruz</h3>
                <p>DBMS</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g5.jpg" alt="">
                <h3>Mr. Piyush Bansal</h3>
                <p>IOT</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g6.jpg" alt="">
                <h3>Dr. Ashma Aggarwal</h3>
                <p>Advance java</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div> -->
<div class="tech-cards">

            <div class="wrapper">
                <div class="card front-face">
                   <img src="images/g1.jpg">
                   <h3>Dr. Ashma Aggarwal</h3>
                   <p>Advance java</p>
                </div>
                <div class="card back-face">
                   <img src="images/g1.jpg">
                   <div class="info">
                      <div class="title">
                        Dr. Ashma Aggarwal
                      </div><br>
                      <p>
                        Joined in 2015. MSC in Computer Science, MCP. 
                            Total teaching experience of 18 years.
                      </p>
                   </div>
                   <ul>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                   </ul>
                </div>
             </div>

             <div class="wrapper">
                <div class="card front-face">
                   <img src="images/g6.jpg">
                   <h3>Dr. Aarti Santosh Nayak</h3>
                   <p>Cyber Security</p>
                </div>
                <div class="card back-face">
                   <img src="images/g6.jpg">
                   <div class="info">
                      <div class="title">
                        Dr. Aarti Santosh Nayak
                      </div>
                      <p>
                        Joined in 2019 BE, Pursuing ME with one year of teaching experience.
                      </p>
                   </div>
                   <ul>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                   </ul>
                </div>
             </div>


             <div class="wrapper">
                <div class="card front-face">
                   <img src="images/g2.jpg">
                   <h3>Mr. Kevin D'Cruz</h3>
                   <p>DBMS</p>
                </div>
                <div class="card back-face">
                   <img src="images/g2.jpg">
                   <div class="info">
                      <div class="title">
                        Mr. Kevin D'Cruz
                      </div>
                      <p>
                        Joined in 2015. MCA 
                        Total Teaching experience of 20 years.
                      </p>
                   </div>
                   <ul>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                   </ul>
                </div>
             </div>


             <div class="wrapper">
                <div class="card front-face">
                   <img src="images/g3.jpg">
                   <h3>Dr. Abha Ashish Wankhede</h3>
                   <p>javascript Developer</p>
                </div>
                <div class="card back-face">
                   <img src="images/g3.jpg">
                   <div class="info">
                      <div class="title">
                        Dr. Abha Ashish Wankhede
                      </div>
                      <p>
                        Joined in 2019 BE, Pursuing ME with one year of teaching experience.
                      </p>
                   </div>
                   <ul>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                   </ul>
                </div>
             </div>


             <div class="wrapper">
                <div class="card front-face">
                   <img src="images/g4.jpg">
                   <h3>Mr. Marazban Kotwal</h3>
                   <p>Python</p>
                </div>
                <div class="card back-face">
                   <img src="images/g4.jpg">
                   <div class="info">
                      <div class="title">
                        Mr. Marazban Kotwal
                      </div>
                      <p>
                        Joined in 2016 Masters of Computer Application(MCA) with IT industry Experience
                      </p>
                   </div>
                   <ul>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                   </ul>
                </div>
             </div>


             <div class="wrapper">
                <div class="card front-face">
                   <img src="images/g5.jpg">
                   <h3>Mr. Piyush Bansal</h3>
                   <p>IOT</p>
                </div>
                <div class="card back-face">
                   <img src="images/g5.jpg">
                   <div class="info">
                      <div class="title">
                        Mr. Piyush Bansal
                      </div>
                      <p>
                        Joined in 2015 M.C.A. Total teaching experience of 10 years.
                      </p>
                   </div>
                   <ul>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                   </ul>
                </div>
             </div>


</div>

        </div>
        </div>

        <!-- reviews  -->
        <div class="review" id="review">
            <h2>Students Review</h2>
            <p>What are Students say about TechEduca</p>
            <div class="review-info">
                <div class="review-card">
                    <div class="profile">
                        <img src="images/review1.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Harsh Avadhan</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>All the faculty members in Techeduca are extremely supportive. All the concepts are well explained by the teachers. The mock tests which are conducted every Sunday are really helpful</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="profile">
                        <img src="images/review2.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Rohan Chavan</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>One need to have right support and teaching to succeed in any competitive exam. Techeduca has been an amazing platform for coaching as they provide favourable environment for studying, healthy competition between students and encouraging teachers.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="profile">
                        <img src="images/review3.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Ankita Shinde</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>Techeduca constant support, supervision and conducive environment were of paramount importance. The teachers were always approachable and willing to help. The healthy competition bring out best in me.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="profile">
                        <img src="images/review2.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Roshan Pawar</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>I would advise every student to join Techeduca. Best faculty here make you understand the most difficult topics in the easiest ways. Also the periodic tests help you to work on you weak areas and score well..</p>
                    </div>
                </div>

                <!-- <div class="more-review">
                    <a href="reviewdisplay.php"><i class="ri-arrow-right-double-fill"></i></a>
                </div> -->
            </div>
            <!-- <div class="add-review">
                <a href="#" onclick="popup('review-popup')">Add Review</a>
                <button type='button' onclick="popup('review-popup')" >Add</button>  
            </div> -->
        </div>

        <!-- contact  -->
        <!-- <div class="contact">
            <h2 class="first">Quick Contact</h2>            
            <div class="contact-info">
                <div class="contact-left">
                    <img src="images/contact.png" alt="">
                </div>
                <div class="contact-right">
                    <form action="https://formspree.io/f/mrgwdeqy" method="post">
                        <input type="text" name="name" placeholder="name" required><br>
                        <input type="email" name="email" placeholder="email" required><br>
                        <textarea name="message" id="" cols="30" rows="8" placeholder="message"></textarea><br>
                        <button class="contact-but">Submit</button>
                    </form>
                </div>
            </div>
            <div class="contact-details">
                <div class="contact-card">
                    <div class="card-left">
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <div class="card-right">
                        <h2>Address</h2>
                        <p>1st flr., Sai Infotech Bldg., Patel Chowk,
                            Opp. Rly. Stn. Ghatkopar E, Mumbai
                            Ghatkopar East, Mumbai, India - 400075</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="card-left">
                        <i class="ri-phone-fill"></i>
                    </div>
                    <div class="card-right">
                        <h2>Phone</h2>
                        <p >8976854221 - <b>Rohan Chavan</b></p>
                        <p>7418529634 - <b>Harsh Avadhan</b></p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="card-left">
                        <i class="ri-mail-open-fill"></i>
                    </div>
                    <div class="card-right">
                        <h2>Email</h2>
                        <p>rohanchavan@gmail.com</p>
                        <p>avdhanharsh@gmail.com</p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="contact-form" id="contact">
            <h1>Contact Us</h1>
            <div class="container">
                <div class="main">
                    <div class="content">
                        <h2>Contact Us</h2>
                        <form action="https://formspree.io/f/mrgwdeqy" method="post">
                            <input type="text" name="name" placeholder="Enter Your Name">
                          
                            <input type="email" name="email" placeholder="Enter Your Email">
                            <textarea name="message" placeholder="Your Message"></textarea>                   
                 <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <div class="form-img">
                        <img src="images/bg1.png" alt="">
                    </div>
                </div>
            </div>
        </div> 
       

        <div class="popup-container" id="login-popup">
            <div class="popup">
              <form method="POST" action="login_register.php">
                <h2>
                  <span>USER LOGIN</span>
                  <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
              </form>
            </div>
          </div>
        </div>
        
        
            <div class="popup-container" id="register-popup">
              <div class="register popup">
                <form method="POST" action="login_register.php">
                  <h2>
                    <span>USER REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                  </h2>
                  <input type="text" placeholder="Full Name" name="full_name">
                  <input type="text" placeholder="Username" name="username">
                  <input type="email" placeholder="E-mail" name="email">
                  <input type="password" placeholder="Password" name="password">
                  <button type="submit" class="register-btn" name="register">REGISTER</button>
                </form>
              </div>
            </div>

            <div class="popup-container" id="review-popup">
                <div class="Review popup" style="width: 400px;height:300px;">
                    <form action="addreview.php" method="post">
                        <h2>
                            <span>Add Review</span>
                            <button type="reset" onclick="popup('review-popup')">X</button>
                        </h2>
                        <input type="text" placeholder="name" name="name"><br><br>
                        <input type="email" name="email" placeholder="email" required><br><br>
    
                        <textarea name="review" cols="5" rows="5" placeholder="Review" class="rtxt"></textarea><br><br>
                        <input type="submit" value="Submit" name="submit" id="contactbut" style="width:30%;padding:1vw;background-color:orange">
                    </form>
                </div>
            </div>
    
            <script>
                function popup(popup_name)
                {
                  get_popup=document.getElementById(popup_name);
                  if(get_popup.style.display=="flex")
                  {
                    get_popup.style.display="none";
                  }
                  else
                  {
                    get_popup.style.display="flex";
                  }
                }
              </script>
    </main>
<footer class="footer-distributed">

			<div class="footer-left">
                <div class="footer-left-logo">

                    <i class="ri-graduation-cap-fill"></i><h2>Tech <span>Educa</span></h2>
                </div>

				<p class="footer-links">
					<a href="#home" class="link-1">Home</a>
					
					<a href="#about">About</a>
				
					<a href="#course-head">Courses</a>
				
					<a href="#review">Feedback</a>
					
					<a href="#contact">Contact</a>
				</p>

				<p class="footer-company-name">TechEduca © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="ri-map-pin-fill"></i>
					<p>Ghatkopar East, Mumbai, India - 400075</p>
				</div>

				<div>
					<i class="ri-phone-fill"></i>
                    <p >8976854221</p>
                    <!-- <p>7418529634 </p> -->
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@TechEduca.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the TechEduca</span>
					<p>Welcome to TechEduca , Enhance your skills with best online courses </p>
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<a href="#"><i class="fab fa-github"></i></a>

				</div>

			</div>

		</footer>
</body>

</html>

