const formulario = document.getElementById("formInteresse");

formulario.addEventListener("submit", function (event) {

  const nome = formulario.nome.value;
  const email = formulario.email.value;
  const telefone = formulario.telefone.value;
  const mensagem = formulario.mensagem.value;

  if (
    nome === "" ||
    email === "" ||
    telefone === "" ||
    mensagem === ""
  ) {

    alert("Preencha todos os campos.");

    event.preventDefault();
  }

});