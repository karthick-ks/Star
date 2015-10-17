<?php
file_put_contents("7.txt", $_POST['content']);
?>
<html>
<head>
<title>Post Added</title>
</head>
<body>

<a href="4.php">4</a>
<a href="5.php">5</a>
<h2>Enter Card Details</h2>
</body>
<body>
<form id="contentform" method="post" action="0.php">
 <p>
 <label>
Enter your Card Number: <input type = "text" name = "myname" size = "24" maxlength = "25" />
 </label>
 </p>
 <p>
 <label>
Enter your Card Name: <input type = "text" name = "myname" size = "24" maxlength = "25" />
 </label>
 </p>
 <p>
 <label>
Expiry Date: <input type = "number" name = "myname" size = "24" maxlength = "25" />
 </label>
 </p>
 <p>
 <label>
CVV:<input type = "number" name = "myname" size = "24" maxlength = "25" />
 </label>
 </p>
<p> <input type="SUBMIT" value="SUBMIT"/>
</p>
</body>
</html>
