<?php
/**
 * Header Template
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white border-b-2 border-[#FDB44B] sticky top-0 z-40 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center hover:opacity-90 transition-opacity">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            if ($custom_logo_id) {
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-auto w-auto" style="width: 110px; height: 30px;">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Elemental Kids Club" class="h-auto w-auto" style="width: 110px; height: 30px;">';
            }
            ?>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8 ml-auto mr-8">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => function() {
                    echo '<a href="' . home_url('/#libros') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group">Libros<span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span></a>';
                    echo '<a href="' . home_url('/bonuses') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group">Bonuses<span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span></a>';
                    echo '<a href="' . home_url('/sobre-nosotros') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group">Sobre Nosotros<span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span></a>';
                    echo '<a href="' . home_url('/contacto') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium relative group">Contacto<span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span></a>';
                },
                'link_before' => '',
                'link_after' => '<span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#5BC0EB] group-hover:w-full transition-all duration-300"></span>',
                'before' => '',
                'after' => '',
                'items_wrap' => '%3$s',
            ));
            ?>
        </nav>

        <!-- Desktop CTA Button -->
        <a
            href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
            target="_blank"
            rel="noopener noreferrer"
            class="hidden md:inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white px-7 py-3 rounded-full font-bold transition-colors shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] transition-all uppercase"
        >
            Comprar →
        </a>

        <!-- Mobile Menu Button -->
        <button
            onclick="toggleMobileMenu()"
            class="md:hidden flex flex-col gap-1.5 p-2"
            aria-label="Toggle menu"
            id="mobile-menu-button"
        >
            <span class="block w-6 h-0.5 bg-[#1F2937] transition-all duration-300" id="menu-line-1"></span>
            <span class="block w-6 h-0.5 bg-[#1F2937] transition-all duration-300" id="menu-line-2"></span>
            <span class="block w-6 h-0.5 bg-[#1F2937] transition-all duration-300" id="menu-line-3"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-white border-t border-gray-200 shadow-lg hidden" id="mobile-menu">
        <nav class="flex flex-col p-5 space-y-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => function() {
                    echo '<a href="' . home_url('/#libros') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2">Libros</a>';
                    echo '<a href="' . home_url('/bonuses') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2">Bonuses</a>';
                    echo '<a href="' . home_url('/sobre-nosotros') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2">Sobre Nosotros</a>';
                    echo '<a href="' . home_url('/contacto') . '" class="text-[#1F2937] hover:text-[#5BC0EB] transition-colors font-medium py-2">Contacto</a>';
                },
                'items_wrap' => '%3$s',
            ));
            ?>
            <a
                href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
                target="_blank"
                rel="noopener noreferrer"
                class="bg-[#E85D75] hover:bg-[#d54a63] text-white px-7 py-3 rounded-full font-bold text-center transition-colors shadow-[0_4px_0_0_#b94456] uppercase"
            >
                Comprar →
            </a>
        </nav>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const line1 = document.getElementById('menu-line-1');
    const line2 = document.getElementById('menu-line-2');
    const line3 = document.getElementById('menu-line-3');

    menu.classList.toggle('hidden');

    if (!menu.classList.contains('hidden')) {
        line1.classList.add('rotate-45', 'translate-y-2');
        line2.classList.add('opacity-0');
        line3.classList.add('-rotate-45', '-translate-y-2');
    } else {
        line1.classList.remove('rotate-45', 'translate-y-2');
        line2.classList.remove('opacity-0');
        line3.classList.remove('-rotate-45', '-translate-y-2');
    }
}
</script>
