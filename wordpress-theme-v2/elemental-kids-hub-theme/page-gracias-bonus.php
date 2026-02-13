<?php
/**
 * Template Name: Gracias Bonus
 *
 * @package Elemental_Kids_Theme
 */

get_header();
?>

<div class="min-h-screen py-16 px-5" style="background-color:#FEF3C7;background-image:linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);background-size:20px 20px">

<div class="max-w-3xl mx-auto">

    <!-- Success Icon -->
    <div class="flex justify-center mb-8">
        <div class="w-32 h-32 bg-[#A8E6A1] rounded-full flex items-center justify-center shadow-2xl border-4 border-[#1F2937]" style="animation: bounce 1s infinite;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#1F2937]">
                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>

    <!-- Main Card -->
    <div class="bg-white rounded-3xl shadow-2xl p-6 md:p-12 border-4 border-[#FF6B7A] mb-8">
        <h1 class="text-3xl md:text-5xl font-bangers text-center mb-4 text-[#1F2937] break-words">¡GRACIAS POR CONFIRMAR!</h1>
        <p class="text-xl md:text-3xl font-bangers text-center text-[#E85D75] mb-8 break-words">TU BONUS YA ESTÁ EN CAMINO</p>

        <!-- Success Message -->
        <div class="bg-gradient-to-r from-[#D1FAE5] to-[#A7F3D0] border-4 border-[#10B981] rounded-2xl p-6 mb-8">
            <div class="flex items-start gap-4">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#059669] flex-shrink-0 mt-1">
                    <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div>
                    <p class="text-lg font-bold text-[#065F46] mb-2">¡Confirmación exitosa!</p>
                    <p class="text-slate-700">Hemos enviado tu bonus a tu correo electrónico.</p>
                </div>
            </div>
        </div>

        <!-- What's Next Section -->
        <div class="bg-[#FEF3C7] border-4 border-[#FDB44B] rounded-2xl p-8 mb-6">
            <div class="flex items-start gap-4 mb-6">
                <div class="w-16 h-16 bg-[#FDB44B] rounded-full flex items-center justify-center flex-shrink-0 border-4 border-[#1F2937]">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#1F2937]">
                        <path d="M12 8V12L15 15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h2 class="text-2xl md:text-3xl font-bangers text-[#1F2937] mb-4">¿QUÉ SIGUE AHORA?</h2>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex items-start gap-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#E85D75] flex-shrink-0 mt-1">
                        <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text-slate-700 leading-relaxed">
                        Recibirás un <strong>email adicional con tu regalo bonus</strong> en los próximos <strong class="text-[#E85D75]">5-10 minutos</strong>.
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#E85D75] flex-shrink-0 mt-1">
                        <path d="M8 7V3M16 7V3M7 11H17M5 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text-slate-700 leading-relaxed">
                        Tu bonus incluye una <strong>herramienta potente para animar a los niños a organizar sus tareas</strong>.
                    </p>
                </div>

                <div class="flex items-start gap-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#E85D75] flex-shrink-0 mt-1">
                        <path d="M4 16V17C4 17.5304 4.21071 18.0391 4.58579 18.4142C4.96086 18.7893 5.46957 19 6 19H18C18.5304 19 19.0391 18.7893 19.4142 18.4142C19.7893 18.0391 20 17.5304 20 17V16M16 12L12 16M12 16L8 12M12 16V4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text-slate-700 leading-relaxed">
                        Podrás <strong>descargar el contenido directamente</strong> desde el email que te enviaremos.
                    </p>
                </div>
            </div>
        </div>

        <!-- Help Section -->
        <div class="bg-[#E0F2FE] border-4 border-[#5BC0EB] rounded-2xl p-6">
            <div class="flex items-start gap-4">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#5BC0EB] flex-shrink-0">
                    <path d="M8.228 9C8.588 7.832 9.705 7 11 7C12.657 7 14 8.343 14 10C14 11.657 12.657 13 11 13V15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12ZM11 17H11.01V17.01H11V17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div>
                    <p class="text-lg font-bold text-[#0369A1] mb-2">¿NECESITAS AYUDA?</p>
                    <p class="text-slate-700 mb-3">
                        Si no recibes el email en 10 minutos o tienes algún problema, no dudes en contactarnos en:
                    </p>
                    <a href="mailto:hola@elementalkidsclub.com" class="text-[#E85D75] hover:text-[#d54a63] font-bold text-lg hover:underline transition-colors">
                        hola@elementalkidsclub.com
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="text-center">
        <a href="/" class="inline-flex items-center gap-2 bg-[#5BC0EB] hover:bg-[#4a9bc9] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-[0_5px_0_0_#3a8ab0] hover:shadow-[0_3px_0_0_#3a8ab0] hover:translate-y-[2px] border-2 border-[#1F2937]">
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
