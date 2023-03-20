<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank | History</title>
    <link rel="icon" href="./img/icon_bank.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/resnavbar.css">

    
  </head>

  <body style="height:100%;background-color: #11545e;margin:0 0;">
    <div class="containe" >
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
        echo '<h1 class="intro" style="letter-spacing: 2px; font-weight: bold;"><center>Customer Details</center></h1>';
        echo '<table class="listtable table-light table  table-striped table-hover mt-2"  style="opacity: 0.9; width: 80%; margin: auto; ">
          <tr class="table-dark">
              <th>ID</th>
              <th>Name</th>
              <th>E-mail</th>
              <th>Balance (in &#8377;)</th>
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
          
        $sql = "SELECT id,Name,email,balance FROM customer;";
        $sql1 = "SELECT Name FROM customer;";
        
        // Execute the query
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($result)){
                // var_dump($row);
                echo '<tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["Name"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["balance"].'</td>
                </tr>';
            }
            echo'</table>';
      ?> <br>
      <hr/>

      <h1 class="text-center font-weight-bold mb-5"><img src="https://e7.pngegg.com/pngimages/309/810/png-clipart-indian-rupee-sign-computer-icons-currency-symbol-icon-design-rupee-angle-text-thumbnail.png" width="30" height="30"> Transfer Money <img src="https://e7.pngegg.com/pngimages/309/810/png-clipart-indian-rupee-sign-computer-icons-currency-symbol-icon-design-rupee-angle-text-thumbnail.png" width="30" height="30"></h1>
      <form action="select.php" method="POST" style="text-align:center">
        <label class="choose" style="color: white; font-size: 1rem; font-weight: 500;">Customer Name &#40;Sender&#41;: </label>
        <select id="cus" name="cus" style="width: 18%; height: 26px; margin-left: 8px;">
          <?php $result1=mysqli_query($con,$sql1); ?>
          <?php while($row1=mysqli_fetch_array($result1)):; ?>
          <option value="<?php echo $row1[0]; ?>">
            <?php echo $row1[0]; ?>
          </option>
          <?php endwhile ;
            $con->close();
          ?>
        </select><br>
        
        <div>
          <button class="btn btn-info btn-sm col-lg-2" style="margin-top:20px;">Select</button>
        </div>
      </form>
      <br><br>
    </div>


    <script src="https://kit.fontawesome.com/50b1d2491c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>