<div class="w-full">
    <div class="bg-gray-200 text-gray-600 font-bold h-10 py-2 pl-5 rounded-md my-4">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="border rounded-md">
        <div class="font-bold bg-gray-300 flex justify-center h-9 p-2 mb-2 gap-60">
            <p>MÃ LOẠI</p>
            <p>TÊN LOẠI</p>
        </div>
        <table class="w-full">
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id=" . $id;
                $xoadm = "index.php?act=xoadm&id=" . $id;
                echo '<tr class="pl-16 flex justify-around">
                    <th class="w-1/4"><input type="checkbox" name="" id=""></th>
                    <th class="w-1/4">' . $id . '</th>
                    <th class="w-1/4">' . $name . '</th>
                    <th class="w-1/4"><a href="' . $suadm . '"><input class="px-2 rounded-md hover:bg-gray-300" type="button" value="Sửa"></a> <a href="' . $xoadm . '"><input class="px-2 rounded-md hover:bg-gray-300" type="button" value="Xóa"></a></th>
                </tr>';
            }
            ?>


        </table>
    </div>
    <div class="gap-6 my-4">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Chọn tất cả">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Bỏ chọn tất cả">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=adddm"><input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Nhập thêm"></a>
    </div>

</div>