<?php

class Player
{
  const VERSION = "FunkSoBrothers Kick 'em out 0.9.2";

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
    $iam = $game_state['players'][$game_state['in_action']];
    
    $bet = min($iam['stack'], max($game_state['big_blind'], $game_state['pot'] + $game_state['minimum_raise']));
    
    file_put_contents('php://stderr', "RBS: BET " . $bet .  "\n");

    return $bet;

  }

  public function showdown($game_state)
  {
  }
}
