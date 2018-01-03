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

}