
window.onload = function(){
  var formulario=document.querySelector("#registroFormulario");
  var campoPassword=formulario.querySelector('input[name="password"]');
  var campoPassConfirm=formulario.querySelector('input[name="password_confirmation"]');
  var campoAvatar=formulario.querySelector('input[name="avatar"]');

  function longitudPass(evento){
    if(campoPassword.value.length < 8){
      evento.preventDefault()
      console.log('el password debe tener al menos 8 caracteres');
      var div = campoPassword.parentElement;
      console.log(div);
      div.querySelector('p').innerHTML = 'El password debe tener al menos 8 caracteres';
      div.querySelector('p').style.color = 'red'
    }else{
      var div = campoPassword.parentElement;
      div.querySelector('p').innerHTML = '';
    }
  }

  function chequearPasswords(evento){

    if (campoPassword.value!=campoPassConfirm.value){
      evento.preventDefault()
      console.log('Ambos passwords no coinciden');
      var div = campoPassConfirm.parentElement;
      div.querySelector('p').innerHTML = 'Los passwords no coinciden';
      div.querySelector('p').style.color = 'red'

    }else if(campoPassword.value!= '' && campoPassConfirm.value != ''){
      var div = campoPassConfirm.parentElement;
      div.querySelector('p').innerHTML = '';
    }
  }






  formulario.onsubmit=function (evento){

  for ( var elemento of formulario.elements){
      if (elemento.name =='name' || elemento.name =='email' || elemento.name == 'password' || elemento.name == 'password_confirmation'){

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
    longitudPass(evento)
    chequearPasswords(evento)
    }


  var campoEmail=document.querySelector("#email");
  var regexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  campoEmail.onblur=function(evento){
    console.log('Salgo del campo email...')
      if(!regexMail.test(this.value)){
        evento.preventDefault();
        console.log('El elemento ${campoEmail.name} tiene valor nulo');
        var div = campoEmail.parentElement;
        div.querySelector('p').innerHTML = 'El email no es válido';
        div.querySelector('p').style.color = 'red'
        console.log(campoEmail);
      }else{
        var div = campoEmail.parentElement;
        div.querySelector('p').innerHTML = '';
      }
    }



campoPassword.onblur = function(evento){
  chequearPasswords(evento);

}
campoPassConfirm.onblur = function(evento){
  chequearPasswords(evento);

}

campoPassword.onblur = function(evento){
  longitudPass(evento);
}
};
