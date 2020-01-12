<?php

namespace CLSASC\SDIF\Code;

/**
 * ORG code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Org {

  private string $code;
  private string $org;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '1':
        $this->org = 'USS';
        break;
      case '2':
        $this->org = 'Masters';
        break;
      case '3':
        $this->org = 'NCAA';
        break;
      case '4':
        $this->org = 'NCAA Division 1';
        break;
      case '5':
        $this->org = 'NCAA Division 2';
        break;
      case '6':
        $this->org = 'NCAA Division 3';
        break;
      case '7':
        $this->org = 'YMCA';
        break;
      case '8':
        $this->org = 'FINA';
        break;
      case '9':
        $this->org = 'High School';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\OrgNotFoundException();
    }
  }

  /**
   * Function the return the value of the code
   *
   * @return string type
   */
  public function getCode() {
    return $this->code;
  }

  /**
   * Get the value returned when looking up the code
   *
   * @return string value, eg org name, committee code etc
   */
  public function getValue() {
    return $this->org;
  }

}