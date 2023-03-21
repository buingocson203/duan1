<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$anhpath = "../upload/" . $img .  $img_name;
if (is_file($anhpath)) {
    $anh = "<img src='" . $anhpath . "' height='60px'>";
} else {
    $anh = "Không có hình";
}
?>

<div class="">
    <div class="bg-gray-200 h-12 rounded-md my-4 pt-2 pl-4 text-lg">
        <h1 class="text-gray-500 font-bold">Cập nhập loại hàng hóa</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($id_dm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '></option>' . $name . '</option>';
                    }

                    ?>
                </select>

            </div>
            <div class="">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?= $name ?>" class="border w-full rounded-md">
            </div>
            <div class="">
                Giá sản phẩm <br>
                <input type="text" name="giasp" value="<?= $price ?>" class="border w-full rounded-md">
            </div>
            <div class="">
                Ảnh <br>
                <input type="file" name="anh" class="border w-full rounded-md">
                <?= $anh ?>
            </div>
            <div class="">
                Mô tả <br>
                <textarea name="mota" class="border w-full rounded-md" cols="30" rows="10"><?= $moTa ?></textarea>
            </div>
            <!-- <div class="">
                Lượt xem <br>
                <input type="text" name="luotxem" class="border w-full rounded-md">
            </div>
            <div class="">
                Mã danh mục <br>
                <input type="text" name="madm" class="border w-full rounded-md">
            </div> -->
            <div class="my-4">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật" class="border p-2 rounded-md hover:bg-gray-300">
                <input type="reset" value="Nhập lại" class="border p-2 rounded-md hover:bg-gray-300">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="border p-2 rounded-md hover:bg-gray-300"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>
        </form>
    </div>
</div>