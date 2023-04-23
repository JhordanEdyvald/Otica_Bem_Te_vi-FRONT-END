//BOTÃO USUÁRIO DA NAVBAR
$('#Conta-nav').click(()=>{
    window.location.href = window.location.href;
});

//BOTÃO CARRINHO DA NAVBAR
$('#Carrinho-nav').click(()=>{
    window.location.href = window.location.href;
});

const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args) {
      const context = this;
      const later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      const callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

  function navbarEsquemaCor(){
    const TopoJanela = window.pageYOffset + 77;
    if(TopoJanela > 300){
      $('nav').css('backgroundColor','#FF6C3B');
    }else{
      $('nav').css('backgroundColor','#0000');
    }
  }
  
$(this).scroll(debounce(()=>navbarEsquemaCor(),100));

