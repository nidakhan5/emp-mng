<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  
   <!-- PHP -->
    <?php
     include("connection.php");
     ?>

    <title>Project</title>
  </head>
<body>

      


  <div class="container EMS">
   <h1>Employee Management System</h1>
   <h3> Register yourself <h3>

   
</div>
  <div class="container formbg">
      <form action="" method="POST">
        <div class="form">
             <input type="text" name="ID" class="textfield" placeholder="ID">
             <input type="text" name="name" class="textfield" placeholder="Employee Name">
            <select class="textfield" name="gender">
            <option>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>others</option>
            </select>


             <input type="text" name="email" class="textfield" placeholder="Email Address">
             <select class="textfield" name="depart">
            <option>Select Department</option>
            <option>Finanace</option>
            <option>Human Resource</option>
            <option>Managemnet</option>
            </select>
             
            <textarea class="textfield" placeholder="Address" name="address">

            </textarea>
            
        </div>
        
       
        <button type="submit" name="search" class="btn btn-primary">Search</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
        <button type="submit" name="del" class="btn btn-primary">Delete</button>
      </form>
  </div>
</body>
</html>

<?php
if (isset($_POST['save']))
{
  $name         =$_POST['name'];
  $gender       =$_POST['gender'];
  $emailaddress =$_POST['email'];
  $department   =$_POST['depart'];
  $address      =$_POST['address'];

  $query= "INSERT INTO register (name, gender, email, department, address) VALUES('$name','$gender','$emailaddress ','$department','$address')";
  
  $data=mysqli_query($conn,$query);
  if($data){
    echo "data saved";
  }
  else{
    echo "data not saved";
  }

}

?>
