<?php
/**
 * Created by PhpStorm.
 * User: nghie
 * Date: 12/30/2017
 * Time: 3:29 PM
 */
include('database.php');

class M_tintuc extends database
{

    function getSlide()
    {
        $this->database();
        $sql = "select * from slide";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function getmenu()
    {
        $this->database();
        $sql = "select tl.*,GROUP_CONCAT(DISTINCT lt.id,':',lt.Ten,':',lt.TenKhongDau) AS LoaiTin,tt.id AS idTin,
      tt.TieuDe as TieuDeTin,
      tt.TieuDeKhongDau AS TieuDeKhongDauTin,
      tt.Hinh as HinhTin,
      tt.NoiDung as NoiDungTin,
      tt.NoiBat as NoiBatTin
              from theloai tl 
              INNER JOIN loaitin lt 
              ON lt.idTheLoai = tl.id 
              INNER JOIN tintuc tt
              ON tt.idLoaiTin = lt.id GROUP BY tl.id
              ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function getLoaiTin($id_loaitin)
    {
        $this->database();
        $sql = "select * from tintuc WHERE idLoaiTin = $id_loaitin";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loaitin));

    }
    function getTinTucByidLoaiTin($id_loaitin){
        $this->database();
        $sql=" select * from tintuc WHERE idLoaiTin=$id_loaitin ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_loaitin));
    }

}