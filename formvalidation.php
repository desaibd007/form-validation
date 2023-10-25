<?php
  include 'databaseconnect.php';
    
    if(isset($_POST['submit']))  {
    $name = $_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $age = $_POST['dob'];
    $mobile=$_POST['mobile'];
    
    $email=$_POST['email'];
    $password =$_POST['password'];

    $sqlu = "SELECT * FROM formdata WHERE mobile='$mobile' OR email='$email' "; 
    $resultu = $conn->query($sqlu);
    if ($resultu->num_rows > 0) 
    {
        echo "<script>alert('This Email Or Phone Already Registered');</script>"; 
    }
    else
    { 
   $sql = "INSERT INTO  `formdata`(name,address,gender,mobile,dob,email,password) VALUES 
    ('$name','$address','$gender','$mobile','$age','$email','$password' )";
    //IF VALUE ADD IN  DATABASE AUR NOT
    if ($conn->query($sql) === TRUE) {
        echo "form is sumbited";}
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
<div class="div1">
    <form method="post">
        <H1>Plase Enter your Detile the Enter this Form Validation</H1>
        Full Name :-
        <input type="text" name="name" id="name" class="name" required placeholder="Enter your Name"></br></br>
        Address :-
        <input type="text" name="address" id="address" class="address" required placeholder="Enter your Address"></br></br>
        Gender:-
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="other" required >Other</br></br>
        D.O.B:-
        <input type="date" name="dob" id="dob" class="dob" required placeholder="enter your Birth Of Date"></br></br>
        Mobile no:-
        <input type="number" name="mobile" id="mobile" required></br></br>
        Email id:-
        <input type="email" name="email" id="email" class="email" required placeholder="Enter your Email id"></br></br>
        Password:-
        <input type="password" name="password" id="password" class="password" required placeholder="Make your Password"></br></br>
        <input type="submit" name="submit"></br></br>
    </form>
    <button><a href="showdata.php" target="_blank" style="text-decoration: none; color:  rgb(90, 156, 23);">Data Print</a></button>
</div>


</body>

</html>
