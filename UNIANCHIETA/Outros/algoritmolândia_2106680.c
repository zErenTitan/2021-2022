#include<stdio.h>
#include<locale.h>

int main(){

    setlocale(LC_ALL,"");
    float salario, emprest;

    printf("Digite o seu sal�rio: ");
    scanf("%f",&salario);
    printf("Digite o valor desejado do empr�stimo: ");
    scanf("%f",&emprest);

    if(salario*0.3<emprest){

        printf("Empr�stimo negado.");

    }else{

        printf("Empr�stimo aprovado.");

    }

}
