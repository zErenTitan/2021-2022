#include<stdio.h>
#include<locale.h>

int main(){

    setlocale(LC_ALL,"");
    int mes;

    printf("Digite um n�mero entre 1 e 12: ");
    scanf("%i",&mes);

    if(mes == 1){

            printf("O n�mero digitado corresponde ao m�s de Janeiro.");

    }else if(mes == 2){

        printf("O n�mero digitado corresponde ao m�s de Fevereiro.");

    }else if(mes == 3){

        printf("O n�mero digitado corresponde ao m�s de Mar�o.");

    }else if(mes == 4){

        printf("O n�mero digitado corresponde ao m�s de Abril.");

    }else if(mes == 5){

        printf("O n�mero digitado corresponde ao m�s de Maio.");

    }else if(mes == 6){

        printf("O n�mero digitado corresponde ao m�s de Junho.");

    }else if(mes == 7){

        printf("O n�mero digitado corresponde ao m�s de Julho.");

    }else if(mes == 8){

        printf("O n�mero digitado corresponde ao m�s de Agosto");

    }else if(mes == 9){

        printf("O n�mero digitado corresponde ao m�s de Setembro.");

    }else if(mes == 10){

        printf("O n�mero digitado corresponde ao m�s de Outubro");

    }else if(mes == 11){

        printf("O n�mero digitado corresponde ao m�s de Novembro");

    }else if (mes == 12){

        printf("O n�mero digitado corresponde ao m�s de Dezembro.");

    }else{

        printf("Digite um n�mero v�lido.");

    }

}
