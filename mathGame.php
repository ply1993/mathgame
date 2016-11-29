
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Math Game</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Math Game</h1>
    <form action="logout.php" method="post">
        <input name='Logout' value='Logout' type='submit' />
    </form>
    <?php
    session_start();

    if (isset($_POST['anwser'])) {
        $subanw = $_POST['anwser'];
        $_SESSION['counter'] += 1;
        
    
        if ($subanw == $_SESSION['ranwser']){
            $message = 'You got it right';
            $_SESSION['correct'] += 1;
        }
        else {
            $message = 'You got it wrong it was '.$_SESSION['ranwser'];
        }
    }
    else {
        $_SESSION['correct'] = 0;
        $_SESSION['counter'] = 0;
    }
    
    $int1 = rand(0,20);
    $int2 = rand(0,20);

    if (rand(0,1)==1) {
        $char = "-";
        $ranwser =  $int1 - $int2;
    }
    else{
        $char = "+";
        $ranwser = $int1 + $int2;
    }
    $_SESSION['ranwser'] = $ranwser;
    
    ?>
    <h2><?php echo $int1.' '.$char.' '.$int2; ?></h2>
    <form action="" method="post">
        <label for="anwser">Your Anwser</label>
        <input type='text' name='anwser' id='anwser'/>
        <input type='submit' name='Submit' value='Submit' />
    </form>
    <br/>
    <span><?php if (isset($_POST['anwser'])) echo $message; ?></span>
    <div><?php if (isset($_POST['anwser'])) echo 'Score: '.$_SESSION['correct'].'/'.$_SESSION['counter']; ?></div>
</body>
</html>