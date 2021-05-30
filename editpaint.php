<?php
$aid=$_POST["aid"];
$artid=$_POST["artid"];
$name= $_POST["name"];
$doc=$_POST["doc"];
$val=$_POST["val"];
$paint=$_POST["paint"];
$pstyle=$_POST["pstyle"];
$ptype=$_POST["ptype"];

$conn=mysqli_connect("localhost", "root", "", "test");
$sql="update painting set aid=$aid,aname='$name',doc='$doc',voa=$val,paint='$paint',sty='$pstyle',typ='$ptype' WHERE artid=$artid ";
mysqli_query($conn,$sql);
echo $sql;
echo "...... success";
mysqli_close($conn);
?>