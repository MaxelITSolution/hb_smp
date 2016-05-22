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
            <div class="page page-core page-login">
                <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">A</span>DMINISTRATOR</h3></div>
                <div class="container w-420 p-15 bg-white mt-40 text-center">
                    <h2 class="text-light text-greensea">Log In</h2>
                    <form name="form" class="form-validation mt-20" id="form-signin" novalidate="">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="validation-message" data-field="email"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control">
                            <div class="validation-message" data-field="password"></div>
                        </div>
                        <div class="form-group text-left mt-20">
                            <a href="javascript:;" class="btn btn-greensea b-0 br-2 mr-5" id="sign-in">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <!-- JS ASSETS -->
        <?php foreach ($js_assets as $key => $value) { ?>
            <script src="<?php echo site_url($value); ?>"></script>
        <?php } ?>
        <!-- GLOBAL JS SCRIPT -->
        <?php $this->load->view('app/components/app_js') ?>
        <script type="text/javascript">
            $('#sign-in').on("click", function() {
                login();
            });
            $("#form-signin").keypress(function(event) {
                if (event.which == 13) {
                    login();
                }
            });

            function login() {
                $('#sign-in').html("Authenticating...").attr('disabled', true);
                var data = $('#form-signin').serialize();
                $.post("<?php echo site_url('app/auth/signin'); ?>", data).done(function(data) {
                    if (data.status == "Login Success") {
                        window.location.replace("<?php echo site_url('app/home'); ?>");
                    } else {
                        $('#sign-in').html("Login").attr('disabled', false);
                        $('.validation-message').html('');
                        $('.validation-message').each(function() {
                            for (var key in data) {
                                if ($(this).attr('data-field') == key) {
                                    $(this).html(data[key]);
                                }
                            }
                        });
                    }  
                });
            }
        </script>
    </body>
</html>

