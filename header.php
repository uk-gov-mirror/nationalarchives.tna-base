<!DOCTYPE html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">
    <!-- tna_wp_head -->
    <?php tna_wp_head(); ?>
    <!-- end tna_wp_head -->
    <?php get_template_part( 'partials/header-meta' ); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T8DSWV');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8DSWV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php
	if (function_exists('notification_banner')){
		notification_banner();
	}
?>
    <div class="notification-banner">
        <div class="container">
            <div class="notice">
                <strong class="title">Like our new ‘Search’ options?</strong> <a
                    href="https://www.smartsurvey.co.uk/s/AV38J/" target="_blank">Tell us what you think here</a>.
            </div>
        </div>
    </div>
    <header id="header" role="banner">
        <a id="skip-to-main-content" href="#breadcrumb-holder">Skip to Main Content</a>
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-5" id="logo-holder">
                    <button aria-label="Toggle menu" id="mega-menu-mobile"></button>
                    <a href="https://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"
                        class="visible-lg visible-md visible-sm">
                        <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/img/logo-white.png"
                            srcset="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/img/tna-horizontal-white-logo.svg"
                            alt="The National Archives" class="img-responsive logo">
                    </a>
                </div>
                <div class="col-xs-8 col-sm-2" id="mobile-logo-holder">
                    <button title="Main menu" aria-label="Toggle menu" id="mega-menu-pull-down"
                        class="hidden-xs"><span>Menu</span></button>
                    <a href="https://www.nationalarchives.gov.uk" title="Go to The National Archives homepage"
                        class="hidden-lg hidden-md hidden-sm">
                        <img src="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/img/logo-white.png"
                            srcset="<?php echo str_replace( home_url(), '', get_template_directory_uri() ); ?>/img/tna-horizontal-white-logo.svg"
                            alt="The National Archives" class="img-responsive">
                    </a>
                </div>
                <div class="col-xs-2 col-sm-5" id="search-field-wrapper">
                    <form action="/search/results" method="get" id="globalSearch" role="search" class="hidden-xs">
                        <span id="scope-selector">&nbsp;</span>
                        <label class="sr-only sr-only-focusable" for="tnaSearch">Search</label>
                        <input type="text" class="search-field" placeholder="Search our website..." id="tnaSearch"
                            name="_q" required aria-required="true">
                        <input type="submit" class="search-button" id="search-button" value="">
                    </form>
                    <ul>
                        <li><a title="Search our website" href="#" class="formDestinationChanger"
                                data-target="/search/results" data-placeholder="Search our website..."
                                data-fieldName="_q" role="button"
                                aria-label="Change form destination to search the website">Search our website</a></li>
                        <li><a title="Search our catalogue for records" href="#" class="formDestinationChanger"
                                data-target="https://discovery.nationalarchives.gov.uk/results/r"
                                data-placeholder="Search our records..." data-fieldName="_q" role="button"
                                aria-label="Change form destination to search the catalogue">Search our records</a></li>
                    </ul>
                </div>
            </div>
            <div class="row hidden-lg hidden-md hidden-sm">
                <div class="col-md-12">
                    <button class="search-expander">&nbsp;</button>
                    <form method="get" id="mobileGlobalSearch" style="display: block;" name="responsiveSearch"
                        action="/search/results" role="search">
                        <fieldset>
                            <legend class="sr-only sr-only-focusable">Search our website or records</legend>
                            <div class="input-group">
                                <label class="sr-only sr-only-focusable" for="tnaMobileSearch">Search</label>
                                <input type="text" placeholder="Search our website..." id="tnaMobileSearch" required
                                    aria-required="true" name="QueryText" value="">
                            </div>
                            <div class="radio-search">
                                <input name="radioSearchGroup" id="radioSearchWebsite" value="search_website" checked=""
                                    type="radio"> <label for="radioSearchWebsite">Search our website</label>
                            </div>
                            <div class="radio-search">
                                <input name="radioSearchGroup" id="radioSearchRecords" value="search_records"
                                    type="radio"> <label for="radioSearchRecords">Search our records</label>
                            </div>
                            <span class="input-group-addon"><input type="submit" value="Search"></span>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <nav id="nav" role="navigation" class="navigation">
        <div class="mega-menu clearfix">
            <?php
		global $cloud;
		if (!$cloud) {
			if (file_exists(PATH_TO_MEGA_MENU_HTML)) {
				include PATH_TO_MEGA_MENU_HTML;
			} else {
                get_template_part( 'partials/mega-menu' );
			}
		} else {
            get_template_part( 'partials/mega-menu' );
        }
		?>
        </div>
    </nav>