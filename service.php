<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Receipt to Recipe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link rel="stylesheet" href="css/user-auth.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Austin, Texas, USA</small>
                    <!--<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>-->
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@R2R.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Receipt to Recipe</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Sign in</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Login</h1>
                    <a href="" class="h5 text-white">Login</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="signup.php" class="h5 text-white">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Service Start -->
    
    <!--<body style="font-family: Arial, sans-serif; background-color: #f0f0f0; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">-->
	
	
	
	
    <div style="font-family: Arial, sans-serif; background-color: white; display: flex; justify-content: center; align-items: center; height: 60vh; margin: 0;">   
        <div style="background: white; border-radius: 8px; box-shadow: 0 40px 100px rgba(0, 0, 0, 0.5); overflow: hidden; width: 350px; padding: 20px;">
            <div id="login-form" style="display: flex; flex-direction: column;">
                <h2 style="margin-bottom: 20px; text-align: center; color: #333;">Login</h2>
				
				<?php
				include('functions.php');

				if(!isset($_POST['submit'])){
                echo'<form method="post" action="">
                    <div style="margin-bottom: 15px;">
                        <label for="login-email" style="margin-bottom: 5px; font-weight: bold; color: #555;">Email</label>
                        <input type="text" id="username" name="username" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="login-password" style="margin-bottom: 5px; font-weight: bold; color: #555;">Password</label>
                        <input type="password" id="password" name="password" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                    </div>
                    <button type="submit" style="padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s; width: 100%;" name="submit" value="submit">Login</button>
					
                    <p style="text-align: center; margin-top: 10px;">Don\'t have an account? <a href="signup.php" style="color: #007bff; text-decoration: none;">Sign Up</a></p>
                </form>';
				}
				if(isset($_POST['submit'])){
				$username=addslashes($_POST['username']);
				$passText=$_POST['password'];
				$salt="";
				$password=hash('sha256',$salt.$passText.$username);
				$dblink=db_connect("user_data");
				$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
				$result=$dblink->query($sql) or
					die("<p>Something went wrong with $sql<br></p>".$dblink->error);
				if ($result->num_rows<=0)
					redirect("service.php?page=login&errMsg=invalidAuth");
				else{
					$salt=microtime();
					$sid=hash('sha256',$salt.$password);
					$sql="Update `accounts` set `session_id`='$sid' where `auth_hash`='$password'";
					$dblink->query($sql) or
						die("<p>Something went wrong with $sql<br></p>".$dblink->error);
					redirect("decide.php?page=results&sid=$sid");
				}
				}
				?>
				
            </div>
    		<!--
            <div id="signup-form" style="display:none; flex-direction: column;">
                <h2 style="margin-bottom: 20px; text-align: center; color: #333;">Sign Up</h2>
                <form>
                    <div style="margin-bottom: 15px;">
                        <label for="signup-email" style="margin-bottom: 5px; font-weight: bold; color: #555;">Email</label>
                        <input type="email" id="signup-email" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="signup-password" style="margin-bottom: 5px; font-weight: bold; color: #555;">Password</label>
                        <input type="password" id="signup-password" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%;">
                    </div>
                    <button type="submit" style="padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s; width: 100%;">Sign Up</button>
                    <p style="text-align: center; margin-top: 10px;">Already have an account? <a href="#login-form" style="color: #007bff; text-decoration: none;">Login</a></p>
                </form>
            </div>-->
        </div>
    	<!--
        <script>
            const toggleLinks = document.querySelectorAll('p a');
            const authForms = document.querySelectorAll('div[id$="-form"]');
    
            toggleLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    authForms.forEach(form => form.style.display = 'none');
                    const targetId = link.getAttribute('href').substring(1);
                    document.getElementById(targetId).style.display = 'block';
                });
            });
        </script>-->
    </div>
	
	
	
	
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Receipt to Recipe</h1>
                        </a>
                        <p class="mt-3 mb-4">Join us in our mission to seamlessly connect your purchases to future dinner plans.</p>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Austin, Texas, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@R2R.com</p>
                            </div>
                            
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>How it works</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Sign in</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>What is R2R?</a>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Upload Receipt</a>
								<a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">R2R</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>