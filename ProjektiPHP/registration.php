<?php
include 'php/loginconfig.php';

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty(trim($_POST["username"]))) {
        $username_err = "Ju lutem shenoni nje perdorues valid.";
    } else {

        $sql = "SELECT username FROM logintest WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_username);


            $param_username = trim($_POST["username"]);


            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Ky perdorues ekziston.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Diqka shkoi gabim, ju lutemi provoni perseri.";
            }
        }

        mysqli_stmt_close($stmt);
    }


    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Fjalekalimi duhet te kete me shume se 6 karaktere.";
    } else {
        $password = trim($_POST["password"]);
    }


    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Ju lutem konfirmoni fjalekalimin.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Fjalekalimiet nuk perputhen.";
        }
    }


    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {


        $sql = "INSERT INTO logintest (username, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {

            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);


            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);


            if (mysqli_stmt_execute($stmt)) {

                header("location: login.php");
            } else {
                echo "Diqka shkoi gabim, ju lutem provoni perseri.";
            }
        }


        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Regjistrimi</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body id="bckr">
    <div id="main-wrapperlogin">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div id="login-box">
                <div class="left">
                    <h1>Sign up</h1>

                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" />
                        <span id="help-block"><?php echo $username_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password" />
                        <span id="help-block"><?php echo $password_err; ?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <input type="password" name="password2" value="<?php echo $confirm_password; ?>" placeholder="Retype password" />
                        <span id="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup_submit" value="Submit" />
                        <input type="reset" id="logout_btn" value="Reset">
                    </div>
                </div>

                <div class="right">
                    <span class="loginwith">Sign in with<br />social network</span>

                    <button class="social-signin facebook">Log in with facebook</button>
                    <button class="social-signin twitter">Log in with Twitter</button>
                    <button class="social-signin google">Log in with Google+</button>
                </div>
                <div class="or">OR</div>
            </div>
        </form>
    </div>
</body>

</html>

<!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <label>Perdoruesi</label>
        <input type="text" name="username" class="inputvalues" value="<?php echo $username; ?>" placeholder="Shenoni emrin e perdoruesit...">
        <span id="help-block"><?php echo $username_err; ?></span>
    </div>
    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <label>Fjalekalimi</label>
        <input type="password" name="password" class="inputvalues" value="<?php echo $password; ?>" placeholder="Shenoni fjalekalimin...">
        <span id="help-block"><?php echo $password_err; ?></span>
    </div>
    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
        <label>Konfirmimi fjalekalimit</label>
        <input type="password" name="confirm_password" class="inputvalues" value="<?php echo $confirm_password; ?>" placeholder="Konfirmoni fjalekalimin...">
        <span id="help-block"><?php echo $confirm_password_err; ?></span>
    </div>
    <div class="form-group">
        <input type="submit" id="register_btn" value="Submit">
        <input type="reset" id="logout_btn" value="Reset" style="margin: 0px; background-color: grey;">
    </div>
    <p>Keni nje llogari? <a href="login.php">Kyqu ketu</a>.</p>
</form> -->