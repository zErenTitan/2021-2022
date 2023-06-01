#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL,"");
    float n1, n2, n3, n4, media, ex, mediaf;


    printf("Digite a nota da primeira prova: ");
    scanf("%f", &n1);
    printf("Digite a nota da segunda prova: ");
    scanf("%f", &n2);
    printf("Digite a nota da terceira prova: ");
    scanf("%f", &n3);
    printf("Digite a nota da quarta prova: ");
    scanf("%f", &n4);

    media = (n1 + n2 + n3 + n4)/4;

    if(media >= 7){

        printf("Aprovado! Sua nota foi de: %f", media);

    }else{
        printf("Digite a nota do exame: ");
        scanf("%f", &ex);

        mediaf = (media + ex)/2;

        if(mediaf >= 5){

                printf("Aprovado! Sua nota final foi de: %f", mediaf);

        }else {

            printf("Reprovado");
        }
    }


}
