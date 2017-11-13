<?php

class Player
{
  const VERSION = "FunkSoBrothers Kick 'em out 0.9.5";

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
    
    $rank1 = $iam['hole_cards'][0]['rank'];
    $rank2 = $iam['hole_cards'][1]['rank'];
    
    //if (($iam['hole_cards'][0]['rank'] == "A") || ($iam['hole_cards'][1]['rank'] == "A"))
    if ((($rank1 == "A") || ($rank1 == "K") || ($rank1 == "Q") || ($rank1 == "J") || ($rank1 == "10")) &&
        (($rank2 == "A") || ($rank2 == "K") || ($rank2 == "Q") || ($rank2 == "J") || ($rank2 == "10"))) 
      $bet = min($iam['stack'], max($game_state['big_blind'], $game_state['pot'] + $game_state['minimum_raise']));
    else
      $bet = 0;
    
    file_put_contents('php://stderr', "RBS: BET " . $bet .  "\n");

    return $bet;

  }

  public function showdown($game_state)
  {
  }
}

?>