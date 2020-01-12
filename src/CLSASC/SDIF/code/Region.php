<?php

namespace CLSASC\SDIF\Code;

/**
 * REGION code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Region {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '1':
        $this->type = 'Region 1';
        break;
      case '2':
        $this->type = 'Region 2';
        break;
      case '3':
        $this->type = 'Region 3';
        break;
      case '4':
        $this->type = 'Region 4';
        break;
      case '5':
        $this->type = 'Region 5';
        break;
      case '6':
        $this->type = 'Region 6';
        break;
      case '7':
        $this->type = 'Region 7';
        break;
      case '8':
        $this->type = 'Region 8';
        break;
      case '9':
        $this->type = 'Region 9';
        break;
      case 'A':
        $this->type = 'Region 10';
        break;
      case 'B':
        $this->type = 'Region 11';
        break;
      case 'C':
        $this->type = 'Region 12';
        break;
      case 'D':
        $this->type = 'Region 13';
        break;
      case 'E':
        $this->type = 'Region 14';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\RegionTypeNotFoundException();
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
    return $this->type;
  }

}