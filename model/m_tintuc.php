<?php
/**
 * Created by PhpStorm.
 * User: nghie
 * Date: 12/30/2017
 * Time: 3:29 PM
 */
include ('database.php');

class M_tintuc extends database {

    function getSlide(){
        $this->database();
        $sql="select * from slide";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function getmenu(){
        $this->database();
        $sql="select tl.*,GROUP_CONCAT(lt.id,':',lt.Ten,':',lt.TenKhongDau) AS LoaiTin
              from theloai tl 
              INNER JOIN loaitin lt 
              ON tl.id = lt.idTheLoai GROUP BY tl.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}