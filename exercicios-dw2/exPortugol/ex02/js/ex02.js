function mostrarNumero () {
    let numero1 = 0;
    let numero2 = 0;
    numero1 = parseInt(prompt("Digite um número inteiro"));
    numero2 = parseInt(prompt("Digite um segundo número inteiro"));
    // parseInt, transforma o conteúdo digitado em número inteiro
    // parseFloat, transforma o conteúdo digitado em número flutuante

    alert("O número digitado foi: " + (numero1 + numero2));
    // o parentese realiza a conta e depois ele concatena com a string
    
    document.getElementById("resultado").innerText = numero1 + numero2;
    // document.getElementById, acessa o conteúdo de id "resultado"
}