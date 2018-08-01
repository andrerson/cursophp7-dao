<?php 
    class Usuario{

        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        public function getIdusuario(){
            return $this->idusuario;
        }

        public function getDeslogin(){
            return $this->deslogin;
        }
        public function getDessenha(){
            return $this->dessenha;
        }
        public function getDtcadastro(){
            return $this->dtcadastro;
        }

        public function setIdusuario($idusuario){

            $this->idusuario = $idusuario;
        }

        public function setDeslogin($deslogin){

            $this->deslogin = $deslogin;
        }

        public function setDessenha($dessenha){

            $this->dessenha = $dessenha;
        }

        public function setDtcadastro($dtcadastro){

            $this->dtcadastro = $dtcadastro;
        }


        public function loadByid($id){

            $sql = new Sql();

            $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
                ":ID"=>$id
            ));

            if(isset($result[0])){
                $row = $result[0];

                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin(@$row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtcadastro(new DateTime(@$row['dtcadastro']));
            }

        }

        public static function getList(){
            $sql = new Sql();

            return $sql->select("SELECT * FROM tb_usuarios ORDER BY desnome;");//ajuste para deslogin

        }


        public static function search($login){

            $sql = new Sql();

            return $sql->select("SELECT * FROM tb_usuarios WHERE desnome LIKE :SEARCH ? ORDER BY desnome", array(
                ':SEARCH'=>"%".$login."%"
            ));
        }

        public function __toString(){
            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDessenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }

    }

?>
