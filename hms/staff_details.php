<!DOCTYPE html>

<?php include("func.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="jumbotron">
        <h1 style="text-align: center">Staff Details</h1>
        <h6 style="text-align: center"><i>We love every single one of them</i></h6>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color: #1C9BE8 ">
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-light" href="admin-panel.php">Admin Panel</a>

                    </div>
                    <div class="col-md-3">
                        <h4>Stuff Details</h4>
                    </div>
                    <div class="col-md-7">
                        <form class="form-group" action="search_staff.php" method="post">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" name="search" placeholder="Enter Contact No:" class="form-control"></div>
                                <div class="col-md-2"><input type="submit" name="staff_submit_search" class="btn btn-light" value="search"></div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email ID</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Department</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php get_staff_details(); ?>
                    </tbody>
                </table>



            </div>



        </div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>