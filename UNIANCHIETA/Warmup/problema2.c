#include <stdio.h>
#include <locale.h>
#define QTD 3
#define comicao 200;
typedef struct{
    char nome[50];
    float salario_fixo,precof;
    int qtd_venda;


}venda;
int main(){
    setlocale (LC_ALL,"");
    venda obter_dados[QTD];
    int i;
    FILE *arq;
    arq = fopen("vendidos.in.txt","r");
    for (i=0; i<QTD; i++){

         while (!feof(arq)){

            fscanf(arq,"%s %f %i \n",obter_dados[i].nome,&obter_dados[i].salario_fixo,&obter_dados[i].qtd_venda);
            obter_dados[i].precof =obter_dados[i].salario_fixo + obter_dados[i].qtd_venda * comicao;
            printf("%s %.2f\n", obter_dados[i].nome,obter_dados[i].precof);

        }


    }
    fclose(arq);
    return 0;
}
