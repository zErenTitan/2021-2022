#include<stdio.h>
#include<locale.h>
int main(){
    setlocale(LC_ALL,"");

    float VHRA, NH, DESC, SB, SL;

    printf("Digite o valor da hora aula: ");
    scanf("%f", &VHRA);

    printf("Digite o n�mero de hotas trabalhadas: ");
    scanf("%f", &NH);

    printf("Digite a porcentagem de desconto INSS: ");
    scanf("%f",&DESC);

    SB = VHRA * NH;
    SL = SB - SB * DESC /100;

    printf("O valor do sal�rio l�quido �: %f", SL);

    return 0;

}
