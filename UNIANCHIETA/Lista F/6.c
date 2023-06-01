#include <stdio.h>
#include <locale.h>
#include <string.h>

typedef struct{
    char marca[15];
    char placa[8];
    char hora[5];


}entrada;

int main(){
    setlocale(LC_ALL,"");
    int i;

    entrada save[50];


    for (i=0;i<1;i++){
        printf("Digite o nome da marca:\n");
        gets(save[i].marca);
        printf("Digite o número da placa:\n");
        gets(save[i].placa);
        printf("Digite o horário de entrada:\n");
        gets(save[i].hora);
        printf("O carro da marca %s com a placa %s que entrou às %s foi salvo com sucesso!",save[i].marca, save[i].placa, save[i].hora);


    }



    return 0 ;

}


