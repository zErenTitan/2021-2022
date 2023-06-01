#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL,"");
    int select;
    float preco_prod , taxa_aumento, preco_final;

    printf("Produtos perecíveis - 1\nProdutos não perecíveis - 2 \nDigite o tipo de produto: ");
    scanf("%i",&select);
    printf("Digite o preço bruto do produto: ");
    scanf("%f",&preco_prod);

    taxa_aumento = preco_prod + preco_prod* 0.4 ;

    if(select == 1){

        if(taxa_aumento>20 ){

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.2);
            printf("O produto perecível se encaixou na promoção 1 de 20%% de desconto. O valor final foi de : %.3f",preco_final);

        }else if(taxa_aumento>10 && taxa_aumento<=20){

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.1);
            printf("O produto perececível se encaixou na promoção 2 de 10%% de desconto. O valor final foi de : %.3f ",preco_final);

        }else{

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.15);
            printf("O produto perececível se encaixou na promoção 3 de 15%% de desconto. O valor final foi de : %.3f ",preco_final);

        }

    }else if(select == 2){

        if(taxa_aumento > 50){

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.05);
            printf("O produto não perececível se encaixou na promoção 4 de 5%% de desconto. O valor final foi de : %.3f ",preco_final);

        }else{

            preco_final = taxa_aumento + preco_prod;
            printf("Promoção 0. O produto não perececível  não se encaixou em nenhuma promoção. O valor final foi de : %.3f ",preco_final);


        }

    }



}
