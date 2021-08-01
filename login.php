<?php
    require_once 'header.php';
    $error = $user = $pass = "";

    if(isset($_POST['user']))
    {
        $user = sanitizeString($_POST['user']);
        $pass = sanitizeString($_POST['pass']);

        if($user == "" || $pass == "")
            $error = 'Not all fields were entered';
        else{
            $result = queryMysql("SELECT user, pass FROM members WHERE user='$user' AND pass='$pass'");

            if($result->num_rows == 0)
            {
                $error = "Invalid login attempt";
            }
            else
            {
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                
            }
        }
    }

    echo <<<_END
        <form class='center' method='post' action='login.php'>
        <div>
            <label></label>
            <span class='error'>$error</span>
        </div>
        <div>
            <label></label>
            Please enter your details to log in
        </div>
        <div>
            <label>Username</label>
            <input type='text' maxlength='16' name='user' value='$user'>
        </div>
        <div>
            <label>Password</label>
            <input type='password' maxlength='16' name='pass' value='$pass'>
        </div>
        <div class='center'>
            <label></label>
            <input type='submit' value='Login'>
        </div>
       </form>
      </div>
      <div>
        <footer>
            <h4 class="center">Web App Developed by Argus</h4>
        </footer>
      </div>
    </body>
</html>
_END;
?>
