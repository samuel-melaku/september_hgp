<html>

</html>

<?php

/*
Sessions are used to computers can remmeber who the user is
A session ends whenever you close your browser
Cookies are used for saving information that is less important
Cookies last for a specific amount of time (ex. 1 month)

*/

setcookie("name", "Daniel", time() + 86400); 
// Sets a cookie up, names it, and sets a time limit for the cookie to exist
// setting a negative value would instantly delete the cookie

$_SESSION['name'] = "12";
// keeps this data as long as the same sessions are active

?>


</body>

</html>