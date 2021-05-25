<?php 
class config
{
	public $server = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "blog_database";
	public $connectdb;
	
	function __construct()
	{
		$this->connectdb = new mysqli($this->server, $this->username, $this->password, $this->dbname);
		if ($this->connectdb->connect_error) 
		{
			die("connection to the database fails.");
		}
	}
//INSET ADDMISSION MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM///
	public function insert_addmision($name, $dob, $district, $father, $level, $gender,$phone, $address, $country, $state, $lgc, $gudient)
	{
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

		      $insert_addmision = "INSERT INTO addmission(name, dob, district, father, level, gender,phone, address, country, state, lgc, gudient) 
		               VALUES('$name', '$dob', '$district', '$father', '$level', '$gender','$phone', '$address', '$country', '$state', '$lgc', '$gudient')";
		               //var_dump($insert_addmision); die();
		               $sql = $this->connectdb->query($insert_addmision);
		               return  $sql;

	}
	public function insertData()
		{
			$name = $this->connectdb->real_escape_string($_POST['name']);
			$fname = $this->connectdb->real_escape_string($_POST['fname']);
			$lname = $this->connectdb->real_escape_string($_POST['lname']);
			$country = $this->connectdb->real_escape_string($_POST['country']);
			$state = $this->connectdb->real_escape_string($_POST['state']);
			$lgc = $this->connectdb->real_escape_string($_POST['lgc']);
			$username = $this->connectdb->real_escape_string($_POST['username']);
			$dob = $this->connectdb->real_escape_string($_POST['dob']);
			$phone = $this->connectdb->real_escape_string($_POST['phone']);
			$email = $this->connectdb->real_escape_string($_POST['email']);
			$password = $this->connectdb->real_escape_string(md5($_POST['password']));
			$photo = $this->connectdb->real_escape_string($_FILES['photo']['name']);
			$status = $this->connectdb->real_escape_string($_POST['status']);
			$skills1 = $this->connectdb->real_escape_string(implode(',' , $_POST['skills1']));
			$address = $this->connectdb->real_escape_string($_POST['address']);
			$gender = $this->connectdb->real_escape_string($_POST['gender']);
			$role = $this->connectdb->real_escape_string($_POST['role']);

			//process photo ggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhghghghhhhhh
                
            $destination = '../asset/photo/';
            $accepted_image = ['jpg', 'png', 'gif', 'jpeg'];
            $ext = explode('.', $_FILES['photo']['name']);
                 if(!in_array(end($ext), $accepted_image))
                 {
                 	 echo "<script>alert('Only Images Are Accepted')</script>";
                 }

			$query="INSERT INTO customers(name, fname, lname, country, state, lgc, username, dob, phone, email, password, photo, status, skills1, address, gender, role)VALUES
			   ('$name','$fname', '$lname', '$country', '$state', '$lgc', '$username','$dob','$phone','$email', '$password', '$photo', '$status', '$skills1', '$address', '$gender', '$role')";
			$sql = $this->connectdb->query($query);
			if ($sql==true)
			{
				echo "<script>alert('Record Inserted Successfully')</script>";
                  move_uploaded_file($_FILES['photo']['tmp_name'], $destination.$photo);
				  header("location:../webfile/home.php?msg1=insert");
			}else
			{
				echo "Registration failed try again!";
			}
		}
		public function login($username,$password)
	    {
			$login_select = "select * from customers where username='$username' AND password='$password'";
			//var_dump($login_select); die('problem');
			$login_run = $this->connectdb->query($login_select);
			$logged_in_user = $login_run->fetch_assoc();
			//var_dump($logged_in_user); die();
			$login_num = $login_run->num_rows;
			//var_dump($login_num); die();
			return $logged_in_user;
	    }
        
		public function displayData()
		{
			$query = "SELECT * FROM customers";
			$result = $this->connectdb->query($query);
			if ($result->num_rows > 0)
			{
				$data = array();
				while ($row = $result->fetch_assoc())
				{
				$data[] = $row;
				}
				return $data;
			}else{
				echo "No found records";
			}
		}

		// Fetch single data for edit from customer table
		public function displyaRecordById($id)
		{
			$query = "SELECT * FROM customers WHERE id = '$id'";
			$result = $this->connectdb->query($query);
			if ($result->num_rows >0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				echo "Record not found";
			}
		}
		public function updateRecord($postData)
		{
			$uname     = $this->connectdb->real_escape_string($_POST['uname']);
			$ufname    = $this->connectdb->real_escape_string($_POST['ufname']);
			$ulname    = $this->connectdb->real_escape_string($_POST['ulname']);
			$ucountry  = $this->connectdb->real_escape_string($_POST['ucountry']);
			$ustate    = $this->connectdb->real_escape_string($_POST['ustate']);
			$ulgc      = $this->connectdb->real_escape_string($_POST['ulgc']);
			$uusername = $this->connectdb->real_escape_string($_POST['uusername']);
			$udob      = $this->connectdb->real_escape_string($_POST['udob']);
			$uphone    = $this->connectdb->real_escape_string($_POST['uphone']);
			$uemail    = $this->connectdb->real_escape_string($_POST['uemail']);
			$upassword = $this->connectdb->real_escape_string(md5($_POST['upassword']));
			$uphoto    = $this->connectdb->real_escape_string($_FILES['uphoto']['name']);
			$ustatus   = $this->connectdb->real_escape_string($_POST['ustatus']);
			$uskill    = $this->connectdb->real_escape_string($_POST['uskill1']);
			$uaddress  = $this->connectdb->real_escape_string($_POST['uaddress']);
			$ugender   = $this->connectdb->real_escape_string($_POST['ugender']);
			$urole     = $this->connectdb->real_escape_string($_POST['urole']);

			 $destination = '../asset/photo/';
             $accepted_image = ['jpg', 'png', 'gif', 'jpeg'];
             $ext = explode('.', $_FILES['photo']['name']);
                 if(!in_array(end($ext), $accepted_image))
                 {
                 	 echo "<script>alert('Only Images Are Accepted')</script>";
                 }

			$id = $this->connectdb->real_escape_string($_POST['id']);
			if (!empty($id) && !empty($postData))
			{
				$query = "UPDATE customers SET name = '$uname', fname = '$ufname', lname = '$ulname',country='$ucountry', ustate ='$ustate', ulgc ='$ulgc', username='$uusername', udob ='$udob', phone ='$uphone', email='$uemail', password='$upassword', photo ='$uphoto', status='$ustatus', skills1='$uskills1', address='$uaddress', gender='$ugender', role= '$urole' WHERE id = '$id'";
				$sql = $this->connectdb->query($query);
				if ($sql==true) {
					 move_uploaded_file($_FILES['photo']['tmp_name'], $destination.$photo);
					 header("Location:index.php?msg2=update");
				}else
				{
					echo "Registration updated failed try again!";
				}
			}
		}
		// Delete customer data from customer table
		public function deleteRecord($id)
		{
			$query = "DELETE FROM customers WHERE id = '$id'";
			$sql = $this->connectdb->query($query);
			if ($sql==true)
			{
				header("Location:index.php?msg3=delete");
			}else
			{
				echo "Record does not delete try again";
			}
		}
		


}
$sms = new config;

 ?>