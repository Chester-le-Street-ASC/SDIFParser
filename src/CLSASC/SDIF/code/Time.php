<?php

namespace CLSASC\SDIF\Code;

/**
 * TIME description code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Time {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case 'NT':
        $this->type = 'No Time';
        break;
      case 'NS':
        $this->type = 'No Swim/No Show';
        break;
      case 'DNF':
        $this->type = 'Did Not Finish';
        break;
      case 'DQ':
        $this->type = 'Disqualified';
        break;
      case 'SCR':
        $this->type = 'Scratch';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\TimeDescriptionInvalidException();
    }
  }

  /**
   * Function to return the value of the code
   *
   * @return int type
   */
  public function getCode() {
    return $this->code;
  }

  /**
   * Get the value returned when looking up the code
   *
   * @return string value, eg 'Gold', 'Silver' etc
   */
  public function getValue() {
    return $this->type;
  }

}