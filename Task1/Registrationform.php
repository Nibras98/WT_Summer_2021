<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>
    <form>
    <table>
        <tr>
            <td><label for="fullname">Full Name:</label></td>
            <td><input type="text"placeholder="Enter Name"  name="fullname"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail:</label></td>
            <td><input type="text"  placeholder="Enter Email"  name="email"></td>
        </tr>
        <tr>
            <td><label for="pass">Password:</label></td>
            <td><input type="password"placeholder="Enter Password"  name="pass"></td>
        </tr>
        <tr>
            <td><label for="comment">Comment:</Label></td>
            <td><textarea name="comment" placeholder="Say SomeThing..."  cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td><label for="gender">Select YourGender:</label></td>
            <td>
                <input type="radio" name="gender" value="male">
                <label for="gender">Male</label>
                <input type="radio"  name="gender" value="female">
                <label for="gender">Female</label>
                <input type="radio"  name="gender" value="other">
                <label for="gender">Other</label>
            </td>
        </tr>
        <tr>
            <td><label for="hobby">Please Select Your Hobby:</label></td>
            <td>
                <input type="checkbox" name="hobby1" value="Playing">
                <label for="hobby1">Playing</label>
                <input type="checkbox" name="hobby2" value="Traveling">
                <label for="hobby2">Traveling</label>
                <input type="checkbox" name="hobby3" value="reading">
                <label for="hobby3">Reading</label>
            </td>
        </tr>
        <tr>
            <td><label for="Myfile">Please Choose a File:</label></td>
            <td><input type="file" name="myfile"></td>
        </tr>
        <tr>
            <td>
                <input type="Submit" value="Submit">
                <input type="Reset" value="Reset">
            </td>            
        </tr>
    </table>
    
    </form>
</body>
</html>