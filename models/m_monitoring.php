<?php

class Barang
{
  private $mysqli;
  function __construct($conn)
  {
    $this->mysqli = $conn;
  }
  public function tampil($id = null)
  {
    $db = $this->mysqli->conn;
    $sql = "SELECT *FROM data_pasien";
    if ($id != null) {
      $sql = "WHERE id_kasus = $id";
    }
    $query = $db->query($sql) or die($db->error);
    return $query;
  }
}
