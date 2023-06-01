#include<stdio.h>
#include<locale.h>
int main(){

    setlocale(LC_ALL, "");

    float a;

    printf("Informe sua nota: ");
    scanf("%f",&a);

    if(nota >= 5){
        printf("Aprovado");

    }else{

        printf("Reprovado");
    }

    return 0
