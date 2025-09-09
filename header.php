<!doctype html>
<html <?php language_attributes(); ?> id="html-root" data-bs-theme="light">
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " : ";
        }
        bloginfo("name");
        ?></title>

        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Carnemart" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/site.webmanifest" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name",
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url(),
                ); ?>">
                    <img
                        class="logo img-fluid"
                        alt=""
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light@2x.png"
                        data-theme-light="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light@2x.png"
                        data-theme-dark="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-dark@2x.png"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="<?php echo esc_url(
                                home_url(),
                            ); ?>"
                                >Inicio</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="<?php if (
                                !is_home()
                            ):
                                echo esc_url(home_url());
                            endif; ?>#catalogo"
                                >Catálogo</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="<?php if (
                                !is_home()
                            ):
                                echo esc_url(home_url());
                            endif; ?>#blog"
                                >Blog</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="<?php if (
                                !is_home()
                            ):
                                echo esc_url(home_url());
                            endif; ?>#beneficios"
                                >Beneficios</a
                            >
                        </li>
                    </ul>
                </nav>
                <a
                    href="#contacto"
                    class="anchor btn btn-success rounded-pill"
                    id="btn-contacto"
                    >Contáctanos</a
                >
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-2 my-auto">
                        <a id="logo-navbar-link" href="<?php echo esc_url(
                            home_url(),
                        ); ?>">
                            <img
                                id="logo-navbar"
                                class="logo img-fluid"
                                alt=""
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-light@2x.png"
                                data-theme-light="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-light@2x.png"
                                data-theme-dark="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-dark@2x.png"
                            />
                        </a>
                    </div>
                    <div class="col-6 col-md-8 col-lg-10 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="active" href="<?php echo esc_url(
                                        home_url(),
                                    ); ?>">
                                        Inicio
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php if (!is_home()):
                                        echo esc_url(home_url());
                                    endif; ?>#catalogo"> Catálogo </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php if (!is_home()):
                                        echo esc_url(home_url());
                                    endif; ?>#blog"> Blog </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="<?php if (!is_home()):
                                        echo esc_url(home_url());
                                    endif; ?>#beneficios"> Beneficios </a>
                                </li>
                                <li class="list-inline-item">
                                    <a
                                        class="btn btn-success rounded-pill"
                                        href="#contacto"
                                    >
                                        Contáctanos
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
