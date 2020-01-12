<?php

namespace CLSASC\SDIF\Code;

/**
 * EVENT SEX code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class EventSex {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case 'M':
        $this->type = 'Male';
        break;
      case 'F':
        $this->type = 'Female';
        break;
      case 'X':
        $this->type = 'Miixed';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\EventSexNotFoundException();
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
   * Get the event sex
   *
   * @return string value, eg 'Male', 'Female', 'Mixed'
   */
  public function getValue() {
    return $this->type;
  }

}