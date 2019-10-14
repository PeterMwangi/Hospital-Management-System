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
        <h1 style="text-align: center">Payment Status For Clients</h1>
        <h6 style="text-align: center"><i>Our value is commitment in giving you the best</i></h6>
    </div>


    <div class="container">
        <a class="btn btn-primary" href="admin-panel.php">Admin Page</a>
        <div class="card">
            <div class="card-body">
                <form class="form-group" method="post" action="func.php">
                    <input type="text" class="form-control" name="contact" placeholder="Enter Contact No:"><br><br>
                    <select name="status" class="form-control">
                        <option value="paid">Paid</option>
                        <option value="pay later">Pay Later</option>
                    </select><br>
                    <hr>
                    <input type="submit" value="update" name="update_data" class="btn btn-primary">

                </form>
            </div>

        </div>
    </div>










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>