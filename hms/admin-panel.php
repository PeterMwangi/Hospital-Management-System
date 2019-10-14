<?php include 'func.php';

if (!isset($_SESSION['username'])) {
    echo "Session expired";
} else
    display_admin_panel();

?>


<!-- <!DOCTYPE html>

<?php include 'func.php' ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="jumbotron">
        <h1 style="text-align: center">Peter's Hospital Management System</h1>
        <h6 style="text-align: center"><i>Software Designed For All Areas in a Hospital</i></h6>

    </div>


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color: #1C9BE8">Patient</a>
                    <a href="patients-details.php" class="list-group-item">Patient Details</a>

                    <a href="payment_status.php" class="list-group-item">Payment Update/CheckOut</a>


                </div>
                <div class="list-group">
                    <a href="staff.php" class="list-group-item active" style="background-color: #1C9BE8 ">Staff</a>
                    <a href="staff_details.php" class="list-group-item">Staff Details</a>
                    <a href="" class="list-group-item">Drop Staff Members</a>


                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="background-color: #1C9BE8 ">
                        <div class="row">
                            <div class="col-md-9">
                                Book An Appointment
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-light" href="log_out.php">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="func.php" method="post">
                            <label>First Name: </label>
                            <input type="text" name="fname" class="form-control"><br>
                            <label>Last Name: </label>
                            <input type="text" name="lname" class="form-control"><br>
                            <label>Email id: </label>
                            <input type="text" name="email" class="form-control"><br>
                            <label>Contact: </label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label>Doctor Appointment: </label>
                           
<select name="docapp" class="form-control">
    <?php display_docs(); ?>

</select><br>
<label>Date: </label>
<input type="date" name="datetype" class="form-control"><br>
<label>Payment: </label>
<select name="paystatus" class="form-control">
    <option value="Paid">Paid</option>
    <option value="Pay Later">Pay Later</option>
</select><br>



<input type="submit" class="btn btn-primary" name="pat_submit" value="Book Appointment">
</form>






</div>
</div>

</div>
<div class="col-md-1">

</div>
</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        swal({

            title: 'Welcome!',
            text: 'Have a Successful Day Ahead'
        })


    })
</script>

</body>

</html> -->