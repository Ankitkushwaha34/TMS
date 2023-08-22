<?php
 include('includes/connection.php');
 if (isset($_POST['edit_task'])){
    $query="update tasks set uid =$_POST[id],description='$_POST[description]',start_date='$_POST[start_date]',end_date='$_POST[end_date]'where tid=$_GET[id]";
    $query_run= mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
    alert('task updated successfully...');
    window.location.href='admin_dashboard.php';
    </script>
    ";
    }
    else{
        echo "<script type='text/javascript'>
    alert('error...plzz try again');
    window.location.href='admin_dashboard.php';
    </script>
    ";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETMS</title>
    <!-- Include jQuery -->
    <script src="includes/jquery_latest.js"></script>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Include Bootstrap JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script> 

    <!-- Include Font Awesome CSS (Add the appropriate version link) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Include External CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Include JavaScript code if needed -->
    <script type="text/javascript">
        // Your JavaScript code here
    </script>
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fas fa-list" style="padding-right: 15px;"></i> Task Management System</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto" style="color:white;"><br>
        <h3 style="color:white;">Update the tasks</h3><br>
        <?php
       
            $query= "select * from tasks where tid =$_GET[id]";
            $query_run=mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
            
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" class ="form-control" value="" required>
            </div>
            <div class="form-group">
                    
                </div>
              <select name="status" class="form-control">
               <option >-select-</option>
               <option >In-Progress</option>
               <option >Complete</option>
              </select>
              </div>
                <input type="submit" class="btn btn-warning" name="update_task" value="Update">
                
        </form>
        <?php
            }
            ?>
    </div>
    </div>
</body>
</html>