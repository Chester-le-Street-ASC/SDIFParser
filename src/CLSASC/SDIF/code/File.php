<?php

namespace CLSASC\SDIF\Code;

/**
 * FILE code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class File {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '01':
        $this->type = 'Meet Registrations';
        break;
      case '02':
        $this->type = 'Meet Results';
        break;
      case '03':
        $this->type = 'OVC';
        break;
      case '04':
        $this->type = 'National Age Group Record';
        break;
      case '05':
        $this->type = 'LSC Age Group Record';
        break;
      case '06':
        $this->type = 'LSC Motivational List';
        break;
      case '07':
        $this->type = 'National Records and Rankings';
        break;
      case '08':
        $this->type = 'Team Selection';
        break;
      case '09':
        $this->type = 'LSC Best Times';
        break;
      case '10':
        $this->type = 'USS Registration';
        break;
      case '16':
        $this->type = 'Top 16';
        break;
      case '20':
        $this->type = 'Vendor-defined code';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\FileTypeNotFoundException();
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
   * Get the value returned when looking up the code
   *
   * @return string value, eg 'Meet Registrations', 'Meet Results' etc
   */
  public function getValue() {
    return $this->type;
  }

}