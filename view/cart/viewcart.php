<div class="flex">
    <div class="w-3/4">
        <div class="bg-gray-200 text-xl p-2">GIỎ HÀNG</div>
        <div class="border p-10">
            <div class="border rounded-md">
                <?php
                viewcart(1);
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td><img src="../img/a3.png" alt="" height="80px"></td>
                    <td>Giày chạy</td>
                    <td>50</td>
                    <td>2</td>
                    <td>100 VNĐ</td>
                    <td><input type="button" value="Xóa"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="../img/a3.png" alt="" height="80px"></td>
                    <td>Dép</td>
                    <td>50</td>
                    <td>2</td>
                    <td>100 VNĐ</td>
                    <td><input type="button" value="Xóa"></td>
                </tr> -->
            </div>
        </div>
        <div class="mt-3">
            <a href="index.php?act=bill"><input class="border px-3 bg-gray-200 rounded-md hover:bg-slate-300" type="submit" value="TIẾP TỤC ĐẶT HÀNG"></a>
            <a href="index.php?act=delcart"><input class="border px-3 bg-gray-200 rounded-md hover:bg-slate-300" type="submit" value="XÓA GIỎ HÀNG"></a>
        </div>
    </div>

    <div class="w-1/4 ml-4 grid gap-y-4">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>