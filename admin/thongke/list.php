<div class="">
  <div class="bg-gray-200 h-12 rounded-md my-4 pt-2 pl-4 text-lg">
    <h1 class="text-gray-500 font-bold">THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
  </div>
  <div class="border rounded-md mt-6">
    <div class="flex bg-gray-300 h-12 justify-between font-bold items-center">
      <p class="w-1/6 text-center">MÃ DANH MỤC</p>
      <p class="w-1/6 text-center">TÊN DANH MỤC</p>
      <p class="w-1/6 text-center">SỐ LƯỢNG</p>
      <p class="w-1/6 text-center">GIÁ CAO NHẤT</p>
      <p class="w-1/6 text-center">GIÁ THẤP NHẤT</p>
      <p class="w-1/6 text-center">GIÁ TRUNG BÌNH</p>
    </div>
    <?php
    foreach ($listthongke as $thongke) {
      extract($thongke);
      echo '<div class="flex">
                <p class="w-1/6 text-center border">' . $madm . '</p>
                <p class="w-1/6 text-center border">' . $tendm . '</p>
                <p class="w-1/6 text-center border">' . $countsp . '</p>
                <p class="w-1/6 text-center border">' . $maxprice . '$</p>
                <p class="w-1/6 text-center border">' . $minprice . '$</p>
                <p class="w-1/6 text-center border">' . $avgprice . '$</p>
              </div>';
    }
    ?>
  </div>
  <div>
    <a href="index.php?act=bieudo"><input class="border mt-6 bg-gray-200 hover:bg-gray-400 rounded-md px-3" type="button" value="Xem biểu đồ"></a>
  </div>
</div>