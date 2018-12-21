    /* Must normalize owner name: */
    $company_SQLinsert = "INSERT INTO alphacrm.tCompany ( ";
    $company_SQLinsert .= "ID INT (11) NOT NULL AUTO_INCREMENT PRIMARY, ";
    $company_SQLinsert .= "Name VARCHAR (250) NOT NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NOT NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NULL ";
    $company_SQLinsert .= ")";
    
    $company_SQLinsert .= "VALUES ";
    /*Below instances were hard-coded in example, how to listen to input of form? */
    $company_SQLinsert .= " (";
    $company_SQLinsert .= "Name VARCHAR (250) NOT NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NOT NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NULL, ";
    $company_SQLinsert .= "Owner VARCHAR (250) NULL ";
    $company_SQLinsert .= ")";
    
    if (mysqli_query($createCoyTable_SQL) {
        echo " 'Create TABLE tCompany' Entry Successful. <br /><br />";
    }

  {

    echo '<a href="companyCreate.php">Create another company</a>';
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo '<a href="../index.php">Quit - to homepage</a>';

  }