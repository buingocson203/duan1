<div class="flex">
    <div class="w-3/4">
        <div class="border rounded-md">
            <div class="bg-gray-200 text-xl p-2">THÔNG TIN ĐẶT HÀNG</div>
            <form action="index.php?act=billconfirm" method="post">
                <div class="py-4 px-4 grid gap-y-3">
                    <div class="">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $adress = $_SESSION['user']['adress'];
                            $email = $_SESSION['user']['email'];
                            $tell = $_SESSION['user']['tell'];
                        } else {
                            $name = "";
                            $adress = "";
                            $email = "";
                            $tell = "";
                        }
                        ?>
                        Người đặt hàng:
                        <input class="w-full border rounded-md" type="text" name="user" value="<?= $name ?>">
                    </div>
                    <div class="">
                        Địa chỉ:
                        <input class="w-full my-2 border rounded-md" type="text" name="adress" value="<?= $adress ?>">
                    </div>
                    <div class="">
                        Email:
                        <input class="w-full border rounded-md" type="text" name="email" value="<?= $email ?>">
                    </div>
                    <div class="">
                        Điện thoại:
                        <input class="w-full border rounded-md" type="text" name="tell" value="<?= $tell ?>">
                    </div>
                </div>
            </form>
        </div>
        <div class="border rounded-md my-6">
            <div class="bg-gray-200 text-xl p-2">PHƯƠNG THỨC THANH TOÁN</div>
            <form action="index.php?act=edit_tk" method="post">
                <div class="py-4 px-4 grid gap-y-3 pl-10">
                    <div class="flex gap-4" action="">
                        <div class=""><input type="radio" name="pttt"> Trả tiền khi nhận hàng</div>
                        <div class=""><input type="radio" name="pttt"> Thanh toán online </div>
                        <div class=""><input type="radio" name="pttt"> Chuyển khoản ngân hàng</div>

                    </div>
                </div>
            </form>
        </div>
        <div class="">
            <div class="bg-gray-200 text-xl p-2">THÔNG TIN GIỎ HÀNG</div>
            <div class="border p-10">

                <div class="border rounded-md">

                    <?php
                    viewcart(0);
                    ?>

                </div>
            </div>
        </div>
        <div class="mt-3">
            <a href="index.php?act=billcomfirm"><input class="border px-3 bg-gray-200 rounded-md hover:bg-slate-300" type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"></a>
        </div>
    </div>

    <div class="w-1/4 ml-4 grid gap-y-4">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>