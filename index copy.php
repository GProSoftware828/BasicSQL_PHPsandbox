<?php
        
        mysqli_connect("localhost", "root", "", "alphacrm");

		echo'<div>';
		
		echo '<a href="forms/companyCreate.php">
			<span style="color: maroon;">Create New Company</span>
			</a>';
		echo '<br /><br />';

		echo '<a href="forms/companySelect.php">
			<span style="color: maroon;">List People in a Company</span>
			</a>';
		echo '<br /><br />';

		echo '<a href="forms/companyList.php">
			<span style="color: maroon;">List of Companies</span>
			</a>';
		echo '<br /><br />';

		echo'</div>';
?>
