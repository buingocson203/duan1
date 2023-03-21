<div class="">
    <div class="bg-gray-200 h-12 rounded-md my-4 pt-2 pl-4 text-lg">
        <h1 class="text-gray-500 font-bold">Thêm mới sản phẩm</h1>
    </div>
    <div class="">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm">

                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" class="border w-full rounded-md">
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input type="text" name="giasp" class="border w-full rounded-md">
            </div>
            <div class="row mb10">
                Ảnh <br>
                <input type="file" name="anh" class="border w-full rounded-md">
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" class="border w-full rounded-md" cols="30" rows="10"></textarea>
            </div>
            <!-- <div class="row mb10">
                Lượt xem <br>
                <input type="text" name="luotxem" class="border w-full rounded-md">
            </div>
            <div class="row mb10">
                Mã danh mục <br>
                <input type="text" name="madm" class="border w-full rounded-md">
            </div> -->
            <div class="my-4">
                <input type="submit" name="themmoi" value="Thêm mới" class="border p-2 rounded-md hover:bg-gray-300">
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