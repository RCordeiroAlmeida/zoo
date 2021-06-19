<?php
class Functions {

  public $conn;

  public $set_nome;
  public $set_id;

  public $ani_nome;
  public $ani_especie;
  public $setores;

  public function __construct() {
    $pdo = new PDO('mysql:host=localhost;dbname=zoo','root','');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $this -> conn = $pdo;
  }

  public function setSetor() {
    $sql = $this -> conn -> prepare("insert into setor values (null,?)");
    $sql -> execute(array($this -> set_nome));
    return array('status' => 'true', 'reason' => 'Setor cadastrado com sucesso!');
  }

  public function setAnimal() {
    $sql = $this -> conn -> prepare("insert into animal values(null, ?,?,?)");
    $sql -> execute(array($this->ani_nome, $this->set_id, $this->ani_especie));
    return array('status' => 'true', 'reason' => 'Animal cadastrado com sucesso!');
  }

  public function getSetor() {
    $this-> setores = $this -> conn -> prepare("select * from setor order by set_nome ASC");
    $this-> setores -> execute();
    $fetchSetores = $this -> setores ->fetchAll();


    return $fetchSetores;
  }
  
  public function getTableData(){
    $tabela = $this -> conn -> prepare("
      SELECT animal.ani_id, animal.ani_nome, animal.ani_especie, animal.ani_setor, setor.set_nome
      FROM animal
      INNER JOIN setor ON animal.ani_setor = setor.set_id
    ");
    $tabela -> execute();
    $fetchAnimals = $tabela -> fetchAll();

    return $fetchAnimals;
  }

  public function deleteAnimals($ani_id){
    $del = $this -> conn -> prepare("DELETE FROM animal WHERE ani_id = $ani_id");
    $del -> execute();
  }
  
  public function editAnimals($ani_id, $ani_nome, $ani_especie){
    $edit = $this -> conn -> prepare("UPDATE animal SET ani_nome='$ani_nome',ani_especie='$ani_especie'");
    $edit -> execute();
  }
}