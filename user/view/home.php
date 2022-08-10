<!DOCTYPE html>
<html>

<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	
		 	<a href="about.html" style="color: white;">About</a>
		 	<a href="contact.html" style="color: white;">Contact</a>
		 	
		</h1>
    <form action="./controller/Search.php" method="get" enctype="" onsubmit="return validateadd()">
        <fieldset style="background-color:DodgerBlue;">
            <h1>Tours and Travel Management System</h1>
			<table align = 'right'>
				<tr>
					<td><td ><a href="../controller/logout.php"> <b>Logout</b>  </a> </td></td>
					
				</tr>
				
                <tr>
				<td ><a href="view.php"> <b>View Profile</b>  </a> </td>
				</tr>
			</table>
            
            <table>
                <tr>
                    <td>Search </td>
                    <td><input type="text" name="search" value=""></td>
                    <td><button type="submit">Search</button></td>
                </tr>
                <tr>
                    <td><a href="./view/signup.html"> View Gallery </a> <br></td>
                </tr>
                
						<tr>
							<td><a href="../view/update.php" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">Edit Profile</a></td>
							<!-- <td><input type="submit" name="update" value="Edit Profile" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;margin:15%;"></td> -->
						
							<td><a href="../controller/deletecheck.php" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">Delete Profile</a></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="../view/resetpass.php" > Change Password </a>
							</td>
						</tr>
                        <tr>
							<td colspan="2" align="center">
								<a href="../view/paymentlogin.html" > make payment</a>
							</td>
						</tr>


                        <div id="search-bar">
                            <label>Search:</label>
                            <input type="text" id="search" autocomplete="off">
</div>

<tr>
							<td colspan="2" align="center">
								<a href="../view/search.php" > show your history</a>
							</td>
						</tr>

						
						<tr>
							<td colspan="2" align="center">
								<a href="../view/contact.html" > upload your profife picture </a>
							</td>
						</tr>





            </table>
        </fieldset>
        </from>
        <table>
            
        </table>

</body>

</html>