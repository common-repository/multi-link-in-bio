<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/png"/>

    <?php
    $link_ga = get_option( 'rt_multi_link_ga' );
    if ( $link_ga ) :
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_html( $link_ga ); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo esc_html( $link_ga ); ?>');
        </script>
    <?php endif; ?>

    <?php
    $link_gtm = get_option( 'rt_multi_link_gtm' );
    if ( $link_gtm ) :
        ?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?php echo esc_html( $link_gtm ); ?>');</script>
        <!-- End Google Tag Manager -->

    <?php endif; ?>

    <?php
    $link_fbp = get_option( 'rt_multi_link_fbp' );
    if ( $link_fbp ) :
        ?>

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?php echo esc_html( $link_fbp ); ?>');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=<?php echo esc_html( $link_fbp ); ?>&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->

    <?php endif; ?>


</head>
<body>
<main>
    <h1 class="intro"><?php echo esc_html(get_option('rt_multi_link_setting_title')); ?></h1>
    <h2 class="tagline"><?php echo esc_html(get_option('rt_multi_link_setting_subtitle')); ?></h2>
    <h3 class="icons-social">
        <?php
        $links_rs = array(
            'fb' => 'fab fa-facebook',
            'ig' => 'fab fa-instagram',
            'twitter' => 'fab fa-twitter',
            'dev' => 'fab fa-dev',
            'github' => 'fab fa-github',
            'stackoverflow' => 'fab fa-stack-overflow',
            'linkedin' => 'fab fa-linkedin',
            'medium' => 'fab fa-medium',
            'behance' => 'fab fa-behance',
            'codepen' => 'fab fa-codepen',
            'wp' => 'fab fa-wordpress',
            'web' => 'fas fa-globe',
            'wa' => 'fab fa-whatsapp',
            'email' => 'far fa-envelope',
        );

        foreach ($links_rs as $key => $icon) {
            if (get_option('rt_multi_link_' . $key)) {
                ?>
                <a target="_blank"
                   href="<?php echo esc_html( ($key == 'email') ? 'mailto:' : ''); ?><?php  echo esc_html(get_option('rt_multi_link_' . $key)); ?>"><i
                            title="<?php echo esc_html( $key ); ?>" class="<?php echo esc_html($icon); ?>"></i></a>
                <?php
            }
        }
        ?>
    </h3>
</main>
<?php wp_footer(); ?>
</body>
</html>

