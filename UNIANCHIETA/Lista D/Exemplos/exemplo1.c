#include<stdio.h>
#include<locale.h>
int main(){
    char texto[10];
    int i;
    printf("Escreva um texto de no máximo 10 caracteres:\n");
    gets(texto);

    for(i=10;texto[i]>=0;i--){

        printf("%c",texto[i]);

    }


    return 0 ;
}
