<?php
   
// Função para jogar

function jogar(&$vitorias, &$derrotas, &$empates){

   $opcoes = ["pedra", "papel", "tesoura"];
   
   //entrada
   echo "Escolha uma jogada: pedra, papel ou tesoura\n
   (digite 'sair' para encerrar)";

   $escolhaPlayer = strtolower(trim(fgets(STDIN)));

   //verifica se o jogador quer sair

   if($escolhaPlayer === 'sair'){

      return false;
   }

   //verifica a entrada

   if(!in_array($escolhaPlayer,$opcoes)){

      echo "Escolha inválida!";
      echo '<br>';
      echo "Escolha pedra, papel ou tesoura";
      return;
   }
   
   // escolha da maquina (random)

   $escolhaMaquina = $opcoes[array_rand($opcoes)];

   echo "Você escolheu: $escolhaPlayer\n";
   echo "A maquina escolheu: $escolhaMaquina\n";

   // determina vencedor
   if($escolhaPlayer === $escolhaMaquina){

      echo "Empate!!\n";
      $empates++; // incrementa o contatdor de empates

   }elseif(

      ($escolhaPlayer === "pedra" && $escolhaMaquina === "tesoura")||
      ($escolhaPlayer === "tesoura" && $escolhaMaquina === "papel")||
      ($escolhaPlayer === "papel" && $escolhaMaquina === "pedra")

   ) {

      echo "Você Venceu!\n";
      $vitorias++; // incrementa o contatdor de vitorias

   }else{

      echo "Você perdeu :( \n";
      $derrotas++; // incrementa o contatdor de derrotas

   }

   return true; //continua o loop
}
   // contadores
   $vitorias = 0;
   $derrotas = 0;
   $empates = 0;

   //loop principal para as rodadas
   while(true){
      if(!jogar($vitorias, $derrotas, $empates)){
         break; // sai do loop se o jogador digitar 'sair'
      }
   }

   //placar da partida

   echo "\n--- Placar ---\n";
   echo "Vitorias: $vitorias\n";
   echo "Derrotas: $derrotas\n";
   echo "Empates: $empates\n";
   echo "--------------------"

   ?>


  