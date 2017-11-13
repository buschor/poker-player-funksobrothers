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
        return $game_state->current_buy_in + 1;
    }

    public function showdown($game_state)
    {
    }
}
