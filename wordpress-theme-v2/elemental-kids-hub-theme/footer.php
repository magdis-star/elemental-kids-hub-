<?php
/**
 * Footer template for Elemental Kids Theme
 */
?>
<footer class="bg-[#1F2937] text-white py-8 px-5">
<div class="max-w-7xl mx-auto text-center">
<p class="text-slate-400 text-sm mb-2">© <?php echo date('Y'); ?> Elementalkidsclub. Todos los derechos reservados.</p>
<p class="text-slate-400 text-sm">
<a class="hover:text-[#FDB44B] transition-colors" href="/">elementalkidsclub.com</a> |
<a class="hover:text-[#FDB44B] transition-colors" href="/politica-de-privacidad/">Política de Privacidad</a> |
<a class="hover:text-[#FDB44B] transition-colors" href="/politica-de-cookies/">Política de Cookies</a>
</p>
</div>
</footer>
<?php include(get_template_directory() . '/cookie-banner.php'); ?>
<?php wp_footer(); ?>
</body>
</html>
