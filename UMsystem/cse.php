<?php

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>page</title>
    <!-- my -->
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../asset/js/bootstrap.js"></script>
    <!--    <link rel="stylesheet" href="../assets/css/style.css">-->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!---->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
        /*.navbar .dropdown-menu div[class*="col"] {*/
        /*    margin-bottom:1rem;*/
        /*}*/

        /*.navbar .dropdown-menu {*/
        /*    border:none;*/
        /*    background-color:white!important;*/
        /*}*/

        /*!* breakpoint and up - mega dropdown styles *!*/
        /*@media screen and (min-width: 992px) {*/

        /*    !* remove the padding from the navbar so the dropdown hover state is not broken *!*/
        /*    .navbar {*/
        /*        padding-top:0px;*/
        /*        padding-bottom:0px;*/
        /*    }*/

        /*    !* remove the padding from the nav-item and add some margin to give some breathing room on hovers *!*/
        /*    .navbar .nav-item {*/
        /*        padding:.5rem .5rem;*/
        /*        margin:0 .25rem;*/
        /*    }*/

        /*    !* makes the dropdown full width  *!*/
        /*    .navbar .dropdown {position:static;}*/

        /*    .navbar .dropdown-menu {*/
        /*        width:100%;*/
        /*        left:0;*/
        /*        right:0;*/
        /*        !*  height of nav-item  *!*/
        /*        top:45px;*/
        /*    }*/

        /*    !* shows the dropdown menu on hover *!*/
        /*    .navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {*/
        /*        display:block!important;*/
        /*    }*/

        /*    .navbar .dropdown-menu {*/
        /*        border: 1px solid rgba(0,0,0,.15);*/
        /*        background-color: #fff;*/
        /*    }*/

        /*}*/
        /*.thumbnail {*/
        /*    position:relative;*/
        /*    overflow:hidden;*/
        /*}*/

        /*.caption {*/
        /*    position:absolute;*/
        /*    top:0;*/
        /*    right:0;*/
        /*    background:rgba(90, 90, 90, 0.75);*/
        /*    width:100%;*/
        /*    height:100%;*/
        /*    padding:2%;*/
        /*    display: none;*/
        /*    text-align: left;*/
        /*    color:#fff !important;*/
        /*    z-index:2;*/
        /*}*/

    </style>
</head>
<body>
<div class="container-fluid">
    <nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand " href="https://www.bgctub-edu.net/php_files/standard/user_home/user_home.php?home=yes&tm=main"><img src="download.jpg"> </a>
            <div class="container">
                <a class="navbar-brand " href="index.php"><i class="fa fa-home"></i>Home </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link ml-5" href="https://www.bgctub-edu.net/php_files/standard/user_home/user_home.php?home=yes&tm=main"><i class="fa fa-institution"></i>  <span class="sr-only">(current)</span>University</a>
                        </li>

                        <li class="nav-item text-white ml-5">
                            <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Student
                            </a>

                        </li>
                        <li class="nav-item dropdown ml-5">
                            <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Teacher
                            </a>

                        </li>
                        <li class="nav-item dropdown ml-5">
                            <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Transport
                            </a>
                        </li>
                        <li class="nav-item dropdown ml-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Routing
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Admin/cse.php">CSE</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">LLB</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Pharmacy</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">English</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="add_routing.php">Add Routing</a>


                            </div>
                        </li>
                        <li class="nav-item dropdown ml-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Faculty
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="cse.php">CSE</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">LLB</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Pharmacy</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">English</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="add_routing.php">Add Routing</a>


                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </nav>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">

    </script>

    <script>
        $(document).ready(function(){

            //Apply the datatables plugin to your table
            $('#myTable').DataTable();

        });
    </script>
    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up
            $(window).resize(function(){
                if ($(window).width() >= 980){

                    // when you hover a toggle show its dropdown menu
                    $(".navbar .dropdown-toggle").hover(function () {
                        $(this).parent().toggleClass("show");
                        $(this).parent().find(".dropdown-menu").toggleClass("show");
                    });

                    // hide the menu when the mouse leaves the dropdown
                    $( ".navbar .dropdown-menu" ).mouseleave(function() {
                        $(this).removeClass("show");
                    });

                    // do something here
                }
            });



// document ready
        });
    </script>

    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>

<section>
    <div class="container">
        <div class="row">

            <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
            <table id="tdtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

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
            <table id="tdtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

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
            <table id="tdtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

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
            <table id="fdtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

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
            <table id="fdtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

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

    <div class="container-fluid padding bg-dark" style="color:white">
        <div class="row text-center ">
            <div class="col-md-4">
                <img src="download.jpg">
                <hr class="bg-light">
                <p>01531-584509</p>
                <p>abdullahaltushar12@gmail.com</p>
                <p>chittagong</p>
            </div>
            <div class="col-md-4">
                <h3>helpline</h3>
                <hr class="bg-light">
                <p>01531-bbbbbb</p>
                <p>01531-bbbbbb</p>
            </div>
            <div class="col-md-4">

                <h3>Register</h3>
                <hr class="bg-light">
                <p>018aa-aaaaaa</p>
                <p>015aa-gggggg</p>
            </div>
        </div>
    </div>


    <script>

    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

</body>
</html>




