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
    file_put_contents('php://stderr', 'This text goes to STDERR');

    /*foreach ($game_state->players as $ply) {
      if (count($ply->hole_cards) > 0) {
        $iam = $ply;
      }
    }*/

    return 200; //$game_state->current_buy_in + 1;

  }

  public function showdown($game_state)
  {
  }
}
