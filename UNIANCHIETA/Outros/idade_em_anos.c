#include<stdio.h>
#include<locale.h>
int main(){
    setlocale(LC_ALL,"");

    int dia, mes,ano, resultado;

    printf("Digite o seu dia de nascimento:");
    scanf("%i", &dia);
    printf("Digite o m�s do seu nascimento:");
    scanf("%i", &mes);
    printf("Digite o ano do seu nascimento:");
    scanf("%i", &ano);
    resultado = (2021- ano) * 365 + (9-mes)* 30 + dia;

    printf("Voc� viveu %i dias.", resultado);

}
