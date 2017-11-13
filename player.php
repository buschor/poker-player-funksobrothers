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
    
  
    foreach ($game_state->players as $ply) {
      if (count($ply->hole_cards) > 0) {
        $iam = $ply;
      }
    }
    fwrite(STDERR, serialize($game_state));
    
    return 200 //$game_state->current_buy_in + 1;
    
  }

  public function showdown($game_state)
  {
  }
}
