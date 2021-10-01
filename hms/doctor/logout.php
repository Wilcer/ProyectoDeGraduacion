<?php
session_start();
include('include/config.php');
$_SESSION['dlogin']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE doctorslog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();

$_SESSION['errmsg']="Inicio Exitoso";
?>
<script language="javascript">
document.location="../../index.html";
</script>
