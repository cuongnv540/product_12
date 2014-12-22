<?php

/**
 * bet actions.
 *
 * @package    betyolo
 * @subpackage bet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class betActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->betyolo_bets = Doctrine_Core::getTable('BetyoloBet')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->betyolo_bet = Doctrine_Core::getTable('BetyoloBet')->find(array($request->getParameter('id')));

    $this->forward404Unless($this->betyolo_bet);
  }

}
