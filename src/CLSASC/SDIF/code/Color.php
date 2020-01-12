<?php

namespace CLSASC\SDIF\Code;

/**
 * COLOR code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Color {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case 'GOLD':
        $this->type = 'Gold';
        break;
      case 'SILV':
        $this->type = 'Silver';
        break;
      case 'BRNZ':
        $this->type = 'Bronze';
        break;
      case 'BLUE':
        $this->type = 'Blue';
        break;
      case 'RED ':
        $this->type = 'Red';
        break;
      case 'WHIT':
        $this->type = 'White';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\ColorTypeNotFoundException();
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