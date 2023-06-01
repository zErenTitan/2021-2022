#include <stdio.h>
#include <locale.h>
#define QTD 24

int main (){
    setlocale(LC_ALL,"");
   int menor_number=0;
    float voyager[4][24];
    int i,u,menor_temp1_u=0,menor_temp2_u=0,menor_temp3_u=0,menor_temp4_u=0;
    float media_temp1,media_temp2,media_temp3,media_temp4,menor_temp1=0,menor_temp2=0,menor_temp3=0,menor_temp4=0;
    for (i=0;i<4;i++){
        printf("Digite as temperaturas do tripulante da cápsula %i.",i+1);
        for (u=0;u<QTD;u++){
            printf("\nTemperatura %i:",u+1);
            scanf("%f",&voyager[i][u]);

            if(i==0){
                media_temp1 += voyager[i][u];
                if (menor_temp1 == 0){
                     menor_temp1 = voyager[i][u];
                     menor_temp1_u = u;
                }else if(menor_temp1<voyager[i][u]){
                    menor_temp1 = menor_temp1;
                    menor_temp1_u = menor_temp1_u;
                }else{
                    menor_temp1 = voyager[i][u];
                    menor_temp1_u = u;
                }
            }else if(i==1){
                media_temp2 += voyager[i][u];
                 if (menor_temp2 == 0){
                     menor_temp2 = voyager[i][u];
                     menor_temp2_u = u;
                }else if(menor_temp2<voyager[i][u]){
                    menor_temp2 = menor_temp2;
                    menor_temp2_u = menor_temp2_u;
                }else{
                    menor_temp2 = voyager[i][u];
                    menor_temp2_u = u;
                }
            }else if(i==2){
                media_temp3 += voyager[i][u];
                if (menor_temp3 == 0){
                     menor_temp3 = voyager[i][u];
                     menor_temp3_u = u;
                }else if(menor_temp3<voyager[i][u]){
                    menor_temp3 =menor_temp3;
                    menor_temp3_u = menor_temp3_u;
                }else{
                    menor_temp3 = voyager[i][u];
                    menor_temp3_u = u;
                }
            }else{
                media_temp4 += voyager[i][u];

               if (menor_temp4 == 0){
                     menor_temp4 = voyager[i][u];
                     menor_temp4_u = u;
                }else if(menor_temp4<voyager[i][u]){
                    menor_temp4 = menor_temp4;
                    menor_temp4_u = menor_temp4_u;
                }else{
                    menor_temp4 = voyager[i][u];
                    menor_temp4_u = u;
                }
            }



        }



    }
    media_temp1 = media_temp1/QTD;
    media_temp2= media_temp2/QTD;
    media_temp3= media_temp3/QTD;
    media_temp4 = media_temp4/QTD;
    printf("\nMédia das temperaturas do 1 tripulante é: %.2f\n",media_temp1);
    printf("Média das temperaturas do 2 tripulante é: %.2f\n",media_temp2);
    printf("Média das temperaturas do 3 tripulante é: %.2f\n",media_temp3);
    printf("Média das temperaturas do 4 tripulante é: %.2f\n",media_temp4);

    if(media_temp1<media_temp2 && media_temp1<media_temp3 && media_temp1<media_temp4){

        printf("A menor temperatura média foi %.2f",media_temp1);
    }else if(media_temp2<media_temp1 && media_temp2<media_temp3 && media_temp2<media_temp4){
        printf("A menor temperatura média foi de %.2f",media_temp2);
    }else if(media_temp3<media_temp1 && media_temp3<media_temp2 && media_temp3<media_temp4){
        printf("A menor temperatura média foi de %.2f",media_temp3);
    }else{
        printf("A menor temperatura media foi de %.2f", media_temp4);
    }




    if( (menor_temp1<menor_temp2) && (menor_temp1<menor_temp3) && (menor_temp1<menor_temp4) ){

        printf("\nA menor temperatura foi %.2f na capsula 1, posição %i",menor_temp1,menor_temp1_u+1);

    }else if((menor_temp2<menor_temp1) && (menor_temp2<menor_temp3) && (menor_temp2<menor_temp4)){

        printf("\nA menor temperatura foi %.2f na capsula 2, posição %i",menor_temp2,menor_temp2_u+1);

    }else if( (menor_temp3<menor_temp1) && (menor_temp3<media_temp2)  && (menor_temp3<menor_temp4)){


        printf("\nA menor temperatura foi %.2f na capsula 3, posição %i",menor_temp3,menor_temp3_u+1);



    }else{

        printf("\nA menor temperatura foi %.2f na capsula 4, posição %.i",menor_temp4,menor_temp4_u+1);

    }


}
