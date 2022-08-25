<?php
include "Config.php";


//create a user form to enter data
if (isset($_POST['submit'])){

//create all the varibles and tell them that they will be posting data
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];

// insert values to the table
$sql= "INSERT INTO  'users' ('firstname' ,'lastname', 'email','password','gender') VALUES ('$first_name', 
'$last_name','$email' , '$password', '$gender')";

//connect to the database  , the "query" performs the query against the database
$result=$conn->query($sql);

// you want to display the successful text if records were entered successfully
if($result==TRUE){

    echo "Records created successfully";
}
else{
    //you want to display the error message if records were not successfully added
    echo "Error: ".$sql. "<br>". $conn->Error;

}

$conn->close();

}
?>
<!DOCTYPE html>
<html>

<body>
    <h2> Sign Up form</h2>
    <form action="" method="POST">

    <fieldset> 

         <legend> Personal Information</legend>
         First Name: <br>
         <input type="text" name="firstname">
         <br>

         Last Name: <br>
         <input type="text" name="lastname">
         <br>

         Email: <br>
         <input type="text" name="email">
         <br>

         Password: <br>
         <input type="text" name="password">
         <br>

         Gender: <br>
         <input type="radio" name="gender" value="Male"> Male
         <input type="radio" name="gender" value="Female"> Female

         <br><br>

         <input type="submit" name="submit" value="submit">

    </fieldset>
    </form>
</body>

</html>