#include<stdio.h>
#include<locale.h>
int main(){
    setlocale(LC_ALL,"");

    int numbers[7], total,i;

    printf("Digite 7 números para serem somados:\n");

    for(i=0;i<7; i++){

        scanf("%d",&numbers[i]);

        total = numbers[i] + total ;
    }

    printf("%d",total);

    return 0 ;
}

