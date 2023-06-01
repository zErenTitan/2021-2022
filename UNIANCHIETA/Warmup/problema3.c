#include <stdio.h>
#include <locale.h>
int main (){
    setlocale(LC_ALL,"");
    int decimal, binario;
    FILE *arq;
    arq = fopen("decimais.in.txt","r");

    while(!feof(arq)){

        fscanf(arq,"%i \n", &decimal);
        printf("1");
        while(decimal/2 >=1 ){
            if(decimal%2 == 1){
                printf("1");


            }else{
                printf("0");
            }

            decimal = decimal/2;
        }
        printf("\n");

    }
    return 0;
}
