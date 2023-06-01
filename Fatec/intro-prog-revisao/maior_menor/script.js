function calculate(event){
    event.preventDefault()
    let n1= parseFloat(document.getElementById("n1").value)
    let n2= parseFloat(document.getElementById("n2").value)
    let n3= parseFloat(document.getElementById("n3").value)
    let n4= parseFloat(document.getElementById("n4").value)
    let n5= parseFloat(document.getElementById("n5").value)
    result.innerHTML = ``
    menor = Math.min(n1,n2,n3,n4,n5);
    result.innerHTML += `O menor valor entre os números digitados é o ${menor}.<br><br>`
    maior = Math.max(n1,n2,n3,n4,n5);
    result.innerHTML += `O maior valor entre os números digitados é o ${maior}.`




}
addEventListener("submit", calculate)