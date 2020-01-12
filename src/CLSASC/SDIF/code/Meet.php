<?php

namespace CLSASC\SDIF\Code;

/**
 * MEET code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Meet {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '1':
        $this->type = 'Invitational';
        break;
      case '2':
        $this->type = 'Regional';
        break;
      case '3':
        $this->type = 'LSC Championship';
        break;
      case '4':
        $this->type = 'Zone';
        break;
      case '5':
        $this->type = 'Zone Championship';
        break;
      case '6':
        $this->type = 'National Championship';
        break;
      case '7':
        $this->type = 'Juniors';
        break;
      case '8':
        $this->type = 'Seniors';
        break;
      case '9':
        $this->type = 'Dual';
        break;
      case '0':
        $this->type = 'Time Trials';
        break;
      case 'A':
        $this->type = 'International';
        break;
      case 'B':
        $this->type = 'Open';
        break;
      case 'C':
        $this->type = 'League';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\MeetTypeNotFoundException();
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
   * @return string value, eg 'Invitational', 'Regional' etc
   */
  public function getValue() {
    return $this->type;
  }

}