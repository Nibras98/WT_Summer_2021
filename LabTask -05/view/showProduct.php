<?php
    include "../model/db.php";
    error_reporting(0);
	$connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery1=$connection->showProduct($conobj,"product",$_REQUEST["srch_product"]);
?>
<!DOCTYPE HTML>
<html lang="en">
		<head>
			<title>
				Product Information
			</title>
		</head>
	<body>
    
	
<form action="" method="post">
<table  align='center'>	
			<tr>
			<td>Search by Category :</td>
			<td><input type="text" name= 'srch_product'> 
			</tr>
			<tr><td align='center'><br><input type="submit" name="search" value="Search"></td></tr>
        
    </form>
	<table align='center' >
			<thead>
				<tr>
					<th>Id</th>
					<th>Product Name</th>
					<th>Description </th>
					<th>Category</th>
					<th>Price</th>
                    <th>Image</th>
				</tr>
			</thead>
			
			<tbody>
                <?php
					while($row = $userQuery1->fetch_assoc()){
				?>
				<tr>
					
					<td><?php echo $row['P_id']; ?></td>
					<td><?php echo $row['P_Name']; ?></td>
					<td><?php echo $row['P_Desc']; ?></td>
					<td><?php echo $row['P_Category']; ?></td>
					<td><?php echo $row['P_Price']; ?> </td>
                    <td><img src="<?php echo $row['P_Picture'];?>" width="100px" alt=""> </td>
				</tr>
				<?php } ?>
			<tbody>	
		</table>
		<h3 align='center'><a href="pageone.php">Back</a></h3>
    <h3 align='center'><button> <a href="showAllProduct.php">Show All Product</a> </button></h3>
	</body>
</html>