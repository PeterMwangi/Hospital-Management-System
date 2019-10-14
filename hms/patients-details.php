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
        <h1 style="text-align: center">Patients Appointment Details</h1>
        <h6 style="text-align: center"><i>We are here for you! We care for you!</i></h6>

    </div>

    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color: #1C9BE8 ">
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-light" href="admin-panel.php">Admin Page</a>

                    </div>
                    <div class="col-md-3">
                        <h4>Patients Details</h4>
                    </div>
                    <div class="col-md-7">
                        <form class="form-group" action="search_patient.php" method="post">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" name="search" placeholder="Enter Contact No:" class="form-control"></div>
                                <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div>
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
                            <th scope="col">Doctor's Appointment</th>
                            <th scope="col">Date</th>
                            <th scope="col">Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php get_patient_details(); ?>
                    </tbody>
                </table>



            </div>



        </div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>