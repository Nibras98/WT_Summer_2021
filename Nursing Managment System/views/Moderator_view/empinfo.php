<?php
	require_once('../../php/session_header.php');
	require_once('../../service/userService.php');
    //$userinfo = getByName($_SESSION['username']);
	

?>

<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/empinfo.css">
<title> Employee Info </title>
</head>
<body>

    <div class="empcards" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" >
        <div class=emp>
            
        <?php
        $id=18;
        //$_SESSION['id'] = $id;
        $userinfo = getByID($id);?>
            <div class="dp">
            <img src="../../upload/imgmale.png">
            </div>
            <div class="info">
                Name :<?=$userinfo['name']?><br>
                Email :<?=$userinfo['email']?><br>
                Phone :<?=$userinfo['contact_number']?><br>
                Gender :<?=$userinfo['gender']?><br>
                Date of Birth :<?=$userinfo['dob']?><br>
                Adress :<?=$userinfo['address']?><br>
                User Type :<?=$userinfo['user_type']?><br>
            </div>
            <div  class="update">
                <name=$id>
            <a href="update_emp_info.php?id=18">Update This User</a>
            </div>
        </div>

        <div class=emp>
        <?php
        $id=20;
        //$_SESSION['id'] = $id;
        $userinfo = getByID($id);?>
            <div class="dp">
            <img src="../../upload/imgmale.png">
            </div>
            <div class="info">
                Name :<?=$userinfo['name']?><br>
                Email :<?=$userinfo['email']?><br>
                Phone :<?=$userinfo['contact_number']?><br>
                Gender :<?=$userinfo['gender']?><br>
                Date of Birth :<?=$userinfo['dob']?><br>
                Adress :<?=$userinfo['address']?><br>
                User Type :<?=$userinfo['user_type']?><br>
            </div>
            <div  class="update">
            <a href="update_emp_info.php?id=20">Update This User</a>
            </div>
        </div>

        <div class=emp>
            <?php $userinfo = getByID( $id= 23 );?>
            <div class="dp">
            <img src="../../upload/image.png">
            </div>
            <div class="info">
                Name :<?=$userinfo['name']?><br>
                Email :<?=$userinfo['email']?><br>
                Phone :<?=$userinfo['contact_number']?><br>
                Gender :<?=$userinfo['gender']?><br>
                Date of Birth :<?=$userinfo['dob']?><br>
                Adress :<?=$userinfo['address']?><br>
                User Type :<?=$userinfo['user_type']?><br>
            </div>
            <div  class="update">
            <a href="update_emp_info.php?id=23">Update This User</a>
            </div>
        </div>

        <div class=emp>
            
        <?php $userinfo = getByID( $id= 22 );?>
            <div class="dp">
            <img src="../../upload/image.png">
            </div>
            <div class="info">
                Name :<?=$userinfo['name']?><br>
                Email :<?=$userinfo['email']?><br>
                Phone :<?=$userinfo['contact_number']?><br>
                Gender :<?=$userinfo['gender']?><br>
                Date of Birth :<?=$userinfo['dob']?><br>
                Adress :<?=$userinfo['address']?><br>
                User Type :<?=$userinfo['user_type']?><br>
            </div>
            <div  class="update">
            <a href="update_emp_info.php?id=22">Update This User</a>
            </div>
        </div>

        <div class=emp>
            
        <?php $userinfo = getByID( $id= 21 );?>
            <div class="dp">
            <img src="../../upload/imgmale.png">
            </div>
            <div class="info">
                Name :<?=$userinfo['name']?><br>
                Email :<?=$userinfo['email']?><br>
                Phone :<?=$userinfo['contact_number']?><br>
                Gender :<?=$userinfo['gender']?><br>
                Date of Birth :<?=$userinfo['dob']?><br>
                Adress :<?=$userinfo['address']?><br>
                User Type :<?=$userinfo['user_type']?><br>
            </div>
            <div  class="update">
            <a href="update_emp_info.php?id=21">Update This User</a>
            </div>
        </div>

        <div class=emp>
            
        <?php $userinfo = getByID( $id= 24 );?>
            <div class="dp">
            <img src="../../upload/imgmale.png">
            </div>
            <div class="info">
                Name :<?=$userinfo['name']?><br>
                Email :<?=$userinfo['email']?><br>
                Phone :<?=$userinfo['contact_number']?><br>
                Gender :<?=$userinfo['gender']?><br>
                Date of Birth :<?=$userinfo['dob']?><br>
                Adress :<?=$userinfo['address']?><br>
                User Type :<?=$userinfo['user_type']?><br>
            </div>
            <div  class="update">
                <a href="update_emp_info.php?id=24">Update This User</a>
            </div>
        </div>

    </div>

</body>
<html>