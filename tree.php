<?php

// Построение дерева меню
include ('db-conn.php');

class View
{
   public function getCat()
    {

        $data = Conn::connectToDB()->prepare('SELECT * FROM menu');
        $data->execute();
        $result = $data->fetchAll();


        $cat = array();
        foreach ($result as $row) {
            $cat[$row['id']] = $row;
        }
        return $cat;
    }

  public function getTree($dataset)
    {
        $tree = array();

        foreach ($dataset as $id => &$node) {
            if (!$node['parent']) {
                $tree[$id] = &$node;
            } else {
                $dataset[$node['parent']]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }


 public function tplMenu($category)
    {
        $menu = '<li>' . $category['title'];

        if (isset($category['childs'])) {
            $menu .= '<ul>' . $this->showCat($category['childs']) . '</ul>';
        }
        $menu .= '</li>';

        return $menu;
    }


  public function showCat($data)
    {
        $string = '';
        foreach ($data as $item) {
            $string .= $this->tplMenu($item);
        }
        return $string;
    }



}

$obj=new View();
$cat = $obj->getCat();

$tree = $obj->getTree($cat);

$cat_menu = $obj->showCat($tree);

echo '<ul>'. $cat_menu .'</ul>';

