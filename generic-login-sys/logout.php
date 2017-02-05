<?php
session_start();
session_destroy();
echo "Your logout was successful. click <a href=\"login.php\">here</a> to try again";