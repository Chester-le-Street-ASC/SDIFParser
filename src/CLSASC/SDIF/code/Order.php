<?php

namespace CLSASC\SDIF\Code;

/**
 * ORDER code class for relay leg order
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Order {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '0':
        $this->type = 'Not on team for this swim';
        break;
      case '1':
        $this->type = 'First leg';
        break;
      case '2':
        $this->type = 'Second leg';
        break;
      case '3':
        $this->type = 'Third leg';
        break;
      case '4':
        $this->type = 'Fourth leg';
        break;
      case 'A':
        $this->type = 'Alternate';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\OrderCodeInvalidException();
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
   * @return string value, eg 'First leg', 'Not on team for this swim', 'Alternate' etc
   */
  public function getValue() {
    return $this->type;
  }

}