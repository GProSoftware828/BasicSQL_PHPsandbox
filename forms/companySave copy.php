<?php

    mysqli_connect("localhost", "root", "", "alphacrm");
    
if ($dbSuccess) {

  $companyName = $_POST['companyName'];
  $oneOwnerFirstName = $_POST['oneOwnerFirstName'];
  $oneOwnerLastName = $_POST['oneOwnerLastName'];
  $twoOwnerFirstName = $_POST['twoOwnerFirstName'];
  $twoOwnerLastName = $_POST['twoOwnerLastName'];

}

?>
