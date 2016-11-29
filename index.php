<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Math Game</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    
    if (isset($_POST['username'])||isset($_POST['password'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
        }
        else {
            if ($_POST['username'] == 'a@a.a' && $_POST['password'] == 'aaa') {
                $_POST['username'] = $username; // Initializing Session
                $_SESSION['loginUser']=$username;
                header("location: mathGame.php"); // Redirecting To Other Page
            } else {
                $error = "Username or Password is invalid";
            }
        }
    }
    
    ?>
    <h2>Enter Username and Password</h2> 
    <form id='login' action='' method='post' accept-charset='UTF-8'>
        <label for='username' >UserName:</label>
        <input type='text' name='username' id='username'/>
        <br/>
        <label for='password' >Password :</label>
        <input type='password' name='password' id='password'/>
        <br/>
        <input type='submit' name='Submit' value='Submit' />
    </form>
    <span><?php echo $error; ?></span>
</body>
</html>