<?php
/**
 * Single Book Template
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) :
    the_post();

    // Get custom fields
    $volume = get_post_meta(get_the_ID(), '_book_volume', true);
    $element = get_post_meta(get_the_ID(), '_book_element', true);
    $age_range = get_post_meta(get_the_ID(), '_book_age_range', true);
    $pages = get_post_meta(get_the_ID(), '_book_pages', true);
    $amazon_link = get_post_meta(get_the_ID(), '_book_amazon_link', true);
    $status = get_post_meta(get_the_ID(), '_book_status', true);
    $color = get_post_meta(get_the_ID(), '_book_color', true) ?: '#A8E6A1';
    $badge = get_post_meta(get_the_ID(), '_book_badge', true);
    $badge_color = get_post_meta(get_the_ID(), '_book_badge_color', true) ?: 'bg-[#FF6B7A]';
    $features = get_post_meta(get_the_ID(), '_book_features', true);
    $features_array = $features ? explode("\n", $features) : array();
    ?>

    <div class="min-h-screen py-12 md:py-16 px-5" style="
        background-color: #FEF3C7;
        background-image:
            linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
            linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);
        background-size: 20px 20px;
    ">
        <div class="max-w-7xl mx-auto">
            <!-- Breadcrumb -->
            <div class="mb-8">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-[#5BC0EB] hover:underline">
                    ← Volver a inicio
                </a>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start mb-16">
                <!-- Left Side - Book Cover -->
                <div class="bg-white rounded-3xl p-8 shadow-lg border-4 relative" style="border-color: <?php echo esc_attr($color); ?>">
                    <!-- Badge (if exists) -->
                    <?php if ($badge && $status === 'new') : ?>
                        <div class="absolute top-4 right-4 <?php echo esc_attr($badge_color); ?> text-white px-4 py-2 rounded-full text-sm font-bold uppercase transform rotate-12 shadow-lg z-10">
                            <?php echo esc_html($badge); ?>
                        </div>
                    <?php endif; ?>

                    <div class="relative mx-auto" style="max-width: 400px;">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-contain rounded-lg shadow-xl')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-book.png" alt="<?php the_title(); ?>" class="w-full h-auto object-contain rounded-lg shadow-xl">
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right Side - Book Details -->
                <div class="bg-white rounded-3xl p-8 shadow-lg">
                    <?php if ($volume) : ?>
                        <p class="text-sm font-bold text-slate-600 mb-2 uppercase tracking-wide"><?php echo esc_html($volume); ?></p>
                    <?php endif; ?>

                    <h1 class="text-4xl md:text-5xl font-bangers text-[#1F2937] mb-4 italic leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Meta Info -->
                    <div class="flex flex-wrap gap-4 mb-6 text-sm text-slate-600">
                        <?php if ($age_range) : ?>
                            <span class="flex items-center gap-2 bg-[#5BC0EB]/10 px-4 py-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <?php echo esc_html($age_range); ?>
                            </span>
                        <?php endif; ?>
                        <?php if ($pages) : ?>
                            <span class="flex items-center gap-2 bg-[#FDB44B]/10 px-4 py-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <?php echo esc_html($pages); ?> páginas
                            </span>
                        <?php endif; ?>
                        <?php if ($element) : ?>
                            <span class="flex items-center gap-2 bg-[#E85D75]/10 px-4 py-2 rounded-full">
                                🌟 Elemento: <?php echo esc_html(ucfirst($element)); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Description -->
                    <div class="prose prose-lg mb-6 text-slate-700 leading-relaxed">
                        <?php the_content(); ?>
                    </div>

                    <!-- Features -->
                    <?php if (!empty($features_array)) : ?>
                        <div class="mb-8">
                            <h3 class="text-2xl font-bangers text-[#5BC0EB] mb-4 italic">¿QUÉ INCLUYE?</h3>
                            <ul class="space-y-3">
                                <?php foreach ($features_array as $feature) : ?>
                                    <?php if (trim($feature)) : ?>
                                        <li class="flex items-start gap-3">
                                            <span class="text-[#FDB44B] text-xl flex-shrink-0">✓</span>
                                            <span class="text-slate-700"><?php echo esc_html(trim($feature)); ?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- CTA Button -->
                    <?php if ($amazon_link) : ?>
                        <a
                            href="<?php echo esc_url($amazon_link); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-block w-full md:w-auto bg-[#E85D75] hover:bg-[#d54a63] text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_3px_0_0_#b94456] hover:translate-y-[2px] uppercase text-center"
                        >
                            Comprar en Amazon →
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Additional Info Section -->
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-lg mb-12">
                <h2 class="text-3xl md:text-4xl font-bangers text-center text-[#FF6B7A] mb-8 italic">
                    POR QUÉ NUESTROS LIBROS SON ESPECIALES
                </h2>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-[#5BC0EB] rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-xl mb-2 text-[#1F2937]">Sin Pantallas</h3>
                        <p class="text-slate-600">Actividades tangibles que fomentan la concentración real.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-[#FDB44B] rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-xl mb-2 text-[#1F2937]">Desarrollo Cognitivo</h3>
                        <p class="text-slate-600">Retos diseñados para estimular el pensamiento lógico.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-[#E85D75] rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-xl mb-2 text-[#1F2937]">Calidad Premium</h3>
                        <p class="text-slate-600">Papel de alta calidad e ilustraciones nítidas.</p>
                    </div>
                </div>
            </div>

            <!-- Related Books Section -->
            <?php
            $related_books = new WP_Query(array(
                'post_type' => 'book',
                'posts_per_page' => 2,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand',
            ));

            if ($related_books->have_posts()) :
                ?>
                <div class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bangers text-center text-[#5BC0EB] mb-8 italic">
                        OTROS LIBROS QUE TE PUEDEN INTERESAR
                    </h2>

                    <div class="grid md:grid-cols-2 gap-8">
                        <?php
                        while ($related_books->have_posts()) : $related_books->the_post();
                            $rel_color = get_post_meta(get_the_ID(), '_book_color', true) ?: '#A8E6A1';
                            $rel_age_range = get_post_meta(get_the_ID(), '_book_age_range', true);
                            $rel_pages = get_post_meta(get_the_ID(), '_book_pages', true);
                            ?>

                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-4" style="border-color: <?php echo esc_attr($rel_color); ?>">
                                <div class="relative mb-6 flex justify-center">
                                    <div class="w-48 h-64 relative">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-contain rounded-lg shadow-md')); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <h3 class="text-2xl font-bangers text-[#1F2937] mb-3 italic leading-tight">
                                        <?php the_title(); ?>
                                    </h3>

                                    <p class="text-slate-600 mb-4 text-sm">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                    </p>

                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="inline-block bg-[#5BC0EB] hover:bg-[#4a9bc9] text-white px-6 py-3 rounded-full font-bold transition-all shadow-[0_3px_0_0_#4a9bc9] hover:shadow-[0_1px_0_0_#4a9bc9] hover:translate-y-[2px] uppercase text-sm"
                                    >
                                        Ver Detalles
                                    </a>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php
endwhile;

get_footer();
?>
