function habilitarSegundoPainel(){
    const check = document.getElementById('segPainel');
    if (check.checked) {
        document.getElementById('msg').classList.toggle('mostrar',true);
        document.getElementById('submit').classList.toggle('mostrar',true);
        document.getElementById('contador').classList.toggle('mostrar',true);

    } else {
        document.getElementById('msg').classList.toggle('mostrar', false);
        document.getElementById('submit').classList.toggle('mostrar',false);
        document.getElementById('apresentacao').classList.toggle('mostrar', false);
        document.getElementById('contador').classList.toggle('mostrar', false);
    }
}

function isWord(str) {
    let alfanumerico = false;
    for (let i = 0; i < str.length; i++) {
        const code = str.charCodeAt(i);
        if ((code > 47 && code < 58) || // numerais (0-9)
        (code > 64 && code < 91) || // letras maiúsculas (A-Z)
        (code > 96 && code < 123) || // letras minúsculas (a-z)
        (code > 191 && code < 252)) { // letras maiúsculas e minúsculas com acento
      alfanumerico = true;
    }
  }
  return alfanumerico;
}

function apresentar() {
    let sex;
    const name = document.getElementById('nome').value;
    let date = document.getElementById('data').value;
    const age = document.getElementById('idade').value;
    const m = document.getElementById('masc');
    const f = document.getElementById('fem');

    if (m.checked) {
        sex = 'Masculino';
    }
    else if (f.checked) {
        sex = 'Feminino';
    }

    if (name !== "") {
        document.getElementById('aprNome').innerHTML = 'Nome: ' + name;
        document.getElementById('aprNome').classList.toggle('mostrar',true);
    } else {
        document.getElementById('aprNome').classList.toggle('mostrar', false);
    }

    if (age !== "" && age >= 1 && age <= 200) {
        document.getElementById('aprIdade').innerHTML = 'Idade: '+ age + ' anos';
        document.getElementById('aprIdade').classList.toggle('mostrar',true);
    } else {
        document.getElementById('aprIdade').classList.toggle('mostrar', false);
    }

    document.getElementById('aprSexo').innerHTML = 'Sexo: ' + sex;

    if (date !== "") {
        date = date.split("-");
        document.getElementById('aprData').innerHTML = 'Data: ' + date[2] + '/' + date[1] + '/' + date[0];
        document.getElementById('aprData').classList.toggle('mostrar',true);
    } else {
        document.getElementById('aprData').classList.toggle('mostrar', false);
    }

    const texto = document.getElementById('msg').value.split(' ');
    let qtd = 0;
    for (let i = 0; i < texto.length; i++) {
      if (!texto[i] === ' ' && isWord(texto[i])) {
        qtd++;
      }
    }
    document.getElementById('aprQtd').innerHTML = 'Quantidade de palavras digitadas: ' + qtd;

    document.getElementById('apresentacao').classList.toggle('mostrar', true);
}

function  idadeInvalida() {
    const id = document.getElementById('idade').value;
    if (id < 1 || id > 200) {
        document.getElementById('idade').classList.toggle('is-invalid', true);
    } else {
        document.getElementById('idade').classList.toggle('is-invalid', false);
    }
}