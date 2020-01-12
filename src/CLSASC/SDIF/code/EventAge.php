<?php

namespace CLSASC\SDIF\Code;

/**
 * EVENT AGE CLASS code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class EventAge {

  private string $code;
  private string $lower;
  private string $upper;

  public function __construct(string $code) {

    if (\mb_strlen($code) != 2) {
      throw new \CLSASC\SDIF\Code\Exceptions\EventTimeClassInvalidException();
    }

    $this->code = $code;

    switch ($code[0] . $code[1]) {
      case 'UN':
        $this->lower = 'No lower limit';
        break;
      default:
        $this->lower = (int) $code[0] . $code[1];
        break;
    }

    switch ($code[2] . $code[3]) {
      case 'OV':
        $this->upper = 'No upper limit';
        break;
      default:
        $this->upper = (int) $code[2] . $code[3];
        break;
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
   * @return string value, eg 'No lower limit', '18' etc
   */
  public function getValue() {
    return 'Lower age limit: ' . $this->lower . ', Upper age limit: ' . $this->upper;
  }

  /**
   * Get the lower limit class
   *
   * @return string lower limit class
   */
  public function getLower() {
    return ((string) $this->lower);
  }

  /**
   * Get the upper limit class
   *
   * @return string upper limit class
   */
  public function getUpper() {
    return ((string) $this->upper);
  }

}