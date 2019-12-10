window.onload=function(){
var formulario=document.querySelector("#loginFormulario");

formulario.onsubmit=function (evento){


for ( var elemento of formulario.elements){


  if (elemento.name =='email' || elemento.name == 'password'){

    if (elemento.value == '' ){
      evento.preventDefault();
      console.log(`El elemento ${elemento.name} tiene valor nulo`);
      var div = elemento.parentElement;
      div.querySelector('p').innerHTML = 'El campo esta vacio';
      div.querySelector('p').style.color = 'red'
      console.log(elemento);
    }else{
      var div = elemento.parentElement;
      div.querySelector('p').innerHTML = '';
    }
  }
}

}
}
