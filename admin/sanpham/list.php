<div class="w-full">
    <div class="bg-gray-200 text-gray-600 font-bold h-10 py-2 pl-5 rounded-md my-4">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form class="my-3" action="index.php?act=listsp" method="post">
        <input class="border outline-0 rounded-md" type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input class="border px-2 rounded-md" type="submit" value="FIND" name="listok">
    </form>
    <div class="border rounded-md">

        <div class="font-bold bg-gray-300 flex justify-between h-9 p-2 mb-2 px-72">
            <p>MÃ LOẠI</p>
            <p>TÊN SẢN PHẨM</p>
            <p>GIÁ</p>
            <p>ẢNH</p>
            <p>LƯỢT XEM</p>
        </div>
        <table class="w-full">
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $anhpath = "../upload/" . $img;
                if (is_file($anhpath)) {
                    $anh = "<img src='" . $anhpath . "' height='60'>";
                } else {
                    $anh = "Không có hình";
                }
                echo '<tr class="flex justify-around">
                    <th class="w-1/6 border flex items-center justify-center"><input type="checkbox" name="" id=""></th>
                    <th class="w-1/6 border flex items-center justify-center">' . $id . '</th>
                    <th class="w-1/6 border flex items-center justify-center">' . $name . '</th>
                    <th class="w-1/6 border flex items-center justify-center">' . $price . '</th>
                    <th class="w-1/6 border flex items-center justify-center">' . $anh . '</th>
                    <th class="w-1/6 border flex items-center justify-center">' . $luotXem . '</th>
                    <th class="w-1/6 border flex items-center justify-center gap-2">
                    <a href="' . $suasp . '"><input class="px-3 rounded-md hover:bg-gray-300 border bg-slate-100" type="button" value="Sửa"></a>
                    <a href="' . $xoasp . '"><input class="px-3 rounded-md hover:bg-gray-300 border bg-slate-100" type="button" value="Xóa"></a></th>
                </tr>';
            }
            ?>


        </table>
    </div>
    <div class="gap-6 my-4">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Chọn tất cả">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Bỏ chọn tất cả">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Nhập thêm"></a>
    </div>

</div>