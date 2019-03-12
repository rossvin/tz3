<?php
// Удаление записей
include ('db-conn.php');

class Del{

    public function delData(){
        $name= $_POST['category'];

        $data = Conn::connectToDB()->query('SELECT * FROM menu');
        $result1 = $data->fetchAll();

        foreach( $result1 as $item1) {

                    if ($item1['title'] == $name && $item1['parent']== 0 ) {
                        $data1 = Conn::connectToDB()->prepare('SELECT * FROM menu WHERE parent_name= :cat');
                        $data1->bindParam(':cat', $name);
                        $data1->execute();
                        $result = $data1->fetchAll();
                        foreach($result as $item){
                            $parent_name= $item['parent_name'];
                            $data = Conn::connectToDB()->prepare('DELETE FROM menu WHERE parent_name = :name');
                            $data->bindParam(':name', $parent_name);
                            $data->execute();
                        }

                    }else{
                        $data1 = Conn::connectToDB()->prepare('DELETE FROM menu WHERE title= :cat');
                        $data1->bindParam(':cat', $name);
                        $data1->execute();


                    }

        }

    }

}

$del_obj= new Del();
$del_obj->delData();