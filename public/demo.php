<?php
    require_once "../hm/start.php";
    use \hm\lib\DB as DB;
    $a=$hm->execute("/index/index/jsonapi");
    function content(){
        ?>
        <p>自定义内容</p>
        <?php
        $comp=include "./components/comp.php";
        $comp();
        $new=include "./components/new.php";
        $new();
    }
    include "./base.php";
?>

