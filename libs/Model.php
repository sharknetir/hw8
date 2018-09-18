<?php 
class Model{
 
    public $con;

    public function __construct($servername =db_Servername ,$username=db_username,$password=db_password,$dbname=db_Databasename){
    

        try {
            $this->con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           
            // set the PDO error mode to exception
          return  $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
           // echo "Connected successfully";
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }

    }

    public function insert($object,$tablename){

           $con=$this->con;

            $keys="";
            $values=""; 

         foreach($object as $key=>$value){
            $keys.=$key." , ";
            $values.="'".$value."'"." , ";
         }
        

         $keys= rtrim($keys,', ');
         $values= rtrim($values,', ');

        $sql = "INSERT INTO $tablename ( $keys )
        VALUES ( $values )";


        return $con->exec($sql);

    }

    public function update($id,$table){
        $con=$this->con;
        $sql="UPDATE $table SET access_level='1' WHERE email='$id[0]';";
       // var_dump($sql);die();
        return $con->exec($sql);
    }

    public function select($tablename,$feild,$confition=1,$falg=0){
        $con=$this->con;
        $sql="SELECT $feild FROM $tablename WHERE $confition;";
        $stm=$con->prepare($sql);
        $stm->execute();
       $stm->setFetchMode(PDO::FETCH_ASSOC);
        if ($falg==0){

            return $stm->fetchAll();
        }elseif ($falg==1){

            return $stm->fetch();
        }

    }

    public function search($table,$char){
        $con=$this->con;
        $sql="select * from $table where name like '%".$char."%'";
        $stm=$con->prepare($sql);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);

        return $stm->fetchAll();


    }
}