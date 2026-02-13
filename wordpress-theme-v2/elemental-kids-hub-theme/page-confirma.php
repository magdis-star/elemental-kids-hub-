<?php
/**
 * Template Name: Confirma Inscripción
 *
 * @package Elemental_Kids_Theme
 */

get_header();
?>

<div class="min-h-screen py-16 px-5" style="background-color:#FEF3C7;background-image:linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);background-size:20px 20px">

<div class="max-w-3xl mx-auto">

    <!-- Email Icon -->
    <div class="flex justify-center mb-8">
        <div class="w-32 h-32 bg-[#FDB44B] rounded-full flex items-center justify-center shadow-2xl border-4 border-[#1F2937]">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#1F2937]">
                <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16 12L12 15L16 12Z" fill="currentColor"/>
            </svg>
        </div>
    </div>

    <!-- Main Card -->
    <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-12 border-4 border-[#FDB44B] mb-8">
        <h1 class="text-3xl md:text-5xl font-bangers text-center mb-2 text-[#1F2937] break-words">CONFIRMA TU INSCRIPCIÓN</h1>
        <p class="text-lg md:text-2xl font-bangers text-center text-[#E85D75] mb-10 break-words">SOLO TE QUEDA UN PASO MÁS</p>

        <!-- Step 1 -->
        <div class="bg-[#E0F2FE] border-4 border-[#5BC0EB] rounded-2xl p-6 mb-6">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-[#5BC0EB] rounded-full flex items-center justify-center flex-shrink-0 border-2 border-[#1F2937]">
                    <span class="text-2xl font-bangers text-white">1</span>
                </div>
                <div>
                    <h3 class="text-xl md:text-2xl font-bangers text-[#1F2937] mb-2">REVISA TU CORREO</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Te hemos enviado un email de confirmación. <strong>Revisa tu carpeta de SPAM</strong> si no lo recibes en los próximos 5 minutos.
                    </p>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="bg-[#FCE7F3] border-4 border-[#FF6B7A] rounded-2xl p-6 mb-6">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-[#FF6B7A] rounded-full flex items-center justify-center flex-shrink-0 border-2 border-[#1F2937]">
                    <span class="text-2xl font-bangers text-white">2</span>
                </div>
                <div>
                    <h3 class="text-xl md:text-2xl font-bangers text-[#1F2937] mb-2">HAZ CLIC EN EL BOTÓN DE CONFIRMACIÓN</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Dentro del email, encontrarás un botón para <strong>confirmar tu suscripción</strong>. Es necesario hacer clic para validar tu interés.
                    </p>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="bg-[#FEF3C7] border-4 border-[#FDB44B] rounded-2xl p-6 mb-8">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-[#FDB44B] rounded-full flex items-center justify-center flex-shrink-0 border-2 border-[#1F2937]">
                    <span class="text-2xl font-bangers text-white">3</span>
                </div>
                <div>
                    <h3 class="text-xl md:text-2xl font-bangers text-[#1F2937] mb-2">RECIBE TU BONUS</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Una vez confirmado, recibirás <strong>automáticamente otro email con tu regalo BONUS</strong>. ¡Ya casi lo tienes!
                    </p>
                </div>
            </div>
        </div>

        <!-- Help Box -->
        <div class="bg-[#F1F5F9] border-4 border-[#64748B] rounded-2xl p-6">
            <div class="flex items-start gap-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#64748B] flex-shrink-0 mt-1">
                    <path d="M13 16H12V12H11M12 8H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div>
                    <p class="text-slate-700 leading-relaxed">
                        <strong>¿Problemas para encontrar el email?</strong> Asegúrate de revisar la carpeta de spam, promociones o correo no deseado. Si después de 10 minutos no lo encuentras, contáctanos en <a href="mailto:hola@elementalkidsclub.com" class="text-[#E85D75] hover:text-[#d54a63] font-bold underline">hola@elementalkidsclub.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Link -->
    <div class="text-center">
        <a href="/" class="inline-flex items-center gap-2 text-[#5BC0EB] hover:text-[#4a9bc9] font-bold text-lg transition-colors hover:underline">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 19L3 12M3 12L10 5M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Volver al sitio web
        </a>
    </div>
</div>

</div>

<?php
get_footer();
