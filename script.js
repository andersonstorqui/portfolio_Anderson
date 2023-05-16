function validarForm() {
  // pegar referências aos campos do formulário
  var email = document.getElementById('email').value;

  // verificar se os campos estão preenchidos corretamente
  if (email == '') {
    alert('Por favor, preencha  o campo Email.');
    return false;
  }

  return true;
}
