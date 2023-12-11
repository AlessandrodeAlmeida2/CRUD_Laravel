(function(){
    'use strict';

    function confirmDel(event)
    {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        let token=document.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo apagar?")){
            let ajax=new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    window.location.href="books";
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }

    if(document.querySelector('.js-del')) // Adicionei um parêntese de fechamento aqui
    {
        let btn=document.querySelectorAll('.js-del'); // Alterei 'doc' para 'document'
        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click', confirmDel, false); // Corrigi o nome da função para 'confirmDel'
        }
    }

})(window, document);
