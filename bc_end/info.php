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
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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

    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
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
                    <a href="info.php.">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="table_list.php.">
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
            </div>
        </div>
    </div>
</div>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
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
