<div class="">
    <div class="bg-gray-200 h-12 rounded-md my-4 pt-2 pl-4 text-lg">
        <h1 class="text-gray-500 font-bold">Thêm mới loại hàng hóa</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled class="border w-full rounded-md">
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" class="border w-full rounded-md">
            </div>
            <div class="my-4">
                <input type="submit" name="themmoi" value="Thêm mới" class="border p-2 rounded-md hover:bg-gray-300">
                <input type="reset" value="Nhập lại" class="border p-2 rounded-md hover:bg-gray-300">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="border p-2 rounded-md hover:bg-gray-300"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>
        </form>
    </div>
</div>