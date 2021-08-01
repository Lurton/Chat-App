<?php
  // session_start();
  require_once 'header.php';
  
  echo "<div class='center'>Welcome to Argus' Nest,";

  if($loggedin) echo " $user, you are logged in";
  else          echo ' please sign up or log in';

  echo <<<_END
    </div><br>

    </div>
    </div>
    <footer>
        <h4 class="center">Web App Developed by Argus</h4>
    </footer>
    </div>
  </body>
</html>
_END;
?>