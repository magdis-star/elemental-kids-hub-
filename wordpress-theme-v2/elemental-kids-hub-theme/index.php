<?php
/**
 * The main template file - Fallback template
 *
 * @package Elemental_Kids_Theme
 */

get_header();
?>

<div class="min-h-screen py-16 px-5" style="background-color:#FEF3C7;background-image:linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);background-size:20px 20px">
<div class="max-w-4xl mx-auto">
<div class="bg-white rounded-3xl shadow-lg p-8 md:p-12">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="text-4xl md:text-5xl font-bangers text-[#5BC0EB] mb-6">
                <?php the_title(); ?>
            </h1>
            <div class="prose prose-lg max-w-none text-slate-700">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
else :
    ?>
    <div class="text-center py-12">
        <h1 class="text-4xl font-bangers text-[#FF6B7A] mb-4">No se encontró contenido</h1>
        <p class="text-slate-700 mb-8">Lo sentimos, no pudimos encontrar lo que buscabas.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase">
            Volver al Inicio
        </a>
    </div>
    <?php
endif;
?>
</div>
</div>
</div>

<?php
get_footer();
