<!DOCTYPE html>
<html class="app">
    <head>
        <title><?php echo $title; ?></title>
        <!-- RESPONSIVE META TAG -->
        <meta charset="utf-8"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS ASSETS -->
        <?php foreach ($css_assets as $key => $value) { ?>
            <link media="all" type="text/css" rel="stylesheet" href="<?php echo site_url($value); ?>">
        <?php } ?>
    </head>
    <body id="minovate" class="appWrapper">
        <div id="wrap" class="animsition">
            <section id="header">
                <header class="clearfix">
                    <div class="branding">
                        <a class="brand" href="index.html">
                            <span><strong>A</strong>DMINISTRATOR</span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav-right pull-right list-inline">
                        <li class="dropdown nav-profile">
                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo site_url('assets/app/images/profile-photo.jpg'); ?>" alt="" class="img-circle size-30x30">
                                <span><?php echo $active_user; ?> <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                                <li>
                                    <a role="button" tabindex="0" href="<?php echo site_url('app/auth/signout'); ?>">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </header>
            </section>
            <div id="controls">
                <aside id="sidebar">
                    <div id="sidebar-wrap">
                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <?php $this->load->view('app/components/menu') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <section id="content">
                <?php $this->load->view($subview) ?>
            </section>
        </div>
        <!-- JS ASSETS -->
        <?php foreach ($js_assets as $key => $value) { ?>
            <script src="<?php echo site_url($value); ?>"></script>
        <?php } ?>
        <!-- GLOBAL JS SCRIPT -->
        <?php $this->load->view('app/components/app_js') ?>
    </body>
</html>