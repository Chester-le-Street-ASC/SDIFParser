<?php

namespace CLSASC\SDIF\Code;

/**
 * EVENT TIME CLASS code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class EventTimeClass {

  private string $code;
  private string $lower;
  private string $upper;

  public function __construct(string $code) {

    if (\mb_strlen($code) != 2) {
      throw new \CLSASC\SDIF\Code\Exceptions\EventTimeClassInvalidException();
    }

    $this->code = $code;

    switch ($code[0]) {
      case 'U':
        $this->lower = 'No lower limit';
        break;
      case '1':
        $this->lower = 'Novice times';
        break;
      case '2':
        $this->lower = 'B standard times';
        break;
      case 'P':
        $this->lower = 'BB standard times';
        break;
      case '3':
        $this->lower = 'A standard times';
        break;
      case '4':
        $this->lower = 'AA standard times';
        break;
      case '5':
        $this->lower = 'AAA standard times';
        break;
      case '6':
        $this->lower = 'AAAA standard times';
        break;
      case 'J':
        $this->lower = 'Junior standard times';
        break;
      case 'S':
        $this->lower = 'Senior standard times';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\EventTimeClassInvalidException();
    }

    switch ($code[1]) {
      case 'O':
        $this->upper = 'No upper limit';
        break;
      case '1':
        $this->upper = 'Novice times';
        break;
      case '2':
        $this->upper = 'B standard times';
        break;
      case 'P':
        $this->upper = 'BB standard times';
        break;
      case '3':
        $this->upper = 'A standard times';
        break;
      case '4':
        $this->upper = 'AA standard times';
        break;
      case '5':
        $this->upper = 'AAA standard times';
        break;
      case '6':
        $this->upper = 'AAAA standard times';
        break;
      case 'J':
        $this->upper = 'Junior standard times';
        break;
      case 'S':
        $this->upper = 'Senior standard times';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\EventTimeClassInvalidException();
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
    return 'Lower limit: ' . $this->lower . ', Upper limit: ' . $this->upper;
  }

  /**
   * Get the lower limit class
   *
   * @return string lower limit class
   */
  public function getLower() {
    return $this->lower;
  }

  /**
   * Get the upper limit class
   *
   * @return string upper limit class
   */
  public function getUpper() {
    return $this->upper;
  }

}