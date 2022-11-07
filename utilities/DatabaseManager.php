<?php
class DatabaseManager{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "classicmodels";
    protected $conn;

    public function __construct()
    {
       
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database",$this->user,$this->password);
        }catch(PDOException $e){
            echo("Klaida: ". $e->getMessage());
        }
       
    }
    public function select($table){
        $sql = "select * from $table";
        try{
            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
        
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $result = $stmt->fetchAll();
            return $result;
            //var_dump($result);
        }catch(PDOException $e){
            echo("Klaida: " . $e);
        }

    }

    public function insert($table, $cols, $values) {    
      
        // var_dump($cols);
        $cols = implode(',', $cols); // pavadinimas,aprasymas
        
        for ($i=0; $i < count($values); $i++) { 
            $values[$i] = "'".$values[$i]."'";
        }
        
        $values = implode(',', $values); // pavadinimas',aprasymas'

        

        //lentele gali tureti skirtingus stuleplius, skirtingas ivedamas reiksmes
        $sql = "INSERT INTO `$table`($cols) VALUES ($values)";

        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //exec komanda naudojama kai uzklausa negrazina rezulatu
            $this->conn->exec($sql);

            echo "irasas   sekmingai pridetas";
        }
        catch(PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }
    }
    public function delete($table, $col, $id) {
        

        $sql = "DELETE FROM `$table` WHERE $col='$id'";
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec($sql);
        }
        catch(PDOException $e) {
            echo "Klaida: " . $e->getMessage();
        }

    }

}
