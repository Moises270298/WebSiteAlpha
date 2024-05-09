 $(document).ready(function() {
     $('.servico').on('click', 'img', function() {
         $(this).siblings().removeClass('active');
         $(this).addClass('active');
     });
 });


 $('.mostrar-sobre-nos').click(function() {
     alert('Informações sobre nós.');
 });

 // Script para mostrar informações ao clicar em "Contato"
 $('.mostrar-contato').click(function() {
     alert('Informações de contato.');
 });

 function mostrarDescricao(element) {
     $(element).children('p').slideToggle();
 }
 $(document).ready(function() {
     $('#form-busca').submit(function(e) {
         e.preventDefault();
         var termoBusca = $('#busca').val().toLowerCase();
         $('.servico').each(function() {
             var titulo = $(this).find('h3').text().toLowerCase();
             if (titulo.includes(termoBusca)) {
                 $(this).show();
             } else {
                 $(this).hide();
             }
         });
     });
 });

 function validarBusca() {
     var termoBusca = document.getElementById("busca").value.trim();
     if (termoBusca === "") {
         alert("Por favor, digite um termo de busca.");
         return false; // Impede o envio do formulário se o campo de busca estiver vazio
     }
     // Se o campo de busca estiver preenchido, o formulário será enviado normalmente
     return true;
 }

 function scrollToSection(sectionId) {
     document.getElementById(sectionId).scrollIntoView({
         behavior: 'smooth'
     });
 }
 $(document).ready(function() {
     $('#form-busca').submit(function(e) {
         e.preventDefault();
         var termosBusca = $('#busca').val().toLowerCase().split(' ');
         $('.servico').each(function() {
             var titulo = $(this).find('h3').text().toLowerCase();
             var descricao = $(this).find('p').text().toLowerCase();
             var encontrado = false;
             termosBusca.forEach(function(termo) {
                 if (titulo.includes(termo) || descricao.includes(termo)) {
                     encontrado = true;
                 }
             });
             if (encontrado) {
                 $(this).show();
             } else {
                 $(this).hide();
             }
         });
     });
 });