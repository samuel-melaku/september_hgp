<?php
// the method tells the submit button what to do the info/data
// GET means it will be passed through the URL and the user can see it
// POST would still pass the code into the URL, but then we would no longer be able to see it
 
echo $_POST['name']; // this echo's out the name of the url, regardless of whether it is POST or GET

?>
<html>

<body>


<form method="POST">
    <input type="hidden" name="name" value="Samuel">
    <button type="submit">PRESS ME!</button>
</form>

</body>

</html>