

 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?= base_url(); ?>/assets/images/faces/user.jpg" alt="profile">
                    <span class="login-status online"></span> <!--change to offline or busy as needed-->              
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Syaiful Amri Yahya</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
                </a>
            </li>

            <?php $menu = $this->M_Crud->getData('tb_menu')->result(); ?>
            <?php foreach ($menu as $mn): ?>
                <li class="nav-item">
                    <div class="mt-4">
                        <div class="border-bottom">
                        <p class="text font-weight-bold mb-1"><?= $mn->menu; ?></p>                  
                        </div>
                    </div>
                </li>
                <?php $sub_menu = $this->M_Crud->getDataWhere('tb_sub_menu',array('id_menu' => $mn->id_menu ))->result(); ?>

                <?php foreach ($sub_menu as $sm): ?>

                    <?php if ($sm->jenis == 1): ?>

                       <!--  <li class="nav-item">
                            <i class="<?= $sm->icon ?>"></i>
                            <a class="nav-link" href="<?= site_url($sm->link); ?>">
                            <span class="menu-title"><?= $sm->sub_menu; ?></span>
                            </a>
                        </li>
 -->
                        <li class="nav-item">
                            <a class="nav-link"  href="<?= site_url($sm->link); ?>">
                                <i class="<?= $sm->icon ?>" style="margin-left: 0px"></i>
                                <span class="menu-title ml-2"> <?= $sm->sub_menu; ?></span>
                                
                            </a>
                        </li>
                        
                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#a<?= $sm->id_sub_menu; ?>" aria-expanded="false" aria-controls="ui-basic">
                            <i class="<?= $sm->icon ?>" style="margin-left: 0px"></i>
                            <span class="menu-title ml-2"> <?= $sm->sub_menu; ?></span>
                            <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="a<?= $sm->id_sub_menu; ?>">
                            <ul class="nav flex-column sub-menu">

                                <?php $list_menu = $this->M_Crud->getDataWhere('tb_list_menu',array('id_sub_menu' => $sm->id_sub_menu ))->result(); ?>

                                <?php foreach ($list_menu as $lm): ?>
                                    <li class="nav-item"> <a class="nav-link" href="<?= site_url($lm->link); ?>"><?= $lm->list_menu; ?></a>
                                <?php endforeach ?>

                               
                            </ul>
                            </div>
                        </li>
                        
                    <?php endif ?>
                    
                <?php endforeach ?>
                
            <?php endforeach ?>
            
          
        </ul>
      </nav>