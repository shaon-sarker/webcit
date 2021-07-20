<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>
<?php  
  require '../db.php';
?>

    
<section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto">
            <div class="alert alert-primary text-center" role="alert">
                <h1>User Profile</h1>
            </div>
<table class="table">
  <thead>

    <tr>
      <td scope="col">Name</td>
      <td scope="col"><?php echo   $_SESSION['username']; ?></td>  
    </tr>
    <tr>
      <td scope="col">Email</td>
      <td scope="col"><?php echo  $_SESSION['email']; ?></td>  
    </tr>
    <tr>
      <td scope="col">Role</td>
      <td scope="col"><?php echo  $_SESSION['role']; ?></td>  
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
            </div>
        </div>
        </div>
    </section>






<?php
require "../dashboard_part/dashboard_footer.php";

?>