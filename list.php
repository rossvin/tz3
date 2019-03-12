<?php

//ќтображение выпадающего списка категорий
include('tree.php');

class ListMenu extends View
    {

public function list1(){

    foreach($this->getCat() as $item){
        echo  "<option value='" . $item['title'] . "'>" . $item['title'] . "</option>";

    }

}

}

$obj_list= new ListMenu();
$obj_list->list1();