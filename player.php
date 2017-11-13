<?php

class Player
{
  const VERSION = "FunkSoBrothers 0.9.1";

  public function betRequest($game_state)
  {
    //if ($game_state->round == 0) {
    //  return 10;
    //}
    //else
    //file_put_contents('php://stderr', $game_state);

    /*foreach ($game_state['players'] as $ply) {
      if (count($ply['hole_cards']) > 0) {
        $iam = $ply;
      }
    }*/
    
    $bet = max($game_state['big_blind'], $game_state['pot'] + $game_state['minimum_raise']);
    
    file_put_contents('php://stderr', "RBS: BET " . $bet .  "\n");
    //file_put_contents('php://stderr', "RBS: POT " . $inp->pot . "\n");
    //file_put_contents('php://stderr', "RBS: MIN " . $inp->minimum_raise . "\n");

    return $bet;

  }

  public function showdown($game_state)
  {
  }
}
