<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
partite con questo schema, tenendo conto che il punteggio potrebbe non
essere disponibile
Olimpia Milano - Cantù | 55-60 -->
<?php

$giornataDiCampionato = [
  [
    "casa" => "Eraclea",
    "ospite"=> "jesolo-S.Donà",
    "puntiCasa"=> 86,
    "puntiOspiti"=> 60,
  ],
  [
    "casa" => "Treviso",
    "ospite"=> "Benetton",
    "puntiCasa"=> 100,
    "puntiOspiti"=> 97,
  ],
  [
    "casa" => "Caorle",
    "ospite"=> "Torre di Mosto",
    "puntiCasa"=> 102,
    "puntiOspiti"=> 75,
  ],
  [
    "casa" => "Cavallino",
    "ospite"=> "Marghera",
  ],


]


?>


<?php
foreach ($giornataDiCampionato as $partita) {
?>
<?php
?>
<li>
  <?php echo $partita["casa"]; ?>
  -
  <?php echo $partita["ospite"]; ?>

  |

  <?php if(
      !empty($partita["puntiCasa"]) &&
      !empty($partita["puntiOspiti"])){
        ?>
       <?php echo $partita["puntiCasa"]; ?>
       -
       <?php echo $partita["puntiOspiti"];
     }
     else{
       ?>
       Partita mancante
       <?php
     }?>
   </li>
<?php
}

?>
