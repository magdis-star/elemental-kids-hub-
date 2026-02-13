<?php
/**
 * Template Name: Bonuses Page
 * Template for the Bonuses page
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="min-h-screen" style="
    background-color: #FEF3C7;
    background-image:
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);
    background-size: 20px 20px;
">
    <!-- Bonus Section -->
    <section class="py-12 md:py-16 px-5">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <!-- Left Side - Image with Hover Effect -->
                <div class="flex justify-center md:justify-start order-2 md:order-1">
                    <div class="relative w-[280px] h-[280px] sm:w-[350px] sm:h-[350px] md:w-[400px] md:h-[400px] transition-all duration-500 ease-out hover:scale-110 hover:-translate-x-4">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/regalo-secreto.png"
                            alt="Regalo Descargable Secreto"
                            class="w-full h-full object-contain"
                        />
                    </div>
                </div>

                <!-- Right Side - Content -->
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl font-bangers mb-4 md:mb-6 leading-tight italic text-center md:text-left">
                        <span class="block text-[#1F2937]">PORQUE LA MEJOR PANTALLA...</span>
                        <span class="block text-[#5BC0EB]">ES SU IMAGINACIÓN.</span>
                    </h2>

                    <p class="text-base sm:text-lg md:text-lg text-slate-800 mb-6 leading-relaxed text-center md:text-left">
                        Los cuadernos incluyen retos como <span class="font-bold">"Siete Diferencias"</span>, <span class="font-bold">"Operación Incógnita"</span> y <span class="font-bold">"Busca y Encuentra"</span> que garantizan que el cerebro de tu hijo trabaje a máxima potencia.
                    </p>

                    <!-- Bonus Box -->
                    <div class="bg-white border-4 border-[#FDB44B] rounded-xl p-4 sm:p-6 shadow-lg">
                        <div class="mb-3">
                            <h3 class="text-xl sm:text-2xl md:text-2xl font-bangers text-[#E85D75] italic text-center md:text-left">
                                ¡BONUS EXCLUSIVO!
                            </h3>
                        </div>

                        <p class="text-slate-900 mb-4 leading-relaxed text-sm sm:text-base md:text-base text-center md:text-left">
                            ¿Ya compraste el libro? <span class="font-bold">Descarga tu contenido extra GRATIS.</span> Haz clic en el botón para recibir actividades adicionales directamente en tu bandeja de entrada.
                        </p>

                        <!-- Two Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a
                                href="https://elementalkidsclub.activehosted.com/f/1"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex-1 bg-[#A8E6A1] hover:bg-[#8fd686] text-[#1F2937] font-bold py-3 sm:py-3 px-4 sm:px-6 rounded-full text-center transition-all shadow-[0_3px_0_0_#7cbd6d] hover:shadow-[0_1px_0_0_#7cbd6d] hover:translate-y-[2px] uppercase text-sm md:text-base border-2 border-[#1F2937]"
                            >
                                LIBRO 1
                            </a>
                            <a
                                href="<?php echo esc_url(home_url('/bonuses#libro2')); ?>"
                                class="flex-1 bg-[#7DD3FC] hover:bg-[#5bc4f5] text-[#1F2937] font-bold py-3 sm:py-3 px-4 sm:px-6 rounded-full text-center transition-all shadow-[0_3px_0_0_#4aaee0] hover:shadow-[0_1px_0_0_#4aaee0] hover:translate-y-[2px] uppercase text-sm md:text-base border-2 border-[#1F2937]"
                            >
                                LIBRO 2
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back Button -->
    <div class="py-8 text-center">
        <a
            href="<?php echo esc_url(home_url('/')); ?>"
            class="inline-flex items-center text-[#5BC0EB] hover:text-[#4a9bc9] font-semibold text-lg transition-colors hover:underline"
        >
            ← Volver
        </a>
    </div>
</div>

<?php get_footer(); ?>
