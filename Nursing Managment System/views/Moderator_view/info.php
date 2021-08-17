<?php
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>
<body>

</body>
</html>
	<title>Home</title>

    <link rel="stylesheet" href="../../css/navbar_patienthome.css">
    <link rel="stylesheet" href="../../css/inventory.css">
    <style>
        .table{
            width: 50%;
            float: left;
        }

        .xml-input{
            width: 50%;
            float: left;
            
        }
        input[type=submit] {
            background-color: #009879;
            border: none;
            color: white;
            padding: 10px 30px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            }
            input[type=submit]:hover{
                background-color: rgb(218, 83, 83);
            }
    </style>

</head>
<body>

    <div id="navbar">
            <p id="logo"><b>NURSING SERVICE SYSTEM</b></p> 
        </div>
        <ul>
            <li><a href="../../php/logout.php">Logout</a></li>
            <li><a href="#contact">Contact</a></li>

            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Profile</a>
                <div class="dropdown-content">
                <a href="../../views/Patient_view/patientprofile.php">My Profile</a>
                <a href="../../views/Patient_view/edit.php">Update My Profile</a>
                </div>
            </li>
            <li class="dropdown">
                <div class="dropdown-content">
                <a href="../../views/Patient_view/complain.php">Complains</a>
                </div>
            </li>
            <li><a href="moderatorhome.php">Home</a></li>
        </ul>

    <div>
        
        <div class="xml-input">
                <form method="POST" action='insertxml.php' id="txt">
                    <p id="txt">Add to Inventory</p><br>

                    Nurse Name:<br><input type="text" name="item_name"><br>
                    Hire price:<br><input type="text" name="item_cost"><br>
                    Working hour:<br><input type="text" name="item_recieved"><br>
                    Given hour:<br><input type="text" name="item_sold"><br>
                    <input type="submit" name="insert" Value="ADD"><br>
                </form>
            
            </div>
        
        <div class="table">
                
                <p id="txt"> Summery of Month February, 2021</p><br>
                
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Nurse name</th>
                            <th>Hire price</th>
                            <th>Working hour</th>
                            <th>Given hour</th>
                        <tr>
                    <thead>
                    <tbody>
                        <?php foreach ($xml->item as $itm) : ?>
                        <tr>
                            <td><?php echo $itm->name; ?></td>
                            <td><?php echo $itm->cost; ?></td>
                            <td><?php echo $itm->recieved; ?></td>
                            <td><?php echo $itm->sold; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        
    </div>

</body>
</html>