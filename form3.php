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

    // varifitiondata
    $sqlu = "SELECT * FROM formdata WHERE mobile='$mobile' OR email='$email' "; 
    $resultu = $conn->query($sqlu);
    if ($resultu->num_rows > 0) 
    {
        echo "<script>alert('This Email Or Phone Already Registered');</script>"; 
    }
    else
    { 
        // insert data
   $sql = "INSERT INTO  `formdata`(name,address,gender,mobile,dob,email,password) VALUES 
    ('$name','$address','$gender','$mobile','$age','$email','$password' )";
    //IF VALUE ADD IN  DATABASE AUR NOT
    if ($conn->query($sql) === TRUE) {
        echo "form is sumbited";}
    }
}

$conn->close();
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
        <input type="text" name="name" id="name" class="name" value=""  required placeholder="Enter your Name"></br></br>
        Address :-
        <input type="text" name="address" id="address" class="address" value=""  required placeholder="Enter your Address"></br></br>
        Gender:-
        <input type="radio" name="gender" value="" required>Female
        <input type="radio" name="gender" value="" required>Male
        <input type="radio" name="gender" value="<" required >Other</br></br>
        D.O.B:-
        <input type="date" name="dob" id="dob" class="dob" value="  required placeholder="enter your Birth Of Date"></br></br>
        Mobile no:-
        <input type="number" name="mobile" id="mobile" value=""  required></br></br>
        Email id:-
        <input type="email" name="email" id="email" class="email" value=""  required placeholder="Enter your Email id"></br></br>
        Password:-
        <input type="password" name="password" id="password" class="password" value=""  required placeholder="Make your Password"></br></br>
        <input type="submit" name="submit" ></br></br>
    </form>
    <button>Data Print<a href="showdata.php" target="_blank" style="text-decoration: none; color:  rgb(90, 156, 23);"></button></a>
</div>

<div class="container">
  <h2>Details</h2>
  <p>Detila of form data of name, address, Mobile.no, email, age ,gender list in Table </p>
  <table class="table table-bordered">
  <thead>
    <tr class="w3-light-grey w3-hover-red">
     <th>SrNo</th>
      <th>Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>MobileNo</th>
      <th>Date Of Birth</th>
      <th>Gender</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; while ($firm = $firms->fetch_assoc()) { ?>
  <tr class="w3-hover-green">
    <td><?php  echo $i;  ?></td>
    <td><?php  echo $firm['name'] ?></td>
    <td><?php  echo $firm['address'] ?></td>
    <td><?php  echo $firm['email'] ?></td>
    <td><?php  echo $firm['mobile'] ?></td>
    <td><?php  echo $firm['dob'] ?></td>
    <td><?php  echo $firm['gender'] ?></td>
    <td><form><input type="submit" name="Delete"/><input type="submit" name="Update"/></form></td>
  </tr>
  <?php $i++; } ?>
  </tbody>
  </table>
  </div>   
</body>
</html>