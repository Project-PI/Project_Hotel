<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Material Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!--   Core JS Files   -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/material.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Material Dashboard javascript methods -->
    <script src="assets/js/material-dashboard.js"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script src="source/jquery.min.js"></script>
    <script src="source/jquery-ui.js"></script>
    <link rel="stylesheet" href="source/jquery-ui.css">


</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="./assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
            <a href="../index.php" class="simple-text">
                Front-end
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="user.php">
                        <i class="material-icons">person</i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="info.php">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="table_list.php">
                        <i class="material-icons">content_paste</i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="sign-up.php">
                        <i class="material-icons">library_books</i>
                        <p>Sign up</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="logout.php">
                        <i class="material-icons" name="logout">unarchive</i>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mike John responded to your email</a></li>
                                <li><a href="#">You have 5 new tasks</a></li>
                                <li><a href="#">You're now friend with Andrew</a></li>
                                <li><a href="#">Another Notification</a></li>
                                <li><a href="#">Another One</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Simple Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-md-offset-2">
                                    <input type="text" name="from_date" id="from_date1" class="form-control" placeholder="From Date" />
                                </div>
                                <div class="col-md-3 col-md-offset-1">
                                    <input type="text" name="to_date" id="to_date1" class="form-control" placeholder="To Date" />
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" name="filter" id="filter" value="Filter" class="btn btn-white btn-round btn-just-icon" >
                                        <i class="material-icons">search</i><div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table" id="order_table">
                                    <thead>
                                    <th>Place</th>
                                    <th>Adult</th>
                                    <th>Children</th>
                                    <th>Suite</th>
                                    <th>Number of Room</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Cuisine</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require_once ('../dbconf.php');
                                    $results_per_page = 10;
                                    $sql = "select * from booking";
                                    $result = $conn->query($sql);
                                    $number_of_results = mysqli_num_rows($result);

                                    $number_of_pages = ceil($number_of_results/$results_per_page);

                                    if(!isset($_GET['page'])){
                                        $page = 1;
                                    }else{
                                        $page = $_GET['page'];
                                    }

                                    $this_page_first_result = ($page-1)*$results_per_page;

                                    $sql =' select * from booking LIMIT '.$this_page_first_result.','.$results_per_page;
                                    $result=$conn->query($sql);
                                    while ($row=$result->fetch_assoc()){

                                    ?>
                                    <tr >
                                        <td><?php echo $row['place']; ?></td>
                                        <td><?php echo $row['adult']; ?></td>
                                        <td><?php echo $row['children']; ?></td>
                                        <td><?php echo $row['suite']; ?></td>
                                        <td><?php echo $row['no_room']; ?></td>
                                        <td><?php echo $row['from_date']; ?></td>
                                        <td><?php echo $row['to_date']; ?></td>
                                        <td><?php echo $row['cuisine']; ?></td>

                                        <td refrow='<?=$row['id']?>'>

                                            <form class="data-target='#add_data_Modal' ">
                                                <input  type="button" name="edit" value="Update" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-warming edit_data  " />
                                            </form>

                                        </td>

                                        <?php
                                        echo "<td><a class=\"btn btn-info btn-danger\" href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">delete</a></td>";
                                        ?>



                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <?php
                                        if($page > 1) {
                                            echo '<li class=\"page-item\"><a class=\"page-link\" href="table_list.php?page='.($page-1).'">Previous</a></li>';
                                        }
                                        if($page<=$number_of_pages) {
                                            echo '<li class=\"page-item\"><a class=\"page-link\" href="table_list.php?page='.($page+1).'">Next</a></li>';
                                        }
                                        for($page=1; $page<=$number_of_pages;$page++){

                                            echo '<li class=\"page-item\"><a class=\"page-link\" href="table_list.php?page='.$page.'">'.$page.'</a></li>';

                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
</div>
<div id="add_data_Modal" class="modal fade" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="title">Booking Table</h2>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Adult</label>
                    <input type="text"  class="form-control"  id="adult" name="adult" placeholder="Enter Adult">
                    <label>Children</label>
                    <input type="text"  class="form-control"  id="children" name="children" placeholder="Enter children">
                    <label>suite</label>
                    <select class="form-control" name="suite" id="suite" name="suite">
                        <option></option>
                        <option value="Single Room">Single Room</option>
                        <option value="Premium Single Room">Premium Single Room</option>
                        <option value="Double Room">Double Room</option>
                        <option value="Premium Double Room">Premium Double Room</option>
                        <option value="Deluxe Suite">Deluxe Suite</option>
                        <option value="Executive Suite">Executive Suite</option>
                        <option value="Ocean View Suite">Ocean View Suite</option>
                        <option value="Presidential Suite">Presidential Suite</option>
                        <option value="The Penthouse">The Penthouse</option>
                    </select>
                    <label>NO</label>
                    <input type="text"  class="form-control"  id="no_room" name="no_room" placeholder="Enter no">
                    <label>Start Date</label>
                    <input type="text"  class="form-control"  id="from_date" name="from_date" placeholder="Enter date">
                    <label>End Date</label>
                    <input type="text"  class="form-control"  id="to_date" name="to_date" placeholder="Enter date">
                    <input type="hidden" name="id" id="id" >
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $.datepicker.setDefaults({
            dateFormat: 'yy-mm-dd'
        });
        $(function(){
            $("#from_date1").datepicker();
            $("#to_date1").datepicker();
        });
        $('#filter').click(function(){
            var from_date = $('#from_date1').val();
            var to_date = $('#to_date1').val();
            if(from_date != '' && to_date != '')
            {
                $.ajax({
                    url:"files/filter.php",
                    method:"POST",
                    data:{from_date:from_date, to_date:to_date},
                    success:function(data)
                    {
                        $('#order_table').html(data);
                    }
                });
            }
            else
            {
                alert("Please Select Date");
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', '.edit_data', function(){
            var id = $(this).attr("id");
            $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id},
                dataType:"json",
                success:function(data){
                    $('#adult').val(data.adult);
                    $('#children').val(data.children);
                    $('#suite').val(data.suite);
                    $('#no_room').val(data.no_room);
                    $('#from_date').val(data.from_date);
                    $('#to_date').val(data.to_date);
                    $('#id').val(data.id);
                    $('#insert').val("Update");
                    $('#add_data_Modal').modal('show');
                }
            });
        });

        $('#insert_form').on("submit", function(event){
            event.preventDefault();
            if($('#adult').val() == "") {
                alert("title is required");
            }
            else if($('#children').val() == "") {
                alert("Comment is required");
            }
            else
            {
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(data){
                        $('#insert_form')[0].reset();
                        $('#add_data_Modal').modal('hide');
                        $(location).attr('href', 'table_list.php');
                    }
                });
            }
        });
    });
</script>
</body>
</html>
