<?php

if(isset($_POST['register'])){
//echo'<pre>';
//print_r($_POST);
//echo'</pre>';
echo"the first name is:";
echo $_POST['first-name'];
echo'<pre>';
echo'</pre>';
echo"the last name is:";
echo $_POST['last-name'];
echo'<pre>';
echo'</pre>';

echo"Mobile number or email address is:";
echo $_POST['email-mobile'];
echo'<pre>';
echo'</pre>';
echo"the upassword is:";
echo $_POST['up-password'];
echo'<pre>';
echo'</pre>';

echo"birthday is:";
echo $_POST['birth-day']. "/" .$_POST['birth-month']. "/".$_POST['birth-year'];
echo'<pre>';
echo'</pre>';
echo"the gender is:";
if($_POST['gen']=='1')
echo "female";
else
echo "male";

echo'<pre>';
echo'</pre>';
}
else
    echo"error404";

?>