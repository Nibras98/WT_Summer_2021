<php
$data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->lastName;
 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	
?>