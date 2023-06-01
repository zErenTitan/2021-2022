#include<stdio.h>
#include<locale.h>

int main(){

    setlocale(LC_ALL,"");

    float  pesoF, pesoT, MERC=0.37, VEN=0.88, MART= 0.38, JUPT=2.64, SAT=1.15, URAN=1.17;
    int escolha;

    printf("Digite 1 para Mecúrio, 2 para Vênus, 3 para Marte, 4 para Júpter, 5 para Saturno e 6 para Urano: ");
    scanf("%i", &escolha);


    if(escolha<7){

        printf("Digite o seu peso na Terra: ");
        scanf("%f",&pesoT);

        if(escolha == 1){

            pesoF = pesoT * MERC;
            printf("Seu peso neste planeta é: %f", pesoF);

        }else if(escolha == 2){

            pesoF = pesoT * VEN;
            printf("Seu peso neste planeta é: %f", pesoF);

        }else if(escolha == 3){

            pesoF = pesoT * MART;
            printf("Seu peso neste planeta é: %f", pesoF);

        }else if(escolha == 4){

            pesoF = pesoT * JUPT;
            printf("Seu peso neste planeta é: %f", pesoF);

        }else if(escolha == 5){

            pesoF = pesoT * SAT;
            printf("Seu peso neste planeta é: %f", pesoF);

        }else if(escolha == 6){

            pesoF = pesoT * URAN;
            printf("Seu peso neste planeta é: %f", pesoF);

        }else if(escolha == 7){

            pesoF = pesoT * URAN;
            printf("Seu peso neste planeta é: %f", pesoF);

        }
    }else{
        printf("Digite um número válido.");
    }


    return 0;

}
