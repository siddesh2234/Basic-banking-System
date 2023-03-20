<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparks Bank | History</title>
  <link rel="icon" href="./img/icon_bank.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/style1.css">
  <link rel="stylesheet"  href="css/resnavbar.css">

</head>

<body style="height:100%;background-color: #11545e;margin:0 0;">
  <div class="containe">
    <!----------NAVIGATION BAR---------->
    <div class="resnavbar">
      <!-- LOGO -->
      <div class="reslogo">Banking System</div>
      <!-- NAVIGATION MENU -->
      <ul class="resnav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <!-- NAVIGATION MENUS -->
        <div class="resmenu">
          <li><a href="index.html" style="text-decoration: none;">Home</a></li>
          <li><a href="#" style="text-decoration: none;">About</a></li>
          <li><a href="#" style="text-decoration: none;">Services</a></li>
          <li><a href="#" style="text-decoration: none;">Customers</a></li>
          <li><a href="#" style="text-decoration: none;">Contact Me</a></li>
        </div>
      </ul>
    </div>


    <?php  
      echo '<h1 class="intro" style="letter-spacing: 2px; font-weight: bold;"><center>Transaction History</center></h1>';
      echo '<table class="listtable table-light table  table-striped table-hover mt-2"  style="opacity: 0.9; width: 78%; margin: auto;">
      <tr class="table-dark">
          <th>ID</th>
          <th>Sender</th>
          <th>Receiver</th>
          <th>Amount (in &#8377;)</th>
      </tr>';
          $server = "localhost";
          $username = "root";
          $password = "";
          $database = "bank_system";
          // Create a database connection
          $con = mysqli_connect($server, $username, $password, $database);

          // Check for connection success
          if(!$con){
              die("connection to this database failed due to" . mysqli_connect_error());
          }
            
          $sql = "SELECT his_id,sender,reciever,amount FROM history;";
          
          // Execute the query
              $result=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($result)){
                  // var_dump($row);
                  echo '<tr>
                  <td>'.$row["his_id"].'</td>
                  <td>'.$row["sender"].'</td>
                  <td>'.$row["reciever"].'</td>
                  <td>'.$row["amount"].'</td>
              </tr>';
                }

          echo'
          </table>';
    ?><br>
  </div>
  <!----------FOOTER---------->
  <!-- <footer id="footer">
    <p id="p1">&copy; Copyright 2021 <span class="footer_logo">Basic Banking System</span></p>
    <div class="social-icon">
      <a href="https://www.linkedin.com/in/aman-jaiswal-6b8b94211/"><i class="fab fa-linkedin-in"></i></a>
      <a href="mailto: amanjais160@gmail.com"><i class="fas fa-envelope"></i></i></a>
    </div>
  </footer> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/50b1d2491c.js" crossorigin="anonymous"></script>

</body>

</html>