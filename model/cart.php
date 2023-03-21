<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoa_th = '<p>Thao tác</p>';
        $xoa_td2 = '<p></p>';
    } else {
        $xoa_th = '';
        $xoa_td2 = '';
    }
    echo '<div class="w-full flex justify-between font-bold bg-gray-200 px-16 h-8">
                <p>Hình</p>
                <p>Sản phẩm</p>
                <p>Đơn giá</p>
                <p>Số lượng</p>
                <p>Thành tiền</p>
                ' . $xoa_th . '
            </div>';

    foreach ($_SESSION['mycart'] as $cart) {
        $anh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoa_td = '<a href ="index.php?act=delcart&idcart=' . $i . '"><input class="border px-3 bg-gray-200 rounded-md hover:bg-slate-300" type="button" value="Xóa"></a> ';
        } else {
            $xoa_td = '';
        }
        echo '      <div class="px-3 pl-2 flex justify-between w-full mt-2">
                    <div class="w-1/6 "><img src="' . $anh . '" alt="" height="80px"></div>
                    <div class="w-1/6 ml-14 ">' . $cart[1] . '</div>
                    <div class="w-1/6 ml-14 ">' . $cart[3] . '</div>
                    <div class="w-1/6 ml-14 ">' . $cart[4] . '</div>
                    <div class="w-1/6 ml-14 ">' . $ttien . '</div>
                    <div class="w-1/6 ml-14">' . $xoa_td . '</div>
                </div>';
        $i += 1;
    }
    echo '<div class="flex w-full pt-2">
                <p class="w-3/4 px-3 bg-gray-200">Tổng đơn hàng </p>
                
                <p class="w-1/4 px-3 bg-gray-300 text-black">' . $tong . ' VNĐ</p>
                ' . $xoa_td2 . '
                </div>';
}

function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<div class="w-full flex justify-between font-bold bg-gray-200 px-16 h-8">
                <p>Hình</p>
                <p>Sản phẩm</p>
                <p>Đơn giá</p>
                <p>Số lượng</p>
                <p>Thành tiền</p>
            </div>';

    foreach ($listbill as $cart) {
        $anh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '      <div class="px-3 pl-2 flex justify-between w-full mt-2">
                    <div class="w-1/6 "><img src="' . $anh . '" alt="" height="80px"></div>
                    <div class="w-1/6 ml-14 ">' . $cart['name'] . '</div>
                    <div class="w-1/6 ml-14 ">' . $cart['price'] . '</div>
                    <div class="w-1/6 ml-14 ">' . $cart['soluong'] . '</div>
                    <div class="w-1/6 ml-14 ">' . $cart['thanhtien'] . '</div>
                </div>';
        $i += 1;
    }
    echo '<div class="flex w-full pt-2">
                <p class="w-3/4 px-3 bg-gray-200">Tổng đơn hàng </p>
                
                <p class="w-1/4 px-3 bg-gray-300 text-black">' . $tong . ' VNĐ</p>
                </div>';
}
function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $adress, $tell, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(bill_name,bill_email,bill_adress,bill_tell,bill_pttt,ngaydathang,total) values('$iduser', '$name','$email','$adress','$tell','$pttt','$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke()
{
    $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.id_dm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
