#include<stdio.h>
#include<locale.h>
#include<string.h>
float calcular(float num1,float num2,int oper){

    float resultado;
    if(oper == 1){
        resultado = num1 + num2;
    }else if(oper == 2){
        resultado = num1 - num2;
    }else if(oper == 3){
        resultado = num1 * num2;
    }else{
        resultado= num1 / num2;
    }
    return resultado;

}
int main(){
    setlocale(LC_ALL,"");
    float numero1, numero2,resultado;
    int operacao;
    printf("Digite o primeiro número:\n");
    scanf("%f",&numero1);
    printf("Digite o segundo número:\n");
    scanf("%f",&numero2);
    printf("Digite a operação desejada:\n1)+\n2)-\n3)*\n4)/\n");
    scanf("%i",&operacao);
    resultado=calcular(numero1,numero2,operacao);

     if(operacao == 1){
        printf("---------------------\n%.2f + %.2f = %.2f",numero1,numero2,resultado);
    }else if(operacao == 2){
        printf("---------------------\n%.2f - %.2f = %.2f",numero1,numero2,resultado);
    }else if(operacao == 3){
        printf("---------------------\n%.2f * %.2f = %.2f",numero1,numero2,resultado);
    }else{
        printf("---------------------\n%.2f / %.2f = %.2f",numero1,numero2,resultado);
    }
    return 0 ;
}


