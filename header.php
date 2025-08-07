<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <i class="fas fa-brain"></i>
                TDAH - PSIQUIATRIA
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#articles">Artigos</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#consultation">Consulta</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
            <button class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>