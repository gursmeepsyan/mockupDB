<?php
session_start();
require 'connect.php';

if(isset($_POST['delete_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['delete_employee']);

    $query = "DELETE FROM employee WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: home.php");
        exit(0);
    }
}

if(isset($_POST['delete_project']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['delete_project']);

    $query = "DELETE FROM project_works_on WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Project Deleted Successfully";
        header("Location: project_works_on.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Project Not Deleted";
        header("Location: project_works_on.php");
        exit(0);
    }
}
if(isset($_POST['update_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE employee SET name='$name', email='$email', phone='$phone', age='$age', address='$address' WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Updated Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Updated";
        header("Location: home.php");
        exit(0);
    }

}


if(isset($_POST['update_project']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
    $active = mysqli_real_escape_string($con, $_POST['active']);
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);

    $query = "UPDATE project_works_on SET id='$id', start_date='$start_date', end_date='$end_date', active='$active', project_id='$project_id' WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Project Updated Successfully";
        header("Location: project_works_on.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Updated";
        header("Location: project_works_on.php");
        exit(0);
    }

}

if(isset($_POST['save_employee']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO employee (name,email,phone,age,address) VALUES ('$name','$email','$phone','$age','$address')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Employee Created Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Created";
        header("Location: user-create.php");
        exit(0);
    }
}


if(isset($_POST['save_project']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
    $active = mysqli_real_escape_string($con, $_POST['active']);
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);

    $query = "INSERT INTO project_works_on (id,start_date,end_date,active,project_id) VALUES ('$id','$start_date','$end_date','$active','$project_id')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Project Created Successfully";
        header("Location: project_works_on.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Project Not Created";
        header("Location: project-create.php");
        exit(0);
    }
}

?>