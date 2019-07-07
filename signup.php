<?php
include 'includes/s_head.php';
include 'includes/navigation.php';
?>
<div class="card mt-10 p-3 animated bounceIn col-md-6 " id="signcard">
    <div>
        <h4>
            <center>Join our community</center>
        </h4>
    </div>
    <div class="form">
        <form method="post" action="php/signup.php" onsubmit="return checkforblanks()" name="signform" id="signupform">
            <div class="form-group">
                <input type="text" name="firstname" placeholder="Enter your firstname" class="form-control" id="Firstname">
                <span class="error_form" id="fname_error"></span>
            </div>
            <div class="form-group">
                <input type="text" name="lastname" placeholder="Enter your lastname" class="form-control" id="Lastname">
                <span class="error_form" id="lname_error"></span>
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Enter your email address" class="form-control" id="Email">
                <span class="error_form" id="email_error"></span>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="Password">
                <span class="error_form" id="password_error"></span>
            </div>
            <div class="form-group">
                <input type="password" name="re-password" placeholder="Re-enter your password" class="form-control" id="Rpassword">
                <span class="error_form" id="rpassword_error"></span>
            </div>
            <!-- <div class="form-group">
				<input type="file" name="avatar" placeholder="Select an image" class="form-control" id="Avatar">
			</div> -->
            <div class="form-group">
                <button class="btn btn-outline-success" type="submit">Register</button>
            </div>
            <div>
                <p>Already have an account?<a href="login.php">Login to your account</a></p>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="javascript/signup.js"></script>

</body>

</html>