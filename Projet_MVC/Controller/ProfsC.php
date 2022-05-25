
<?php
class ProfsC extends Controller
{
    public function __construct()
    {
        parent::__construct('Prof');
    }
    public function index(){
        parent::view("index",Etudiant::All());
    }
//    public function show($id){
//        $this->view("show",Etudiant::find($id));
//    }
    public function login($login,$pass){
        $P = new Prof();
        if(!$P->login($login, $pass)){
            $this->Redirect("../ERROR=wrongLogin");
        }
        else{
            session_start();
            $_SESSION['login']=$login;
            $this->index();
        }
    }
    public function logout(){
        session_start();
        if(isset($_SESSION['login'])){
            session_unset();
            session_destroy();
            $this->Redirect("../");
        }
    }
}