#include<stdio.h>
#include<locale.h>

int main(){

    setlocale(LC_ALL,"");
    float salario, emprest;

    printf("Digite o seu salário: ");
    scanf("%f",&salario);
    printf("Digite o valor desejado do empréstimo: ");
    scanf("%f",&emprest);

    if(salario*0.3<emprest){

        printf("Empréstimo negado.");

    }else{

        printf("Empréstimo aprovado.");

    }

}
