<?php

namespace CLSASC\SDIF\Code;

/**
 * MEMBER TRANSACTION code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class MemberTransaction {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case 'R':
        $this->type = 'Renew';
        break;
      case 'N':
        $this->type = 'New';
        break;
      case 'C':
        $this->type = 'Change';
        break;
      case 'D':
        $this->type = 'Delete';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\MemberTransactionTypeNotFoundException();
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
   * @return string value, eg 'Renew', 'Change' etc
   */
  public function getValue() {
    return $this->type;
  }

}