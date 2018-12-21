<?php

mysqli_connect("localhost", "root", "", "alphacrm");
    
  $tCompany_SQLselect = "SELECT ";
  $tCompany_SQLselect .= "tCompany.ID, tCompany.Owners ";
  $tCompany_SQLselect .= "FROM ";
  $tCompany_SQLselect .= "tCompany ";
  $tCompany_SQLselect .= "LEFT OUTER JOIN tOwners ON"
  $tCompany_SQLselect .= "tCompany.OwnerID" = "tOwnerID";

  $tCompany_SQLselect_Query = mysqli_connect($tCompany_SQLselect);

    echo "<h2 text-decoration="underline">['tCompany.Name']</h2>";
    
    echo "<table border='1'>";
    
    echo "<tr>";
    
    echo "<td>Company Owners</td>";
    
    echo "</tr>";
    
    $indx = 1;
    while ($row = mysql_fetch_array($tCompany_SQLselect_Query, MYSQL_ASSOC)) {
        
        $tOwner = $row['FirstName']."".['LastName'];
        
        echo "<tr>";
        
        echo "<td>".$FirstName." ".$LastName."</td>";
        
        echo "</tr>";
        
        $indx++;
        
    }
    
    echo "</table>";
    
    mysql_free_result($tCompany_SQLselect_Query);

    echo '<a href="companyCreate.php">Create another company</a>';
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo '<a href="../index.php">Quit - to homepage</a>';

?>
