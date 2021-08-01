<?php
    session_start();

echo <<<_INIT
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='styles.css'>
        <script src='javascript.js'></script>
        <script src='development.js'></script>
        <script src='buttonAttr.js'></script>


    _INIT;

    require_once 'functions.php';

    $userstr = 'Welcome Guest';

    if (isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
        $loggedin = TRUE;
        $userstr = "Logged in as: $user";
    }
    else $loggedin = FALSE;

    echo <<<_MAIN
        <title>Argus' Chat: $userstr</title>
    </head>
    <body>
        <div>
        <header>
            <div id='logo' class='center'> Argus' Chat</div>
            <div class='username' id='grad1'>$userstr</div>
        </header>
        <div>

    _MAIN;

        if($loggedin)
        {
            echo <<<_LOGGEDIN
                    
                    <nav>
                        <ul class='nav'>
                            <li><a href="members.php">Home</a></li>
                        <ul class='nav2' id='dropDown'>
                            <li class='a'><a href="members.php">Members</a></li>
                            <li class='a'><a href="friends.php">Friends</a></li>
                            <li class='a'><a href="messages.php">Messages</a></li>
                            <li class='a'><a href="profile.php">Profile</a></li>
                            <li class='a'><a href="logout.php">Log out</a></li>
                            <li class="downIcon"><a href="javascript:void(0);" onclick="downMenu()">&#9776</a></li>
                        </ul>
                        </ul>
                    </nav>

            _LOGGEDIN;
        }
        else {
            echo <<<_GUEST
                <nav>
                    <ul class='nav'>
                    <li><a href="members.php">Home</a></li>
                    <ul class='nav2'> 
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="login.php">Log In</a></li>
                    </ul>
                    </ul>
                    
                </nav>
                
                <p class='info'>(You must be logged in to use this app)</p>
   
            _GUEST;
        }
?>