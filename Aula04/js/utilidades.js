/* Arquivo: 
   => utilidades (arquivo js com funções)  
*/
// Função para juntar nome e sobrenome.

function juntarNome() {
    let nome      = document.getElementById('nome').value;
    let sobrenome = document.getElementById('sobrenome').value;
    // 1. Concatenação de strings normal.
    let nomecompleto = nome + " \n" + sobrenome; // como tem um innerHTML o código não interpreta o </br> em string
    // 2. Concantenação de strings com uso de interpolação (template strings)
    let nomecompleto1 = `${nome} <br> ${sobrenome}`;
    console.log('Nome: ' + nome);
    console.log('Sobrenome: ' + sobrenome);
    console.log('Nome Completo: ' + nomecompleto);
    // 3. Exercutar a injeção de texto com (/n JavaScript).
    document.getElementById('nomecompleto').innerText = nomecompleto;
    //   innerHTML e innerText é diferente. 
    // O innerHTML pode inserir tags de html invés de javaScript.
    // 4. Executar a injeção de tags (elementos HTML) + texto:
    document.getElementById('nomecompleto1').innerHTML = nomecompleto1;
}