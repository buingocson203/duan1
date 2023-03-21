<div class="w-full flex">
    <div class="w-3/4 grid gap-y-3">
        <div class="border rounded-md">
            <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md">Cập nhật tài khoản</div>
            <?php
            if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_tk" method="post">
                <div class="py-4 px-4 grid gap-y-3">
                    <div class="">
                        Email:
                        <input class="w-full border rounded-md" type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="">
                        Tài khoản:
                        <input class="w-full my-2 border rounded-md" type="text" name="user" value="<?= $user ?>">
                    </div>
                    <div class="">
                        Mật khẩu:
                        <input class="w-full border rounded-md" type="password" name="pass" value="<?= $pass ?>">
                    </div>
                    <div class="">
                        Địa chỉ:
                        <input class="w-full border rounded-md" type="text" name="adress" value="<?= $adress ?>">
                        <div class="">
                            Điện thoại:
                            <input class="w-full border rounded-md" type="text" name="tell" value="<?= $tell ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input class="w-24 px-2 mt-3 border rounded-md bg-gray-300 hover:cursor-pointer hover:bg-gray-400" type="submit" value="Cập nhật" name="capnhat">
                        <input class="w-24 px-2 mt-3 border rounded-md bg-gray-300 hover:cursor-pointer hover:bg-gray-400" type="reset" name="" value="Nhập lại">
                    </div>
                </div>
            </form>
            <h2 class="text-red-400 font-bold">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>
        </div>
    </div>
    <div class="w-1/4 ml-4 grid gap-y-4">
        <?php include "view/boxright.php"; ?>
    </div>
</div>