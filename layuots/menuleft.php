<div class="col-md-3 ">
    <ul class="list-group" id="menu">

        <li href="#" class="list-group-item menu1 active">
            Menu
        </li>

        <?php
        foreach ($menu as $mn){
            ?>
            <li href="#" class="list-group-item menu1">
                <?= $mn->Ten ; ?>
            </li>
            <ul>
                <?php
                $loaitin=explode(',',$mn->LoaiTin);
                $lt=explode(':',$loaitin);
                foreach ($loaitin as $tinloai){
                    list($id,$ten,$tenkhongdau)=explode(':',$tinloai);

                    ?>
                    <li class="list-group-item">
                        <a href="loaitin.html"><?= $ten ?></a>
                    </li>
                    <?php

                } ?>

                <?php

                ?>


            </ul>
            <?php
        }
        ?>


    </ul>
</div>