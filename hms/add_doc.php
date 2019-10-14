<!DOCTYPE html>

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
        <h1 style="text-align: center">Doctors' Registration Portal</h1>
        <h6 style="text-align: center"><i>A qualified doctor who understands and cares for your needs</i></h6>

    </div>


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color: aquamarine">
                        <i>
                            Doctors are the face of life. Here at Peters' HMS, we believe that our doctors are the best in their specialities.
                            We offer wide range of services and speciliazied treatment to our clients. By signing up with us, you have to keep their
                            happieness first on the table.
                        </i>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="admin-panel.php">Admin Page</a>
                            </div>

                        </div><br>
                        <hr>
                        <form class="form-group" action="func.php" method="post">
                            <label>Dr.Name: </label>
                            <input type="text" name="name" class="form-control"><br>
                            <label>Doctor ID: </label>
                            <input type="text" name="docid" class="form-control"><br>
                            <label>Email id: </label>
                            <input type="text" name="email" class="form-control"><br>
                            <label>Contact: </label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label>Speciality: </label>

                            <select name="speciality" class="form-control">
                                <option value="surgeon">Surgeon</option>
                                <option value="pedetrician">Pedetrician</option>
                                <option value="optician">Optician</option>
                                <option value="gynacologist">Gynacologist</option>
                                <option value="dentist">Dentist</option>
                                <option value="cancer_specialist">Cancer Specialist</option>

                            </select><br>
                            <label>Years of Experience: </label>
                            <select name="expyears" class="form-control">
                                <option value="less_than_5">
                                    Less Five</option>
                                <option value="more_than_5">Above Five
                                </option>
                                <option value="less_than_10">
                                    Less Ten</option>
                                <option value="more_than_10">Above Ten
                                </option>
                            </select><br>
                            <label>Age: </label>
                            <input type="text" name="age" class="form-control"><br>
                            <input type="submit" class="btn btn-primary" name="add_doc" value="Register Doc">
                        </form>


                    </div>

                </div>
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
</body>

</html>