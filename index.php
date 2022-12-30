<?php include 'header.php' ?>
<?php include'config.php' ?>
<!-- Page content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <title>JOBS</title>
    <link rel="stylesheet" href="style\style.css">
    <style>
    table,
    th,
    td {
        border: 2px solid black;
    }

    th,
    td {
        text-align: center;
    }
    </style>

</head>

<body>
    <div class="content">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Post Job
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="Company Name" class="form-label">Company Name:</label>
                        <input type="text" class="form-control" id="" name="cname">
                    </div>
                    <div class=" mb-3">
                        <label for="exampleInputPosition" class="form-label">Position:</label>
                        <input type="text" class="form-control" id="exampleInputPosition" name="pos">
                    </div>
                    <div class="mb-3">
                        <label for="Jobdesc" class="form-label">Job Description:</label>
                        <textarea rows="10" cols="20" class="form-control" id="JobDesc" name="Jdesc"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="skills" class=" form-label">Skills Required:</label>
                        <input type="text" class="form-control" id="skills" name="skills">
                    </div>

                    <div class=" mb-3">
                        <label for="Ctc" class="form-label">CTC:</label>
                        <input type="text" class="form-control" id="Ctc" name="CTC">
                    </div> <button type="submit" class="btn btn-primary" name="job">Submit</button>
                </form>

            </div>

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                </tr>
            </thead>

            <?php
            $sql="SELECT `cname`,`pos`,`CTC` FROM `jobs`";
            $result=mysqli_query($conn,$sql);
              $i=0;
            if($result->num_rows > 0)
             {
                while($row=$result->fetch_assoc())
                {
                  
                    echo"
                <tbody>
                   <tr>
                        <td>".++$i."</td>
                        <td>".$row['cname']."</td>
                        <td>".$row['pos']."</td>
                        <td>".$row['CTC']."</td>
                 </tr>";
                    
                }
            }
            else
            {
                echo "";
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>