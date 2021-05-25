<?php 


include ('../setting/config.php');

if(isset($_POST['submit'])) {
	$name     = htmlspecialchars($_POST['name']);
	$dob      = htmlspecialchars($_POST['dob']);
	$district = htmlspecialchars($_POST['district']);
	$father   = htmlspecialchars($_POST['father']);
	$level    = htmlspecialchars($_POST['level']);
	$gender   = htmlspecialchars($_POST['gender']);
	$phone    = htmlspecialchars($_POST['phone']);
	$address  = htmlspecialchars($_POST['address']);
	$country  = htmlspecialchars($_POST['country']);
	$state    = htmlspecialchars($_POST['state']);
	$lgc      = htmlspecialchars($_POST['lgc']);
	$gudient  = htmlspecialchars($_POST['gudient']);

	 $sql = $sms->insert_addmision($name, $dob, $district, $father, $level, $gender,$phone, $address, $country, $state, $lgc, $gudient);
}
 ?>

	<div class=" " style="background:brown">
		<div class="" style="margin-top: 55px;">
			<div class="header-w3l"  id="admission">
					<fieldset>
						<legend class="text-center"><h2>Admission Form</h2></legend>
						<h4>Fill the Following Details</h4>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="">
							<div class="w3-half">
								<ul>
									<input type="text" name="name" class="form-control form-group" placeholder="Applicant name">
									<input type="Date" name="dob" class="form-control form-group" placeholder="Applicant Date Of Birth">
									<input type="Text" name="district" class="form-control form-group" placeholder="District">
									<input type="" name="father" class="form-control form-group" placeholder="Applicant Father">
									<input type="number" name="level" class="form-control form-group" placeholder="Class or Level">
									<select name="gender" id="" class="form-control w3-text-blue">
							           <option value="male"><b>male</b></option>
							            <option value="female"><b>female</b></option>
							            <option value="other"><b>other</b></option>
							        </select>
							     </ul>
							</div>
							<div class="w3-half col-xs-6">
								<ul>
									<input type="Number" name="phone" class="form-control form-group" placeholder="Phone Number">
									<input type="text" name="address" class="form-control form-group" placeholder="Phone Address">
									<input type="text" name="country" class="form-control form-group" placeholder="Country">
									<input type="text" name="state" class="form-control form-group" placeholder="State">
									<input type="text" name="lgc" class="form-control form-group" placeholder="Local Government">
									<input type="text" name="gudient" class="form-control form-group" placeholder="Guadient Name">
								</ul>
							</div>
							<div class=""></div>
							<div class="agile-submit">
								<input type="submit" name="submit" value="submit" class="form-group form-control">
							</div>
						</form>
					</fieldset>
			</div>
		</div>
	</div>