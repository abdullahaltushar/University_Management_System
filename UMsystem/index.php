
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
                           <i class="fa fa-child"></i> Student
                        </a>

                    </li>
                    <li class="nav-item dropdown ml-5">
                        <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-book"></i>  Teacher
                        </a>

                    </li>
                    <li class="nav-item dropdown ml-5">
                        <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bus"></i> Transport
                        </a>
                    </li>
                    <li class="nav-item dropdown ml-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-book"></i>  Routing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cse.php">CSE</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">LLB</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Pharmacy</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">English</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown ml-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-building"></i>  Faculty
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="cse.php">CSE</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">LLB</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Pharmacy</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">English</a>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</nav>

    <!--- carosol ---->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="about.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark font-weight-bold">University Area</h5>
                    <p>we love campus</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="IMG-20190903-WA0040.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark font-weight-bold">29th batch (otulon)</h5>
                    <p>captai</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="IMG-20190903-WA0063.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark font-weight-bold">29th batch (otulon)</h5>
                    <p>captai</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--section-->
    <h1 class="text-success text-center font-weight-bold">CSE Class Routing</h1>
    <h4 align="center"><a href="https://drive.google.com/open?id=1-_x03irR7FF1OsNph1jtmTgKFhjqsksZ" >download</a></h4>
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
    <section>
        <div class="container">
            <div class="row">

                <!--        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">-->
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                    <thead class="thead-dark">
                    <h4 class="bg-dark text-white"  style="margin-left: 480px;">Sunday</h4>
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
                    <h4 class="bg-dark text-white"  style="margin-left: 480px;">Monday</h4>
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
                    <h4 class="bg-dark text-white"  style="margin-left: 480px;">Tuesday</h4>
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
                    <h4 class="bg-dark text-white"  style="margin-left: 480px;">Wednesday</h4>
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
                    <h4 class="bg-dark text-white"  style="margin-left: 480px;">Thursday</h4>
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

<div class="container">
    <div class="card-group ">
        <div class="card border-0 col-4">
            <div class="card-title">
                <h6 class="text-centter text-dark font-weight-bolder ml-1">Message from Founder and Chairman</h6>
                <div style="border-top: 6px solid green;"></div>
            </div>
            <div class="card-body">
                <img src="13.jpg"   style="border: 3px solid yellow;">
                <p class="card-text ">Ensuring education and health care facilities  every individual are two of the major objectives to achieve by an ideal welfare state, obviously because every individual can expect to enjoy these two facilities as his or her basic right. Being imbued with the noble spirit of patriotism and the liberation war, I, along with my wife Hasna Ahmad, establishd “Begum Gul Chemonara Trust”- a philanthropic venture in 1982, in a place covering one hundred areas of land beside Chittagong-Cox’s bazar Highway, which is only 34 km away from Chittagong city and named it after my late and benevolent mother with the only objectives of extending education....<a href="" class="font-weight-bold text-dark">See more</a> </p>
            </div>
            <div class="card-footer">
                <a href="" class="text-dark font-weight-bold bg-light">Engr. Afsar Uddin Ahmad ,<br>
                    Chairman, Board of Trustees</a>
            </div>
        </div>
         <div class="card col-4 border-0">

                <div class="card-title">
                    <h5 class="text-centter text-dark font-weight-bolder ml-1">Message from Vice Chancellor</h5>
                    <div style="border-top: 6px solid green;"></div>
                </div>
                <div class="card-body">
                    <img src="14.jpg" style="border: 3px solid yellow;">
                    <p class="card-text">Welcome to BGC Trust University Bangladesh, a dynamic place for higher education. The university is the only rural based private university in the country situated at its own campus at the outskirts of Chittagong port city popularly known as BGC Biddyanagar, Chandanaish, Chittagong with all modern campus facilities. The university is committed to achieving academic excellence in research and academic scholastic.   The university was founded by a philanthropist Engr. Afsar Uddin Ahmad who has a commitment to the soil as a front line freedom fighter to provide education and to develop individuals, entrepreneurs to face the challenge of globalizati.....<a href="" class="font-weight-bold text-dark">See more</a> </p>
                </div>
                <div class="card-footer">
                    <a href="" class="text-dark font-weight-bold bg-light">Professor Dr. Saroj Kanti Singh Hazari
                    <br>
                        Vice chancellor </a>
                </div>
         </div>
                <div class="card border-0 col-4">
                    <div class="card-title">
                        <h5 class="text-centter text-dark font-weight-bolder ml-1">Message from Vice Chancellor</h5>
                        <div style="border-top: 6px solid green;"></div>
                    </div>
                    <div class="card-body">
                        <img src="6691.jpg" style="border: 3px solid yellow;">
                        <p class="card-text">The establishment of BGC Trust University Bangladesh is a decisive step towards transformation of mere human population into human resources in terms of knowledge, skill and diversification. BGC Trust University is committed to achieve excellence in research and academic scholastic. In order to maximize the resources available for learning, teaching and research, the University has developed a collaborative links with other educational institutions with global reputation. BGC Trust University is attested with the highest level of accreditation. It is approved by the Government, Ministry of Education and University Grants Commission (UGC) of Bangladesh. ....<a href="" class="font-weight-bold text-dark" >See more</a></p>
                    </div>

                </div>

          </div>
</div>







    <!---section---->
    <div>
        <h1 class="gv ml-auto mr-auto text-success font-weight-bold text-center" style="font-size:30px;">Student Data </h1>


        <?php
        $hostname='localhost';
        $username='root';
        $password='';
        $dbname='umsystem';
        $connection=mysqli_connect($hostname,$username,$password);
        if($connection){
            // echo'server connect';
            $db_select=mysqli_select_db($connection,$dbname);
            if($db_select){
//            echo'select';

            }
            else{
                die("data not selec".mysqli_error($db_select));
            }
        }
        else {

            die("sever not connect" . mysqli_error($connection));
        }
        $sql="SELECT * FROM `student`";
        if(mysqli_query($connection,$sql)){
            $resource_id=mysqli_query($connection,$sql);
        }

        ?>
        <!--        <div class="container" style="width: 800px">-->
        <!--        <div class="row" style="margin: 50px">-->
        <table align="center" class="table table-hover" id="myTable" style="border:solid 1px black">
            <thead class="thead-dark">
            <tr align="center" >
                <th  scope="col">Name</th>
                <th  scope="col">Rg Number</th>
                <th  scope="col">Department</th>
                <th  scope="col">Academic Year</th>
                <th  scope="col">E-mail</th>
                <th  scope="col">Address</th>
                <th  scope="col">Mobile</th>
                <th  scope="col">Nationality</th>
                <th  scope="col">Gender</th>
            </tr>
            </thead>
            <tbody>
            <?php while($result=mysqli_fetch_assoc($resource_id)){ ?>

                <tr class="text-center">
                    <td scope="row" ><?php  echo $result['name'];?></td>
                    <td><?php  echo $result['registration_number'];?></td>
                    <td><?php  echo $result['program'];?></td>
                    <td scope="row" ><?php  echo $result['academic_year'];?></td>
                    <td><?php  echo $result['email'];?></td>
                    <td><?php  echo $result['address'];?></td>
                    <td scope="row" ><?php  echo $result['mobile'];?></td>
                    <td><?php  echo $result['nationality'];?></td>
                    <td><?php  echo $result['gender'];?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!--        </div>-->
    <!--    </div>-->





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

</body>
</html>