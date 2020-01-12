<?php

namespace CLSASC\SDIF\Code;

/**
 * CITIZEN code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Citizen {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '2AL':
        $this->type = 'Dual: USA and other country';
        break;
      case 'FGN':
        $this->type = 'Foreign';
        break;
      default:
        // any other valid COUNTRY (004) CODE
        $this->type = 'GB or other national';
        break;
    }
  }

  /**
   * Function to return the value of the code
   *
   * @return string type
   */
  public function getCode() {
    return $this->code;
  }

  /**
   * Get the nationality
   *
   * @return string value, eg 'Briton, 'American', 'Dual: USA and other country' etc
   */
  public function getValue() {
    return $this->type;
  }

}