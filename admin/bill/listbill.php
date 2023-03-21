<div class="2">
    <div class="bg-gray-200 h-12 rounded-md my-4 pt-2 pl-4 text-lg">
        <h1 class="text-gray-500 font-bold">DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form class="my-3" action="index.php?act=listbill" method="post">
        <input class="outline-0 px-2 bg-gray-50 border rounded-md" type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input class="bg-gray-200 px-3 hover:bg-gray-400 border rounded-md" type="submit" name="listok" value="GO">
    </form>
    <div class="border rounded-md">
        <div class="w-full flex justify-between gap-6 font-bold bg-gray-200 px-16 mb-3 h-12 items-center">
            <p class="w-1/6">MÃ ĐƠN HÀNG</p>
            <p class="w-1/6">KHÁCH HÀNG</p>
            <p class="w-1/6">SỐ LƯỢNG HÀNG</p>
            <p class="w-1/6">GIÁ TRỊ ĐƠN HÀNG</p>
            <p class="w-1/6">TÌNH TRẠNG ĐƠN HÀNG</p>
            <p class="w-1/6">NGÀY ĐẶT HÀNG</p>
            <p class="w-1/6">THAO TÁC</p>
        </div>
        <?php
        foreach ($listbill as $bill) {
            extract($bill);
            $kh = ' <p>' . $bill["bill_name"] . '</p>
                    <p>' . $bill["bill_email"] . '</p>
                    <p>' . $bill["bill_adress"] . '</p>
                    <p>' . $bill["bill_tell"] . '</p>';
            $ttdh = get_ttdh($bill["bill_status"]);
            $countsp = loadall_cart_count($bill["id"]);
            echo '<div class="w-full flex justify-between items-center font-bold px-10">
                        <input class="mr-6" type="checkbox" name="">
                        <p class="w-1/6">DAM-' . $bill['id'] . '</p>
                        <p class="w-1/6">' . $kh . '</p>
                        <p class="w-1/6">' . $countsp . '</p>
                         
                        <p class="w-1/6"><strong>' . $bill['total'] . '</strong>VND</p>
                        <p class="w-1/6">' . $ttdh . '</p>
                        <p class="w-1/6">' . $bill["ngaydathang"] . '</p>
                        <p class="w-1/6"><input class="bg-gray-100 px-2 hover:bg-gray-300 border rounded-md" type="button" value="Sửa"><input class="bg-gray-100 px-2 hover:bg-gray-300 border rounded-md" type="button" value="Xóa"> </p>
                    </div>';
        }
        ?>
    </div>
    <div class="w-full flex justify-start mt-6 gap-3">
        <input class="border px-3 rounded-md bg-gray-200 hover:bg-gray-300" type="button" value="Chọn tất cả">
        <input class="border px-3 rounded-md bg-gray-200 hover:bg-gray-300" type="button" value="Bỏ chọn tất cả">
        <input class="border px-3 rounded-md bg-gray-200 hover:bg-gray-300" type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input class="border px-3 rounded-md bg-gray-200 hover:bg-gray-400" type="button" value="Nhập thêm"></a>
    </div>
</div>