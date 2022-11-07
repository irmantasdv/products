<form method="post" action="index.php">


    <div class="form-group">
        <label for="first_name">Product Code</label>
        <input type="text" name="product_code" class="form-control" id="product_code" placeholder="Product Code">
    </div>
    <div class="form-group">
        <label for="last_name">Product Name</label>
        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
    </div>
    <div class="form-group">
        <label for="email">Product Line</label>
        <input type="text" name="product_line" class="form-control" id="product_line" placeholder="Product Line">
    </div>
    <div class="form-group">
        <label for="phone_number">Product Scale</label>
        <input type="text" name="product_scale" class="form-control" id="product_scale" placeholder="Product Scale">
    </div>
    <div class="form-group">
        <label for="hire_date">Product Vendor</label>
        <input type="text" name="product_vendor" class="form-control" id="product_vendor" placeholder="Product Vendor">
    </div>
    <div class="form-group">
        <label for="hire_date">Description</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Description">
    </div>
    <div class="form-group">
        <label for="salary">In stock qty</label>
        <input type="text" name="stock" class="form-control" id="stock" placeholder="In stock qty">
    </div>
    <div class="form-group">
        <label for="manager_id">Price</label>
        <input type="number" step=".01" name="price" class="form-control" id="price" placeholder="Price">
    </div>
    <div class="form-group">
        <label for="salary">MSRP</label>
        <input type="text" name="msrp" class="form-control" id="msrp" placeholder="MSRP">
    </div>

    <button type="submit" name="create" class="btn btn-primary">Create</button>
</form>