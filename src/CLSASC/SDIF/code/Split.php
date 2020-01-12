<?php

namespace CLSASC\SDIF\Code;

/**
 * SPLIT code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Split {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case 'C':
        $this->type = 'Cumulative splits supplied';
        break;
      case 'I':
        $this->type = 'Interval splits supplied';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\SplitTypeNotFoundException();
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
   * @return string value, eg 'Region 1', 'Region 2' etc
   */
  public function getValue() {
    return $this->type;
  }

}