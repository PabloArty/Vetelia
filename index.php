<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VETELIA</title>
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900,600italic|Armata' rel='stylesheet' type='text/css'>
</head>
<body>
<ul id="menunav">
    <div id="menu-close" class="btn-box"><a href="#"><i class="ico icon-cerrar"></i><span class="txt-btn">ATRÁS</span></a></div>
    <table>
        <td>
    <li class="menu-item" data-menuanchor="home" class="active"><a class="menu_btn" href="#home">HOME</a></li>
    <li class="menu-item" data-menuanchor="about"><a class="menu_btn" href="#about">ABOUT US</a></li>
    <li class="menu-item" data-menuanchor="products"><a class="menu_btn" href="#products">PRODUCTS</a></li>
    <li class="menu-item" data-menuanchor="price"><a class="menu_btn" href="#prices">PRICES</a></li>
    <li class="menu-subitem"><a class="menu_btn" href="#">BLOG</a></li>
    <li class="menu-subitem"><a class="menu_btn" href="#">STORE</a></li>
    <li class="menu-subitem"><a class="menu_btn" href="#">CONTACT</a></li>
        </td>
    </table>
</ul>

<div id="menu-open" class="btn-box"><a href="#"><i class="ico icon-menu"></i><span class="txt-btn">MENÚ</span></a></div>

<div id="fullpage">

    <!-- HOME -->
    <section id="inicio" class="section" data-anchor="home">
        <img id="logo" src="assets/logo.png" alt="">
        <div class="bajar"><div class="flechcont_bajar"><a href="#about" data-menuanchor="about"><i class="icoflecha icon-flecha"></i></a></div></div>
    </section>
    <!-- HOME -->

    <!-- ABOUT -->
    <section class="section" data-anchor="about">
        <div class="subir"><div class="flechcont_subir"><a href="#home" data-menuanchor="home"><i class="icoflecha icon-flecha"></i></a></div></div>
        



        <div class="bajar"><div class="flechcont_bajar"><a href="#products" data-menuanchor="products"><i class="icoflecha icon-flecha"></i></a></div></div>
    </section>
    <!-- ABOUT -->

    <!-- PRODUCTS -->
    <section class="section" data-anchor="products">
        <div class="subir"><div class="flechcont_subir"><a href="#about" data-menuanchor="about"><i class="icoflecha icon-flecha"></i></a></div></div>
        



        <div class="bajar"><div class="flechcont_bajar"><a href="#colors" data-menuanchor="colors"><i class="icoflecha icon-flecha"></i></a></div></div>
    </section>
    <!-- PRODUCTS -->
    
    <!-- COLORS -->
    <section class="section" data-anchor="colors">
        <div class="subir"><div class="flechcont_subir"><a href="#products" data-menuanchor="products"><i class="icoflecha icon-flecha"></i></a></div></div>
        



        <div class="bajar"><div class="flechcont_bajar"><a href="#price" data-menuanchor="price"><i class="icoflecha icon-flecha"></i></a></div></div>
    </section>
    <!-- COLORS -->
    
    <!-- PRICE -->
    <section class="section" data-anchor="price">
        <div class="subir"><div class="flechcont_subir"><a href="#colors" data-menuanchor="colors"><i class="icoflecha icon-flecha"></i></a></div></div>



        <div class="bajar"><div class="flechcont_bajar"><a href="#contact" data-menuanchor="contact"><i class="icoflecha icon-flecha"></i></a></div></div>        
    </section>
    <!-- PRICE -->
    
    <!-- CONTACT -->
    <section class="section" data-anchor="contact">
        <div class="subir"><div class="flechcont_subir"><a href="#price" data-menuanchor="price"><i class="icoflecha icon-flecha"></i></a></div></div>
        


    </section>
    <!-- CONTACT -->
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.fullPage.js"></script>
<script src="js/vendors/jquery.easings.min.js"></script>
<script src="js/base.js"></script>
<script>
    $('#fullpage').fullpage({
    	anchors:['home', 'about','products','colors','price','contact'],
    	menu: '#menunav',
    });
</script>
</body>
</html>