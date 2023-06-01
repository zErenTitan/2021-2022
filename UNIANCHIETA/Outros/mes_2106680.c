#include<stdio.h>
#include<locale.h>

int main(){

    setlocale(LC_ALL,"");
    int mes;

    printf("Digite um número entre 1 e 12: ");
    scanf("%i",&mes);

    if(mes == 1){

            printf("O número digitado corresponde ao mês de Janeiro.");

    }else if(mes == 2){

        printf("O número digitado corresponde ao mês de Fevereiro.");

    }else if(mes == 3){

        printf("O número digitado corresponde ao mês de Março.");

    }else if(mes == 4){

        printf("O número digitado corresponde ao mês de Abril.");

    }else if(mes == 5){

        printf("O número digitado corresponde ao mês de Maio.");

    }else if(mes == 6){

        printf("O número digitado corresponde ao mês de Junho.");

    }else if(mes == 7){

        printf("O número digitado corresponde ao mês de Julho.");

    }else if(mes == 8){

        printf("O número digitado corresponde ao mês de Agosto");

    }else if(mes == 9){

        printf("O número digitado corresponde ao mês de Setembro.");

    }else if(mes == 10){

        printf("O número digitado corresponde ao mês de Outubro");

    }else if(mes == 11){

        printf("O número digitado corresponde ao mês de Novembro");

    }else if (mes == 12){

        printf("O número digitado corresponde ao mês de Dezembro.");

    }else{

        printf("Digite um número válido.");

    }

}
