<div class="2">
    <div class="3">

        <div class="w-full flex">
            <div class="w-3/4">

                <div class="">ĐƠN HÀNG CỦA BẠN</div>
                <div class="">
                    <div class="w-full flex justify-between font-bold bg-gray-200 px-16 h-8">
                        <p>MÃ ĐƠN HÀNG</p>
                        <p>NGÀY ĐẶT</p>
                        <p>SỐ LƯỢNG MẶT HÀNG</p>
                        <p>TÌNH TRẠNG ĐƠN HÀNG</p>
                    </div>
                    <?php
                    if (array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '<div class="w-full flex justify-between font-bold bg-gray-200 px-16 h-8">
                                        <p>DAM-' . $bill['id'] . '</p>
                                        <p>' . $bill['ngaydathang'] . '</p>
                                        <p>' . $countsp . '</p>
                                        <p>' . $bill['total'] . '</p>
                                        <p>' . $ttdh . '</p>
                                    </div>';
                        }
                    }
                    ?>
                    <div class="w-full flex justify-between font-bold bg-gray-200 px-16 h-8">
                        <p>1</p>
                        <p>DAM-0001</p>
                        <p>19/2/2004</p>
                        <p>1</p>
                        <p>200000</p>
                        <p>Đã thanh toán</p>
                    </div>
                </div>
            </div>
            <div class="w-1/4 ml-4 grid gap-y-4">
                <?php
                include "view/boxright.php";
                ?>
            </div>
        </div>
    </div>

</div>