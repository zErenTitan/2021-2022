#include<stdio.h>
#include<locale.h>
#include<string.h>

int main(){
    setlocale(LC_ALL,"");
    int i,count;
    char text[30], a, e, iv , o, u;


    printf("Digite um texto de no máximo 30 caracteres:\n");
    gets(text);
    count = strlen(text);
    for(i=0;i<count;i++){
        if(tolower(text[i])=='a'||tolower(text[i])=='e'||tolower(text[i])=='i'||tolower(text[i])=='o'||tolower(text[i])=='u' ){

            text[i]= '?';
        }
        printf("%c",text[i]);
    }

    return 0 ;
}
