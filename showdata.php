<?php
  include 'databaseconnect.php';

$query = "SELECT * from formdata order by id";
$firms = $conn->query($query);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

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
    <td><?php echo $i;  ?></td>
    <td><?php  echo $firm['name'] ?></td>
    <td><?php  echo $firm['address'] ?></td>
    <td><?php  echo $firm['email'] ?></td>
    <td><?php  echo $firm['mobile'] ?></td>
    <td><?php  echo $firm['dob'] ?></td>
    <td><?php  echo $firm['gender'] ?></td>
    <td><button><a href="delete.php?id=<?php echo $firm['id'] ?>" target="_blank">Delete</button></a>
    <button><a href="update.php?iid=<?php echo $firm['id'] ?>" target="_blank">Update</button></a></td>
  </tr>
  <?php $i++; } ?>
  </tbody>
  </table>
  </div>   
</body>
</html>