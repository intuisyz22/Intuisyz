<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Candidate Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/png" href="../asset/img/intuisyz_logo.jpg">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../asset/regformcss/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="../asset/regformfonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../asset/regformcss/style.css"/>
    <?php include('../include/js.php') ?>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="userAction.php" method="post" id="myform">
				<input type="hidden" name="type" value="candidate_register">
				<div class="form-left">
					<h2>General Infomation</h2>
					
					<div class="form-row">
						<div>
							<select id="qpaper" name="exam_id" required="">
								<option class="option">Select Exam</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					
					<!-- <div class="form-row">
						<select name="position">
						    <option value="position">Position</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div> -->
					<div class="form-row">
						<input type="text" name="cur_company" class="company" id="company" placeholder="Current Company" required>
					</div>
					<div class="form-row">
						<input type="text" name="desig" class="company" id="desig" placeholder="Designation" required>
					</div>
					<div class="form-row">
						<input type="text" name="cur_ctc" class="company" id="cur_ctc" placeholder="Current CTC" required>
					</div>
					<div class="form-row">
						<input type="text" name="expected_ctc" class="company" id="exp_ctc" placeholder="Expected CTC" required>
					</div>
					<!-- <div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" placeholder="Business Arena" required>
						</div>
						<div class="form-row form-row-4">
							<select name="employees">
							    <option value="employees">Employees</option>
							    <option value="trainee">Trainee</option>
							    <option value="colleague">Colleague</option>
							    <option value="associate">Associate</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div> -->
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="house_name" class="street" id="street" placeholder="House Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="street" class="additional" id="additional" placeholder="Street" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="pincode" class="zip" id="zip" placeholder="Zip Code" >
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="city" class="additional" id="additional" placeholder="City" required>
							
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="state" class="additional" id="additional" placeholder="State" required>
					</div>					
					<div class="form-row">
						<input type="text" name="phno" class="phone" id="phone"  pattern="^\d{10}" placeholder="Phone Number" required>
					</div>
					<div class="form-row">
						<input autocomplete="off" type="text" name="email_id" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>
					<!-- <div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div> -->
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="../asset/js/jquery-2.1.1.8.js"></script>
	<script src="user.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>