<?php
    require_once 'header.php';

    if(isset($_SESSION['user']))
    {
        destroysession();
        echo "<br><div class='center'>You have been logged out. Please
                <a href='index.php'>Click here</a>
                go back to log in page.</div>";
    }
    else echo "<div class='center'>You cannot log out because you are not logged in</div>";

?>
    </div>
  </body>
</html>