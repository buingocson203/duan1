<?php
function insert_sanpham($tensp, $giasp, $anh, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,img,moTa,id_dm) values('$tensp','$giasp','$anh','$mota', '$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotXem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_sanpham_cungloai($id, $id_dm)
{
    $sql = "select * from sanpham where id_dm=" . $id_dm . " AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $anh)
{
    if ($anh != "")
        $sql = "update sanpham set id_dm='" . $iddm . "', name='" . $tensp . "', price='" . $giasp . "', moTa='" . $mota . "', img='" . $anh . "' where id=" . $id;
    else
        $sql = "update sanpham set id_dm='" . $iddm . "', name='" . $tensp . "', price='" . $giasp . "', moTa='" . $mota . "' where id=" . $id;
    pdo_execute($sql);
}
