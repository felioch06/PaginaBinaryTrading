<?php
    class Login extends DB{
        public function consulta($email, $pass){
            try{
                $stm = parent::conectar()->prepare("SELECT COUNT(*) AS contar FROM usuarios WHERE email='$email' AND pass='$pass' ");
                $stm->execute();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultarUser(){
            try{
                $stm = parent::conectar()->prepare("SELECT * FROM usuarios");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>