<?php
 if(!isset($_SESSION['loginuser']))
 {
 echo "<script>alert('你还没有登陆,请返回');window.location.href='login.php'</script>";
 }
?>