<?php
include 'databaseconnect.php';

if(isset($_GET['iid']))  {
    $id= $_GET['iid'];
}

if(isset($_POST['submit'])) 
 {
    $id= $_GET['iid'];
    $name = $_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $age = $_POST['dob'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password =$_POST['password'];

    $sql = 'UPDATE formdata SET name="'.$name.'", email="'.$email.'",address="'.$address.'",gender="'.$gender.'",mobile="'.$mobile.'",dob="'.$age.'", password="'.$password.'" where `id`="'.$id.'"'; 
    $conn->query($sql);
    if ($conn->query($sql) === TRUE) 
    {
        
        echo "<script>alert('Profile Update Sucessfully')</script>";
        $msg = 'Profile Update Sucessfully';
        $msgClass = '1';
    } else {
        echo "Error updating record: " . $conn->error;
    }

}
    $id= $_GET['iid'];
    $sqlgt = "SELECT * FROM formdata WHERE id='$id'";
	$resultgt = mysqli_query($conn, $sqlgt);
	$firmgt = mysqli_fetch_array($resultgt);
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
        <input type="text" name="name" id="name" class="name" value="<?php echo $firmgt['name']; ?>"  required placeholder="Enter your Name"></br></br>
        Address :-
        <input type="text" name="address" id="address" class="address" value="<?php echo $firmgt['address']; ?>"  required placeholder="Enter your Address"></br></br>
        Gender:-
        <input type="radio" name="gender" value="<?php echo $firmgt['gender'];?>" required>Female
        <input type="radio" name="gender" value="<?php echo $firmgt['gender'];?>" required>Male
        <input type="radio" name="gender" value="<?php echo $firmgt['gender'];?>" required >Other</br></br>
        D.O.B:-
        <input type="date" name="dob" id="dob" class="dob" value="<?php echo $firmgt['dob']; ?>"  required placeholder="enter your Birth Of Date"></br></br>
        Mobile no:-
        <input type="number" name="mobile" id="mobile" value="<?php echo $firmgt['mobile']; ?>"  required></br></br>
        Email id:-
        <input type="email" name="email" id="email" class="email" value="<?php echo $firmgt['email']; ?>"  required placeholder="Enter your Email id"></br></br>
        Password:-
        <input type="password" name="password" id="password" class="password" value="<?php echo $firmgt['password']; ?>"  required placeholder="Make your Password"></br></br>
        <input type="submit" name="submit"></br></br>
    </form>
    <button><a href="showdata.php" target="_blank" style="text-decoration: none; color:  rgb(90, 156, 23);">Data Print</a></button>
</div>


</body>

</html>