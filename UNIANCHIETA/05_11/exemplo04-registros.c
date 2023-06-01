#include <stdio.h>
#include <locale.h>

typedef struct
{
	char nome[51];
	int idade;
} pessoa;

typedef struct
{
	pessoa p1;
	pessoa p2;
	int qtdanosuniao;
} casal;

void exibir_dados_casal(casal x)
{
    printf("Nome: %s\n",x.p1);
    printf("Idade: %i\n",x.p1.idade);
    printf("Nome: %s\n", x.p2);
    printf("Idade: %i\n", x.p2.idade);
    printf("faz %i anos que o casal estão juntos", x.qtdanosuniao);

}

int main()
{
	setlocale(LC_ALL,"");

	casal oscar;

	printf("Entre com os dados da pessoa 1\n");
	printf("Nome: ");
	gets(oscar.p1.nome);
	printf("Idade: ");
	scanf("%i", &oscar.p1.idade);
	getchar();

	printf("\nEntre com os dados da pessoa 2\n");
	printf("Nome: ");
	gets(oscar.p2.nome);
	printf("Idade: ");
	scanf("%i", &oscar.p2.idade);
	getchar();

	printf("\nHá quantos anos estão juntos? ");
	scanf("%i", &oscar.qtdanosuniao);

	printf("\n\n");
	exibir_dados_casal(oscar);

	return 0;
}
