<?php

namespace CLSASC\SDIF\Code;

/**
 * PRELIM/FINAL code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class PrelimFinal {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case 'P':
        $this->type = 'Prelims';
        break;
      case 'F':
        $this->type = 'Finals';
        break;
      case 'S':
        $this->type = 'Swim-offs';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\PrelimFinalCodeInvalidException();
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
   * @return string value, eg 'Prelims', 'Finals' etc
   */
  public function getValue() {
    return $this->type;
  }

}