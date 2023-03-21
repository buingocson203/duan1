<div class="w-full">
    <div class="bg-gray-200 text-gray-600 font-bold h-10 py-2 pl-5 rounded-md my-4">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="border rounded-md">
        <div class="font-bold bg-gray-300 flex justify-center h-9 p-2 mb-2 gap-28">
            <p>ID</p>
            <p>Nội dung bình luận</p>
            <p>IdUser</p>
            <p>IdPro</p>
            <p>Ngày bình luận</p>
        </div>
        <table class="w-full">
            <?php
            foreach ($dsbinhluan as $binhluan) {
                extract($binhluan);
                $suabl = "index.php?act=suabl&id=" . $id;
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '<tr class="flex justify-around">
                    <th class="w-1/6 border-y "><input type="checkbox" name="" id=""></th>
                    <th class="w-1/5 border-y ">' . $id . '</th>
                    <th class="w-1/5 border-y ">' . $noidung . '</th>
                    <th class="w-1/5 border-y ">' . $iduser . '</th>
                    <th class="w-1/5 border-y ">' . $idpro . '</th>
                    <th class="w-1/5 border-y ">' . $ngaybinhluan . '</th>
                    <th class="w-1/4"><a href="' . $suabl . '"><input class="px-2 rounded-md hover:bg-gray-300" type="button" value="Sửa"></a> <a href="' . $xoabl . '"><input class="px-2 rounded-md hover:bg-gray-300" type="button" value="Xóa"></a></th>
                </tr>';
            }
            ?>


        </table>
    </div>
    <div class="gap-6 my-4">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Chọn tất cả">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Bỏ chọn tất cả">
        <input class="border border-gray-300 rounded-md p-1 hover:bg-gray-300" type="button" value="Xóa các mục đã chọn">
    </div>

</div>