<?php

    include_once 'models/usuario.php';

    class ConsultaModel extends Model{
        
        public function __construct()
        {
            parent::__construct();
        }

        public function get(){          
            $items = [];

            try{
                $query = $this->db->connect()->query("SELECT * FROM usuarios");

                while($row = $query->fetch()){
                    $item = new Usuario();
                    $item->id = $row['id'];
                    $item->nombre = $row['nombre'];
                    $item->email = $row['email'];
                    $item->celular = $row['celular'];
                    $item->password = $row['password'];

                    array_push($items, $item);
                }

                return $items;

            }catch(PDOException $e){
                return [];
            }
        }

        public function getById($id){
            $item = new Usuario();

            $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE id = :id");
            try{
                $query->execute(['id' => $id]);

                while($row = $query->fetch()){
                    $item->id = $row['id'];
                    $item->nombre = $row['nombre'];
                    $item->email = $row['email'];
                    $item->celular = $row['celular'];
                    $item->password = $row['password'];
                }

                return $item;
            }catch(PDOException $e){
                return null;
            }
        }

        public function update($item){
            try {
                $query = $this->db->connect()->prepare('UPDATE usuarios SET nombre = :nombre, celular = :celular, password = :password WHERE id = :id');
                $query->execute(['nombre'=> $item['nombre'], 'celular'=> $item['celular'], 'password'=> $item['password'], 'id'=> $item['id']]);
                //echo "esto ejecuto";
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    }

?>