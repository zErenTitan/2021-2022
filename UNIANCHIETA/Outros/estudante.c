#include<stdio.h>
#include<locale.h>
int main(){
    setlocale(LC_ALL,"");

    float nota1, nota2, nota3, resultado;

    printf("Digite a nota da primeira prova teorica do aluno:");
    scanf("%f",&nota1);
    printf("Digite a nota da segunda prova teorica do aluno: ");
    scanf("%f",&nota2);
    printf("Digite a nota da terceira prova teorica do aluno ");
    scanf("%f", &nota3);

    resultado = nota1*0.3+ nota2*0.2 + nota3*0.5;

    printf("A nota final do aluno foi de:%.2f",resultado);
}
