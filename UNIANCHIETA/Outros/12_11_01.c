#include <stdio.h>
#include <locale.h>
typedef struct {
    int ra;
    float nota;

}aluno;
aluno ra_nota(){
    aluno gravar;
    int ra_num=0;
    printf("Digite o número do RA:\n");
    scanf("%i",&gravar.ra);
    int nota_aluno = 0;
    printf("Digite a nota do aluno:\n");
    scanf("%f",&gravar.nota);
    return gravar;


}
aluno buscar_aluno(aluno v[],int ra_busc){
  aluno davez;
    int i=0;
    for (i=0;i<1;i++){
        if(v[i].ra == ra_busc){
                davez=  v[i];
             return davez;

        }



      }

}

int main(){
    setlocale(LC_ALL,"");
    aluno turma[15],aluno_busc;
    int i;
    int busc_ra=0;

    for(i=0;i<1;i++){
       turma[i]= ra_nota();

    printf("Digite o número do RA par buscar a nota do aluno:\n");
    scanf("%i",&busc_ra);
    aluno_busc = buscar_aluno(turma,busc_ra);
    printf("%f", aluno_busc.nota);



    }




}
