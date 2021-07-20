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
                <form action="category_post.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Category" name="category_name">
                    </div>
                    
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>

                <?php if(isset($_SESSION['category_content'])){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['category_content'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php unset($_SESSION['category_content']); }?>

            </div>
        </div>
    </div>
</section>

<?php
require "../dashboard_part/dashboard_footer.php";
?>