<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="style\style.css">
    <title>Carrer</title>
    <style>
    .jobs {

        border: 1px solid black;
        box-shadow: 5px 5px 4px 5px grey;
        margin: 10px;
        background-color: #fff;
        padding: 20px;
    }

    .container {
        padding-left: 900px;
        color: #fff;
        padding-top: 200px;
        font-size: 100px;
    }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid"
                style="background-image: url('job1.jpg'); background-size:cover; height:600px ;">
                <div class="container">
                    <h1 class="display-1">Job Portal</h1>
                    <p class="lead">Best Jobs Available Matching You SKILLs</p>
                </div>
            </div>
        </div>
    </div>
    <div class=" row"><?php $sql="SELECT `cname`,`pos`,`Jdesc`,`CTC`,`skills` FROM `jobs`";
    $result=mysqli_query($conn, $sql);

    if($result->num_rows>0) {
        while($rows=$result->fetch_assoc()) {
            echo'

            <div class="col-md-4"><div class="jobs"><h1 style="text-align:center;">'.$rows['pos'].'</h1><h3 style="text-align:center;">'.$rows['cname'].'</h3><p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p><p style="color:black;"><B>Skills Required: </B>'.$rows['skills'].'</p> <p style="color:black;"><B>CTC:</B>'.$rows['CTC'].'</p> <button type="button"class="btn btn-primary"data-bs-toggle="modal"data-bs-target="#exampleModal"data-bs-whatever="@mdo">Apply Now</button> </div> </div>';

        }

    }

    else {
        echo "";
    }

    ?><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply For Jobs </h1><button type="button"
                            class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3"><label for="recipient-name" class="col-form-label">Name:</label><input
                                    type="text" class="form-control" name="name"></div>
                            <div class="mb-3"><label for="message-text" class="col-form-label">Applying
                                    For:</label><input type="text" class="form-control" name="apply"></div>
                            <div class="mb-3"><label for="message-text"
                                    class="col-form-label">Qualification:</label><input type="text" class="form-control"
                                    name="qual"></div>
                            <div class="mb-3"><label for="message-text" class="col-form-label">Year
                                    Passout:</label><input type="text" class="form-control" name="year"></div>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button><button type="submit" class="btn btn-primary"
                            name="aply">Apply</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>