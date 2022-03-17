
<?php
class Query
{
  public  $servername = "localhost";
  public  $username = "root";
  public  $password = "";
  public $db;
  public function __construct()
  {

      try {
          $conn = new PDO("mysql:host=$this->servername;dbname=tasks", $this->username, $this->password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          return   $this->db=$conn;
      } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
      }



  }
    public  function ConcatSelectPeople()
    {

        $statement = $this->db->prepare("SELECT CONCAT(lname, ',', fname) AS fullname,age,phone FROM PEOPLE order by age");
        $statement->execute();
     return     $statement;
    }
    function foo($bar){
        $bar += 2;

        echo "<br>".$bar;
    }



}
$QueryBuilder=new Query();
$selectPeople=$QueryBuilder->ConcatSelectPeople();



