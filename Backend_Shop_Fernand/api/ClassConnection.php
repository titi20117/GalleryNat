<?php
    abstract class ClassConnection {

        #connection avec la base de donnees
        protected function connectDB()
        {
            try
            {
                $Con=new PDO(
                    "mysql:host=localhost;dbname=sport;charset=utf8",
                    "root",
                    ""
                    // array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') 
                );
                return $Con;
            }
            catch (PDOException $Erro)
            {
                return $Erro->getMessage();
            }
        }
    }
?>