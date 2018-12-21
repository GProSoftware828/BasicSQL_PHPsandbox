<?php


mysqli_connect("localhost", "root", "", "alphacrm");

  echo '<form action="companySave.php" method="post">';

  echo '<table>';
  echo '<tr>';
    echo '<td>Company Name</td>';
    echo '<td><input type="text" name="companyName" /></td>';
  echo '</tr>';  
  echo '<tr>';
    echo '<td>Company Owner One First Name</td>';
    echo '<td><input type="text" name="oneOwnerFirstName"</td>';
    echo '</tr>';
  echo '<tr>';
    echo '<td>Company Owner One Last Name</td>';
    echo '<td><input type="text" name="oneOwnerLastName"</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Company Owner Two First Name</td>';
    echo '<td><input type="text" name="twoOwnerFirstName"</td>';
  echo '</tr>';  
  echo '<tr>';
    echo '<td>Company Owner Two Last Name</td>';
    echo '<td><input type="text" name="twoOwnerLastName"</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td></td>';
    echo '<td align="right"><input type="submit" value="Save" /></td>';
  echo '</tr>';
  echo '</table>';
    
    echo '</form>';

?>
