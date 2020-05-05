<?php

session_start();
  include 'php/loginconfig.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}



$username = $password = "";
$username_err = $password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["username"]))){
        $username_err = "Ju lutem shenoni perdoruesin.";
    } else{
        $username = trim($_POST["username"]);
    }


    if(empty(trim($_POST["password"]))){
        $password_err = "Ju lutem shenoni fjalekalimin.";
    } else{
        $password = trim($_POST["password"]);
    }


    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT username, password FROM logintest WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);


            $param_username = $username;


            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);


                if(mysqli_stmt_num_rows($stmt) == 1){

                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){

                            session_start();


                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;


                            header("location: welcome.php");
                        } else{

                            $password_err = "Fjalekalimi qe shenuat nuk eshte valid.";
                        }
                    }
                } else{

                    $username_err = "Nuk u gjet asnje perdorues me ate emer.";
                }
            } else{
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
    <title>Kyqja</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body id="bckr">

    <div id="main-wrapperlogin">
        <h2 style="text-align: center">Kyqja</h2>
        <center><img src="images/logo.png" class="logo"></img></center>
        <p><b>Shenoni te dhenat tuaja per ty kyqur.</b></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Perdoruesi</label>
                <input type="text" name="username" class="inputvalues" value="<?php echo $username; ?>" placeholder="Shenoni emrin e perdoruesit...">
                <span id="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Fjalekalimi</label>
                <input type="password" name="password" class="inputvalues" placeholder="Shenoni fjalekalimin...">
                <span id="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" id="login_btn" value="Kyqu">
                <input type="button" id="login_btn" value="Kthehu" style="background-color: grey;" onclick="window.location.href = 'index.php';">
            </div>
            <p>Nuk keni nje llogari? <a href="registration.php">Regjistrohu ketu</a>.</p>
        </form>
    </div>
</body>
</html>
