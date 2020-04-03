<!-- the user login page for online library management system-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- add meta view point tag for make web page responsive -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- create the header class -->
    <div class="header">
    <!-- set the logo and name -->
        <div class="logo">
        <img src="img/logo.png" alt="logo">
        <h1>Lowa State University </h1>
        <p>Online labrary</p>
        </div>
        <!-- create the login form -->
        <form action="login" method="post" id="frmLogin">
            <input type="text" name="e-mail" id="loginEmail" placeholder="e-mail">
            <input type="password" name="password" id="loginPassword" placeholder="password">
            <button type="submit" name="login" id="btnLogin">login</button>
        </form>
    </div>

    <!-- create the main class -->
    <div class="main">
        <!-- set background image to the page -->
        <div class="background_img"><img src="img/Computer.png"></div>


        <div class="signUp">
            <!-- create signup form -->
            <form action="signUp" method="post" id="frmSignUp">
                <h2>Sign Up</h2>
                <p>Sign up for Lowa State University online library</p>
                <input type="text" name="txtFirstName" placeholder="First Name" id="txtFirstName">
                <input type="text" name="txtLastName" placeholder="Last Name" id="txtLastName">
                <input type="text" name="txtEmail" placeholder="E-mail" id="txtEmail">
                <input type="text" name="txtMobileNo" placeholder="Mobile No" id="txtMobileNo">
                <input type="text" name="txtNic" placeholder="NIC" id="txtNic">
                <input type="text" name="txtAddress" placeholder="Address/ZIP" id="txtAddress">
                <p>Select the profession</p>
                <input type="radio" name="rdoStudent" id="rdoStudent"><p id="txtRdo">Student</p>
                <input type="radio" name="rdoProfeser" id="rdoProfeser"><p id="txtRdo">Profeser</p>
                <hr>
                <p>Create new password</p>
                <input type="password" name="txtNewPassword" placeholder="New Password" id="txtNewPassword">
                <input type="password" name="txtConformPassword" placeholder="Last Name" id="txtConformPassword">
                <hr>
                <button type="submit" name="btnCreateAccount" id="btnCreateAccount">Create Account</button>
                <p id="temaAndCondition">The librarian reserves the right to terminate this account ar any time in the violation of library rules.</p>
            </form>
        </div>
    <!-- set the footer -->
    </div>
    <div class="footer">www.onlinelibrarymanagementsystem.com</div>
</body>
</html>