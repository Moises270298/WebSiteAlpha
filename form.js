function mostrarFormCadastro() {
    document.getElementById('form-login').style.display = 'none';
    document.getElementById('form-cadastro').style.display = 'block';
}
$('.mostrar-sobre-nos').click(function() {
    alert('Informações sobre nós.');
});

$('.mostrar-contato').click(function() {
    alert('Informações de contato.');
});