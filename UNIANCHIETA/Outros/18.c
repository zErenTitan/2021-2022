#include<stdio.h>
#include<locale.h>

int main(){
    setlocale(LC_ALL, "");

    float num1, num2, num3;

    printf("Digite o primeiro n�mero: ");
    scanf("%f",&num1);
    printf("Digite o segundo n�mero: ");
    scanf("%f",&num2);
    printf("Digite o terceiro n�mero: ");
    scanf("%f",&num3);

    if (num1>num2 && num1>num3 && num2>num3){

        printf("%f > %f > %f ",  num1, num2 , num3);

    }else if(num1>num2 && num1>num3 && num3>num2){

        printf("%f > %f > %f ",  num1, num3 , num2);

    }else if(num2>num1 && num2> num3 && num1>num3){

        printf("%f > %f > %f ",  num2, num1 , num3);

    }else if(num2>num1 && num2> num3 && num3>num1){

        printf("%f > %f > %f ",  num2, num3 , num1);

    }else if(num3>num2 && num3>num1 && num2>num1){

        printf("%f > %f > %f ",  num3, num2 , num1);

    }else if(num3>num2 && num3>num1 && num1>num2){

        printf("%f > %f > %f ",  num3, num1 , num2);

    }else if( num1 == num2 && num3 ==num1){

         printf("%f = %f = %f ",  num1, num2 , num3);

    }else if(num1== num2 && num3 >num1){

         printf("%f = %f < %f ",  num2, num1 , num3);

    }else if(num1 ==2 && num1> num3){

       printf("%f = %f > %f ",  num2, num1 , num3);

    }else if (num2 == num3 && num1>num3){

           printf("%f = %f < %f ",  num2, num3 , num1);

    }else if (num2 == num3 && num3>num1){

           printf("%f = %f > %f ",  num2, num1 , num3);

    }else if(num3 == num1 && num2>num1){

           printf("%f = %f < %f ",  num3, num1 , num2);

    }else{

        printf("%f = %f > %f ",  num3, num1 , num2);

    }

    return 0 ;


}
