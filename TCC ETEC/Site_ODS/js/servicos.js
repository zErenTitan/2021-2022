var serv_list = [];
function  add_serv(id2){ 
    
    if(serv_list.indexOf(id2) != -1){
        indx = serv_list.indexOf(id2);
        
        serv_list.splice(indx,1);
        
    }else{

        serv_list.push(id2);
        
    }
   
}
function ShowServs(){
  
    var serv_lista= document.getElementsByClassName("serv_list");
    serv_lista[0].innerHTML= `
    <div class='header_serv'>
        <p class='serv_nome'>Nome</p>
        <p class='serv_descricao'>Descricao</p>
        <p class='serv_valor'>Preço Serv.</p>
    </div>
    `;
    var total2 = 0;
        var total_serv2 = document.getElementsByClassName("total2");
   if(serv_list.length!=0){
    
        
        for(var i = 0; i<serv_list.length;i++){

            var serv= document.createElement("div");
            var nome2 = document.createElement("p");
            var descricao2 = document.createElement("p");
            var valor2= document.createElement("p");
            var serv_total = document.createElement("p");
            serv.setAttribute("class","serv_div");
            nome2.setAttribute("class","serv_nome");
            descricao2.setAttribute("class","serv_descricao");
            valor2.setAttribute("class","serv_valor");
            serv_total.setAttribute("class", "serv_total");
            nome2.innerHTML=serv_nome[serv_list[i]-1];
            descricao2.innerHTML=serv_descricao[serv_list[i]-1];
            valor2.innerHTML=serv_valor[serv_list[i]-1];
            
            serv.appendChild(nome2);
            serv.appendChild(descricao2);
            serv.appendChild(valor2);
            serv_lista[0].appendChild(serv);
            
            total2 += (serv_valor[serv_list[i]-1] * 1);
            
        } 
   }
        total_serv2[0].innerHTML = "Total: R$ " + total2.toFixed(2);
        total_serv2[0].setAttribute("value",""+total2+"");
        somaTotal();
}