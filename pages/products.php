<?php include "classes/Product-class.php"; ?>
<?php include "classes/ProductLine-class.php"; ?>
<?php
$products = $productObject->index();
$cols = $productObject->cols();
$productObject->createProduct();
$productObject->deleteProduct();
$lineCols = $productLineObject->cols();
?>


<div class="row">
    <div class="col-lg-8">
        <h1>Products</h1>
    </div>
    <?php foreach ($lineCols as $col) { ?>
                    <th><?php echo $col; ?></th>
                <?php } ?>
</div>
</div>
<div class="row">
    <div class="col-lg-6">
        <?php include "components/create.php"; ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <table class="table table-striped">
            
            <tr>
                <?php foreach ($cols as $col) { ?>
                    <th><?php echo $col; ?></th>
                <?php } ?>
                <th>Actions</th>
            </tr>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <?php foreach ($cols as $key => $col) { ?>
                        <td><?php echo $product[$key]; ?></td>
                    <?php } ?>
                    <td>
                        <form method="post" action="index.php">
                            <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
                            <button type="submit" name="delete" class="btn btn-danger" value="<?php echo $product["productCode"]; ?>">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</div>