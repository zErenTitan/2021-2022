#include <stdio.h>
#include <locale.h>

#define QTD 3

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

	int i;
	float media;
	aluno lista[QTD]; // vetor de alunos
	
	for(i=0;i<QTD;i++)
	{
		printf("Dados do aluno %i\n", i+1);
		printf("Nome: ");
		gets(lista[i].nome);
		printf("RA: ");
		scanf("%i", &lista[i].ra);
		printf("Idade: ");
		scanf("%i", &lista[i].idade);
		printf("Nota 1: ");
		scanf("%f", &lista[i].nota1);
		printf("Nota 2: ");
		scanf("%f", &lista[i].nota2);
		getchar(); // limpar o buffer
		printf("\n");
	}
	
	printf("\nCálculo das médias da turma\n");
	for(i=0;i<QTD;i++)
	{
		media = (lista[i].nota1 + lista[i].nota2) / 2;
		printf("%s - %.2f\n", lista[i].nome, media);
	}
	
	return 0;	
}
