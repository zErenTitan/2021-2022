#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL,"");
    int qtd_pao, qtd_broa;
    float arrec, arrec_final;

    printf("Digite a quantidade de pães vendidos hoje: ");
    scanf("%i",&qtd_pao);
    printf("Digite a quantidade de broas vendidas hoje: ");
    scanf("%i",&qtd_broa);

    arrec = qtd_pao * 0.12 + qtd_broa * 1.50;
    arrec_final = arrec*0.1;

    printf("Você arrecadou %.3f neste dia, porém %.3f será o valor restante para guardar na poupança.", arrec, arrec_final);
}
