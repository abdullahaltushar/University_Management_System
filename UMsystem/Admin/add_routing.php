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

    $semester = $_POST['semester'];
    $day=$_POST['day'];
    $department=$_POST['department'];
    $period1=$_POST['period_1'];
    $period2=$_POST['period_2'];
    $period3=$_POST['period_3'];
    $period4=$_POST['period_4'];
    $period5=$_POST['period_5'];
    $period6=$_POST['period_6'];



    $sql = "INSERT INTO `routing`( `department`, `semester`, `day`, `period_1`, `period_2`, `period_3`, `period_4`, `period_5`, `periopd_6`) VALUES ('$department','$semester','$day','$period1','$period2','$period3','$period4','$period5','$period6')";
      $query=mysqli_query($con,$sql);
    if($query){
        echo "select";
//        header('Location: manage_teacher.php');
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
                    <p align="center"><b><i>Class Routing</i></b></p>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Department" name="department">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Semester" name="semester">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Day</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="day" name="day">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">period_1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Subject" name="period_1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">period_2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Subject" name="period_2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">period_3</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Subject" name="period_3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">period_4</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Subject" name="period_4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">period_5</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Subject" name="period_5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">period_6</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  placeholder="Subject" name="period_6">
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


