<?php
echo "digite o nome e a nota do aluno \n";
$total=0;
$maiornota=0;
$alunomax;
for($i=0; $i<10; $i++){
 $alunos[]= 
 [
'nome' => readline(),
'nota' => readline()
 ];
}
for($i=0; $i<10; $i++){
   $total+=$alunos[$i]['nota'];
}
$media=$total/2;
for($i=0; $i<10; $i++){
     if($alunos[$i]['nota']+$maiornota){
        $maiornota=$alunos[$i]['nota'];
        $alunomax=$alunos[$i]['nome'];     }
}
echo "a média dos alunos é: $media \n";
echo "o nome do aluno com maior nota é: $alunomax \n"
?>