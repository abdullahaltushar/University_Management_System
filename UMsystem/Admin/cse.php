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

$con=mysqli_connect('localhost','root','','umsystem');
$sql="SELECT * FROM `routing` WHERE day='saturday' AND department='cse'";
mysqli_select_db($con,'umsystem');
$query=mysqli_query($con,$sql);
if($query){
//    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
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

    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
    </style>
</head>
<body>
<?php include 'menu.php'  ?>
<section>
    <div class="container">
        <div class="row">

            <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <thead class="thead-dark">
                <h4 class="bg-dark text-white"  style="margin-left: 450px;">Sunday</h4>
                <tr align="center" >
                    <th scope="col">semester</th>
                    <th scope="col">9.20-10.20</th>
                    <th scope="col">10.21-11.20</th>
                    <th scope="col">11.21-12.20</th>
                    <th scope="col">12.21-1.20</th>
                    <th scope="col">1-21-1.40</th>
                    <th scope="col">1.41-2.35</th>
                    <th scope="col">2.36-3.30</th>
                </tr>
                </thead>
                <tbody>
                <?php while($result=mysqli_fetch_assoc($resource_id)){ ?>
                    <tr>
                        <td><?php  echo $result['semester'];?></td>
                        <td><?php  echo $result['period_1'];?></td>
                        <td><?php  echo $result['period_2'];?></td>
                        <td><?php  echo $result['period_3'];?></td>
                        <td><?php  echo $result['period_4'];?></td>
                        <td>Break</td>
                        <td><?php  echo $result['period_5'];?></td>
                        <td><?php  echo $result['periopd_6'];?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>



        </div>
    </div>
</section>
<?php
$con=mysqli_connect('localhost','root','','umsystem');
$sql="SELECT * FROM `routing` WHERE day='monday' AND department='cse'";
mysqli_select_db($con,'umsystem');
$query=mysqli_query($con,$sql);
if($query){
//    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
}

?>
<section>
    <div class="container">
        <div class="row">

            <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <thead class="thead-dark">
                <h4 class="bg-dark text-white"  style="margin-left: 450px;">Monday</h4>
                <tr align="center" >
                    <th scope="col">semester</th>
                    <th scope="col">9.20-10.20</th>
                    <th scope="col">10.21-11.20</th>
                    <th scope="col">11.21-12.20</th>
                    <th scope="col">12.21-1.20</th>
                    <th scope="col">1-21-1.40</th>
                    <th scope="col">1.41-2.35</th>
                    <th scope="col">2.36-3.30</th>
                </tr>
                </thead>
                <tbody>
                <?php while($result1=mysqli_fetch_assoc($resource_id)){ ?>
                    <tr>
                        <td><?php  echo $result1['semester'];?></td>
                        <td><?php  echo $result1['period_1'];?></td>
                        <td><?php  echo $result1['period_2'];?></td>
                        <td><?php  echo $result1['period_3'];?></td>
                        <td><?php  echo $result1['period_4'];?></td>
                        <td>Break</td>
                        <td><?php  echo $result1['period_5'];?></td>
                        <td><?php  echo $result1['periopd_6'];?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>



        </div>
    </div>
</section>
<?php
$con=mysqli_connect('localhost','root','','umsystem');
$sql="SELECT * FROM `routing` WHERE day='tuesday' AND department='cse'";
mysqli_select_db($con,'umsystem');
$query=mysqli_query($con,$sql);
if($query){
//    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
}

?>
<section>
    <div class="container">
        <div class="row">

            <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <thead class="thead-dark">
                <h4 class="bg-dark text-white"  style="margin-left: 450px;">Tuesday</h4>
                <tr align="center" >
                    <th scope="col">semester</th>
                    <th scope="col">9.20-10.20</th>
                    <th scope="col">10.21-11.20</th>
                    <th scope="col">11.21-12.20</th>
                    <th scope="col">12.21-1.20</th>
                    <th scope="col">1-21-1.40</th>
                    <th scope="col">1.41-2.35</th>
                    <th scope="col">2.36-3.30</th>
                </tr>
                </thead>
                <tbody>
                <?php while($result2=mysqli_fetch_assoc($resource_id)){ ?>
                    <tr>
                        <td><?php  echo $result2['semester'];?></td>
                        <td><?php  echo $result2['period_1'];?></td>
                        <td><?php  echo $result2['period_2'];?></td>
                        <td><?php  echo $result2['period_3'];?></td>
                        <td><?php  echo $result2['period_4'];?></td>
                        <td>Break</td>
                        <td><?php  echo $result2['period_5'];?></td>
                        <td><?php  echo $result2['periopd_6'];?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>



        </div>
    </div>
</section><?php
$con=mysqli_connect('localhost','root','','umsystem');
$sql="SELECT * FROM `routing` WHERE day='wednesday' AND department='cse'";
mysqli_select_db($con,'umsystem');
$query=mysqli_query($con,$sql);
if($query){
//    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
}

?>
<section>
    <div class="container">
        <div class="row">

            <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <thead class="thead-dark">
                <h4 class="bg-dark text-white"  style="margin-left: 450px;">Wednesday</h4>
                <tr align="center" >
                    <th scope="col">semester</th>
                    <th scope="col">9.20-10.20</th>
                    <th scope="col">10.21-11.20</th>
                    <th scope="col">11.21-12.20</th>
                    <th scope="col">12.21-1.20</th>
                    <th scope="col">1-21-1.40</th>
                    <th scope="col">1.41-2.35</th>
                    <th scope="col">2.36-3.30</th>
                </tr>
                </thead>
                <tbody>
                <?php while($result3=mysqli_fetch_assoc($resource_id)){ ?>
                    <tr>
                        <td><?php  echo $result3['semester'];?></td>
                        <td><?php  echo $result3['period_1'];?></td>
                        <td><?php  echo $result3['period_2'];?></td>
                        <td><?php  echo $result3['period_3'];?></td>
                        <td><?php  echo $result3['period_4'];?></td>
                        <td>Break</td>
                        <td><?php  echo $result3['period_5'];?></td>
                        <td><?php  echo $result3['periopd_6'];?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>



        </div>
    </div>
</section>
<?php
$con=mysqli_connect('localhost','root','','umsystem');
$sql="SELECT * FROM `routing` WHERE day='thursday' AND department='cse'";
mysqli_select_db($con,'umsystem');
$query=mysqli_query($con,$sql);
if($query){
//    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
}

?>
<section>
    <div class="container">
        <div class="row">

            <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <thead class="thead-dark">
                <h4 class="bg-dark text-white"  style="margin-left: 450px;">Thursday</h4>
                <tr align="center" >
                    <th scope="col">semester</th>
                    <th scope="col">9.20-10.20</th>
                    <th scope="col">10.21-11.20</th>
                    <th scope="col">11.21-12.20</th>
                    <th scope="col">12.21-1.20</th>
                    <th scope="col">1-21-1.40</th>
                    <th scope="col">1.41-2.35</th>
                    <th scope="col">2.36-3.30</th>
                </tr>
                </thead>
                <tbody>
                <?php while($result4=mysqli_fetch_assoc($resource_id)){ ?>
                    <tr>
                        <td><?php  echo $result4['semester'];?></td>
                        <td><?php  echo $result4['period_1'];?></td>
                        <td><?php  echo $result4['period_2'];?></td>
                        <td><?php  echo $result4['period_3'];?></td>
                        <td><?php  echo $result4['period_4'];?></td>
                        <td>Break</td>
                        <td><?php  echo $result4['period_5'];?></td>
                        <td><?php  echo $result4['periopd_6'];?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>



        </div>
    </div>
</section>
<script>

    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>




