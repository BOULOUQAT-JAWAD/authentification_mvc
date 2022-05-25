<?php

abstract class model
{
    public $id=0;
    //declaration d'une variable qui va contenir des objets PDO
    private static $pdo=null;

    public function __construct()
    {
        $info_cnx= file(ROOT.".env");
        $server=trim(explode("=",$info_cnx[1])[1]);
        $dbname=trim(explode("=",$info_cnx[3])[1]);
        $user=trim(explode("=",$info_cnx[4])[1]);
        $password=trim(explode("=",$info_cnx[5])[1]);
        try {
            self::$pdo = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $user, $password);
        }catch (PDOException $e) {
            die('Connection Error: ' . $e->getMessage());
        }
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
/*
<?php
    include("dbh.class.php");

class Users extends Dbh{
    protected function getStudent($CNE){
        $sql = "SELECT * FROM student WHERE CNE = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$CNE]);

        $result = $stmt->fetchAll();
        return $result;
    }
    protected function setStudent($Nom,$Prenom,$Email,$CNE){
        $sql = "INSERT INTO student(Nom,Prenom,Email,CNE) VALUES(?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$Nom,$Prenom,$Email,$CNE]);
    }
}*/
    public function login($login,$pwd){
        $classe=get_called_class();
        $req="select * from prof where login='".$login."' and pwd='".$pwd."'";
//        $stmt=self::$pdo->prepare();
        new $classe();
        $res=self::$pdo->query($req);
        $result=$res->fetch(PDO::FETCH_ASSOC);
        return $result!=false;
    }

    public static function All()
    {
        $class=get_called_class();
        $req="select * from Etudiant";
        new $class();
        $res=self::$pdo->query($req);
        return $res->fetchAll(PDO::FETCH_OBJ);
    }
    public static function find($login){
        $class=get_called_class();
        $req='select * from '.get_called_class().' where login='.$login;
        $o=new $class();
        $res=self::$pdo->query($req);
        $Tableau=$res->fetch(PDO::FETCH_ASSOC);
        foreach ($Tableau as $key=>$value)
            $o->key=$value;
        return $o;
    }
}