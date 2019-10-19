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
        <h1 style="text-align: center">Staff Registration Portal</h1>
        <h6 style="text-align: center"><i>We're glad for choosing to work with us</i></h6>

    </div>


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="background-color:aquamarine">



                        <i>Quality and affordable health care is our main focus here at Peters' HMS. We believe that the boost and morale of life
                            comes from having good health and that can be achieved only from a quality service provider who is affordable, reputable,
                            and understands his field in and out. Here at Peters' HMS, we give doctors' the opportunity to explore unendless opportunities.
                        </i>


                    </div>


                </div>
            </div>



            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="background-color: #1C9BE8 ">
                        <div class="row">
                            <div class="col-md-2">
                                <a class="btn btn-light" href="admin-panel.php">Admin Page</a>
                            </div>
                            <div class="col-md-8">
                                <h2><strong></strong>
                                    <h2>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-light" href="add_doc.php">Add Doctor</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        //Creating a form which will hold all the staff details when input is placed
                        
                        <form class="form-group" action="func.php" method="post">
                            <label>First Name: </label>
                            <input type="text" name="fname" class="form-control"><br>
                            <label>Last Name: </label>
                            <input type="text" name="lname" class="form-control"><br>
                            <label>Email id: </label>
                            <input type="text" name="email" class="form-control"><br>
                            <label>Contact: </label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label>Department </label>

                            <select name="department" class="form-control">
                                <option value="Dentistry">Dentistry</option>
                                <option value="Emergency">Emergency</option>
                                <option value="Pediatric">Pediatric</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Consultancy">Consultancy</option>
                                <option value="Referral">Referral</option>
                            </select><br>

                            <input type="submit" class="btn btn-primary" name="reg_staff" value="Register Staff">
                        </form>






                    </div>
                </div>

            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>
    </div>





















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>

</body>

</html>
