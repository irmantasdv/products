<?php 


class ProductLine {
    private $cols = array(
        "Classic Cars" => "Classic Cars",
        "Motorcycles" => "Motorcycles",
        "Planes" => "Planes",
        "Ships" => "Ships",
        "Trains" => "Trains",
        "Trucks and Buses" => "Trucks and Buses",
        "Vintage Cars" => "Vintage Cars"
    );
    // public function index() {
    //     $databaseManager = new DatabaseManager();
    //     $productLines = $databaseManager->select('productlines');
    //     return $productLines;
    // } 
    public function cols() {
        echo("hi");
        return $this->cols;
    }
}

$productLineObject = new ProductLine();