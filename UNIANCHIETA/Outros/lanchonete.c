#include<stdio.h>
#include<locale.h>

int  main(){
    setlocale(LC_ALL, "");

    int hamb, batata, refri, cervej, doce;
    float resultado;

    printf("Digite o número de Hambúrguers comprados:");
    scanf("%i", &hamb);
    printf("Digite o número de batatas fritas compradas:");
    scanf("%i",&batata);
    printf("Digite o número de refrigerantes comprados:");
    scanf("%i",&refri);
    printf("Digite o número de Cervejas compradas:");
    scanf("%i", &cervej);
    printf("Digite o número de doces comprados:");
    scanf("%i", &doce);

    resultado = hamb*8 + batata*12 + refri*3 + cervej*5 + doce*3;

    printf("O valor da sua compra foi de %2f", resultado);


    return 0;
}
