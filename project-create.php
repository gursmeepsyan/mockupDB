<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Project Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Project Add 
                            <a href="project_works_on.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Active</label>
                                <input type="text" name="active" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Project ID</label>
                                <input type="text" name="project_id" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_project" class="btn btn-primary">Save Project</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>