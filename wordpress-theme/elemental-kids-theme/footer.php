<?php
/**
 * Footer Template
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="bg-[#1F2937] text-white py-8 px-5">
    <div class="max-w-7xl mx-auto text-center">
        <p class="text-slate-400 text-sm mb-2">
            &copy; <?php echo date('Y'); ?> Elementalkidsclub. Todos los derechos reservados.
        </p>
        <p class="text-slate-400 text-sm">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#FDB44B] transition-colors">
                elementalkidsclub.com
            </a>
            {' | '}
            <a href="<?php echo esc_url(home_url('/politica-privacidad')); ?>" class="hover:text-[#FDB44B] transition-colors">
                Política de Privacidad
            </a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
