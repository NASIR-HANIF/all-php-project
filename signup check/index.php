
<?php
$db = new mysqli('localhost','root','','user_information');

if($db -> connect_error){
  echo 'database not connected';
}else{
  $getData = "SELECT * FROM users";
  $response = $db ->query($getData);
  
}
$response;

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- font owsem  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" 
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <title>signup form</title>
</head>

<body>
  <div class="container-lg container-sm">
    <div class="row my-5 ">
      <div class="col-12 shadow p-3 mb-5 bg-body rounded">
        <h2 class="text-center text-danger">Signup Form</h2>
        <form >
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="uname" class="form-control" placeholder="Enter Your Name">
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="tel" name="umobile" class="form-control" placeholder="Enter Your Mobile">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="username" id="email" class="form-control" placeholder="Enter Your Email">
            <span id="email-msg"></span>
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">password</label>
            <input type="password" name="upassword" class="form-control" placeholder="Enter Your password">
          </div>
          <div align="center">
            <input type="submit" value="Sign Up" class="w-50 p-2  btn btn-info fw-bold text-white">
          </div>
        </form>

      </div>
    </div>
  </div>
 <div class="container">
  <div class="row">
    <div class="col-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Reg date</th>
    </tr>
  </thead>
  <tbody>
    <?php

    while($data = $response ->fetch_assoc()){
      echo "
      <tr>
       <th>".$data['id']."</th>
       <td>".$data['name']."</td>
       <td>".$data['username']."</td>
       <td>".$data['password']."</td>
       <td>".$data['reg_date']."</td>
     </tr> 
     ";
    } 
    ?>
   
    
  </tbody>
</table>
    </div>
  </div>
 </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

    <script src="./js/main.js"></script>
</body>

</html>
