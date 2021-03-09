<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.bgctub-edu.net/php_files/standard/user_home/user_home.php?home=yes&tm=main"><i class="fa fa-institution"></i>  <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Student
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="add-student.php">Add Student </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="manage_student.php">Manage Student</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Teacher
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="add-teacher.php">Add Teacher </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="manage_teacher.php">Manage Teacher</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Transport
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="add_transport.php">Add Transport </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="manage_transport.php">Manage Transport</a>
                    </div>
                </li>
           <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Department
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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['name']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="?logout=true">LogOut</a>


                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
