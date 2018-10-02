<?php
class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

//xxxxxxxxxxxxxxxxxxxxxxx

    public function getUsuario(){
        return $this->idusuario;
    }

    public function setUsuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    } 

    public function setDeslogin($value){
        $this->deslogin = $value;
    }
    		
    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    	}

    public function getDtCadastro(){
        return $this->dtcadastro;
    }

    public function setDtCadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){

         $sql = new Sql();
 
         $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
             ":ID" => $id
         ));

         if (count($results) > 0){

            $row = $results[0];

            $this-> setUsuario($row['idusuario']);
            $this-> setDeslogin($row['deslogin']);
            $this-> setDessenha($row['dessenha']);
            $this-> setDtCadastro(new Datetime($row['dtcadastro']));       
         }                                
    }

    public static function getList(){
       
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

    }


    public static function search($login){
       
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios where deslogin like :SEARCH ORDER BY deslogin;",array(':SEARCH'=>"%".$login."%"));

    }

    public function login($Login, $password){

        $sql = new Sql();
 
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN" => $Login,
            ":PASSWORD" => $password
        ));

        if (count($results) > 0){

           $row = $results[0];

           $this-> setUsuario($row['idusuario']);
           $this-> setDeslogin($row['deslogin']);
           $this-> setDessenha($row['dessenha']);
           $this-> setDtCadastro(new Datetime($row['dtcadastro']));       
        } else {

            throw new Exception("Login e/ou senha inválidos.");
        }                                

    }
    public function __toString(){

        return json_encode(array(
            "idusuario"=>$this->getUsuario(),
            "deslogin"=>$this->getDeslogin(),
            "desenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
        ));
    }

}

?>
