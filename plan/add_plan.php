<?php require "../session.php";  ?>
<?php
require "../dashboard_part/dashboard_header.php";
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="bg-dark text-white text-center p-4" role="alert">
                    <h1>Our Plans Sections</h1>
                </div>
                <form action="plan_post.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="heading" name="heading">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="sub_head" name="sub_head">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="plan_title1" name="plan_title1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="plan_title2" name="plan_title2">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="plan_title3" name="plan_title3">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="plan_title4" name="plan_title4">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="plan_title5" name="plan_title5">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add plan</button>
                    </div>
                </form>

                <?php if(isset($_SESSION['plan_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['plan_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['plan_content']); }?>

            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>