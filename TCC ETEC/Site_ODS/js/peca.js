var pro_select = [];
function  add_peca(id){ 
    
    if(pro_select.indexOf(id) != -1){
        indx = pro_select.indexOf(id); 
        unit_peca = document.getElementById("unit_peca"+id);
        unit_peca.remove();
        pro_select.splice(indx,1);
        
    }else{
        pro_select.push(id);
        var unit_peca = document.createElement("input");
        unit_peca.setAttribute("value","1");
        unit_peca.setAttribute("min","1");
        unit_peca.setAttribute("type","number");
        unit_peca.setAttribute("id","unit_peca"+id+"")
        unit_peca.setAttribute("name","unit_peca"+id+"");
        unit_peca.setAttribute("class","unit_peca_select");
        peca=document.getElementsByClassName("peca");
        peca[id-1].appendChild(unit_peca);
        
        
    }
   
}
function ShowProd(){
    var prod_list= document.getElementsByClassName("prods_list");
    prod_list[0].innerHTML= `
    <div class='header_list'>
        <p class='prods_nome'>Nome</p>
        <p class='prods_marca'>Marca</p>
        <p class='prods_valor'>Valor Un.</p>
        <p class='prods_unit'>Quantidade</p>
        <p class='prods_total'>Total Prod.</p>
    </div>
    `;
    var total = 0;
        var inputs_nmber = document.getElementsByClassName("unit_peca_select");
        var total_txt = document.getElementsByClassName("total");
   if(pro_select.length!=0){
        
        for(var i = 0; i<pro_select.length;i++){

            var prod = document.createElement("div");
            var nome = document.createElement("p");
            var marca = document.createElement("p");
            var valor = document.createElement("p");
            var unit = document.createElement("p");
            var total_peca = document.createElement("p");
            prod.setAttribute("class","prods_div");
            nome.setAttribute("class","prods_nome");
            marca.setAttribute("class","prods_marca");
            valor.setAttribute("class","prods_valor");
            unit.setAttribute("class","prods_unit");
            total_peca.setAttribute("class", "prods_total");
            nome.innerHTML=prod_nome[pro_select[i]-1];
            marca.innerHTML=prod_marca[pro_select[i]-1];
            valor.innerHTML=prod_v_unit[pro_select[i]-1];
            unit.innerHTML=inputs_nmber[i].value;
            total_peca.innerHTML = "R$ " + (prod_v_unit[pro_select[i]-1] * inputs_nmber[i].value).toFixed(2);
            prod.appendChild(nome);
            prod.appendChild(marca);
            prod.appendChild(valor);
            prod.appendChild(unit);
            prod.appendChild(total_peca);
            prod_list[0].appendChild(prod);
            total+= (prod_v_unit[pro_select[i]-1] * inputs_nmber[i].value);
          
        }
   }
    total_txt[0].innerHTML = "Total: R$ " + total.toFixed(2);
    total_txt[0].setAttribute("value",""+total+"");
    somaTotal();
}