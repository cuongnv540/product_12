<?php

/**
 * bet module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage bet
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBetGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'betyolo_bet' : 'betyolo_bet_'.$action;
  }
}
