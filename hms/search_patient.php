<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="jumbotron">
        <h1 style="text-align: center">Patient Details</h1>
        <h6 style="text-align: center"><i>Finally, you found me!!</i></h6>
    </div>

    <a class="btn btn-primary" href="admin-panel.php">Admin Page</a>

    <?php include "func.php";

    if (isset($_POST['patient_search_submit'])) {
        $contact = $_POST['search'];

        $query = "SELECT * FROM `docapp` WHERE contact = '$contact'";
        $result = mysqli_query($conn, $query);


        echo "
    <div class='card-body'>

                <table class='table table-hover'>
                    <thead>
                    <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>First Name</th>
                    <th scope='col'>Last Name</th>
                    <th scope='col'>Email ID</th>
                    <th scope='col'>Contact</th>
                    <th scope='col'>Doctor's Appointment</th>
                    <th scope='col'>Date</th>
                    <th scope='col'>Payment</th>
                </tr>
                    </thead>
                    <tbody>  
    ";

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['Id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $contact = $row['contact'];
            $docapp = $row['docapp'];
            $datetype = $row['datetype'];
            $paystatus = $row['paystatus'];
        };

        echo "
        <tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
        <td>$datetype</td>
        <td>$paystatus</td>
        </tr>
        
        ";
    };
    echo "</tbody></table></div>";


    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>

</body>

</html>