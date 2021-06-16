<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $formdata = array(
        'name'=> $_POST['fname'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'comment'=> $_POST['comment'],
        'gender'=> $_POST['gender'],
        'hobby' => $_POST['hobby'],
       
        );
        $existingdata = file_get_contents('data.json');
        $tempJSONdata = json_decode($existingdata, true);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        if(file_put_contents("data.json", $jsondata)){
            echo 'Data successfully saved.';
        } else{
            echo "No data saved";
        }
       
    }
?>