<div class="border rounded-md">
    <div class="bg-gray-200 text-xl p-2">Tài khoản</div>
    <div class="py-4 px-10">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="">
                Xin chào <br>
                <?= $user ?>
            </div>
            <div class="">
                <li>
                    <a href="index.php?act=mybill" class="text-green-700">Đơn hàng của tôi</a>
                </li>
                <li>
                    <a href="index.php?act=quenmk" class="text-green-700">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_tk" class="text-green-700">Cập nhật tài khoản</a>
                </li>
                <?php if ($role == 1) { ?>
                    <li>
                        <a href="admin/index.php" class="text-green-700">Đăng nhập Admin</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat" class="text-green-700">Thoát</a>
                </li>

            </div>
        <?php
        } else {


        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="">
                    Tên đăng nhập <br>
                    <input class="w-3/4 border rounded-md outline-0" type="text" name="user" id="">
                </div>
                <div class="">
                    Mật khẩu <br>
                    <input class="w-3/4 border rounded-md outline-0" type="password" name="pass" id="">
                </div>
                <div class="">
                    <input type="checkbox" name="" id="">
                    Ghi nhớ tài khoản?
                </div>
                <div class="border pl-6 py-2 rounded-md w-1/2 bg-blue-100 hover:bg-blue-600 hover:text-white cursor-pointer">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>
            </form>
            <li>
                <a href="#" class="text-green-700">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky" class="text-green-700">Đăng ký thành viên</a>
            </li>
        <?php } ?>
    </div>
</div>
<div class="border rounded-md">
    <div class="bg-gray-200 text-xl p-2">Danh mục</div>
    <div class="">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li class="w-full border p-2 cursor-not-allowed hover:bg-gray-300">
                                            <a class="w-full" href="' . $linkdm . '">' . $name . '</a>
                                        </li>';
            }
            ?>
            <!-- 
                            <li class="w-full border p-2"><a href="#">Giày Nữ</a></li>
                            <li class="w-full border p-2"><a href="#">Giày Thời Trang Nam</a></li>
                            <li class="w-full border p-2"><a href="#">Giày Thời Trang Nữ</a></li>
                            <li class="w-full border p-2"><a href="#">Giày Lười</a></li>
                            <li class="w-full border p-2"><a href="#">Giày Thể Thao</a></li>
                        </ul> -->
    </div>
    <div class="bg-gray-200 py-2 px-3">
        <form action="index.php?act=sanpham" method="post">
            <input class="w-2/4 rounded-md" type="text" name="kyw" id="">
            <input class="border-black bg-gray-300 px-1 rounded-md ml-4 hover:cursor-pointer hover:bg-gray-400" type="submit" name="timkiem" value="Search">
        </form>
    </div>
</div>
<div class="border rounded-md">
    <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md">Top 10 yêu thích</div>
    <div class="py-4 px-4 grid gap-y-2">
        <?php
        foreach ($dst10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $anh = $img_path . $img;
            echo '<div class="flex">
                        <img class="w-1/5 border p-2" src="' . $anh . '" alt="">
                        <a href="' . $linksp . '">' . $name . '</a>
                    </div>';
        }
        ?>

    </div>
</div>