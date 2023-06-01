#include <stdio.h>
#include <locale.h>

#define QTD 2

typedef struct
{
	char nome[51];
	int ra;
	int idade;
	float nota1;
	float nota2;
} aluno;

aluno obter_dados_aluno()
{
	aluno tmp;
	printf("Nome: ");
	gets(tmp.nome);
	printf("RA: ");
	scanf("%i", &tmp.ra);
	printf("Idade: ");
	scanf("%i", &tmp.idade);
	printf("Nota 1: ");
	scanf("%f", &tmp.nota1);
	printf("Nota 2: ");
	scanf("%f", &tmp.nota2);
	getchar(); // limpar o buffer
	return tmp;
}

void exibir_aluno(aluno tmp)
{
	float media;
	media = (tmp.nota1 + tmp.nota2) / 2;
	printf("%s - %.2f\n", tmp.ra, media);
}


int main()
{
	setlocale(LC_ALL,"");

	int i;
	float media;
	aluno lista[QTD]; // vetor de alunos
	
	for(i=0;i<QTD;i++)
	{
		printf("Dados do aluno %i\n", i+1);
		lista[i] = obter_dados_aluno();
		printf("\n");
	}
	
	printf("\nCálculo das médias da turma\n");
	for(i=0;i<QTD;i++)
	{
		exibir_aluno(lista[i]);
	}
	
	return 0;	
}
