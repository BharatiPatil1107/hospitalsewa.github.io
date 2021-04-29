<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from stud where id=$id");
?>
<script type="text/javascript">
window.location="register.php";
</script>
