<?php
include "utilities/DatabaseManager.php";
class Product
{
    private $cols = array(
        "productCode" => "ID",
        "productName" => "Product Name",
        "productLine" => "Product Line",
        "productScale" => "Product Scale",
        "productVendor" => "Product Vendor",
        "productDescription" => "Description",
        "quantityInStock" => "In stock qty",
        "buyPrice" => "Price",
        "MSRP" => "MSRP"
    );
    public function index()
    {

        $databaseManager = new DatabaseManager();

        $products = $databaseManager->select("products");
        return $products;
    }

    public function createProduct()
    {
        if (isset($_POST['create'])) {
            $data = $_POST;
            var_dump($data);
            unset($data["create"]);
            unset($data["page"]);
            $cols = array_keys($data);
            $values = array_values($data);

            $databaseManager = new DatabaseManager();
            $databaseManager->insert('products', $cols, $values);

            header("Location: index.php?page=products");
            exit();
        }
    }
    public function deleteProduct()
    {
        if (isset($_POST["page"]) && $_POST["page"] == "products") {
            if (isset($_POST["delete"])) {
                $databaseManager = new DatabaseManager();
                $databaseManager->delete('products', 'productCode', $_POST["delete"]); //mygtuko reiksme
                header("Location: index.php?page=products");
                exit();
            }
        }
    }

    public function cols()
    {
        return $this->cols;
    }
}
$productObject = new Product();
