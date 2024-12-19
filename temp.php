<div style="font-family: Arial, sans-serif; background-color: white; display: flex; justify-content: center; align-items: center; height: 60vh; margin: 0;">   
        <div style="background: white; border-radius: 8px; box-shadow: 0 40px 100px rgba(0, 0, 0, 0.5); overflow: hidden; width: 350px; padding: 20px;">
            <div id="login-form" style="display: flex; flex-direction: column;">
                <h2 style="margin-bottom: 20px; text-align: center; color: #333;">Sign up</h2>

				<?php
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
					
                    <p style="text-align: center; margin-top: 10px;">Have an account? <a href="service.php" style="color: #007bff; text-decoration: none;">Sign In</a></p>
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
					redirect("signup.php?page=login&errMsg=invalidAuth");
				else{
					$salt=microtime();
					$sid=hash('sha256',$salt.$password);
					$sql="Update `accounts` set `session_id`='$sid' where `auth_hash`='$password'";
					$dblink->query($sql) or
						die("<p>Something went wrong with $sql<br></p>".$dblink->error);
					redirect("service.php?page=results&sid=$sid");
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