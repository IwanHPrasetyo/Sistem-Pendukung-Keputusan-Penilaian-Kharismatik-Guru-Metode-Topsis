<?php

/**
 *
 */
class Topsis
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=data_guru', "root", "");
    // $this->db = new PDO('mysql:host=mysql.idhostinger.com;dbname=u241789732_putri', "u241789732_root", "39133494");
  }

  

  public function get_data_kriteria(){
    $stmt = $this->db->prepare("SELECT*FROM kriteria ORDER BY id_kriteria");
    $stmt->execute();
		return $stmt;
  }

  public function get_data_produk(){
    $stmt = $this->db->prepare("SELECT*FROM data_nilai_guru ORDER BY NIP");
    $stmt->execute();
    return $stmt;
  }

  public function get_data_kriteria_id($id){
    $stmt = $this->db->prepare("SELECT*FROM kriteria WHERE id_kriteria='$id' ORDER BY id_kriteria");
    $stmt->execute();
		return $stmt;
  }

  public function get_data_nilai_id($id){
    $stmt = $this->db->prepare("SELECT*FROM nilai_topsis WHERE NIP='$id' ORDER BY id_kriteria");
    $stmt->execute();
    return $stmt;
  }

  public function pembagi($id){
    $stmt = $this->db->prepare("SELECT nilai FROM nilai_topsis WHERE id_kriteria='$id'");
    $stmt->execute();
    $pembagi=0;
    while ($data=$stmt->fetch(PDO::FETCH_ASSOC)) {

      $pangkat=pow($data['nilai'],2);
      $pembagi=$pembagi+$pangkat;
    }
    $hasil=sqrt($pembagi);
    return $hasil;
  }

  public function insert_data_max_min($id_kriteria, $nilai){
    $stmt = $this->db->prepare("INSERT INTO max_min_topsis (id_kriteria, nilai_max_min) VALUE ('$id_kriteria','$nilai')");
    $stmt->execute();
  }

  public function delete_min_max(){
    $stmt = $this->db->prepare("DELETE FROM max_min_topsis");
    $stmt->execute();
  }

  public function min_max(){
    $stmt = $this->db->prepare("SELECT id_kriteria, max(nilai_max_min) AS max, min(nilai_max_min) AS min FROM max_min_topsis GROUP BY id_kriteria ");
    $stmt->execute();
    return $stmt;
  }

}

 ?>
