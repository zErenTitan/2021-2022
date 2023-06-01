#include<stdio.h>
#include<locale.h>

int main(){
    int x1,x2,x3,media;
    char resp;

        x1=1;
        x2=2;
        x3=3;
    do{


        media= (x1+x2+x3)/3;
        printf("%i\n",media);
        printf("Deseja continuar? S ou N\n");
        scanf("%c",&resp);
        x1++;x2++;x3++;

    }while(resp=="n");



}
