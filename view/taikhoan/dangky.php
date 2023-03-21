<div class="w-full flex">
    <div class="w-3/4 grid gap-y-3">
        <div class="border rounded-md">
            <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md">Đăng ký thành viên</div>

            <form action="index.php?act=dangky" method="post">
                <div class="py-4 px-4 grid gap-y-2">
                    <div class="">
                        Email:
                        <input class="w-full border rounded-md" type="email" name="email">
                    </div>
                    <div class="">
                        Tài khoản:
                        <input class="w-full my-2 border rounded-md" type="text" name="user">
                    </div>
                    <div class="">
                        Mật khẩu:
                        <input class="w-full border rounded-md" type="password" name="pass">
                    </div>
                    <input class="w-24 px-2 border rounded-md" type="submit" value="Đăng ký" name="dangky">
                    <input class="w-24 px-2 border rounded-md" type="reset" name="" value="Nhập lại">
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