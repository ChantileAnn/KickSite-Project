<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Enrolled-Forms | KickSite</title>
    <link rel="icon" type="image/x-icon" href=../img/icon.png >



	
    <link rel="stylesheet" href="../css/form_style.css"/>
</head>

<body >


	<div class="content">
		<div class="form-content">
			<form class="form-detail" action="" method="post" id="myform">
			<?php
if (isset($_POST['register'])) {
    // Fetch data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $parents_name = $_POST['parents_name'];
    $contact = $_POST['contact'];
    $phone = $_POST['phone'];
    $your_email = $_POST['your_email'];
    $address = $_POST['address'];
    $school = $_POST['school'];
    $status = $_POST['status']; // Note: this needs to be updated based on your form structure
    $enrollee_category = $_POST['enrollee_category']; // Update this based on your form structure
    $ranked_belt = $_POST['ranked_belt']; // Update this based on your form structure

    // Your SQL connection configuration
    $host = "your_host";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database";

    // Create a connection
    $con = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the database
    $sql = "INSERT INTO enrolled_forms (first_name, last_name, gender, age, birthday, parents_name, contact, phone, your_email, address, school, status, enrollee_category, ranked_belt)
            VALUES ('$first_name', '$last_name', '$gender', '$age', '$birthday', '$parents_name', '$contact', '$phone', '$your_email', '$address', '$school', '$status', '$enrollee_category', '$ranked_belt')";

    if (mysqli_query($con, $sql)) {
        echo "Record added successfully!";
        // Redirect to a thank you page or wherever you want
        // header("Location: thank-you.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the connection
    mysqli_close($con);
}
?>
				<div href="home.html"><img src="../img/logo2.png" class="logo" alt="logo"></div>
				<div class="form-left">
					<h2>General Infomation</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1" >
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>

						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
	
					</div>

					
					<div class="col-1">
						<div class="input-group">
							<label class="label ">Gender</label>
							<div class="p-t-1">
								<label class="radio-container">Male
									<input type="radio" name="gender">
									<span class="rad-button"></span>
								</label>

								<label class="radio-container">Female
									<input type="radio" name="gender">
									<span class="rad-button"></span>
								</label>

								<label class="radio-container">LGBTQ
									<input type="radio" name="gender">
									<span class="rad-button"></span>
								</label>
								
								<label class="radio-container">Rather not say
									<input type="radio" name="gender">
									<span class="rad-button"></span>
								</label>
							</div>
						</div>
					</div>
			
					
					<div class="form-group">
						
						<div class="form-row form-row-6">
							<input type="text" name="age" class="age" id="age" placeholder="Age" required>
						</div>

					
						<div class="form-row form-row-4">
							<div class="upload"  style="color: grey;" >Birthday: </div>
							<input style="padding-left: 120px;" type="date" name="birthday" class="birthday" id="birthday" placeholder="Birthday" required>			
						</div>
					</div>


					<div class="form-row">
						<input type="text" name="parents_name" id="parents_name" class="input-text"  placeholder="Parents/Guardian's Name">
					</div>
							
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="contact" class="contact" id="contact" placeholder="Contact Number" maxlength="11" required>
						</div>

						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Parent's Number" maxlength="11" required>
						</div>
					</div>

					

					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>
					
					<div class="form-row">
						
						<input type="text" name="address" class="address" id="address" placeholder="Address" required>
					</div>


					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="school" class="school" id="school" placeholder="School/University" required>
						</div>

						<div class="form-row form-row-4">
							<select name="status">
								<option value="status">Student</option>
							    <option value="elementary">Elementary</option>
							    <option value="high-school">High-School</option>
							    <option value="college">College</option>
							    <option value="graduated">Graduated</option>
							</select>
							<span class="select-btn">
								<i style="font-size:24px" class="fa">&#xf0d7;</i>
							</span>
						</div>
					</div>


				</div>
				<div class="form-right">
					<h2>Karate Information</h2>

					<div class="form-group">

						<div class="form-row form-row-1">
							<select name="status">
								<option value="status">Enrollee Category</option>
							    <option value="kid">Kids Section</option>
							    <option value="adult">Teens/Adult</option>
							    <option value="exp">Belt Holder</option>
							</select>
							<span class="select-btn">
								<i style="font-size:24px" class="fa">&#xf0d7;</i>
							</span>
						</div>

						
						<div class="form-row form-row-2">
							<select name="status">
								<option value="status">Ranked-Belt</option>
							    <option  value="white">White Belt</option>
							    <option value="yellow">Yellow Belt</option>
							    <option value="orange">Orange Belt</option>
								<option value="orange">Green Belt</option>
							    <option value="brown">Blue Belt</option>
								<option value="brown">Purple Belt</option>
								<option value="brown">Black Belt</option>


							</select>
							<span class="select-btn">
								<i style="font-size:24px" class="fa">&#xf0d7;</i>
							</span>
						</div>
					</div>
			

					<div class="form-row">
						<div class="upload">Student ID:</div>
							<input style="padding-left: 135px;" type="file" name="stud-id" class="stud-id" id="stud-id" required>
					</div>

					<div class="form-row">
						<div class="upload">Certification For Proof: </div>
							<input style="padding-left: 200px;" type="file" name="proof" class="proof" id="proof" >
					</div>


					<div class="form-group">
							
						<div class="col-2">
							<div class="input-group1">
							
								<label class="label1">Have you Experienced some Martial Arts other than Karate?</label>
								<div class="p-t-10">
									<label class="control control--checkbox">Yes
              							<input type="checkbox"/>
              								<div class="control__indicator"></div>
            						</label>

            						<label class="control control--checkbox">No
              							<input type="checkbox"/>
              								<div class="control__indicator"></div>
            						</label>

									<label class="control control--checkbox">Maybe
										<input type="checkbox"/>
											<div class="control__indicator"></div>
							  		</label>

									<label class="control control--checkbox">A liitle bit.
										<input type="checkbox"/>
											<div class="control__indicator"></div>
							  		</label>
								</div>
							</div>
						</div>

						<div class="col-3">
							<div class="input-group1">
							
								<label class="label1">Do you have problems in any of these areas?</label>
								<div class="p-t-10">
									<label class="control control--checkbox">Asthma
              							<input type="checkbox"/>
              								<div class="control__indicator"></div>
									
            						</label>

            						<label class="control control--checkbox">Epilepsy
              							<input type="checkbox"/>
              								<div class="control__indicator">
												
											</div>
            						</label>

									<label class="control control--checkbox">Orthopedic or back
										<input type="checkbox"/>
											<div class="control__indicator"></div>
							  		</label>

									<label class="control control--checkbox">Heart
										<input type="checkbox"/>
											<div class="control__indicator"></div>
							  		</label>

									<label class="control control--checkbox">Diabetes
										<input type="checkbox"/>
											<div class="control__indicator"></div>
							  		</label>

									<label class="control control--checkbox">Other
										<input type="checkbox"/>
											<div class="control__indicator"></div>
							  		</label>
								</div>
							</div>
						</div>


					</div>
					
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="../html/terms_and_conditions.html" class="text">Terms and Conditions</a> in this site.</p> <!--need link-->
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>

					</div>


					<div class="form-row-last">
						<a hfref="../html/announcement.html"><input type="submit" name="register" class="register" value="Register"></a>
					</div>
				</div>


			</form>
		</div>
	</div>
</body>
</html>