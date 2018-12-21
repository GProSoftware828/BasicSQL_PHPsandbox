<?php
        
  mysqli_connect("localhost", "root", "", "alphacrm");

  $tCompany_SQLselect = "SELECT ";
  $tCompany_SQLselect .= "ID, name, owners";
  $tCompany_SQLselect .= "FROM";
  $tCompany_SQLselect .= "tCompany";

$tCompany_SQLselect_Query = mysql_query($tCompany_SQLselect);

echo "<table border='1'>";

echo "<tr>";

echo "<td>Company Index Number</td>";
echo "<td>Company Name</td>";
echo "<td>Company Onwers</td>";

echo "</tr>";

$indx = 1;
  while ($row = mysql_fetch_array($tCompany_SQLselect_Query, MYSQL_ASSOC))
  {
   $ID = $row['ID'];
   $Name = $row['Name'];
   $Owners = $row['Owners'];

   echo "<tr>";

   echo "<td>".$ID."</td>";
   echo "<td>".$Name."</td>";
   echo "<td>".$Owners."</td>";

   echo "</tr>";

   $indx++;
  }

  mysql_free_result($tCompany_SQLselect_Query);

  <a href="index.php">Homepage</a>
?>