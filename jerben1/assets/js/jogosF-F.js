/**
 * Created by SEQUE on 26/11/2020.
 */

function clicar1(){
    var jfeito = window.document.querySelector('p.feitos')
    var jft = window.document.querySelector('p.futuros')
    var tabela = window.document.querySelector('table.fei')
    var tabela2 = window.document.querySelector('table.fut')
    jfeito.style.backgroundColor=' rgba(15, 255, 74, 0.32)';
    jfeito.style.borderBottom= '3px solid rgba(43, 103, 146, 0.88)'
    jfeito.style. boxShadow ='rgba(0, 0, 0, 0.11) 1px 1px 2px 1px'
    tabela.style.display='table'
    tabela.style.margin='auto'
    tabela2.style.display='none'

    jft.style.backgroundColor='transparent'
    jft.style.borderBottom= 'none'
    jft.style.boxShadow ='none'
}
function clicar2(){
    var jft = window.document.querySelector('p.futuros')
    jft.style.backgroundColor='rgba(15, 255, 74, 0.32)';
    jft.style.borderBottom= '3px solid rgba(43, 103, 146, 0.88)'
    jft.style. boxShadow ='rgba(0, 0, 0, 0.11) 1px 1px 2px 1px'
    var jfeito = window.document.querySelector('p.feitos')
    var tabela = window.document.querySelector('table.fei')
    var tabela2 = window.document.querySelector('table.fut')
    jfeito.style.backgroundColor='transparent';
    jfeito.style.borderBottom= 'none'
    jfeito.style. boxShadow ='none'
    tabela.style.display='none'
    tabela2.style.display='table'
    tabela2.style.margin='auto'
}

