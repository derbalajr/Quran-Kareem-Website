<?php
class Connect{
  function set_connection() {
    $db = new mysqli('localhost','root','','quran');
    if ($db->connect_error) {

     die("Connection failed: " . $db->connect_error);
   }
   // echo "Connected successfully";
   return $db;
  }
  function getResult() {
    $conn = new Connect();
    $db=$this->set_connection();
    $query="SELECT * FROM `quran_surah`";
    return $result = mysqli_query($db,$query);
  }
  function getRow() {
    $result = $this->getResult();
    return $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
  }
  function getRowCount() {
    $result = $this->getResult();
    return $rowcount = mysqli_num_rows($result);
  }
}

 ?>
