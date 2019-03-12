<?php
// Запись данных в БД
include ('db-conn.php');

class Load
{
    public function loadData()
    {
        $category = $_POST['category'];
        $subcategory = $_POST['sub_category'];
        $parent = 0;
        $error=false;
        $parent_name=$_POST['category'];

        $lastid = Conn::connectToDB()->query('SELECT id FROM menu ORDER BY id DESC LIMIT 1');
        $lastid = $lastid->fetchAll();
        $id = $lastid[0]["id"] + 1;

        $data = Conn::connectToDB()->prepare('SELECT * FROM menu WHERE title = :cat');
        $data->execute(array('cat' => $category));


        $result = $data->fetchAll();


        foreach ($result as $rows) {
            if (!empty($subcategory)) {
                $parent = $rows["id"];
                $category = $subcategory;
            }

            if ($rows["title"] == $category) {
                $error = true;
            }

        }


        if (!$error) {
            Conn::connectToDB()->exec("INSERT INTO `menu` (`id`,`parent`,`parent_name`,`title`) VALUES ('$id','$parent','$parent_name','$category')");

        }
    }
}

$obg_3= new Load();
$obg_3->loadData();