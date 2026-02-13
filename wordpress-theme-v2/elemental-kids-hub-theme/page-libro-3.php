<?php
/**
 * Template Name: Libro 3 Page
 *
 * @package Elemental_Kids_Theme
 */

get_header();
?>

<div class="min-h-screen py-16 px-5" style="background-color:#FEF3C7;background-image:linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);background-size:20px 20px">

<div class="max-w-6xl mx-auto">

<!-- Hero Section -->
<div class="grid md:grid-cols-2 gap-12 items-center mb-16">
    <div>
        <div class="inline-block bg-[#FDB44B] text-[#1F2937] text-sm font-bold px-4 py-2 rounded-full mb-4 border-2 border-[#FDB44B]">PRÓXIMAMENTE</div>
        <h1 class="text-4xl md:text-5xl font-bangers text-[#1F2937] mb-6 leading-tight">Más Aventuras en Camino</h1>
        <p class="text-lg text-slate-700 mb-8 leading-relaxed">Estamos preparando nuevas actividades increíbles para seguir desafiando la mente de tus hijos. ¡Mantente atento!</p>
        <div class="bg-[#FEF3C7] border-4 border-[#FDB44B] rounded-2xl p-6 mb-6">
            <p class="text-lg text-slate-800 font-bold mb-2">📬 Sé el primero en enterarte</p>
            <p class="text-slate-700 mb-4">Regístrate para recibir una notificación cuando el nuevo libro esté disponible.</p>
            <form action="https://elementalkidsclub.activehosted.com/proc.php" method="POST" class="flex flex-col sm:flex-row gap-3">
                <input type="hidden" name="u" value="1" />
                <input type="hidden" name="f" value="1" />
                <input type="hidden" name="s" />
                <input type="hidden" name="c" value="0" />
                <input type="hidden" name="m" value="0" />
                <input type="hidden" name="act" value="sub" />
                <input type="hidden" name="v" value="2" />
                <input type="email" name="email" placeholder="tu@email.com" required class="flex-1 px-4 py-3 rounded-full border-2 border-[#FDB44B] focus:outline-none focus:ring-2 focus:ring-[#5BC0EB]" />
                <button type="submit" class="bg-[#E85D75] hover:bg-[#d54a63] text-white font-bold py-3 px-8 rounded-full transition-all shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] border-2 border-[#FDB44B]">
                    Notificarme
                </button>
            </form>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="relative w-52 h-68 md:w-60 md:h-80 rounded-2xl overflow-hidden shadow-2xl border-8 border-white opacity-75">
            <img alt="Libro 3 - Próximamente" src="<?php echo get_template_directory_uri(); ?>/libro-3-cover.png" class="w-full h-full object-cover"/>
            <div class="absolute inset-0 bg-gradient-to-t from-[#1F2937]/80 to-transparent flex items-end justify-center pb-8">
                <span class="text-white text-3xl font-bangers">PRÓXIMAMENTE</span>
            </div>
        </div>
    </div>
</div>

<!-- Mientras tanto... -->
<div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-12">
    <h2 class="text-3xl md:text-4xl font-bangers text-[#5BC0EB] mb-6 text-center">Mientras tanto, echa un vistazo a nuestros otros libros</h2>

    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Libro 1 -->
        <div class="bg-gradient-to-br from-[#A8E6A1]/20 to-white border-4 border-[#FDB44B] rounded-2xl p-6 hover:shadow-xl transition-all">
            <div class="flex justify-center mb-4">
                <div class="relative w-32 h-42 rounded-lg overflow-hidden shadow-lg">
                    <img alt="Libro 1" src="<?php echo get_template_directory_uri(); ?>/libro-1-cover.png" class="w-full h-full object-cover"/>
                </div>
            </div>
            <h3 class="text-2xl font-bangers text-[#1F2937] mb-2 text-center">VOLUMEN 1</h3>
            <p class="text-slate-700 text-center mb-4 text-sm">Cuaderno de Actividades Divertidas de 8 a 12 años</p>
            <a href="/libro-1/" class="block text-center py-3 px-6 rounded-full font-bold transition-all bg-[#A8E6A1] hover:bg-[#8fd686] text-[#1F2937] shadow-[0_3px_0_0_#7cbd6d] hover:shadow-[0_1px_0_0_#7cbd6d] hover:translate-y-[2px] border-2 border-[#FDB44B]">
                Ver Detalles →
            </a>
        </div>

        <!-- Libro 2 -->
        <div class="bg-gradient-to-br from-[#7DD3FC]/20 to-white border-4 border-[#FDB44B] rounded-2xl p-6 hover:shadow-xl transition-all">
            <div class="flex justify-center mb-4">
                <div class="relative w-32 h-42 rounded-lg overflow-hidden shadow-lg">
                    <img alt="Libro 2" src="<?php echo get_template_directory_uri(); ?>/libro-2-cover.png" class="w-full h-full object-cover"/>
                </div>
            </div>
            <h3 class="text-2xl font-bangers text-[#1F2937] mb-2 text-center">VOLUMEN 2</h3>
            <p class="text-slate-700 text-center mb-4 text-sm">Cuaderno de Actividades Divertidas de 8 a 12 años</p>
            <a href="/libro-2/" class="block text-center py-3 px-6 rounded-full font-bold transition-all bg-[#7DD3FC] hover:bg-[#5bc4f5] text-[#1F2937] shadow-[0_3px_0_0_#4aaee0] hover:shadow-[0_1px_0_0_#4aaee0] hover:translate-y-[2px] border-2 border-[#FDB44B]">
                Ver Detalles →
            </a>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="/" class="inline-flex items-center text-[#5BC0EB] hover:text-[#4a9bc9] font-semibold text-lg transition-colors hover:underline">← Volver a la página principal</a>
</div>

</div>

</div>

<?php
get_footer();
