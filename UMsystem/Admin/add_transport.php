<?php
session_start();
if($_SESSION['id'] == null){
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if(isset($_GET['logout'])){
    $login ->adminLogout();
}
$hostname="localhost";
$username="root";
$password="";
$dbname="umsystem";
$con=mysqli_connect($hostname,$username,$password,$dbname);
mysqli_select_db($con,'umsystem');
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $type=$_POST['type'];
    $t_number=$_POST['t_number'];
    $f_date=$_POST['f_date'];
    $route=$_POST['route'];
    $time=$_POST['time'];
    $mobile=$_POST['mobile'];



    $sql = "INSERT INTO `transport`( `name`, `type`, `t_number`, `f_date`, `route`, `time`, `mobile`) VALUES ('$name','$type','$t_number','$f_date','$route','$time','$mobile')";
     $query=mysqli_query($con,$sql);
    if($query){
        echo "select";
        header('Location: manage_transport.php');
    }
    else{
        die("not select".mysqli_error($con));
    }
}
?>
<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../asset/js/bootstrap.js"></script>
</head>
<body>
<?php include 'menu.php'  ?>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title">
                    <p align="center"><b><i>Transport Information</i></b></p>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Driver Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Transport Type </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Transport Type" name="type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Transport Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Number" name="Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label"> Expire Fitness Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control"  placeholder="Fitness" name="fitness">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Route</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Route" name="route">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Time</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Time" name="time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control"  placeholder="Mobile" name="mobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>


</body>
</html>


