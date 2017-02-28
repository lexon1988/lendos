<?php
include("../header.php");

$page = $_GET['page'];

?>

    <div class="container_admin">
        <h1>Блоки страницы <?= $page ?>:</h1>
        <hr>
        <h3>
        <a  href="blocks_show_rezult.php?page=<?= $page ?>" target="_blank"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Предварительный просмотр</a>

        ||

        <a href="blocks_show_rezult_save.php?page=<?= $page ?>" target="_blank"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Сохранить <?= $page ?></a>
            </h3>
            <hr>
        <?php

        for ($i = 1; $i < 50; $i++) {

            if (file_exists("html/" . $page . "/" . $i . ".txt")) {
                $file = file_get_contents("html/" . $page . "/" . $i . ".txt");

                ?>
                <a id="b<?= $i ?>"></a>
                <form action="block_save.php" method="post">


                    <p><b><?= $i ?> блок</b></p>
                    <textarea name="text" cols="100" rows="10"
                              placeholder="Введите сюда HTML код"><?= $file; ?></textarea>
                    <input type="hidden" name="block_num" value="<?= $i ?>">
                    <input type="hidden" name="page" value="<?= $page ?>">
                    <br>
                    <input class="btn btn-success" type="submit" value="Сохранить" style="display: inline-block;">

                </form>

                <hr>

                <?php
            } else {
                break;

            }
        }

        ?>

        <a id="down" href="block_add.php?page=<?= $page ?>" class="btn btn-primary" style="width:100%"><b> + Добавить
                ещё один блок</b></a>
        <br><br>
        <a id="down" href="block_del.php?page=<?= $page ?>&block=<?= $i - 1 ?>" class="btn btn-danger"
           style="width:100%"><b> - Удалить последний блок</b></a>
    </div>

<?php
include("../footer.php");
?>