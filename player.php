<?php

class Player
{
  const VERSION = "FunkSoBrothers 0.9";

  public function betRequest($game_state)
  {
    //if ($game_state->round == 0) {
    //  return 10;
    //}
    //else
    //print_r ($game_state);
    //fwrite(STDERR, serialize($game_state));
    //file_put_contents('php://stderr', 'This text goes to STDERR');
    //file_put_contents('php://stderr', serialize($game_state));

    /*foreach ($game_state->players as $ply) {
      if (count($ply->hole_cards) > 0) {
        $iam = $ply;
      }
    }*/
    $inp = json_decode($game_state);
    
    $bet = max($inp->big_blind, $inp->pot + $inp->minimum_raise);
    
    file_put_contents('php://stderr', "RBS: BET " . $bet .  "\n");
    file_put_contents('php://stderr', "RBS: POT " . $inp->pot . "\n");
    file_put_contents('php://stderr', "RBS: MIN " . $inp->minimum_raise . "\n");

    return $bet;

  }

  public function showdown($game_state)
  {
  }
}
