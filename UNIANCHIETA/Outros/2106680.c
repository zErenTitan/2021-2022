#include<stdio.h>
#include<locale.h>
 int main (){
    setlocale(LC_ALL,"");

    float A, B, troca1, troca2;

    printf("Digite o valor de A:");
    scanf("%f",&A);
    printf("Digite o valor de B:");
    scanf("%f",&B);

    troca1 = A;
    troca2 = B;
    B = troca1;
    A = troca2;

    printf("Valores trocados:\nA = %.2f \nB = %.2f.", A, B);

 }
