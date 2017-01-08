<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$idusu = $this->session->userdata(IDUSU_SESSION);
$idrol = $this->session->userdata(IDROL_SESSION);
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_CONTROLLER; ?>"><?= TITULO_MENU; ?></a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>                            
                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_INFO_CONTROLLER; ?>"><i class="fa fa-user fa-fw"></i><?= MENU_USUARIO_INFO; ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url(PATH_MENU)."/".VACANTE_CONTROLLER; ?>"><i class="fa fa-table fa-fw"></i><?= TITULO_VACANTE; ?></a>
                        </li>
                        <!--<li>
                            <a href="<?= base_url(PATH_MENU)."/".POSTULACION_CONTROLLER; ?>"><i class="fa fa-edit fa-fw"></i><?= TITULO_POSTULACION; ?></a>
                        </li>-->
                        <li>
                            <a href="<?= base_url(PATH_MENU)."/".USUARIO_LOGOUT; ?>"><i class="fa fa-sign-out fa-fw"></i><?= TITULO_LOGOUT; ?></a>
                        </li>                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>