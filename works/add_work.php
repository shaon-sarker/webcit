<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
require '../db.php';

$select = "SELECT * FROM categorys";
$select_result = mysqli_query($db_conn,$select);
?>



<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4" role="alert">
                    <h1>Work Sections</h1>
                </div>
                <form action="work_post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control" name="work_photo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="work_title" name="work_title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="work_subtitle" name="work_subtitle">
                    </div>
                    <div class="form-group">
                        
                        <select name="category_no" class="form-control">
                            <?php foreach($select_result as $category){ ?>
                                 <option value="<?= $category['id']; ?>"><?= $category['category_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add work</button>
                    </div>
                </form>

                <?php if(isset($_SESSION['work_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['work_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['work_content']); }?>

                <?php if(isset($_SESSION['image_size'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_size'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_size']); }?>

                <?php if(isset($_SESSION['image_format'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['image_format'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['image_format']); }?>
            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>