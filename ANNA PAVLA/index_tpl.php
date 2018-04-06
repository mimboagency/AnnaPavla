<?/*
Template Name: Главная страница
Template Post Type: post, page, product
*/?>
<?php get_header(); ?>
    <div class="container">
        <header class="height100">
            <div class="girlheader"></div>
            <div class="blackline">
                <a href="#callbackwidget"><div class="zvonok">Заказать<br>
обратный звонок</div></a>
            </div>
            <div class="greyline1"><span>Контакты</span><a href="tel:<?the_field('phone');?>" class="number"><?the_field('phone');?></a></div>
            <div class="zaglheader">
                <h1><?the_field('h1');?></h1>
                <p><?the_field('h2');?></p>
            </div>
            <div class="botheader">
                <p><?the_field('h3');?> <span><?the_field('h4');?></span> руб.</p>
                <div class="greyline2">
                    <div class="forbtn">
                        <div class="btnkatalog"></div>
                        <div class="textbtn"><?the_field('btn1');?></div>
                        <div class="strleft"></div>
                    </div>
                </div>
                <div class="gleyline3"></div>
            </div>
        </header>
        <section class="height100 tovaru">
            <div class="col-md-4 col-sm-6 col-xs-6" style="background: url(<?the_field('img1');?>) no-repeat center;"></div>
            <div class="col-md-4 col-sm-6 col-xs-6" style="background: url(<?the_field('img2');?>) no-repeat center;"></div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h2><?the_field('h6');?><div><?the_field('h7');?></div></h2>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12" style="background: url(<?the_field('img3');?>) no-repeat center;"></div>
            <div class="botheader">
                <div class="greyline2"></div>
                <div class="gleyline3"></div>
            </div>
        </section>
        <section class="height100 plusu1">
           <ul>
           <?php while ( have_rows('repeater1') ) : the_row(); ?>
               <li><?the_sub_field('text');?></li>
            <?
            endwhile;
           
            ?>
           </ul>
            <div class="botheader">
                <div class="greyline2"></div>
                <div class="gleyline3"></div>
            </div>
        </section>
        <section class="height100 plusu2">
            <div class="girlplus2"></div>
            <ul>
           <?php while ( have_rows('repeater2') ) : the_row(); ?>
               <li><?the_sub_field('text');?></li>
            <?
            endwhile;
          
            ?>
            </ul>
            <div class="botheader">
                <div class="greyline2"></div>
                <div class="gleyline3"></div>
            </div>
        </section>
        <section class="height100 tovaru2">
            <div class="tovar" style="background: url(<?the_field('img4');?>) no-repeat center;"></div>
            <div class="tovar" style="background: url(<?the_field('img5');?>) no-repeat center;"></div>
            <div class="tovar"><h2><?the_field('h6');?><div><?the_field('h7');?></div></h2></div>
            <div class="tovar">
                <div class="pa"></div>
            </div>
            <div class="tovar" style="background: url(<?the_field('img6');?>) no-repeat center;"></div>
            <div class="botheader">
                <div class="greyline2"></div>
                <div class="gleyline3"></div>
            </div>
        </section>
        <section class="height100 tovaru3">
            <div class="col-md-7 col-sm-6" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/footlogo.png) no-repeat center;"></div>
            <div class="col-md-5 col-sm-6" style="background: url(<?the_field('img7');?>) no-repeat center;"></div>
            <div class="col-md-7 col-sm-6" style="background: url(<?the_field('img8');?>) no-repeat left;"></div>
            <div class="botheader">
                <div class="greyline2">       </div>
                <div class="gleyline3"></div>
                <div class="gleyline4">
                    <div class="address"><?the_field('adress');?></div>
                    <div class="forbtn">
                        <div class="btnkatalog"></div>
                        <div class="textbtn"><?the_field('btn2');?></div>
                    </div>
                </div>
            </div>
        </section>
	<?php get_footer(); ?>        