#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL,"");
    int qtd_pao, qtd_broa;
    float arrec, arrec_final;

    printf("Digite a quantidade de p�es vendidos hoje: ");
    scanf("%i",&qtd_pao);
    printf("Digite a quantidade de broas vendidas hoje: ");
    scanf("%i",&qtd_broa);

    arrec = qtd_pao * 0.12 + qtd_broa * 1.50;
    arrec_final = arrec*0.1;

    printf("Voc� arrecadou %.3f neste dia, por�m %.3f ser� o valor restante para guardar na poupan�a.", arrec, arrec_final);
}
