<div class="w-full">
    <div class="bg-gray-200 text-gray-600 font-bold h-10 py-2 pl-5 rounded-md my-4">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="border rounded-md">
        <div class="font-bold bg-gray-300 flex justify-center h-9 p-2 mb-2 gap-28">
            <p>MÃ TK</p>
            <p>Tên Đăng Nhập</p>
            <p>Mật Khẩu</p>
            <p>Email</p>
            <p>Địa Chỉ</p>
            <p>Điện Thoại</p>
            <p>Vai Trò</p>
        </div>
        <table class="w-full">
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk = "index.php?act=suatk&id=" . $id;
                $xoatk = "index.php?act=xoatk&id=" . $id;
                echo '<tr class="flex justify-around">
                    <th class="w-1/6 border-y "><input type="checkbox" name="" id=""></th>
                    <th class="w-1/5 border-y ">' . $id . '</th>
                    <th class="w-1/5 border-y ">' . $user . '</th>
                    <th class="w-1/5 border-y ">' . $pass . '</th>
                    <th class="w-1/5 border-y ">' . $email . '</th>
                    <th class="w-1/5 border-y ">' . $adress . '</th>
                    <th class="w-1/5 border-y ">' . $tell . '</th>
                    <th class="w-1/6 border-y ">' . $role . '</th>
                    <th class="w-1/4"><a href="' . $suatk . '"><input class="px-2 rounded-md hover:bg-gray-300" type="button" value="Sửa"></a> <a href="' . $xoatk . '"><input class="px-2 rounded-md hover:bg-gray-300" type="button" value="Xóa"></a></th>
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