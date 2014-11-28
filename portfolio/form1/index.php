<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Form_1</title>
		<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<style type="text/css">
			.error {
				padding: 5px;
				border: 1px solid #ca3838;
				background: #f0c5c5;
				color: #ca3838;
				margin: 10px 0 10px 0;
			}
		</style>
	</head>

	<body>
		<?php 
			echo "<pre>";
			echo "</pre>";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$errors = array();

					if (!empty($_POST["gender"]))
					{
						$gender = $_POST["gender"];
					} else {
						$errors['gender'] = 'Please select a gender.';
					}

					if (!empty($_POST["age"]))
					{
						$age = $_POST["age"];
					} else {
						$errors['age'] = 'Please select an age category.';
					}

					if (!empty($_POST["first_site_access"]))
					{
						$first_site_access = $_POST["first_site_access"];
					} else {
						$errors['first_site_access'] = 'Please let us know how you first heard about us.';
					}
					if (!empty($_POST["daily_site_access"]))
					{
						$daily_site_access = $_POST["daily_site_access"];
					}
					if (!empty($_POST["feedback"]))
					{
						$feedback = $_POST["feedback"];
					}
					if (empty($errors))
					{
						header("Location: index.php?status=thanks");
						exit;
					}
				}
			?>
		<div class="container clearfix">
<?php if (isset($_GET["status"]) == "thanks") { ?>
	<h1>Thank You</h1>
	<p>Thanks for taking the time to fill out this survey! Your responses will be used to help us serve you better.</p>
<?php } else { ?>
				<h1>Customer Feedback Survey</h1>
				<p>Please complete the form below to give us information on how we can serve our customers better.</p>
				
				<form action="index.php" method="POST" name="form_1">
					<!--About You Section-->
					<fieldset>
						<legend align="center"><strong>About You</strong></legend>
						<label>What is your gender?</label><br>
<?php
	if (!empty($errors['gender']))
		echo '<div class="error">' . $errors['gender'] . '</div>';
?>


						<label for="male">Male</label>
						<input type="radio" name="gender" value="Male" id="male" selected=""></br>
						<label for="female">Female</label>
						<input type="radio" name="gender" value="female" id="female"><br><br>
						<label for="age">What age category are you in?</label><br>
<?php
	if (!empty($errors['age']))
		echo '<div class="error">' . $errors['age'] . '</div>';
?>
						<select name="age" id="age">
							<option value="">(Select Age)</option>
							<option value="under_18">Under 18 years old</option>
							<option value="18-24">18&ndash;24 years old</option>
							<option value="25-29">25&ndash;29 years old</option>
							<option value="30-34">30&ndash;34 years old</option>
							<option value="35-39">35&ndash;39 years old</option>
							<option value="40-44">40&ndash;44 years old</option>
							<option value="45-49">45&ndash;50 years old</option>
							<option value="Over_50">Over 50 years old</option>
						</select><br><br>
					</fieldset>	
					<br>
					<!--How You Found Us Section-->
					<fieldset>
						<legend align="center"><strong>How You Found Us</strong></legend>
						<label for="first_site_access">How did you first hear about us?</label><br>
<?php
	if (!empty($errors['first_site_access']))
		echo '<div class="error">' . $errors['first_site_access'] . '</div>';
?>
						<select name="first_site_access" id="first_site_access">
							<option value="">(Select Option)</option>
							<option value="internet">Internet</option>
							<option value="television">Television</option>
							<option value="word_of_mouth">Word of Mouth</option>
							<option value="radio">Radio</option>
							<option value="print">Print Advertisement (newspaper/magazine)</option>
							<option>Other</option>
						</select><br><br>
						<label for"daily_site_access">What other ways have you heard about us?</label><br>
						<input type="checkbox" name="daily_site_access[]" value="internet"> Internet<br>
						<input type="checkbox" name="daily_site_access[]" value="television"> Television<br>
						<input type="checkbox" name="daily_site_access[]" value="word_of_mouth"> Word of Mouth<br>
						<input type="checkbox" name="daily_site_access[]" value="radio"> Radio Advertisements<br>
						<input type="checkbox" name="daily_site_access[]" value="print"> Print Advertisements (newspaper/magazine)<br>
						<input type="checkbox" name="daily_site_access[]" value="other"> Other (Please specify below)<br>
						Other: <input type="text" name="other" value="<?php echo (isset($_POST['other'])) ? $_POST['other'] : ''; ?>"><br>
					</fieldset>
					<br>
					<!--Feedback Section-->
					<fieldset>
						<legend align="center"><strong>Feedback</strong></legend>
						<label for"feedback">We value your feedback! Please put any comments below on how we can serve you better.</label><br>
						<textarea id="feedback" name="feedback" rows="10" cols="30"></textarea>
					</fieldset>	
					<input type="submit" value="Submit">
				</form> 
				<?php } ?>
		</div>
	</body>
</html>
