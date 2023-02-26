<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Spaceship Titanic </title>
  <link rel="stylesheet" href="materialize.css">
</head>

<body background="a.jpg" style="background-position: center;
background-repeat: no-repeat;
background-size: cover;">
  <nav class="light-blue lighten-1" role="navigation">
    

    
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">TEAM - CODEX</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">MAKEATHON5</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 style="font-weight: bold;" class="header center orange-text">Lost Passenger Predictor</h1>
      <div class="row center">
        <h5 style="font-weight: bold;" class="header col s12 light">Predict whether the passenger is transported or not !
        <br>
        </h5>
      </div>

              <div class="row">
    <form action="" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s4">
            <label style=" color:white;"for="first_name"><b>Passenger ID</b></label>
            <br>
          <input   name='id' type="text" class="validate">
        </div>

      </div>

      <div class="row center">

          <button name ="search" type="submit" class="btn-large waves-effect waves-light orange">Predict Probability</button>
      </div>
    </form>
      </div>

    </div>
  </div>


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'spaceship');

if(isset($_POST['search']))
{
    $id = $_POST['id'];
    $query = "SELECT * FROM result where id ='$id' ";
    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <form action = "" method="POST">
            
            <input style="color: aliceblue; text-align:center; font-size:30px" type = "text" name="transported" value="<?php echo $row['transported'] ?>"/>
        </form>
        <?php
    }
}
?>  

  </body>
</html>