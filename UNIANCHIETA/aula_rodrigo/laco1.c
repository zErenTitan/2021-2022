#include<stdio.h>
#include<locale.h>

int main(){

    float x1,x2,x3, temp,temp2,temp3;

        printf("Digite o primeiro n�mero: ");
        scanf("%f",&x1);
        printf("Digite o segundo n�mero: ");
        scanf("%f",&x2);
        printf("Digite o terceiro n�mero: ");
        scanf("%f",&x3);
        temp=x1+x2+x3;


        for(temp3= temp+3;temp<=temp3;temp++){

            if(temp-x1-x2 == x3){
                printf("O maior n�mero �: %f",x3);
            }else if(temp-x2-x3 == x1){
                printf("O maior n�mero �: %f",x1);

            }else{

                printf("O maior n�mero �: %f",x2);
            }


        }


return 0;
}
