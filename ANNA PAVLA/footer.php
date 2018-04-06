 <footer>
            <div class="forflexfoot">
                <a href="tel:<?the_field('phone');?>" class="footnumber"><?the_field('phone');?></a>
                <a href="#callbackwidget"><div class="footzvonok"> Заказать<br>
                    обратный звонок</div></a>
            </div>
            <div class="socseti">
                <?if(get_field('viber')):?><a  href="viber://<?the_field('viber');?>" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/vb.png) no-repeat center;"></a><?endif;?>
                <?if(get_field('whatsapp')):?><a  href="whatsapp://send?phone=<?the_field('whatsapp');?>" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/wa.png) no-repeat center;"></a><?endif;?>
                <?if(get_field('telegram')):?><a  href="https://telegram.me/<?the_field('telegram');?>" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/telegram.png) no-repeat center;"></a><?endif;?>
                <?if(get_field('fb')):?> <a target="_blank" href="<?the_field('fb');?>" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/fb.png) no-repeat center;"></a><?endif;?>
                <?if(get_field('vk')):?><a target="_blank" href="<?the_field('vk');?>" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/vk.png) no-repeat center;"></a><?endif;?>
                <?if(get_field('ig')):?><a target="_blank" href="<?the_field('ig');?>" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/ig.png) no-repeat center;"></a><?endif;?>
            </div>
        </footer>
         <div class="closeblock"></div>
        <div class="forma">
            <div class="flexform">
                <div class="foto" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/foto.jpg) no-repeat center;"></div>
                <div class="textfrom">Добрый день!
                    <p>Оставьте свою контактную
информацию и наши сотрудники
свяжутся с вами 
в ближайшее время</p>
                </div>
            </div>
            <div class="error">Не все поля заполнены!</div>
            <form action="">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="email" placeholder="e-mail">
                <input type="text" name="phone" placeholder="Телефон">
                <div class="forbtnform">
                    <div class="btnkatalogform"></div>
                    <div class="textbtnform">Отправить</div>
                </div>
            </form>
        </div>  
    </div>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.1.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
    <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=60ebab26a9edb776604b1af6e3b2b293" charset="UTF-8" async></script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48378263 = new Ya.Metrika({ id:48378263, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48378263" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<style>
.callbackkiller.cbk-phone.cbk-phone-pulse {
    display:none!important;
}
</style> 
 </body>
</html>