<?php

$file = "../json/painfo.json";

$mainjson = file_get_contents($file);

$data = json_decode($mainjson, true);

foreach ($data as $key => $d) {
   
    if ($d['nid'] === $_POST["nid"]) {
        
        array_splice($data, $key, 1);
    }
}


 
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


$save = file_put_contents($file, $jsonfile);


$data = file_get_contents("../json/painfo.json");
$mydata = json_decode($data);



foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
   echo $key    .$value."<br>";
   

} 

}
?>