#include<stdio.h>
#include<locale.h>
int main(){
   float  matriz[3][3], maior, menor=0;
   int lin, col;

   for(lin=0;lin<3;lin++){
        for(col=0;col<3;col++){

            printf("Digite o valor da linha %f , coluna %f\n",lin,col);
            scanf("%f",&matriz[lin][col]);

            if(matriz[lin][col]>maior){

                maior = matriz[lin][col];
            }
            if(menor == 0){
                 menor = matriz[lin][col];
            }

            if(matriz[lin][col]<menor){

                menor = matriz[lin][col];
            }

        }


   }
   printf("Maior: %f \n Menor: %f",maior, menor);


    return 0;
}
