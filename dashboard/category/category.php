<?php include '../../configs/helper.php' ?>
<?php include '../dashboard_inc/header.php' ?>

<?php 
if (isset($_POST['catAddBtn'])) {
    categoryAdd($_POST);
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Title -->
    <div class="row justify-content-between aling-items-center mx-2">
        <div>
            <h1 class="h3 mb-4 text-gray-800">All Category</h1>
        </div>
    </div>

    <!-- Post info Table -->
    <section>
        <div class="row">
            
            <div class="col-12">
                <form action="category.php" method="post">
                    <div class="row">
                    <div class="form-group col-10">
                        <input type="text" name="name" id="title" class="form-control form-control-sm" placeholder="Add Category">
                    </div>
                    <div class="form-group col-2">
                        <button type="submit" name="catAddBtn" class="btn btn-sm btn-primary">Add</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <table class="table table-straped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tilte</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $categoryTB = getCategories();
                        foreach ($categoryTB as $category) {?>
                        <tr>
                            <td><?=$category['id']?></td>
                            <td><?=$category['name']?></td>
                            <td><?=$category['slug']?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
<!-- /.container-fluid -->

<?php include '../dashboard_inc/footer.php' ?>
