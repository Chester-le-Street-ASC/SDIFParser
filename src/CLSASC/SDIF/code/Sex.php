<?php

namespace CLSASC\SDIF\Code;

/**
 * SEX code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Sex {

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
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\SexNotFoundException();
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
   * @return string value, eg 'Male', 'Female'
   */
  public function getValue() {
    return $this->type;
  }

}