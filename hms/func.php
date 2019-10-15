<?php

//session needs to start to keep the login details secure. 
session_start();
$conn = mysqli_connect("localhost", "root", "", "hmsdb");


//A simple login verification which takes the username and password from the database and confirms if the data given is correct

if (isset($_POST['login_submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM `logintb` WHERE username='$username' and password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['username'] = $username;
        header("Location:admin-panel.php");
    } else {
        echo "<script>alert('Enter Valid Details.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

//An if statement that inputs patients data into the doctor appointment form.  

if (isset($_POST['pat_submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $docapp = $_POST['docapp'];
    $datetype = $_POST['datetype'];
    $paystatus = $_POST['paystatus'];
    $query = "INSERT INTO `docapp`(`fname`, `lname`, `email`, `contact`, `docapp`,`datetype`,`paystatus`) VALUES ('$fname','$lname','$email','$contact','$docapp','$datetype','$paystatus')";

    $result = mysqli_query($conn, $query);
    header('Location: patients-details.php');
}

//A simple form to register users and staff into the system

if (isset($_POST['reg_staff'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];

    $query = "INSERT INTO `staff_reg`( `fname`, `lname`, `email`, `contact`, `department`) VALUES ('$fname','$lname','$email','$contact','$department')";
    $result = mysqli_query($conn, $query);
    header('Location: staff_details.php');
}


$result = null;

//A function that displays patients details when their contact detail is shared on the search bar.

function get_patient_details()
{
    global $conn;

    $query = "SELECT * FROM `docapp`";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['Id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $docapp = $row['docapp'];
        $datetype = $row['datetype'];
        $paystatus = $row['paystatus'];

        echo  "<tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
        <td>$datetype</td>
        <td>$paystatus</td>     
    </tr>";
    }
}


//A function that gets staff details when contact number is typed into the search bar

function get_staff_details()
{
    global $conn;

    $query = "SELECT * FROM `staff_reg`";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $department = $row['department'];

        echo "
        <tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$department</td>
        </tr>
        
        ";
    }
}

//A statement for updating payment status for a patient

if (isset($_POST['update_data'])) {

    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $query = "UPDATE `docapp` set paystatus ='$status' where contact='$contact'";
    $result = mysqli_query($conn, $query);
    header('Location: patients-details.php');
}

//A select option to display doctors name in the appointment form

function display_docs()
{

    global $conn;
    $query = "SELECT `name` FROM `doc`";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];

        echo '<option value="' . $name . '">' . $name . '</option>';
    }
}

//A statement for adding doctor into the system

if (isset($_POST['add_doc'])) {

    $name = $_POST['name'];
    $docid = $_POST['docid'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $speciality = $_POST['speciality'];
    $expyears = $_POST['expyears'];
    $age = $_POST['age'];
    $query = "INSERT INTO `doc`(`name`, `docid`, `email`, `contact`, `speciality`, `expyears`, `age`) VALUES ('$name','$docid','$email','$contact','$speciality','$expyears','$age')";
    $result = mysqli_query($conn, $query);
    header('Location: admin-panel.php');
}

//For using sessions we echo the admin panel at function (display_admin_panel) position

function display_admin_panel()
{
    echo '

    <!DOCTYPE html>

  
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
            <h1 style="text-align: center">Peters Hospital Management System</h1>
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
                                <!-- <input type="datetime" name="contact" class="form-control"><br> -->
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
    
                    title: "Welcome!",
                    text: "Have a Successful Day Ahead"
                })
    
    
            })
        </script>
    
    </body>
    
    </html>;

';
}
