<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search</title>
    
    <!-- Include AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
      
    <style>
        /* Same CSS as provided */
.error-message {
            color: red;
            font-size: 14px;
            margin-top: -2px;
            margin-bottom: 10px;
            display: none; /* Hidden by default */
        }
        .server-error {
            color: red;
            font-size: 16px;
            margin-bottom: 10px;
        }
      /* Modal Styles */
.modal-content {
  /* max-height: 100%; */
  height: 100%;
    border-radius: 15px;
    overflow: hidden;
    background: linear-gradient(135deg, #ffffff, #e9e9e9);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    animation: slideIn 0.4s ease-out;
}

.modal-header {
    background: linear-gradient(135deg,#6A11CB, #2575FC);
    color: white;
    padding: 15px;
    border-bottom: none;
    text-align:center;
}

.modal-header .close {
    color: white;
    opacity: 1;
    top:-20px;
    position:relative;
}

.modal-body {
    padding: 20px 30px;
}
/* Floating Labels */
.floating-label-group {
    position: relative;
    margin-bottom: 20px;
}

.floating-label-group input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ccc;
    border-radius: 30px; /* Rounded corners for the input fields */
    background-color: #fff ;
    font-size: 16px;
    transition: all 0.3s ease;
}

.floating-label-group input:focus {
    outline: none;
    border-color:rgb(224, 6, 97);
    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
}

.floating-label-group label {
    position: absolute;
    top: 12px;
    left: 15px;
    font-size: 16px;
    color: #999;
    transition: all 0.3s ease;
}

.floating-label-group input:focus + label,
.floating-label-group input:not(:placeholder-shown) + label {
    top: -20px;
    left: 10px;
    font-size: 12px;
    color: #007bff;
}


/* Login Box */
.login-box-body {
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    max-height: 500px; /* Increase max-height */
    min-height: 500px; /* Optionally, set a minimum height */
}

/* Input Groups */
.input-group {
    margin-bottom: 20px;
}

.input-group-text {
    background-color: #007bff;
    color: white;
    border: none;
}

.input-group .form-control {
    border-radius: 0 5px 5px 0;
    border: 1px solid #ddd;
}

/* Buttons */
.btn-primary {
    background: linear-gradient(135deg,#6A11CB, #2575FC);
    border: none;
    border-radius: 30px;
    transition: transform 0.2s, box-shadow 0.2s;
    padding: 12px 30px; /* Adjust padding for better size */
}

.btn-primary:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
}

.btn-secondary {
    border-radius: 50px;
}

/* Links */
a {
    color: #007bff;
    transition: color 0.2s;
}

a:hover {
    color: #0056b3;
    text-decoration: none;
}

/* Animations */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
  }

      </style>
      <body>
        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
           
                <h4 class="modal-title" id="myModalLabel">Welcome!!!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="login-box">
                    <div class="login-box-body">
                         <!-- Add server error message placeholder -->
                         <?php if (isset($_GET['error'])): ?>
                                <p class="server-error"><?php echo htmlspecialchars($_GET['error']); ?></p>
                            <?php endif; ?>
                    <!-- <form action="process.php?action=login" enctype="multipart/form-data" method="post"> -->
                        <form id="loginForm" action="" method="post">
                            
                          <br>
                            <!-- Animated Floating Labels -->
                            <div class="form-group floating-label-group">
                                <input type="text" class="form-control" id="user_email" name="user_email">
                                <label for="user_email" class="floating-label">Username</label>
                                <p class="error-message" id="usernameError">Please enter your username.</p>
                            </div>
                           <br>
                            <div class="form-group floating-label-group">
                                <input type="password" class="form-control" id="user_pass" name="user_pass">
                                <label for="user_pass" class="floating-label">Password</label>
                                <p class="error-message" id="passwordError">Please enter your password.</p>
                            </div>
                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <a href="<?php echo web_root; ?>index.php?q=register" class="text-secondary">Forgot Password?</a><br>
                                <!-- <a href="<?php echo web_root; ?>index.php?q=register" class="text-center">Register a new membership</a> -->

                            </div>
                            <br>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-block" id="btnlogin">Login</button>
                        </form>
                        <div class="text-center mt-3">
                           <br> <p>Don't have an account? <a href="<?php echo web_root; ?>index.php?q=register" class="text-primary">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        // Form validation
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            // e.preventDefault(); // Prevent form submission
            const username = document.getElementById('user_email').value.trim();
            const password = document.getElementById('user_pass').value.trim();

            let isValid = true;

            // Check if username is empty
            if (!username) {
                document.getElementById('usernameError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('usernameError').style.display = 'none';
            }

            // Check if password is empty
            if (!password) {
                document.getElementById('passwordError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('passwordError').style.display = 'none';
            }

             // Stop form submission if validation fails
             if (!isValid) {
                e.preventDefault();
            }

            // If all fields are valid
            if (isValid) {
                alert('Login successful!');
                // Perform your AJAX or form submission logic here
                $('#myModal').modal('hide'); // Close modal
            }
        });
    </script>

         
</body>
</html>