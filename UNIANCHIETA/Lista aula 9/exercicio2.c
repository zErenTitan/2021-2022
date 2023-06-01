#include<stdio.h>
#include<locale.h>
int main(){
    setlocale(LC_ALL,"");
    int matriz[4][3], row, col, num, fim[12], final_r[12], final_c[12], i=0;

    for(row=0;row<4;row++){
        for(col=0;col<3;col++){
            printf("Digite o número da linha %i , coluna %i:\n",row+1,col+1);
            scanf("%i",&matriz[row][col]);

                num = matriz[row][col];

                if(num%2 == 1){

                    fim[i]= num;
                    final_r[i]=row;
                    final_c[i]=col;
                    i++;
                }

        }


    }

    while(i>0){
        printf("O número %i é impar e se encontra na linha %i, coluna %i\n", fim[i], final_r[i]+1, final_c[i]+1);

        i--;
    }

}

