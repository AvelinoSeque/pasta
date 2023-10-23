var bot = document.getElementById('bot');
bot.onclick = function(){
var nome= document.getElementById('nome_u');
var telefone= document.getElementById('tel_u');
var email= document.getElementById('email_u');
var mensagem= document.getElementById('mensagem_u');
var notificacao= document.getElementById('notificacao');

if(email.value.length==0 || nome.value.length==0 || telefone.value.length==0 || mensagem.value.length==0){
    notificacao.innerHTML='Preencha todos campos vazios';
    notificacao.style.color='red';
    return false;
}else{
if(nome.value.length < 7){
    notificacao.innerHTML='Nome completo curto demais';
    notificacao.style.color='red';
    return false;
}else if(telefone.value.length < 9){
    notificacao.innerHTML='Número de telefone deve conter no mínimo 9 algarismos';
    notificacao.style.color='red';
    return false;
}else if(mensagem.value.length > 600){
    notificacao.innerHTML='Ultrapassaste o maximo de carateres para a mensagem';
    notificacao.style.color='red';
    return false;
}else{
        return true;
    }
}
}