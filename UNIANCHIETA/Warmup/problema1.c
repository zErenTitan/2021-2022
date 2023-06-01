#include <stdio.h>
#include <locale.h>

float conversor(float qtd_chuva){

    float converter;
    converter = qtd_chuva/25.4;
    return converter;
}


int main(){
    setlocale(LC_ALL,"");
    float milimetros, resultado;
    FILE *arq;
    arq = fopen("chuva.in.txt","r");

    while(!feof(arq)){
        fscanf(arq,"%f \n",&milimetros);
        resultado = conversor(milimetros);
        printf("%.2f\n",resultado);
    }

    fclose(arq);
    return 0;
}
