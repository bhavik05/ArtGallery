<?php

$artid=$_POST["artid"];
$conn = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM painting where artid=$artid ";  //SQL query will be according to your requirement
$result = mysqli_query($conn, $sql);
echo "<table border=1><tr><th>artist id<th>painting id<th>painting name<th>date of creation<th>value<th>availability<th>paint<th>style<th>type<th></tr>";
while($row = mysqli_fetch_array($result))
{	
	$a=$row["avail"];
	echo "<tr>";
                echo "<td>" . $row["aid"] . "</td>";	//IN box bracket the name is the table column name
                echo "<td>" . $row["artid"] . "</td>";
                echo "<td>" . $row["aname"] . "</td>";
                echo "<td>" . $row["doc"] . "</td>";
	echo "<td>" . $row["voa"] . "</td>";
	echo "<td>" . $row["avail"] . "</td>";
	echo "<td>" . $row["paint"] . "</td>";
	echo "<td>" . $row["sty"] . "</td>";
	echo "<td>" . $row["typ"] . "</td>";
            echo "</tr>";
}
echo "</table>"; 
$sql3 = "SELECT * FROM exhibitionp where artid=$artid ";  //SQL query will be according to your requirement
$result3 = mysqli_query($conn, $sql3);
echo "<table border=1><tr><th>painting id<th>exhibition id<th>Location<th>date of exhibition<th></tr>";
while($row3 = mysqli_fetch_array($result3))
{
	echo "<tr>";
       	echo "<td>" . $row3["artid"] . "</td>";	//IN box bracket the name is the table column name
              	 echo "<td>" . $row3["eid"] . "</td>";
	echo "<td>" . $row3["place"] . "</td>";	//IN box bracket the name is the table column name
              	 echo "<td>" . $row3["doe"] . "</td>";
           	echo "</tr>"; 
}
echo "</table>";
if( $a<1)
{
      	$sql1 = "SELECT * FROM bought_painting where artid=$artid ";  //SQL query will be according to your requirement
	$result1 = mysqli_query($conn, $sql1);
	echo "<table border=1><tr><th>painting id<th>buyer id<th>cost of purchase<th>date of sale<th></tr>";
                 while($row1 = mysqli_fetch_array($result1))
	{
		$b=$row1["bid"];
		echo "<tr>";
                		echo "<td>" . $row1["artid"] . "</td>";	//IN box bracket the name is the table column name
               		 echo "<td>" . $row1["bid"] . "</td>";
                		echo "<td>" . $row1["coa"] . "</td>";
                		echo "<td>" . $row1["dop"] . "</td>";
            		echo "</tr>";
       	 }
        	echo "</table>";
	$sql2 = "SELECT * FROM buyer_phone where bid=$b ";  //SQL query will be according to your requirement
	$result2 = mysqli_query($conn, $sql2);
	echo "<table border=1><tr><th>buyer id<th>phone number<th></tr>";
                 while($row2 = mysqli_fetch_array($result2))
	{
		echo "<tr>";
                		echo "<td>" . $row2["bid"] . "</td>";	//IN box bracket the name is the table column name
               		 echo "<td>" . $row2["phn"] . "</td>";
            		echo "</tr>";
       	 }
        	echo "</table>";
}
mysqli_close($conn);
?>