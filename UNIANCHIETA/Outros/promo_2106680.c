#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL,"");
    int select;
    float preco_prod , taxa_aumento, preco_final;

    printf("Produtos perec�veis - 1\nProdutos n�o perec�veis - 2 \nDigite o tipo de produto: ");
    scanf("%i",&select);
    printf("Digite o pre�o bruto do produto: ");
    scanf("%f",&preco_prod);

    taxa_aumento = preco_prod + preco_prod* 0.4 ;

    if(select == 1){

        if(taxa_aumento>20 ){

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.2);
            printf("O produto perec�vel se encaixou na promo��o 1 de 20%% de desconto. O valor final foi de : %.3f",preco_final);

        }else if(taxa_aumento>10 && taxa_aumento<=20){

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.1);
            printf("O produto perecec�vel se encaixou na promo��o 2 de 10%% de desconto. O valor final foi de : %.3f ",preco_final);

        }else{

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.15);
            printf("O produto perecec�vel se encaixou na promo��o 3 de 15%% de desconto. O valor final foi de : %.3f ",preco_final);

        }

    }else if(select == 2){

        if(taxa_aumento > 50){

            preco_final = taxa_aumento + preco_prod - (preco_prod * 0.05);
            printf("O produto n�o perecec�vel se encaixou na promo��o 4 de 5%% de desconto. O valor final foi de : %.3f ",preco_final);

        }else{

            preco_final = taxa_aumento + preco_prod;
            printf("Promo��o 0. O produto n�o perecec�vel  n�o se encaixou em nenhuma promo��o. O valor final foi de : %.3f ",preco_final);


        }

    }



}
