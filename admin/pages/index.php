<?php
include("../header.php");
?>

    <div class="container_admin">
        <h1>Страницы:</h1>
        <hr>
        <form action="page_add.php" method="POST">

            <input class="form-control" type="text" name="page_name" placeholder="Например New.html"
                   style="display: inline-block; width: 70%;">
            <input class="btn btn-success" type="submit" value="Создать" style="display: inline-block;">


        </form>

        <hr>

        <?php

        $pages_array=scandir('html');
        $pages_array_count=count($pages_array);

        for($i=2;$i<$pages_array_count; $i++){

          ?>

            <font size="5"><a href="blocks.php?page=<?= $pages_array[$i] ?>"><?= $pages_array[$i] ?></a></font>

            <a href="page_del.php?page=<?= $pages_array[$i] ?>" class="btn btn-danger" style="float: right;">Удалить</a>

            <hr>

           <?php

        }

        ?>


    </div>

<?php
include("../footer.php");
?>