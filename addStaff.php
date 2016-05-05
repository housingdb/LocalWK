<?php
/*
Template Name: Add staff
*/
get_header();
 $connectdb = mysqli_connect ("localhost", "root", "usbw", "dfc-db");
 
 if (mysqli_connect_errno()) {
	 echo mysqli_connect_errno();
	 exit();
 }
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	<script>
		function resetForm() {
		document.getElementById("form1").reset();
		}
	</script>
 

 
	<style>
		td, tr {
			text-align: left;
			vertical-align: middle;
			border-collapse:collapse;
			border: 0px;
			line-height: -15px;
		}
		div.resinfo {
			width: 450px;
			float: left;
			margin-left: 0px;
		}
		table.restable {
			margin-left:;
			text-align: left;
			border-collapse:collapse;
			border: 0px;
			line-height: -15px;
		}
		div.resCoopInfo {
			width: 460px;
			float: right;
			margin-right: 25px;
			margin-top: 70px;
		}
		table.resCooptable {
			margin-left: 0px;
			text-align: left;
			border-collapse:collapse;
			border: 0px;
			line-height: -15px;
		}
		
		h1{
			margin-top: 10px;
			margin-left: 45px;
		}
		input[type="text"] {
			padding: 10px;
			border: solid 1px #696969;
			transition: box-shadow 1s, border 1s;
			line-height: -15px;
		}
		input[type="date"] {
			padding: 10px;
			border: solid 1px #696969;
			transition: box-shadow 1s, border 1s;
			line-height: -15px;
		}
		input[type="submit"] {
			align="right";
		}
		label {
			float:right;
			text-align:left;
			line-height: -15px;
		}
		div.site-content{
		background-color:#ffffff;
		width: 940px;
		height: 1400px;
		margin: auto;  
		margin-bottom: 10px; 
		margin-top: 10px; 
		border:2px solid #cccccc;
		}
	</style>
	
	
	<!--<div id="primary" class="content-area">-->
		<div id="content" class="site-content" role="main" >
				
			<div class="resinfo">
				<h1>Add Staff</h1>
				<form id="form1" name="form1" action="" method="post">
				<table class="restable">	
					<tr>
						<td>
							<label>First Name<label style="color: red;">*</label></label>
						</td>
						<td>
							<input type="text" name="firstName" id="firstName" class="firstName" required />
						</td>
					</tr>
					<tr>
						<td>
							<label>Last Name<label style="color: red;">*</label></label>
						</td>
						<td>
							<input type="text" name="lastName" id="lastName" class="lastName" required />
						</td>
					</tr>
					<tr>
						<td>
							<label>Home Phone<label style="color: red;">*</label></label>
						</td>
						<td>
							<input type="text" name="mainContact" id="mainContact" class="mainContact" required />
						</td>
					</tr>
					<tr>
						<td>
							<label>Work Phone</label>
						</td>
						<td>
							<input type="text" name="workPhone" id="workPhone" class="workPhone" />
						</td>
					</tr>
					<tr>
						<td>
							<label>Cell Phone</label>
						</td>
						<td>
							<input type="text" name="cellPhone" id="cellPhone" class="cellPhone" />
						</td>
					</tr>
					<tr>
						<td>
							<label>E-mail</label>
						</td>
						<td>
							<input type="text" name="emailP" id="emailP" class="emailP"/>
						</td>
					</tr>
					<tr>
						<td>
							<label>E-mail2</label>
						</td>
						<td>
							<input type="text" name="emailS" id="emailS" class="emailS"/>
						</td>
					</tr>
					<tr>
						<td>
							<label>Date of Birth</label>
						</td>
						<td>
							<input type="date" name="birthDate" id="birthDate" class="birthDate"/>							
						</td>
					</tr>
					<tr>
						<td>
							<label>Current Address</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>Street<label style="color: red;">*</label></label>
						</td>
						<td>
							<input type="text" name="mailingAddress" class="mailingAddress" id="mailingAddress" required>
						</td>
					</tr>
					<tr>
						<td>
							<label>City<label style="color: red;">*</label></label>
						</td>
						<td>
							<input type="text" name="mailingCity" class="mailingCity" id="mailingCity" required>
						</td>
					</tr>
					<tr>
						<td>
							<label>Province<label style="color: red;">*</label></label>
						</td>
						<td>
							<select name="mailingProvince" class="mailingProvince" id="mailingProvince" style="border: solid 1px #696969;" required>
								<option value=""> -- Select -- </option>
								<option value="AB">Alberta</option>
								<option value="BC">British Columbia</option>
								<option value="MB">Manitoba</option>
								<option value="NB">New Brunswick</option>
								<option value="NL">Newfoundland and Labrador</option>
								<option value="NS">Nova Scotia</option>
								<option value="ON">Ontario</option>
								<option value="PE">Prince Edward Island</option>
								<option value="QC">Quebec</option>
								<option value="SK">Saskatchewan</option>
								<option value="NT">Northwest Territories</option>
								<option value="NU">Nunavut</option>
								<option value="YT">Yukon</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label>Postal Code<label style="color: red;">*</label></label>
						</td>
						<td>
							<input type="text" name="mailingPostalCode" class="mailingPostalCode" id="mailingPostalCode" required>
						</td>
					</tr>
					<tr>
						<td>
							<label>Emergency Contact</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>First Name</label>
						</td>
						<td>
							<input type="text" name="emergencyFirstName" class="emergencyFirstName" id="emergencyFirstName" >
						</td>
					</tr>
					<tr>
						<td>
							<label>Last Name</label>
						</td>
						<td>
							<input type="text" name="emergencyLastName" class="emergencyLastName" id="emergencyLastName" >
						</td>
					</tr>
					<tr>
						<td>
							<label>Number</label>
						</td>
						<td>
							<input type="text" name="emergencyHomePhone" class="emergencyHomePhone" id="emergencyHomePhone" >
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Submit" name='send'/>
							<input type="reset" value="Clear" onclick="resetForm()"  />
						</td>
					</tr>
			   	</table>

			</div>
			
			
	</div><!-- #primary -->
