<div class="w-full flex">
    <div class="w-3/4 grid gap-y-3">
        <div class="border rounded-md">
            <div class="bg-gray-200 text-xl p-2 rounded-tl-md rounded-tr-md">Quên Mật Khẩu</div>

            <form action="index.php?act=quenmk" method="post">
                <div class="py-4 px-4 grid gap-y-2">
                    <div class="">
                        Email:
                        <input class="w-full border rounded-md" type="email" name="email">
                    </div>
                    <div class="">
                        <input class="w-24 px-2 border rounded-md" type="submit" value="Gửi" name="guiemail">
                        <input class="w-24 px-2 border rounded-md" type="reset" value="Nhập lại">
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