<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "yearly kundali";//Enter the Db name
$con = mysqli_connect($hostname, $username, $password);
$House = $_POST['House'];
$Sun = $_POST['Sun'];
$Moon = $_POST['Moon'];
$Venus = $_POST['Venus'];
$Mars = $_POST['Mars'];
$Mercury = $_POST['Mercury'];
$Jupiter = $_POST['Jupiter'];
$Saturn = $_POST['Saturn'];
$Rahu = $_POST['Rahu'];
$Ketu = $_POST['Ketu'];
$sql2 = "UPDATE `yearly kundali`.`birth kundali` SET `Sun`=$Sun,`Moon`=$Moon,`Venus`=$Venus,`Mars`=$Mars,`Mercury`=$Mercury,`Jupiter`=$Jupiter,`Saturn`=$Saturn,`Rahu`=$Rahu,`Ketu`=$Ketu WHERE `House`=$House;";
// echo "<br>";
// echo $sql2;
// echo "<br>";
if ($con->query($sql2) == true){
//  echo "success";
}
else{
echo "<br> ERROR: $sql2 <br> $con->error";
}
$con->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid jumbotron jumbotron-fluid text-center col-12 col-sm-12 col-md-12 col-lg-12" id="jumbo">
            <h1>Data Input</h1>
            <p>Enter your data to check the info</p>
        </div>
        <section class="container text-center">
            <h1>Birth Kundali info</h1>
            <hr class="container">
            <form action="index2.php" method="post">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th>House</th>
                            <th>Sun <br> (Surya) </th>
                            <th>Moon <br> (Chandra)</th>
                            <th>Venus <br> (Shukra)</th>
                            <th>Mars <br> (Mangal)</th>
                            <th>Mercury <br> (Budh)</th>
                            <th>Jupiter <br> (Guru)</th>
                            <th>Saturn <br> (Shani)</th>
                            <th>Rahu <br> (Uranus)</th>
                            <th>Ketu <br> (Neptune)</th>
                            <th>Submit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="House" id="House" class="form-control" value="0"></td>
                            <td><input type="text" name="Sun" id="Sun" class="form-control" value="0"></td>
                            <td><input type="text" name="Moon" id="Moon" class="form-control" value="0"></td>
                            <td><input type="text" name="Venus" id="Venus" class="form-control" value="0"></td>
                            <td><input type="text" name="Mars" id="Mars" class="form-control" value="0"></td>
                            <td><input type="text" name="Mercury" id="Mercury" class="form-control" value="0"></td>
                            <td><input type="text" name="Jupiter" id="Jupiter" class="form-control" value="0"></td>
                            <td><input type="text" name="Saturn" id="Saturn" class="form-control" value="0"></td>
                            <td><input type="text" name="Rahu" id="Rahu" class="form-control" value="0"></td>
                            <td><input type="text" name="Ketu" id="Ketu" class="form-control" value="0"></td>
                            <td><button type="submit" class="btn text-left">Next</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="index3.php" method="post">
                <h1>Final House</h1>
                <h3>Put info for last house</h3>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th>House</th>
                            <th>Sun <br> (Surya) </th>
                            <th>Moon <br> (Chandra)</th>
                            <th>Venus <br> (Shukra)</th>
                            <th>Mars <br> (Mangal)</th>
                            <th>Mercury <br> (Budh)</th>
                            <th>Jupiter <br> (Guru)</th>
                            <th>Saturn <br> (Shani)</th>
                            <th>Rahu <br> (Uranus)</th>
                            <th>Ketu <br> (Neptune)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="House" id="House" class="form-control" value="0"></td>
                            <td><input type="text" name="Sun" id="Sun" class="form-control" value="0"></td>
                            <td><input type="text" name="Moon" id="Moon" class="form-control" value="0"></td>
                            <td><input type="text" name="Venus" id="Venus" class="form-control" value="0"></td>
                            <td><input type="text" name="Mars" id="Mars" class="form-control" value="0"></td>
                            <td><input type="text" name="Mercury" id="Mercury" class="form-control" value="0"></td>
                            <td><input type="text" name="Jupiter" id="Jupiter" class="form-control" value="0"></td>
                            <td><input type="text" name="Saturn" id="Saturn" class="form-control" value="0"></td>
                            <td><input type="text" name="Rahu" id="Rahu" class="form-control" value="0"></td>
                            <td><input type="text" name="Ketu" id="Ketu" class="form-control" value="0"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
        <script src="index.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>