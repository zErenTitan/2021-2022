#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL,"");
    float numbers[10], maior, menor=0;
    int i;

    for(i=0;i<10;i++){

        printf("Digite o %i n�mero:\n",i+1);
        scanf("%f", &numbers[i]);

        if(maior<numbers[i] || maior==0){
            maior = numbers[i];
        }else if (menor>numbers[i] || menor == 0){
            menor = numbers[i];
        }

    }
    printf("O maior n�mero � %.2f e o menor � %.2f", maior , menor );
    return 0;
}
