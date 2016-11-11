<?php
if(isset($_POST['submit']))
{
     $SQL = "INSERT INTO chosenitems (fullName, email, phone, password) VALUES ('', '', '')";
     $result = mysql_query($SQL);
}
?>