<?php
/**
 * Created by PhpStorm.
 * User: nghie
 * Date: 12/30/2017
 * Time: 3:28 PM
 */
include 'model/m_tintuc.php';
class C_tintuc {
    function index(){
        $m_tintuc=new M_tintuc();
        $slide=$m_tintuc->getSlide();
        $menu=$m_tintuc->getmenu();

        return array('slide'=>$slide,'menu'=>$menu);
    }

    /**
     * @return array
     */
    function loaitin(){
        $id_loai = $_GET['id_loai'];
        $m_tintuc = new M_tintuc();
        $danhmuctin=$m_tintuc->getTinTucByidLoaiTin($id_loai);
        return array('danhmuctin'=>$danhmuctin);
    }


}