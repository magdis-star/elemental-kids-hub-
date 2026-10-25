<?php
/**
 * Página de un libro creado desde «Libros» (elementalkidsclub.com/libro/nombre-del-libro/).
 * El diseño es el de page-libro-2.php: el CSS es el export de Next, así que sólo valen las clases que ya usan
 * las demás páginas. El texto del editor no trae clases; lo viste el <style> de abajo.
 *
 * @package Elemental_Kids_Theme
 */

get_header();

while (have_posts()) :
    the_post();
    $libro_volume = get_post_meta(get_the_ID(), '_book_volume', true);
    $libro_badge = get_post_meta(get_the_ID(), '_book_badge', true);
    $libro_pages = get_post_meta(get_the_ID(), '_book_pages', true);
    $libro_bonus = get_post_meta(get_the_ID(), '_book_bonus', true) === '1';
    $libro_coming_soon = get_post_meta(get_the_ID(), '_book_status', true) === 'coming-soon';
    $libro_amazon_link = get_post_meta(get_the_ID(), '_book_amazon_link', true);
    if (!$libro_amazon_link) {
        $libro_amazon_link = 'https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS';
    }
    $libro_sample_ids = elemental_kids_ids(get_post_meta(get_the_ID(), '_book_sample_ids', true));
?>

<style>
.libro-texto h2 { font-family: var(--font-bangers), Bangers, cursive; font-size: 2rem; line-height: 1.4; color: #5BC0EB; margin: 0 0 1.5rem; }
.libro-texto h3 { font-family: var(--font-bangers), Bangers, cursive; font-size: 1.5rem; color: #1F2937; margin: 2rem 0 1rem; }
.libro-texto p { font-size: 1.125rem; line-height: 1.75; color: #334155; margin: 0 0 1.5rem; }
.libro-texto ul, .libro-texto ol { margin: 0 0 1.5rem; padding-left: 1.5rem; color: #334155; font-size: 1.125rem; line-height: 1.75; }
.libro-texto ul { list-style: disc; }
.libro-texto ol { list-style: decimal; }
.libro-texto li { margin-bottom: .5rem; }
.libro-texto li::marker { color: #5BC0EB; }
.libro-texto strong { color: #1F2937; }
.libro-texto a { color: #E85D75; text-decoration: underline; }
.libro-texto img { max-width: 100%; height: auto; border-radius: 1rem; }
@media (min-width: 768px) { .libro-texto h2 { font-size: 2.25rem; } }
</style>

<div class="min-h-screen py-16 px-5" style="background-color:#FEF3C7;background-image:linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);background-size:20px 20px">

<div class="max-w-6xl mx-auto">

<!-- Hero Section -->
<div class="grid md:grid-cols-2 gap-12 items-center mb-16">
    <div>
        <div class="inline-flex items-center gap-2 mb-4 flex-wrap">
            <?php if ($libro_badge) : ?>
            <span class="bg-[#FF6B7A] text-white text-sm font-bold px-4 py-2 rounded-full border-2 border-[#1F2937]"><?php echo esc_html($libro_badge); ?></span>
            <?php endif; ?>
            <?php if ($libro_volume) : ?>
            <span class="bg-[#7DD3FC] text-[#1F2937] text-sm font-bold px-4 py-2 rounded-full border-2 border-[#1F2937]"><?php echo esc_html($libro_volume); ?></span>
            <?php endif; ?>
        </div>
        <h1 class="text-4xl md:text-5xl font-bangers text-[#1F2937] mb-6 leading-tight"><?php the_title(); ?></h1>
        <div class="flex items-center gap-4 mb-6 flex-wrap">
            <?php if ($libro_pages) : ?>
            <span class="bg-white px-5 py-3 rounded-full text-[#1F2937] font-bold border-2 border-[#1F2937]">📚 <?php echo esc_html($libro_pages); ?> páginas</span>
            <?php endif; ?>
            <?php if ($libro_bonus) : ?>
            <a href="/bonuses/" class="bg-[#FDB44B] hover:bg-[#f0a63b] px-5 py-3 rounded-full text-[#1F2937] font-bold border-2 border-[#1F2937] transition-colors">🎁 Incluye bonus</a>
            <?php endif; ?>
        </div>
    </div>
    <?php if (has_post_thumbnail()) : ?>
    <div class="flex justify-center">
        <div class="relative w-52 h-68 md:w-60 md:h-80 rounded-2xl overflow-hidden shadow-2xl border-8 border-white">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover', 'alt' => get_the_title())); ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<!-- Descripción (el texto del editor) -->
<div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-12">
    <div class="libro-texto">
        <?php the_content(); ?>
    </div>

    <?php if (!$libro_coming_soon) : ?>
    <div class="text-center mt-8">
        <a href="<?php echo esc_url($libro_amazon_link); ?>" target="_blank" rel="noopener noreferrer" class="inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white font-bold py-4 px-10 rounded-full text-lg transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase">
            Comprar en Amazon →
        </a>
    </div>
    <?php endif; ?>
</div>

<?php if ($libro_sample_ids) : ?>
<!-- Páginas de Muestra -->
<div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-12">
    <h2 class="text-3xl md:text-4xl font-bangers text-[#5BC0EB] mb-6 text-center">📖 Echa un vistazo al interior</h2>
    <p class="text-center text-slate-700 mb-8">Descubre los tipos de retos y actividades que encontrarás en el libro:</p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($libro_sample_ids as $n => $id) : ?>
        <div class="rounded-lg overflow-hidden shadow-lg border-4 border-[#7DD3FC]">
            <?php echo wp_get_attachment_image($id, 'large', false, array('class' => 'w-full h-auto', 'alt' => 'Muestra ' . ($n + 1) . ' del libro')); ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<div class="text-center">
    <a href="/" class="inline-flex items-center text-[#5BC0EB] hover:text-[#4a9bc9] font-semibold text-lg transition-colors hover:underline">← Volver a la página principal</a>
</div>

</div>

</div>

<?php
endwhile;
get_footer();
