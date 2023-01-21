<?php
require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Project View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Project View Details 
                            <a href="project_works_on.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $employee_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM project_works_on WHERE id='$employee_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $project_works_on = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Employee ID</label>
                                        <p class="form-control">
                                            <?=$project_works_on['id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Project Start Date</label>
                                        <p class="form-control">
                                            <?=$project_works_on['start_date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Project End Date</label>
                                        <p class="form-control">
                                            <?=$project_works_on['end_date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Active</label>
                                        <p class="form-control">
                                            <?=$project_works_on['active'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Project ID</label>
                                        <p class="form-control">
                                            <?=$project_works_on['project_id'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>