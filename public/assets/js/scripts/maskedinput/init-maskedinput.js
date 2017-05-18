$(document).ready(function() {

    $("input[name='cpf']").mask("999.999.999-99");	 
    $("input[type='date']").mask("99/99/9999");
    $("input[name='usuario[telefoneResidencial]']").mask("(99)9999-9999");
    $("input[name='usuario[endereco][cep]']").mask("99999-999");
    //$("input[name='telefone']").mask("(99)9999-9999");
    $("input[name='usuario[telefoneCelular]']").mask("(99)9999-9999");
    //$("input[name='unidade[dataInauguracao]']").mask("99/99/9999");
    $("input[name='unidade[endereco][cep]']").mask("99999-999");
   	$("input[name='telefone']").mask("(99) 9999-9999?9").ready(function(event) {
    var target, phone, element;
    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
    phone = target.value.replace(/\D/g, '');
    element = $(target);
    element.unmask();
    if(phone.length > 10) {
        element.mask("(99) 99999-999?9");
    } else {
        element.mask("(99) 9999-9999?9");  
    }});

});