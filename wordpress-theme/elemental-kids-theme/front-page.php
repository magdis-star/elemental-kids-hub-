<?php
/**
 * Homepage Template
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<section class="py-12 md:py-20 px-5 bg-gradient-to-br from-[#FEF3C7] via-[#FED7AA] to-[#FDE68A]" style="
    background-image:
        linear-gradient(rgba(245, 158, 11, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.1) 1px, transparent 1px);
    background-size: 20px 20px;
">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <!-- Left Side - Text Content -->
            <div class="order-2 md:order-1">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bangers mb-6 leading-tight italic">
                    <span class="block text-[#1F2937]">LIBROS DE</span>
                    <span class="block text-[#5BC0EB]">ACTIVIDADES</span>
                    <span class="block text-[#E85D75]">PARA NIÑOS</span>
                </h1>

                <p class="text-lg sm:text-xl md:text-2xl text-slate-800 mb-8 leading-relaxed">
                    <span class="font-bold">Estimula su mente</span> con retos de lógica, matemáticas y creatividad.
                    <span class="italic">Diversión y aprendizaje en cada página.</span>
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a
                        href="<?php echo esc_url(home_url('/#libros')); ?>"
                        class="bg-[#E85D75] hover:bg-[#d54a63] text-white px-8 py-4 rounded-full font-bold text-lg transition-colors shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] transition-all text-center uppercase"
                    >
                        Ver Libros
                    </a>
                    <a
                        href="<?php echo esc_url(home_url('/bonuses')); ?>"
                        class="bg-[#FDB44B] hover:bg-[#f5a635] text-[#1F2937] px-8 py-4 rounded-full font-bold text-lg transition-colors shadow-[0_4px_0_0_#d99a3a] hover:shadow-[0_2px_0_0_#d99a3a] hover:translate-y-[2px] transition-all text-center uppercase"
                    >
                        Bonuses Gratis
                    </a>
                </div>
            </div>

            <!-- Right Side - Hero Image -->
            <div class="flex justify-center md:justify-end order-1 md:order-2">
                <div class="relative w-[300px] h-[300px] sm:w-[400px] sm:h-[400px] md:w-[450px] md:h-[450px]">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-books.png"
                        alt="Libros de Actividades Elemental Kids Club"
                        class="w-full h-full object-contain animate-float"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Books Section -->
<section id="libros" class="py-16 md:py-20 px-5 bg-white">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bangers text-center mb-12 italic">
            <span class="text-[#1F2937]">NUESTRA COLECCIÓN DE</span>
            <span class="text-[#5BC0EB]"> LIBROS</span>
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php
            // Get all books
            $books_query = elemental_kids_get_books();

            if ($books_query->have_posts()) :
                while ($books_query->have_posts()) : $books_query->the_post();
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

                    // Skip if coming soon
                    if ($status === 'coming-soon') {
                        continue;
                    }
                    ?>

                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-4 relative overflow-hidden" style="border-color: <?php echo esc_attr($color); ?>">
                        <!-- Badge (if exists) -->
                        <?php if ($badge && $status === 'new') : ?>
                            <div class="absolute top-4 right-4 <?php echo esc_attr($badge_color); ?> text-white px-3 py-1 rounded-full text-xs font-bold uppercase transform rotate-12 shadow-lg z-10">
                                <?php echo esc_html($badge); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Book Cover Image -->
                        <div class="relative mb-6 flex justify-center">
                            <div class="w-48 h-64 relative">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-contain rounded-lg shadow-md')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-book.png" alt="<?php the_title(); ?>" class="w-full h-full object-contain rounded-lg shadow-md">
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Book Info -->
                        <div class="text-center">
                            <?php if ($volume) : ?>
                                <p class="text-sm font-bold text-slate-600 mb-2 uppercase tracking-wide"><?php echo esc_html($volume); ?></p>
                            <?php endif; ?>

                            <h3 class="text-2xl font-bangers text-[#1F2937] mb-3 italic leading-tight">
                                <?php the_title(); ?>
                            </h3>

                            <p class="text-slate-600 mb-4 text-sm leading-relaxed">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>

                            <!-- Meta Info -->
                            <div class="flex justify-center gap-4 mb-4 text-xs text-slate-500">
                                <?php if ($age_range) : ?>
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <?php echo esc_html($age_range); ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($pages) : ?>
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <?php echo esc_html($pages); ?> páginas
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- CTA Button -->
                            <?php if ($amazon_link) : ?>
                                <a
                                    href="<?php echo esc_url($amazon_link); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white px-6 py-3 rounded-full font-bold transition-all shadow-[0_3px_0_0_#b94456] hover:shadow-[0_1px_0_0_#b94456] hover:translate-y-[2px] uppercase text-sm"
                                >
                                    Comprar en Amazon →
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-span-full text-center py-12">
                    <p class="text-xl text-slate-600">No hay libros disponibles en este momento.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- About Section - PERFECTO PARA NIÑOS CURIOSOS -->
<section class="py-16 md:py-20 px-5" style="
    background-color: #FEF3C7;
    background-image:
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);
    background-size: 20px 20px;
">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bangers text-center mb-12 italic">
            <span class="text-[#1F2937]">PERFECTO PARA</span>
            <span class="text-[#E85D75]"> NIÑOS CURIOSOS</span>
        </h2>

        <!-- Stats Grid -->
        <div class="grid grid-cols-3 gap-2 sm:gap-4 text-center mb-12">
            <div class="bg-white rounded-xl p-2 sm:p-4">
                <div class="text-2xl sm:text-3xl font-bold text-[#F97316]">100+</div>
                <div class="text-xs sm:text-sm text-slate-600 break-words">Actividades por libro</div>
            </div>
            <div class="bg-white rounded-xl p-2 sm:p-4">
                <div class="text-2xl sm:text-3xl font-bold text-[#5BC0EB]">5-12</div>
                <div class="text-xs sm:text-sm text-slate-600 break-words">Años de edad</div>
            </div>
            <div class="bg-white rounded-xl p-2 sm:p-4">
                <div class="text-2xl sm:text-3xl font-bold text-[#A8E6A1]">100%</div>
                <div class="text-xs sm:text-sm text-slate-600 break-words">Aprendizaje divertido</div>
            </div>
        </div>

        <!-- Features List -->
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex items-start gap-4">
                    <div class="bg-[#5BC0EB] rounded-full p-3 flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2 text-[#1F2937]">Desarrollo Cognitivo</h3>
                        <p class="text-slate-600">Retos diseñados para estimular el pensamiento lógico y creativo.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-[#E85D75] rounded-full p-3 flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2 text-[#1F2937]">Aprendizaje Divertido</h3>
                        <p class="text-slate-600">Combina educación con entretenimiento en cada actividad.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-[#FDB44B] rounded-full p-3 flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2 text-[#1F2937]">Sin Pantallas</h3>
                        <p class="text-slate-600">Actividades tangibles que fomentan la concentración real.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-[#A8E6A1] rounded-full p-3 flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2 text-[#1F2937]">Formato Perfecto</h3>
                        <p class="text-slate-600">Tamaño ideal para llevar a cualquier parte.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 md:py-20 px-5 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bangers text-center mb-12 italic">
            <span class="text-[#1F2937]">LO QUE DICEN LAS</span>
            <span class="text-[#5BC0EB]"> FAMILIAS</span>
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gradient-to-br from-[#FEF3C7] to-[#FED7AA] rounded-2xl p-6 shadow-lg">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#FDB44B]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <p class="text-slate-700 mb-4 italic">"A mi hija le encanta. Pasa horas resolviendo los acertijos y siempre pide más. ¡Una inversión excelente!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-[#5BC0EB] rounded-full flex items-center justify-center text-white font-bold text-lg">
                        M
                    </div>
                    <div>
                        <p class="font-bold text-[#1F2937]">María González</p>
                        <p class="text-sm text-slate-600">Madre de Sofía, 8 años</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gradient-to-br from-[#FEF3C7] to-[#FED7AA] rounded-2xl p-6 shadow-lg">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#FDB44B]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <p class="text-slate-700 mb-4 italic">"Perfecto para viajes largos. Mantiene a los niños entretenidos sin necesidad de tablets o móviles."</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-[#E85D75] rounded-full flex items-center justify-center text-white font-bold text-lg">
                        C
                    </div>
                    <div>
                        <p class="font-bold text-[#1F2937]">Carlos Ramírez</p>
                        <p class="text-sm text-slate-600">Padre de Lucas, 10 años</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gradient-to-br from-[#FEF3C7] to-[#FED7AA] rounded-2xl p-6 shadow-lg">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#FDB44B]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                </div>
                <p class="text-slate-700 mb-4 italic">"Los uso en mi aula y los niños están encantados. Excelente calidad y contenido educativo."</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-[#A8E6A1] rounded-full flex items-center justify-center text-white font-bold text-lg">
                        L
                    </div>
                    <div>
                        <p class="font-bold text-[#1F2937]">Laura Martínez</p>
                        <p class="text-sm text-slate-600">Profesora de primaria</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-16 md:py-20 px-5 bg-gradient-to-br from-[#5BC0EB] to-[#4a9bc9] text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bangers mb-6 italic">
            ¿LISTO PARA EMPEZAR LA AVENTURA?
        </h2>
        <p class="text-lg sm:text-xl mb-8 leading-relaxed">
            Dale a tus hijos la mejor herramienta para desarrollar su mente mientras se divierten.
        </p>
        <a
            href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&ref=ap_rdr&shoppingPortalEnabled=true"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-block bg-[#E85D75] hover:bg-[#d54a63] text-white px-10 py-5 rounded-full font-bold text-xl transition-all shadow-[0_5px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[3px] uppercase"
        >
            Comprar Ahora en Amazon →
        </a>
    </div>
</section>

<?php get_footer(); ?>
