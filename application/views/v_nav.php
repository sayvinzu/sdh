
<div class="content-side content-side-full">
    <ul class="nav-main">

        <?php $menu = $this->M_Crud->getData('tb_menu')->result(); ?>
            <?php foreach ($menu as $mn): ?>
                <li class="nav-main-heading ml-4 text-primary"><span class="sidebar-mini-hidden"><b><?= $mn->menu; ?></b></span></li>
               
                <?php $sub_menu = $this->M_Crud->getDataWhere('tb_sub_menu',array('id_menu' => $mn->id_menu ))->result(); ?>

                <?php foreach ($sub_menu as $sm): ?>

                    <?php if ($sm->jenis == 1): ?>

                        <li>
                            <a href="<?= site_url($sm->link); ?>"><i class="<?= $sm->icon ?>"></i><span class="sidebar-mini-hide"> <?= $sm->sub_menu; ?></span></a>
                        </li>
                       
                        
                    <?php else: ?>

                        <li >
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="<?= $sm->icon ?>"></i><span class="sidebar-mini-hide"> <?= $sm->sub_menu; ?></span></a>
                            <ul>
                                <?php $list_menu = $this->M_Crud->getDataWhere('tb_list_menu',array('id_sub_menu' => $sm->id_sub_menu ))->result(); ?>

                                <?php foreach ($list_menu as $lm): ?>
                                     <li>
                                        <a href="<?= site_url($lm->link); ?>"> <?= $lm->list_menu; ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </li>

                    <?php endif ?>
                    
                <?php endforeach ?>
                
            <?php endforeach ?> 
        
    </ul>
</div>


<!-- <div class="content-side content-side-full">
    <ul class="nav-main">
        <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
        <li class="open">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>
            <ul>
                <li>
                    <a class="active" href="be_pages_dashboard.html">Dashboard 1</a>
                </li>
                <li>
                    <a href="be_pages_dashboard2.html">Dashboard 2</a>
                </li>
                <li>
                    <a href="be_pages_dashboard3.html">Dashboard 3</a>
                </li>
                <li>
                    <a href="be_pages_dashboard4.html">Dashboard 4</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="bd_dashboard.html"><i class="si si-compass"></i><span class="sidebar-mini-hide">Boxed Backend</span></a>
        </li>
        
        
       
    </ul>
</div> -->