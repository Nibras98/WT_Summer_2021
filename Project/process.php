<?php
	   $formdata = array(
        'name'=> $_POST['fname'],
        'contact'=> $_POST['contact'],
        'Serial' => $_POST['serial'],
        'Time'=> $_POST['time'] ,
        'Payment'=> $_POST['payment'],
        'Problem'=> $_POST['problem'],
    );
       $existingdata = file_get_contents('Json/details.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
    
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("Json/details.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("Json/details.json");
	 $mydata = json_decode($data);
?>