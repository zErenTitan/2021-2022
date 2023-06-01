/* 16- Escreva um programa que leia um número
	inteiro A e uma matriz Tabela[30,30] de
	inteiros.
	Em seguida, o programa deve indicar:
	1. Quantos valores iguais a A existem na matriz;
	2. Quantos valores iguais a A existem na diagonal principal da matriz;
	3. Quantos valores iguais a A existem na primeira coluna da matriz;
	4. Quantos valores maiores do que A existem na matriz;
	5. O valor da soma dos valores maiores do que A existentes na matriz.
*/

#include<stdio.h>
#include<locale.h>
#define QTD 3

int main()
{
	setlocale(LC_ALL,"");

	int tabela[QTD][QTD], a, i, j;
	int cigual=0, cigualdiag=0, cigualcol=0, cmaior=0, amaior=0;

	printf("Entre com o número desejado: ");
	scanf("%i", &a);

	for(i=0;i<QTD;i++)
	{
		for(j=0;j<QTD;j++)
		{
			printf("Informe o valor para tabela[%i][%i]: ", i, j);
			scanf("%i", &tabela[i][j]);
		}
	}

	for(i=0;i<QTD;i++)
	{
		for(j=0;j<QTD;j++);
		{
			// 1. Quantos valores iguais a A existem na matriz;
			if (a==tabela[i][j])
			{
				cigual++;

				//2. Quantos valores iguais a A existem na diagonal principal da matriz;
				if (i==j)
					cigualdiag++;

				// 3. Quantos valores iguais a A existem na primeira coluna da matriz;
				if (j==0)
					cigualcol++;
			}
			else
			{
				if (tabela[i][j]>a)
				{
					// 4. Quantos valores maiores do que A existem na matriz;
					// 5. O valor da soma dos valores maiores do que A existentes na matriz.
					cmaior++;
					amaior += tabela[i][j];
				}
			}
		}
	}

	// imprimir tabela/matriz
	for(i=0;i<QTD;i++)
	{
		for(j=0;j<QTD;j++)
			printf("%i ", tabela[i][j]);
		printf("\n");
	}


	printf("Existem %i valores iguais a A\n", cigual);
	printf("Existem %i valores iguais a A na diagonal principal\n", cigualdiag);
	printf("Existem %i valores iguais a A na primeira coluna\n", cigualcol);
	printf("Existem %i valores maiores que A\n", cmaior);
	printf("A soma dos valores maiores que A é %i\n", amaior);

	return 0;
}
