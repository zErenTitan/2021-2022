#include <stdio.h>
#include <locale.h>

typedef struct
{
	char nome[51];
	int ra;
	int idade;
	float nota1;
	float nota2;
} aluno;

int main()
{
	setlocale(LC_ALL,"");

	// aluno	
	aluno a1;
	
	gets(a1.nome);
	scanf("%i", &a1.ra);
	scanf("%i", &a1.idade);
	scanf("%f", &a1.nota1);
	scanf("%f", &a1.nota2);
	
	printf("Média das notas: %f\n", (a1.nota1+a1.nota2)/2);
	
	return 0;	
}
