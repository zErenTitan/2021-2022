#include<stdio.h>
#include<locale.h>

void main (int argc, char*argv[]){


    setlocale(LC_ALL,"");
    float PI, R ,A;
    PI = 3.14159;

    printf("Digite o valor do raio: ");
    scanf("%f", &R);

    A = PI * (R * R);

    printf("O valor é: %f", A);


}
