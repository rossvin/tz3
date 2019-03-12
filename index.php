<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Меню</title>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>


    <link href="style.css" rel="stylesheet" />


    <script src="main.js"></script>

</head>

<body>




<div style="margin-left:30%;width: 40%;margin-top:5%">


<div class="clearfix" style="">
    <form action="" method="post" id="ajax_form" >
    <input placeholder="категория" list="cat" class="form-control " name="category" id="in-put" style="width: 45%; float:left"/><a href="#" id="del"> <span  style="float: left; margin-left: 1%;margin-top: 4px;">X</span></a>


    <datalist id="cat">


    </datalist>

    <input placeholder="подкатегория" type="text"  class="form-control " name="sub_category" id="sub_category" style="width: 45%;margin-left: 7%; float: left"/>
    <input type="submit" value="Отправить"  id="sub_mit" style="float: right; margin-top: 30px">
     </form>



    <div id="mess" style=""></div>
</div>
    <h2>Меню</h2>
<div class="text" ></div>
    <div class="instr" >
        <h2>Описание</h2>
        <ol>
            <li>Заполняем поле Категория (обязательно) и поле подкатегория (опционально)(заполнение валидируется)</li>
            <li>Данные отправляются и обновляются через AJAX.</li>
            <li>При добавлении категории (или подкатегории) она появляется в выпадающем списке поля КАТЕГОРИЯ и доступна для выбора.</li>
            <li>Меню поддерживает неограниченнное количество вложенностей подкатегорий.</li>
            <li>Для удаления категории (подкатегории) ее нужно выбрать с выпадающего списка и нажать крестик.</li>

        </ol>
    </div>


</body>

</html>