<?php
	/**********************************************************/
	/**********************************************************/

	$mailingPostalCode = $_POST['mailingPostalCode'];
	$mailingAddress = $_POST['mailingAddress'];
	$mailingProvince = $_POST['mailingProvince'];
	$mailingCity = $_POST['mailingCity'];
	$emailS = $_POST['emailS'];
	$emailP = $_POST['emailP'];
	$workPhone = $_POST['workPhone'];
	$cellPhone = $_POST['cellPhone'];
	$mainContact = $_POST['mainContact'];
	$birthDate = $_POST['birthDate'];
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$emergencyFirstName = $_POST['emergencyFirstName'];
	$emergencyLastName = $_POST['emergencyLastName'];
	$emergencyHomePhone = $_POST['emergencyHomePhone'];	
	
	/* Individual 1 */
	if (isset($_POST['send']) ) {

			$sql2 = "INSERT INTO individual
			(first_name,last_name,is_staff, home_phone, work_phone, cell_phone, email1, email2, date_of_birth, mailing_address, mailing_postal_code,mailing_prov,mailing_city,emergency_contact_first_name,emergency_contact_last_name,emergency_contact_phone) 
	VALUES('$firstName','$lastName',1,'$mainContact','$workPhone','$cellPhone','$emailP','$emailS','$birthDate','$mailingAddress','$mailingPostalCode','$mailingProvince','$mailingCity','$emergencyFirstName','$emergencyLastName','$emergencyHomePhone') ";
			$query = mysqli_query($connectdb, $sql2);
				if (!$query){
					die('Invalid query: insert individual ' . mysqli_errno($connectdb));
				}
				else{
					$idInd = mysqli_insert_id($connectdb);
					$sql3 = "INSERT INTO staff(idINDIVIDUAL_STAFF) VALUES('$idInd') ";
					$query = mysqli_query($connectdb, $sql3);
					if (!$query){
						die('Invalid query: insert staff ' . mysqli_errno($connectdb));
					}
					else{
			echo "<script>var r = confirm('You have successfully added a new staff! Go Back to Staffs'); if (r == true) { document.location.href = 'http://localhost/wordpress/staff/' ;}else { document.location.href = 'http://localhost/wordpress/staff/' ;}</script>";
					}
				}
	}

?>		
<?php
	//get_sidebar();
	get_footer();
?>