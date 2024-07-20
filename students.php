<?php
require_once 'config.php';
require_once "data.php";
class students
{
    private $name;
    private $age;

    public function setname($name)
    {
        $this->name=$name;
    }

    public function setage($age)
    {
        $this->age=$age;
    }

    public function insertdata()
    {
        $sql="INSERT INTO st(name,age) VALUES (:name,:age)";
        $stmtp=DB::papaerone($sql);
        $stmtp->bindParam(':name',$this->name);
        $stmtp->bindParam(':age',$this->age);
        $stmtp->execute();
    }

    public function feacthdata()
    {
        $sql="SELECT * FROM st ";
        $stmtr=DB::papaerone($sql);
        $stmtr->execute();
        return $stmtr->fetchAll();
    }

    public function deletedata($id)
    {
        $sql="DELETE FROM st WHERE id=:id";
        $stmrt=DB::papaerone($sql);
        $stmrt->bindParam(':id',$id);
        $stmrt->execute();
    }

    public function updated($id)
    {
      $sql="UPDATE  st SET name=:name,age=:age WHERE id=:id";
      $styr=DB::papaerone($sql);
      $styr->bindParam(':name',$this->name);
      $styr->bindParam('age',$this->age);
      $styr->bindParam(':id',$id);
      $styr->execute();
    }
}

?>