<footer class="footer">
    <div class="footerTopBorder">

    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <ul class="menu-footer">
					<?php wp_nav_menu(array('theme_location' => 'top-menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
                </ul>
            </div>
            <div class="col-12 text-center mt-2">
                <?php echo date('Y'); ?> &copy; | <a href="//CodeHex.pl" target="_blank">CodeHex.pl</a>
            </div>
            <div class="col-12 text-center mt-2 mb-2">
                <h5>Milówka, Węgierska Górka, Żywiec</h5>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>