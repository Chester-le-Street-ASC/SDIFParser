<?php

namespace CLSASC\SDIF\Code;

/**
 * SEASON code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Season {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '1':
        $this->type = 'Season 1';
        break;
      case '2':
        $this->type = 'Season 2';
        break;
      case 'N':
        $this->type = 'Year-round';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\SeasonTypeNotFoundException();
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
   * @return string value, eg 'Season 1', 'Year-round' etc
   */
  public function getValue() {
    return $this->type;
  }

}