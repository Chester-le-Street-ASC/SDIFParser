<?php

namespace CLSASC\SDIF\Code;

/**
 * TEAM code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Team {

  private int $code;

  public function __construct(string $code) {
    if (mb_strlen($code) != 6) {
      throw new \CLSASC\SDIF\Code\Exceptions\TeamTypeInvalidException();
    }

    $this->code = $code;
  }

  /**
   * Function to return the team code
   *
   * @return string code
   */
  public function getCode() {
    return $this->code;
  }

  /**
   * Function to return the team code
   *
   * @return string code
   */
  public function getValue() {
    return $this->code;
  }

}