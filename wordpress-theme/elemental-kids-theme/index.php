<?php
/**
 * Main Index Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="min-h-screen py-16 px-5" style="
    background-color: #FEF3C7;
    background-image:
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);
    background-size: 20px 20px;
">
    <div class="max-w-7xl mx-auto">
        <?php if (have_posts()) : ?>

            <h1 class="text-4xl md:text-5xl font-bangers text-[#5BC0EB] mb-12 text-center">
                <?php
                if (is_home()) {
                    echo 'Blog';
                } elseif (is_archive()) {
                    the_archive_title();
                } elseif (is_search()) {
                    echo 'Resultados de búsqueda para: ' . get_search_query();
                } else {
                    echo 'Últimas entradas';
                }
                ?>
            </h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                while (have_posts()) : the_post();
                    ?>

                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-4 border-[#FDB44B]">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="relative mb-4">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover rounded-lg')); ?>
                            </div>
                        <?php endif; ?>

                        <h2 class="text-2xl font-bangers text-[#1F2937] mb-3 italic">
                            <a href="<?php the_permalink(); ?>" class="hover:text-[#5BC0EB] transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <div class="text-sm text-slate-500 mb-3">
                            <?php echo get_the_date(); ?>
                        </div>

                        <div class="text-slate-700 mb-4">
                            <?php the_excerpt(); ?>
                        </div>

                        <a
                            href="<?php the_permalink(); ?>"
                            class="inline-block bg-[#5BC0EB] hover:bg-[#4a9bc9] text-white px-6 py-2 rounded-full font-bold text-sm transition-all shadow-[0_3px_0_0_#4a9bc9] hover:shadow-[0_1px_0_0_#4a9bc9] hover:translate-y-[2px] uppercase"
                        >
                            Leer más
                        </a>
                    </div>

                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12 text-center">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '← Anterior',
                    'next_text' => 'Siguiente →',
                    'class' => 'inline-flex gap-2'
                ));
                ?>
            </div>

        <?php else : ?>

            <div class="bg-white rounded-3xl shadow-lg p-12 text-center">
                <h1 class="text-4xl font-bangers text-[#E85D75] mb-4">No se encontraron resultados</h1>
                <p class="text-lg text-slate-600 mb-6">Lo sentimos, no pudimos encontrar lo que buscas.</p>
                <a
                    href="<?php echo esc_url(home_url('/')); ?>"
                    class="inline-block bg-[#5BC0EB] hover:bg-[#4a9bc9] text-white px-8 py-4 rounded-full font-bold transition-all shadow-[0_4px_0_0_#4a9bc9] hover:shadow-[0_2px_0_0_#4a9bc9] hover:translate-y-[2px] uppercase"
                >
                    Volver al inicio
                </a>
            </div>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
