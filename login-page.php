<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
{
    header("location:main-page.php");
    exit;
}
require_once('configure.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$u = $m = $p = "";
$username = $mail = $password ="";
$unmaeerr = $mailerr = $pwderr = "";
$p_match = $id = $row = $p_uname = "";
$param_uname = "";
$u = $_POST['username'];
$m = $_POST["email"];
$p = $_POST["password"];
function clean($data){
$data = stripslashes($data);
$data = trim($data);
$data = htmlspecialchars($data);
return $data;
}
if(isset($u) && $u = null)
{
    $nameerr = "user required";
}
else{
    $username = clean($u);
}
if(isset($m) && $m = null)
{
    $mailerr = "mail required";
}
else{
    $mail = clean($m);
}
if(isset($p) && $p = null)
{
    $pwderr = "password required";
}
else{
    $password = clean($p);
}
}
if(empty($nameerr) && empty($mailerr) && empty($pwderr)){
    try{
$sql = 'SELECT id,username,name,email,password FROM signup WHERE (username = :username) ';
$stmt = $conn->prepare($sql);
 $stmt->bindParam(':username',$p_uname,PDO::PARAM_STR);
        $p_uname = trim($_POST['username']);
        if($stmt->execute()){
        // echo "hello";
        $row   = $stmt->fetchAll();
        if($stmt->rowCount() == 1){
            // echo "hey";
         $id = $row['id'];
            $uname = $row['username'];
            $p_match = $row['password'];
            if($p_match == $pwd)
            {
                //echo "hi";
                session_start();
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION["loggedin"] = true;
                header("location:main-page.php");
                exit;
            }
            else{
                $pwderr = "WRONG PASSWORD";
                echo $pwderr;
            }
        }
        else{
            $unameerr = "USER NOT FOUND";
            echo $unameerr;
        }
    }
    else{
        echo "somethin went wrong";
    }
    unset($stmt);

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}
unset($conn);
?>
<html>
    <title>Login form</title>
    <head>
            <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="login.css">
            <link rel="icon" href="bg1.png" type="icon">

        </head>
    <body>
        
        <form>
        <div class="login-form">
            <h3><b>LOGIN</b></h3>
            <label class="labl" for="name"><p>Username</p></label>
            <br><input id="name" type="text" name="username" title="login" placeholder="USERNAME">
            <br><label class="labl" for="email"><p>Email</p></label>
           <br><input id="email"type="email" name="email" title="email" placeholder="MAIL">
            <br><label class="labl" for="password"><p>Password</p></label>
            <br><input id="password" type="password" name="password" title="password" placeholder="PASSWORD"><br><br>
            <input id="submit" type="submit" value="LOGIN">
        </div>
    </form>
    </body>
</html>