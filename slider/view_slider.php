<?php require "../session.php";  ?>
<?php require '../dashboard_part/dashboard_header.php';  ?>
<?php

require '../db.php';

$sql = "SELECT * FROM sliders";
$result = mysqli_query($db_conn, $sql);

?> 

<section>
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="bg-dark text-white text-center p-4" role="alert">
                <h1>Sliders View</h1>
            </div>
<table class="table">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">slider Images</th>
      <th scope="col">slider Descriptions</th>
      <th scope="col">slider Heading</th>
      <th scope="col">slider Button</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach($result as $sliders){ ?>

    <tr>
    <td><?php echo $sliders['id'] ?></td>
      <td><img width="100" src="/webcit/uploads/sliders/<?php echo $sliders['slider_pic'] ?>" alt=""></td>
      <td><?php echo $sliders['description'] ?></td>
      <td><?php echo $sliders['heading'] ?></td>
      <td><?php echo $sliders['button'] ?></td>

    <td>
      <a class="btn btn-success" href="/webcit/testimonial/testimonial_details.php?id=<?php  echo $sliders['id']  ?>" role="button">View</a>
      <a class="btn btn-primary" href="/webcit/testimonial/testimonial_edit.php?id=<?php  echo $sliders['id']  ?>" role="button">Edit</a>
      <?php if($_SESSION['role'] != 'Author'){ ?>
      <a data-toggle="modal" data-target="#del<?php echo $sliders['id'] ?>" class="btn btn-danger text-white">Delete</a>
      <?php } ?>
    </td>     
    </tr>

            <!-- Modal -->
          <div class="modal fade" id="del<?php echo  $sliders['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <a href="/webcit/testimonial/soft_delete.php?id=<?php echo  $sliders['id']; ?>"  class="btn btn-primary">Yes</a>
                </div>
              </div>
            </div>
          </div>

   <?php }?>
  </tbody>
</table>
            </div>
        </div>
        </div>
    </section>


<?php require '../dashboard_part/dashboard_footer.php';  ?>
