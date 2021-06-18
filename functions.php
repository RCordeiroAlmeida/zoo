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

  public function getAnimals() {
    $animais = $this -> conn -> prepare("select * animal");
    $animais = $animais -> execute();

    return $animais;
  }
  
}
  