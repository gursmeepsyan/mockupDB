<?php
session_start();
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

    <title>Project Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Project Edit 
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="employee_id" value="<?= $project_works_on['id']; ?>">

                                    <div class="mb-3">
                                        <label>Employee ID</label>
                                        <input type="text" name="id" value="<?=$project_works_on['id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Project Start Date</label>
                                        <input type="date" name="start_date" value="<?=$project_works_on['start_date'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Project End Date</label>
                                        <input type="date" name="end_date" value="<?=$project_works_on['end_date'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Active</label>
                                        <input type="text" name="active" value="<?=$project_works_on['active'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Project ID</label>
                                        <input type="text" name="project_id" value="<?=$project_works_on['project_id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_project" class="btn btn-primary">
                                            Update Project Information
                                        </button>
                                    </div>

                                </form>
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