<?php
    $chemin=Zend_Layout::getMvcInstance()->chemin;
    $cheminsup=$chemin."../";
?>
    <title>BE in 3D</title>
        <!-- Load Polymer -->
        <script
            src="<?php echo $chemin; ?>/components/platform/platform.js">
        </script>
        
        <script type="text/javascript" src="<?php echo $chemin; ?>/js/Ajax.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $chemin; ?>/app.js"></script>
        <script src="<?php echo $chemin; ?>js/news.js"></script>
        <script
            src="<?php echo $chemin; ?>/js/news.js">
        </script>
        <script type="text/javascript" 
        src="<?php echo $chemin; ?>components/webcomponentsjs/webcomponents.js"></script>
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-toolbar/core-toolbar.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-drawer-panel/core-drawer-panel.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-header-panel/core-header-panel.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-item/core-item.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-icon/core-icon.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-icons/core-icons.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-icons/hardware-icons.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-icon-button/core-icon-button.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-icon-button/paper-icon-button.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-menu-button/paper-menu-button.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-item/paper-item.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-tabs/paper-tabs.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-input/paper-input.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-image/core-image.html">

        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-dialog/paper-dialog.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-button/paper-button.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-pages/core-pages.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-shadow/paper-shadow.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-ripple/paper-ripple.html">
        <link rel="import" 
              href="<?php echo $chemin; ?>components/core-collapse/core-collapse.html">
        <link rel="import" 
              href="<?php echo $chemin; ?>components/paper-toast/paper-toast.html">
        <link rel="import" 
              href="<?php echo $chemin; ?>components/more-routing-master/more-routing-config.html">
        <link rel="import" 
              href="<?php echo $chemin; ?>components/more-routing-master/more-routing.html">
        <link rel="import" 
              href="<?php echo $chemin; ?>components/more-routing-master/more-route.html">
        <link rel="import" 
              href="<?php echo $chemin; ?>components/more-routing-master/more-route-selector.html">
        <!-- NEW ELEMENTS -->
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-form-inscription/core-form-inscription.html">     
        <link rel="import"
              href="<?php echo $chemin; ?>components/core-form-connexion/core-form-connexion.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-hidden-bar/paper-hidden-bar.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/paper-footer/paper-footer.html">
        <link rel="import"
              href="<?php echo $chemin; ?>components/menu-toolbar-hsds/menu-toolbar-hsds.html">
 
        <!-- Form element for profile -->
        <link rel="import"           
              href="<?php echo $chemin; ?>components/form-profile-personal-data/form-profile-personal-data.html" >
        <!-- POLYMER ROUTES -->
        <link rel="import"
              href="<?php echo $chemin; ?>requires/polymer-routes.html">
        <!-- STYLESHEETS -->

        <link rel="stylesheet" href="<?php echo $cheminsup ?>public/style/CSS.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $cheminsup ?>/style/shadow-dom.css" type="text/css">
        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic' rel='stylesheet' type='text/css'>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="cssSlider created with cssSlider, a free wizard program that helps you easily generate beautiful web slideshow" />