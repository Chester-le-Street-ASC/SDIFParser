<?php

namespace CLSASC\SDIF\Code;

/**
 * STROKE code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Stroke {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '1':
        $this->type = 'Freestyle';
        break;
      case '2':
        $this->type = 'Backstroke';
        break;
      case '3':
        $this->type = 'Breaststroke';
        break;
      case '4':
        $this->type = 'Butterfly';
        break;
      case '5':
        $this->type = 'Individual Medley';
        break;
      case '6':
        $this->type = 'Freestyle Relay';
        break;
      case '7':
        $this->type = 'Medley Relay';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\StrokeNotFoundException();
    }
  }

  /**
   * Function the return the value of the code
   *
   * @return int type
   */
  public function getCode() {
    return $this->code;
  }

  /**
   * Get the stroke
   *
   * @return string value, eg 'Freestyle', 'Female'
   */
  public function getValue() {
    return $this->type;
  }

}