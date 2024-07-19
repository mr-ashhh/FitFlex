
<?php
$error_message = '';

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if ($username == 'admin' && $password == 'password') {
        header("Location: billing.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <style>
   
@import url("https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap");

* {
    margin: 0;
    padding: 0;
    font-family: system-ui;
}

body {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(img/bagroundimg.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

body:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.164);
}

.frame {
    height: 400px;
    width: 370px;
    backdrop-filter: blur(5px);
    border: 1px solid white;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 10px;
    box-shadow: 0px 0px 5px white;
}

.login {
    font-size: 50px;
    font-weight: bold;
    color: white;
    margin-top: 0.5rem;
    margin-bottom: 2.5rem;
}

.email,
.password {
    width: 90%;
    height: auto;
    display: flex;
    align-items: center;
    margin: 0.5rem;
    position: relative;
}

.email input,
.password input {
    padding: 8px 8px 8px 15px;
    background: transparent;
    border: none;
    width: 100%;
    border: 1px solid #cecece;
    border-radius: 50px;
    font-size: 17px;
    outline: none;
    font-weight: bold;
}

.email input::placeholder,
.password input::placeholder {
    color: white;
    font-weight: bold;
}

.email img,
.password img {
    position: absolute;
    right: 0.7rem;
}

.remember_forgot {
    height: auto;
    width: 90%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 0.5rem;
}

.remember_forgot .remember {
    height: auto;
    width: auto;
    display: flex;
    align-items: center;
    font-size: 17px;
    color: white;
    font-weight: bold;
}

.remember_forgot .remember input {
    height: 15px;
    width: 15px;
    margin-right: 0.2rem;
}

.remember_forgot .forgot a {
    font-size: 17px;
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.submit {
    width: 90%;
    padding: 10px;
    margin-top: 1rem;
    font-size: 25px;
    font-weight: bold;
    outline: none;
    border: none;
    border-radius: 50px;
    cursor: pointer;
}

.reg {
    margin-top: 1.5rem;
    color: white;
}

.reg a {
    font-weight: bold;
    color: white;
}

    </style>

<script>
        window.onload = function() {
            <?php if ($error_message) : ?>
                alert("<?php echo $error_message; ?>");
            <?php endif; ?>
        };
</script>

</head>

<body>
<form action="" method="post">
    <div class="frame">
        <div class="login">FitFlex</div>
        
        <div class="email">
            <input type="text" name="user" placeholder="Username" />
            <img src="img/user.png" width="23px" />
        </div>
        <div class="password">
            <input type="password" name="pass" placeholder="Password" />
            <img src="img/padlock.png" width="23px" />
        </div>
        <div class="remember_forgot">
            <div class="remember">
                <input type="checkbox" id="check" />
                <label for="check">Remember Me</label>
            </div>
            <div class="forgot"><a href="#">Forgot password?</a></div>
        </div>
        <button class="submit" name="submit" >Login</button>
        <div class="reg">Not a member yet?<a href="#">Register Now!</a></div>
        
    </div>
    </div>
</form>
</body>

</html>