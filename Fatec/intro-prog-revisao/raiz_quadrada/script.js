var numeros = []
function calculate(){
    
  
    var digitados = document.getElementById("num").value
    numeros.push(digitados)
    document.getElementById("num").value = ""
}
function raiz(event){
    event.preventDefault()
    while(numeros>0){
        var resultado = numeros.pop();
        resultado2 = []
       var raiz=Math.sqrt(resultado) 
        resultado2.unshift(raiz)
        result.innerHTML += `${resultado2}<br>`
     
    }
 
}