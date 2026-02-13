<?php
/**
 * Template Name: Contacto Page
 *
 * @package Elemental_Kids_Theme
 */

get_header();
?>

<div class="min-h-screen py-16 px-5" style="background-color:#FEF3C7;background-image:linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);background-size:20px 20px">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://elementalkidsclub.com/"},{"@type":"ListItem","position":2,"name":"Contacto","item":"https://elementalkidsclub.com/contacto"}]}</script>

<div class="max-w-5xl mx-auto">
<h1 class="text-4xl md:text-6xl font-bangers text-center mb-4 text-[#FF6B7A]">¡CONTÁCTANOS!</h1>
<p class="text-lg md:text-xl text-slate-700 mb-12 text-center max-w-2xl mx-auto">¿Tienes preguntas sobre nuestros libros? Estamos aquí para ayudarte</p>

<div class="grid md:grid-cols-2 gap-8 mb-12 items-start">
<div class="bg-white rounded-3xl shadow-lg p-6 border-4 border-[#5BC0EB]">
<h2 class="text-2xl md:text-3xl font-bangers text-[#5BC0EB] mb-4">INFORMACIÓN</h2>
<div class="space-y-5">
<div class="flex items-start gap-3">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#FF6B7A] flex items-center justify-center">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z" fill="white"></path>
</svg>
</div>
<div>
<h3 class="font-bold text-slate-800 mb-1 text-base">Email</h3>
<a href="mailto:info@elementalkids.com" class="text-[#5BC0EB] hover:underline break-all text-base">info@elementalkids.com</a>
</div>
</div>
<div class="flex items-start gap-3">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#FDB44B] flex items-center justify-center">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 18C5.9 18 5.01 18.9 5.01 20C5.01 21.1 5.9 22 7 22C8.1 22 9 21.1 9 20C9 18.9 8.1 18 7 18ZM1 2V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.1 5.9 17 7 17H19V15H7.42C7.28 15 7.17 14.89 7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L20.88 5.48C20.96 5.34 21 5.17 21 5C21 4.45 20.55 4 20 4H5.21L4.27 2H1ZM17 18C15.9 18 15.01 18.9 15.01 20C15.01 21.1 15.9 22 17 22C18.1 22 19 21.1 19 20C19 18.9 18.1 18 17 18Z" fill="white"></path>
</svg>
</div>
<div>
<h3 class="font-bold text-slate-800 mb-1 text-base">Comprar Libros</h3>
<a href="https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS?language=en&amp;ref=ap_rdr&amp;shoppingPortalEnabled=true" target="_blank" rel="noopener noreferrer" class="text-[#5BC0EB] hover:underline text-base">Ver en Amazon →</a>
</div>
</div>
</div>
</div>

<div class="bg-white rounded-3xl shadow-lg p-8 border-4 border-[#FF6B7A]">
<h2 class="text-2xl md:text-3xl font-bangers text-[#FF6B7A] mb-6">ENVÍANOS UN MENSAJE</h2>

<!-- Success Message (hidden by default) -->
<div id="form-success" class="bg-gradient-to-r from-[#D1FAE5] to-[#A7F3D0] border-4 border-[#10B981] rounded-2xl p-6 mb-6" style="display: none;">
    <div class="flex items-start gap-4">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#059669] flex-shrink-0 mt-1">
            <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div>
            <p class="text-lg font-bold text-[#065F46] mb-2">¡Mensaje enviado con éxito!</p>
            <p class="text-slate-700">Gracias por contactarnos. Te responderemos pronto.</p>
        </div>
    </div>
</div>

<!-- Error Message (hidden by default) -->
<div id="form-error" class="bg-gradient-to-r from-[#FEE2E2] to-[#FECACA] border-4 border-[#EF4444] rounded-2xl p-6 mb-6" style="display: none;">
    <div class="flex items-start gap-4">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#DC2626] flex-shrink-0 mt-1">
            <path d="M12 8V12M12 16H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <div>
            <p class="text-lg font-bold text-[#991B1B] mb-2">Error al enviar</p>
            <p class="text-slate-700">Hubo un problema. Por favor, intenta de nuevo o escríbenos a <a href="mailto:info@elementalkids.com" class="underline">info@elementalkids.com</a></p>
        </div>
    </div>
</div>

<form id="contact-form" action="https://formspree.io/f/YOUR_FORM_ID" method="POST" class="space-y-4">
<input type="hidden" name="_subject" value="Nuevo mensaje desde Elemental Kids Club">
<div>
<label for="name" class="block text-sm font-bold text-slate-700 mb-1">Nombre *</label>
<input type="text" id="name" required="" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none" name="name" value=""/>
</div>
<div>
<label for="email" class="block text-sm font-bold text-slate-700 mb-1">Email *</label>
<input type="email" id="email" required="" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none" name="email" value=""/>
</div>
<div>
<label for="subject" class="block text-sm font-bold text-slate-700 mb-1">Asunto *</label>
<select id="subject" name="subject" required="" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none">
<option value="" selected="">Selecciona...</option>
<option value="general">Consulta General</option>
<option value="pedidos">Pedidos y Envíos</option>
<option value="colegios">Colegios y Educadores</option>
<option value="prensa">Prensa y Colaboraciones</option>
</select>
</div>
<div>
<label for="message" class="block text-sm font-bold text-slate-700 mb-1">Mensaje *</label>
<textarea id="message" name="message" required="" rows="4" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FDB44B] focus:border-[#FDB44B] outline-none resize-none"></textarea>
</div>
<button type="submit" id="submit-btn" class="w-full bg-[#E85D75] hover:bg-[#d54a63] text-white py-4 px-6 rounded-full font-bold transition-all shadow-[0_4px_0_0_#b94456] hover:shadow-[0_2px_0_0_#b94456] hover:translate-y-[2px] disabled:opacity-50 uppercase text-lg">Enviar Mensaje →</button>
</form>

<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = this;
    const submitBtn = document.getElementById('submit-btn');
    const successMsg = document.getElementById('form-success');
    const errorMsg = document.getElementById('form-error');

    // Hide previous messages
    successMsg.style.display = 'none';
    errorMsg.style.display = 'none';

    // Disable button and show loading state
    submitBtn.disabled = true;
    submitBtn.textContent = 'Enviando...';

    // Submit form via AJAX
    fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            // Show success message
            successMsg.style.display = 'block';
            // Reset form
            form.reset();
            // Scroll to success message
            successMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else {
            // Show error message
            errorMsg.style.display = 'block';
            errorMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    })
    .catch(error => {
        // Show error message
        errorMsg.style.display = 'block';
        errorMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    })
    .finally(() => {
        // Re-enable button
        submitBtn.disabled = false;
        submitBtn.textContent = 'Enviar Mensaje →';
    });
});
</script>
</div>
</div>
</div>
</div>

<?php
get_footer();
