<html> 
<head>
 <title> CompleteForm</title>
<style type = "text/css"> 
<body style="background-image:url('/Users/user/Desktop/demoweb/b3.jpg')">
p {text-align: center; color:white;font-size:25pt;} 
<meta charset="UTF-8">
<title>MY User Page</title>
</style>
</p> 
</head> 
</body>
<p >
<body>

<a href="4.php">4</a>
<a href="5.php"></a>

<h2>Welcome User</h2>
<div id="content">
<?php include ('7.txt');?>
</div>
</body>
 <body>
 <h1></tr> </tr>ONLINE PAYMENT FORM</h1>
 <form id="contentform" method="post" action="5.php">
 <p>
 <label>
Enter your Name: <input type = "text" name = "myname" size = "24" maxlength = "25" />
 </label>
 </p>
</br>
 <p>
 <label>
Enter your USN: <input type = "text" name = "mypass" size = "20" maxlength = "20" />
 </label> 
</p>
</br>
<p>
 <label>
Enter your Sem: <input type = "text" name = "mypas" size = "20" maxlength = "20" />
 </label> 
</p>
</br>
 <p>
 <label>
Sex:<input type="radio" name="act" value="one"/>Male</label>
 <label><input type="radio" name="act" value="two"/>Female</label>
 </p>
</br>
<p>
<tr>
<td>Branch:</td>
<td>
<select name=”selReferrer”>
<option selected=”selected” value=”“>Select</option>
<option value=”web”>Computer Science Engineering</option>
<option value=”website”>Mechanical Engineering</option>
<option value=”printAd”> Civil Engineering</option>
<option value=”friend”>Electronics Engineering</option>
<option value=”other”>Architecture</option>
</select>
</td>
</tr>
</p>
</br>
 <p>Which of the following Accounts do you have?</p>
 <p>
 <label>
<input type="checkbox" name="act" value="one"/>State Bank Of India
<label>
<input type="checkbox" name="act" value="two"/>HDFC
</label>
 <label>
<input type="checkbox" name="act" value="three"/>Kotak Mahindra
</label>
 <label>
<input type="checkbox" name="act" value="four"/>Bank Of India
</label>
 </p>
</br>
 <p> Any Suggestions?</p>
 <p> <textarea name="feedback" rows="5" cols="100">
 </textarea>
 </p>
 <p>Click on Submit if you want to register</p>
 <p> <input type="SUBMIT" value="SUBMIT"/>
 <input type="RESET" value="RESET"/>
 </p>
 </form>
 </body>
 </html>