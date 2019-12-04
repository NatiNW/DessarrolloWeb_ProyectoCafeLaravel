window.onload=function(){
var formulario=document.querySelector("#loginFormulario");

formulario.onsubmit=function (evento){


for ( var elemento of formulario.elements){


  if (elemento.name =='email' || elemento.name == 'password'){

    if (elemento.value == '' ){
      evento.preventDefault();
      console.log(`El elemento ${elemento.name} tiene valor nulo`);
      var parrafo = document.createElement('p');
      parrafo.append('El campo esta vacio');
      // pENDIENTE
      elemento.parentElement.appendChild(parrafo);
      console.log(elemento);
    }
  }
}

}
}
