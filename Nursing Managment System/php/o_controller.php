<?php 
	
	require_once('../php/session_header.php');
	require_once('../service/product_service.php');



    if(isset($_POST['submit_order'])){
        $product_id = $_POST['product_id'];
        $order_from = $_POST['order_from'];
		$customer_name = $_POST['customer_name'];
		$contact_number = $_POST['contact_number'];
		$order_date = $_POST['order_date'];
		$address = $_POST['address'];
		$user_id = $_POST['user_id'];
		// if(empty($product_id) ||empty($order_from) ||empty($customer_name) || empty($contact_number) ||empty($order_date) || empty($address) || empty($user_id)){
            if(($product_id=="") ||($order_from=="") ||($customer_name=="") || ($contact_number=="") ||($order_date=="") || ($address=="") || ($user_id=="")){
        
            ?>
            <html><br><html>
            <?php
            echo $product_id;
            ?>
            <html><br><html>
            <?php
            echo $order_from;
            ?>
            <html><br><html>
            <?php
            echo $customer_name;
            ?>
            <html><br><html>
            <?php
            echo $contact_number;
            ?>
            <html><br><html>
            <?php
            echo $order_date;
            ?>
            <html><br><html>
            <?php
            echo $address;
            ?>
            <html><br><html>
            <?php
            echo $user_id;




		}else{

			$purchase = [
                'product_id' => $product_id,
				'order_from' => $order_from,
                'user_id'=> $user_id,
                'order_date'=> $order_date,
				'customer_name'=> $customer_name,
				'contact_number' => $contact_number,
				'address'=> $address
                

			];

			$status = insertOrderPlace($purchase);

			if($status){
				header('location: ../views/Patient_view/purchase_history.php?success=done');
			}else{
				header('location: ../views/Patient_view/order_place.php?error=db_error');
			}
		}
	}
?>