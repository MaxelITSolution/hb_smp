<!DOCTYPE html>
<html class="app">
    <head>
<!--        <title><?php echo $title; ?></title>-->
        <?php 
          $temp = $this->db->query('SELECT value_'.$language.' AS value FROM static_contents WHERE page="web_title"')->result_array();
          $web_title       = $temp[0]['value'];
          $temp = $this->db->query('SELECT value_'.$language.' AS value FROM static_contents WHERE page="web_meta"')->result_array();
          $web_meta       = $temp[0]['value'];
          if (substr($web_meta,0,5) != "<meta") {
            $web_meta = "<meta name='description' content='$web_meta' >";
          }
          switch($language) {
            case "eng" : { $lang_text = "english"; $lang_code = "en"; break; }
            case "ina" : { $lang_text = "indonesian"; $lang_code = "id"; break; }
            case "kor" : { $lang_text = "korean"; $lang_code = "ko"; break; }
            case "chn" : { $lang_text = "chinese"; $lang_code = "zh"; break; }
            case "rus" : { $lang_text = "russia"; $lang_code = "ru"; break; }
          }
        ?>
        <title><?php echo $web_title; ?></title>
        <?php echo $web_meta; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Language" content="<?php echo $lang_code; ?>">          

        <!-- RESPONSIVE META TAG -->
        <meta charset="utf-8"></meta>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="<?php echo $lang_text; ?>">


        <link rel="shortcut icon" href="assets/front/images/favicon.png" type="image" />
        <link rel="stylesheet" href="assets/front/css/mc/profile.css" type="text/css" />
        <!-- CSS ASSETS -->
        <?php foreach ($css_assets as $key => $value) { ?>
            <link media="all" type="text/css" rel="stylesheet" href="<?php echo site_url($value); ?>">
        <?php } ?>
        <!-- JS ASSETS -->
        <?php foreach ($js_assets as $key => $value) { ?>
            <script src="<?php echo site_url($value); ?>"></script>
        <?php } ?>
        <style>
            <?php if ($language == 'rus') { ?>
                body { font-family: 'Arial' !important; }
                .section-3 .box-1 h4 { margin-top: 10px; }
                .dot-home-5 { margin-top: -130px; }
                .dot-home-6 { margin-top: -5px; }
                .section-1 .box-1 h1 { line-height: 145%; font-size: 39px; }
                .section-10 .box-2 { margin-top: -20px; }
                .wp-slide-expertise h3 { font-weight: bold; }
            <?php } ?>
            <?php if ($language == 'kor') { ?>
                body { font-family: 'Dotum' !important; }
                .section-3 .box-1 h4 { margin-top: 50px; }
                .dot-home-6 { margin-top: 10px; }
                .section-10 .box-2 p { line-height: 210%; }
                .section-10 .box-2 { margin-top: -10px; }
                .dot-profile-1 { margin-left: 410px; }
                .wp-slide-expertise h3 { font-weight: bold; }
            <?php } ?>
            <?php if ($language == 'chn') { ?>
                body { font-family: 'Simhei' !important; }
                .section-3 .box-1 h4 { margin-top: 60px; }
                .dot-home-6 { margin-top: 20px; }
                .section-10 .box-2 p { line-height: 250%; }
                .section-10 .box-2 { margin-top: -10px; }
                .dot-profile-1 { margin-left: 300px; }
                .dot-expertise-2 { margin-left: 290px; margin-top: -105px; }
                .wp-slide-expertise h3 { font-weight: bold; }
            <?php } ?>
            <?php if ($language == 'eng') { ?>
                .section-3 .box-1 h4 { margin-top: 20px; }
                .dot-home-5 { margin-top: -120px; }
                .dot-home-6 { margin-top: -5px; }
                .section-10 .box-2 { margin-top: 10px; }
                .dot-profile-1 { margin-left: 300px; }
            <?php } ?>
            <?php if ($language == 'ina') { ?>
                .section-3 .box-1 h4 { margin-top: 10px; }
                .dot-home-5 { margin-top: -130px; }
                .dot-home-6 { margin-top: -5px; }
                .section-10 .box-2 { margin-top: -20px; }
                .dot-expertise-2 { margin-left: 320px; }
            <?php } ?>
        </style>
    </head>
    <body>
        <div class="overlay"></div>
        <img class="loading" src="<?php echo site_url('assets/front/images/loading-button.gif'); ?>">
        <!-- HOME -->
        <div class="mobile-menu">
            <div><i class="fa fa-navicon"></i></div>
        </div>
        <?php $this->load->view($subview) ?>
        <section class="col-md-12 footer">
            <div class="container">
                <div class="col-md-6">
                    <div class="col-md-6 box-1">
                        <h3 style="font-family: Gotham-Light;">CONTACT</h3>
                    </div>
                    <div class="col-md-6 box-2" id="footer_center">
                        <div class="col-md-12 no-padding"><p style="font-family: Gotham-Light;" >
                            <?php echo nl2br($static_content[56]->value);  ?>
                        </p></div>
                        <div class="col-md-12 no-padding"><p style="font-family: Gotham-Light; margin-top: -10px;" ><?php echo nl2br($static_content[57]->value); ?></p></div>
                        <div class="col-md-12 no-padding"><p style="font-family: Gotham-Light; margin-top: -10px;" ><?php echo nl2br($static_content[58]->value); ?></p></div>
                        <div class="col-md-12 no-padding"><a href="mailto:marketing@sarimas.com" id="mailto1"><p style="font-family: Gotham-Light; margin-top: -10px;" ><?php echo nl2br($static_content[59]->value); ?></p></a></div>
                    </div>
                </div>
                <div class="col-md-6 box-3" style="margin-top: -22px;">
                    <div class="col-md-12 no-padding text-right social-media">
                        <a target="blank" href="<?php echo $static_content[60]->value; ?>"><img src="<?php echo site_url('assets/front/images/facebook-footer.png'); ?>" class="foot_sosmed"></a>
                        <a target="blank" href="<?php echo $static_content[61]->value; ?>"><img src="<?php echo site_url('assets/front/images/linkedin-footer.png'); ?>" class="foot_sosmed"></a>
                        <a target="blank" href="<?php echo $static_content[62]->value; ?>"><img src="<?php echo site_url('assets/front/images/google-plus-footer.png'); ?>" class="foot_sosmed_g"></a>
                    </div>
                    <div class="col-md-12 no-padding text-right"><p style="font-family: Gotham-Light;" >
                        &copy; <?php echo date("Y"); ?> Sari Mas Permai. All rights reserved. Terms and Conditions Apply.
                    </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- GLOBAL JS SCRIPT -->
        <?php $this->load->view('front/components/app_js') ?>
    </body>
</html>
