<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbinhluan = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <div class="border rounded-md">
        <div class="bg-gray-200 text-xl p-2">Bình luận</div>
        <div class="">

            <?php

            foreach ($dsbinhluan as $bl) {
                extract($bl);
                echo '<td class="w-full border p-2 cursor-not-allowed hover:bg-gray-300">"' . $noidung . '"</td>';
                echo '<td class="w-full border p-2 cursor-not-allowed hover:bg-gray-300">"' . $iduser . '"</td>';
                echo '<td class="w-full border p-2 cursor-not-allowed hover:bg-gray-300">"' . $ngaybinhluan . '"</td>';
            }
            ?>
        </div>
        <div class="bg-gray-200 py-2 px-3">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="hidden" name="iduser" value="<?= $iduser ?>">
                <input class="w-2/4 rounded-md" type="text" name="noidung">
                <input class="border-black bg-gray-300 px-1 rounded-md ml-4 hover:cursor-pointer hover:bg-gray-400" type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</body>

</html>