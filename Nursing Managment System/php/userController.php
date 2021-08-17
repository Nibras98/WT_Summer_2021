<?php 
	
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$name = $POST['name'];
		$email = $_POST['email'];	
		$Contact_number = $_POST['contact_number'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$confirm_password = $POST['confirm_password'];
		if(empty($name) ||empty($email) ||empty($username) || empty($contact_number) ||empty($password) || empty($confirm_password)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
                'name' => $name,
				'email' => $email,
				'username'=> $username,
				'contact_number' => $contact_number,
				'password'=> $password,
				'confirm_password'=> $confirm_password
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update customer profile
	if(isset($_POST['edit'])){

		$name = $_POST['name'];
		$address= $_POST['address'];
		$contact_number = $_POST['contact_number'];
		$password 	= $_POST['password'];
		$confirm_password= $_POST['confirm_password'];
		$id = $_POST['id'];

		if(empty($name) || empty($address) || empty($contact_number) || empty($password) || empty($confirm_password)){
			header('location: ../views/edit.php?empty');
		}
		elseif($password!=$confirm_password)
		{
            header('location: ../views/edit.php?password & confirm password should be same');
		}

		elseif(is_numeric($name))
		{
            header('location: ../views/edit.php?Name cannot be number');
		}
		else{

			$register = [
				'name'=> $name,
				'address'=> $address,
				'contact_number'=> $contact_number,
				'password'=> $password,
				'confirm_password'=> $confirm_password,
				'id'=> $id
			];

			$status = updateAdmin($register);

			if($status){
				header('location: ../views/Moderator_view/Moderatorhome.php?success=done');
			}else{
				header('location: ../views/Moderator_view/edit.php?id={$id}');
			}
		}
	}

	//update Admin profile
	if(isset($_POST['edit_admin'])){

		$name = $_POST['name'];
		$address= $_POST['address'];
		$contact_number = $_POST['contact_number'];
		$password 	= $_POST['password'];
		$confirm_password= $_POST['confirm_password'];
		$id = $_POST['id'];

		if(empty($name) || empty($address) || empty($contact_number) || empty($password) || empty($confirm_password)){
			header('location: ../views/Moderator_view/update_own.php?empty');
		}
		elseif($password!=$confirm_password)
		{
            header('location: ../views/Moderator_view/update_own.php?passerror');
		}

		elseif(is_numeric($name))
		{
            header('location: ../views/Moderator_view/update_own.php?Name cannot be number');
		}
		else{

			$register = [
				'name'=> $name,
				'address'=> $address,
				'contact_number'=> $contact_number,
				'password'=> $password,
				'confirm_password'=> $confirm_password,
				'id'=> $id
			];

			$status = update($register);

			if($status){
				header('location: ../views/Moderator_view/moderatorprofile.php?success=done');
			}else{
				header('location: ../views/Moderator_view/update_own.php?id={$id}');
			}
		}
	}

//update Others profile By Admin
if(isset($_POST['edit_others'])){

	$name = $_POST['name'];
	$address= $_POST['address'];
	$contact_number = $_POST['contact_number'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$id = $_POST['id'];

	if(empty($name) || empty($address) || empty($contact_number) || empty($gender) || empty($dob)){
		header('location: ../views/Moderator_view/update_emp_info.php?empty');
	}

	elseif(is_numeric($name))
	{
		header('location: ../views/Moderator_view/update_emp_info.php?Name cannot be number');
	}
	else{

		$register = [
			'name'=> $name,
			'address'=> $address,
			'contact_number'=> $contact_number,
			'gender'=> $gender,
			'dob'=> $dob,
			'id'=> $id
		];

		$status = update($register);

		if($status){
			header('location: ../views/Moderator_view/empinfo.php?success=done');
		}else{
			header('location: ../views/Moderator_view/update_emp_info.php?id={$id}');
		}
	}
}


//delete user
	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$register = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($register);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}

//User complain
	if(isset($_POST['submit_complain'])){

		$complain_type	= $_POST['complain_type'];
		$description 	= $_POST['description'];
		$user_id 		= $_POST['user_id'];
		echo $description ;
		echo $user_id;
		echo "Hello";

		if(empty($complain_type) || empty($description ) || empty($user_id )){
			header('location: ../views/Moderator_view/complain1.php?error=Null submission');
		}else{

			$complain = [
				'complain_type'=> $complain_type,
				'description'=> $description,
				'user_id' => $user_id
			];

			$status = complain_create($complain);

			if($status){
				header('location: ../views/Moderator_view/complain.php?success=done');
			}else{
				header('location: ../views/Moderator_view/complain.php?id={$id}');
			}
		}
	}

?>