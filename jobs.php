<?php include 'header.php' ?>
<?php include'config.php' ?>
<div class="content">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Resume</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="SELECT `name`, `apply`, `qual`, `year` FROM `candidates`";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                    echo '
                
          <tr>

                <th scope="row">'.++$i.'</th>
                <td>'.$rows['name'].'</td>
                <td>'.$rows['apply'].'</td>
                <td>'.$rows['year'].'</td>
            </tr>'; }
        }
        else{
                echo "";
        }
        ?>
        </tbody>


        </tbody>
    </table>
</div>