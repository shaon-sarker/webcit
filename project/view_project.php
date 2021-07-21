<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php'; ?>
<?php

require '../db.php';

$sql = "SELECT * FROM projects";
$result = mysqli_query($db_conn,$sql);

?> 

<section class="ml-5">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 ml-5">
            <h1 class="bg-primary text-center p-3 text-white">View Projects</h1>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-12 ml-5 mt-3">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Project Pic</th>
              <th scope="col">Project NO</th>
              <th scope="col">Project Head</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($result as $projects){ ?>
            <tr>
              <th><?= $projects['id'] ?></th>
              <td><img width='80px' src="../uploads/projects/<?php echo $projects['project_pic'] ?>" alt=""></td>
              <td><?= $projects['project_no'] ?></td>
              <td><?= $projects['project_head'] ?></td>
              <td>
                <a href="" class="p-2"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                <a href="" class="p-2"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                <a href="" class="p-2"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
              </td>
            </tr>

          <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
  </div>
</section>


 <?php require '../dashboard_part/dashboard_footer.php';  ?>