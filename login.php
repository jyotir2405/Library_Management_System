<?php
$a=$_POST['user'];
$b=$_POST['pass'];
if($a=="librarian@iiitn" && $b=="iiit_nagpur")
{
    header('Location:index.html');
}
else
{
    header('Location:error.html');
}
?>