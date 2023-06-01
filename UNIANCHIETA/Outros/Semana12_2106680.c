#include<stdio.h>
#include<locale.h>
#include<string.h>

int main(){
    setlocale(LC_ALL,"");
    int number, resto;

    printf("Digite um número:\n");
    scanf("%i",&number);
    resto = number;
    printf("1");
    while(resto >1){


        if(resto%2 == 0){
            printf("0");

        }else if(resto%2 == 1){

            printf("1");
        }
         resto=resto/2;
    }


    return 0 ;
}
