<!doctype hml>
<html>
<head>
<meta charset="UTF-8">
<title>My Accountant page</title>
<style type="text/css">
#txtarea{
  width:400px;
  min-height:200;
}
#but{
display:block;
clear:both;
margin-top:10px;

}
</style>
</head>
<body>

<a href="4.php">4</a>
<a href="5.php">5</a>
<p>Total Amount To Be Paid=48,500</p>
<form id="contentform" method="post" action="6.php">
 <p>Mode Of Payment</p>
 <p>
 <label>
<input type="checkbox" name="act" value="one"/>Credit
<label>
<input type="checkbox" name="act" value="two"/>Debit
</label>
 <label>
<input type="checkbox" name="act" value="three"/>Net Banking
</label>
 <label>
<input type="checkbox" name="act" value="four"/>DD
</label>
 </p>
</br>
<input id="but" type="submit" value="save/update"/>
</form>
</body>
</html>
