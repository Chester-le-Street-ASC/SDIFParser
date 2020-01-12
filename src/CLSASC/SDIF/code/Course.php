<?php

namespace CLSASC\SDIF\Code;

/**
 * COURSE code class
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class Course {

  private string $code;
  private string $type;

  public function __construct(string $code) {

    $this->code = $code;

    switch ($code) {
      case '1':
      case 'S':
        $this->type = 'Short Course Metres';
        break;
      case '2':
      case 'Y':
        $this->type = 'Short Course Yards';
        break;
      case '3':
      case 'L':
        $this->type = 'Long Course Metres';
        break;
      case 'X':
        $this->type = 'Disqualified';
        break;
      default:
        throw new \CLSASC\SDIF\Code\Exceptions\CourseNotFoundException();
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
   * Get the course
   *
   * @return string value, eg 'Short Course Metres', 'Short Course Yards'
   */
  public function getValue() {
    return $this->type;
  }

}