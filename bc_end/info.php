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

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="source/jquery.min.js"></script>
    <!--    <script src="source/bootstrap.min.css"></script>-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>

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
</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
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

                <li class="active">
                    <a href="info.php">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
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
                            <div class="card-content table-responsive">
                                <table class="table" id="order_table">
                                    <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="30%">Food Name</th>
                                        <th width="30%">Contain</th>
                                        <th width="15%">Price</th>
                                        <th width="15%">Type Food</th>
                                    </tr>
                                    </thead>
                                    <tbody id="employee_data">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Table Images</h4>
                                        <p class="category">Here is a subtitle for this table</p>
                                    </div>
                                    <div class="col-md-2 col-md-offset-4">
                                        <button type="button" name="add" id="add" class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div id="image_data" class="card-content table-responsive" style="height: 60em; overflow: auto; margin-top: 20px;"></div>
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

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

<script type="text/javascript" language="javascript" >
    $(document).ready(function(){

        function fetch_employee_data()
        {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                dataType:"json",
                success:function(data)
                {
                    for(var count=0; count<data.length; count++)
                    {
                        var html_data = '<tr><td>'+data[count].id+'</td>';
                        html_data += '<td data-name="food_name" class="food_name" data-type="text" data-pk="'+data[count].id+'">'+data[count].food_name+'</td>';
                        html_data += '<td data-name="contain" class="contain" data-type="text" data-pk="'+data[count].id+'">'+data[count].contain+'</td>';
                        html_data += '<td data-name="price" class="contain" data-type="text" data-pk="'+data[count].id+'">'+data[count].price+'</td>';
                        html_data += '<td data-name="type_food" class="type_food" data-type="select" data-pk="'+data[count].id+'">'+data[count].type_food+'</td></tr>';
                        $('#employee_data').append(html_data);
                    }
                }
            })
        }

        fetch_employee_data();

        $('#employee_data').editable({
            container: 'body',
            selector: 'td.food_name',
            url: "update.php",
            title: 'Food Name',
            type: "POST",
            dataType: 'json',
            validate: function(value){
                if($.trim(value) == '')
                {
                    return 'This field is required';
                }
            }
        });

        $('#employee_data').editable({
            container: 'body',
            selector: 'td.contain',
            url: "update.php",
            title: 'Contain',
            type: "POST",
            dataType: 'json',
            validate: function(value){
                if($.trim(value) == '')
                {
                    return 'This field is required';
                }
            }
        });

        $('#employee_data').editable({
            container: 'body',
            selector: 'td.price',
            url: "update.php",
            title: 'Price',
            type: "POST",
            dataType: 'json',
            validate: function(value){
                if($.trim(value) == '')
                {
                    return 'This field is required';
                }
            }
        });

        $('#employee_data').editable({
            container: 'body',
            selector: 'td.type_food',
            url: "update.php",
            title: 'Type Food',
            type: "POST",
            dataType: 'json',
            source: [{value: "mainFood", text: "mainFood"}, {value: "hotAppetizers", text: "hotAppetizers"},
                { value: "salad&soup", text: "salad&soup"},{ value: "vegetable", text: "vegetable"},
                { value: "dinnerMenu", text: "dinnerMenu"}],
            validate: function(value){
                if($.trim(value) == '')
                {
                    return 'This field is required';
                }
            }
        });
    });
</script>

</body>
</html>

<div id="imageModal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="left: 0; margin-left: 30%; margin-right: 0">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Image</h4>
            </div>
            <div class="modal-body">
                <form id="image_form" method="post" enctype="multipart/form-data">
                    <p><label>Select Image</label><br>
                        <label style="margin-left: 45%">
                            <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                            <input type="file" name="image" id="image" style="display: none"/>
                        </label>
                    </p>
                    <input type="hidden" name="action" id="action" value="insert" />
                    <input type="hidden" name="image_id" id="image_id" />
                    <select name="type_img" id="type_Img" class="form-control">
                        <option value="branches_img">Branches_img</option>
                        <option value="chef_img">Chef_img</option>
                        <option value="news_img">News_img</option>
                        <option value="timeline_img">Timeline_img</option>
                        <option value="team_img">Team_img</option>
                        <option value="gallery_img">Gallery_img</option>
                    </select><br/>
                    <div class="modal-footer" style="right: 0">
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Script for table add image-->
<script>
    $(document).ready(function(){

        fetch_data();

        function fetch_data()
        {
            var action = "fetch";
            $.ajax({
                url:"./files/action.php",
                method:"POST",
                data:{action:action},
                success:function(data)
                {
                    $('#image_data').html(data);
                }
            })
        }
        $('#add').click(function(){
            $('#imageModal').modal('show');
            $('#image_form')[0].reset();
            $('.modal-title').text("Add Image");
            $('#image_id').val('');
            $('#action').val('insert');
            $('#insert').val("Insert");
        });
        $('#image_form').submit(function(event){
            event.preventDefault();
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Invalid Image File");
                    $('#image').val('');
                    return false;
                }
                else
                {
                    $.ajax({
                        url:"./files/action.php",
                        method:"POST",
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            alert(data);
                            fetch_data();
                            $('#image_form')[0].reset();
                            $('#imageModal').modal('hide');
                        }
                    });
                }
            }
        });
        $(document).on('click', '.update', function(){
            $('#image_id').val($(this).attr("id"));
            $('#action').val("update");
            $('.modal-title').text("Update Image");
            $('#insert').val("Update");
            $('#imageModal').modal("show");
        });
        $(document).on('click', '.delete', function(){
            var image_id = $(this).attr("id");
            var action = "delete";
            if(confirm("Are you sure you want to remove this image from database?")) {
                $.ajax({
                    url:"./files/action.php",
                    method:"POST",
                    data:{image_id:image_id, action:action},
                    success:function(data)
                    {
                        alert(data);
                        fetch_data();
                    }
                })
            }
            else {
                return false;
            }
        });
    });
</script>
