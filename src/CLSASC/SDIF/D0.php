<?php

namespace CLSASC\SDIF;

/**
 * Class to represent a D0 Individual Event Record.
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class D0 extends SDIFRecord {

  /**
   * Record stat fields
   */
  private $org;
  private string $swimmerName;
  private string $swimmerNumber;
  private string $attach;
  private string $citizen;
  private $dateOfBirth;
  private string $ageClass;
  private string $sex;
  private string $eventSex;
  private int $eventDistance;
  private string $stroke;
  private string $eventAge;
  private $dateOfSwim;

  /**
   * Times and stuff
   */
  private string $seedTime;
  private string $seedCourse;

  private string $prelimTime;
  private string $prelimCourse;
  private int $prelimHeat;
  private int $prelimLane;
  private int $prelimPlaceRank;

  private string $swimOffTime;
  private string $swimOffCourse;

  private string $finalsTime;
  private string $finalsCourse;
  private int $finalsHeat;
  private int $finalsLane;
  private int $finalsPlaceRank;

  private $pointsFromFinals;
  private string $eventTimeClass;
  private string $flightStatus;

  /**
   * Constructor
   */
  public function __construct() {
    // Do nothing
  }

  /**
   * Create record from text line
   *
   * @param string $record
   * @return void
   */
  public function createFromLine(string $record) {
    $recordType = substr($record, 0, 2);
    if ($recordType != 'D0') {
      throw new Exception();
    }

    // Event details
    $this->org = substr($record, 2, 1);
    $this->swimmerName = trim(substr($record, 11, 28));
    $this->swimmerNumber = trim(substr($record, 39, 12));
    $this->attach = substr($record, 51, 1);
    $this->citizen = substr($record, 52, 3);
    $this->dateOfBirth = \DateTime::createFromFormat('mdY', substr($record, 55, 8));
    $this->ageClass = substr($record, 63, 2);
    $this->sex = substr($record, 65, 1);
    $this->eventSex = substr($record, 66, 1);
    $this->eventDistance = (int) trim(substr($record, 67, 4));
    $this->stroke = substr($record, 71, 1);
    $this->eventAge = substr($record, 76, 4);
    $this->dateOfSwim = \DateTime::createFromFormat('mdY', substr($record, 80, 8));

    // Time stuff
    $this->seedTime = trim(substr($record, 88, 8));
    $this->seedCourse = trim(substr($record, 96, 1));

    $this->prelimTime = trim(substr($record, 97, 8));
    $this->prelimCourse = trim(substr($record, 105, 1));
    $this->prelimHeat = (int) trim(substr($record, 124, 2));
    $this->prelimLane = (int) trim(substr($record, 126, 2));
    $this->prelimPlaceRank = (int) trim(substr($record, 132, 3));

    $this->swimOffTime = trim(substr($record, 106, 8));
    $this->swimOffCourse = trim(substr($record, 114, 1));

    $this->finalsTime = trim(substr($record, 115, 8));
    $this->finalsCourse = trim(substr($record, 123, 1));
    $this->prelimHeat = (int) trim(substr($record, 128, 2));
    $this->prelimLane = (int) trim(substr($record, 130, 2));
    $this->prelimPlaceRank = (int) trim(substr($record, 135, 3));

    // Other details
    $this->eventTimeClass = trim(substr($record, 142, 2));
    $this->flightStatus = trim(substr($record, 144, 1));
  }

  /**
   * Function the return the type of record
   *
   * @return string type
   */
  public function getType() {
    return 'D0';
  }

  /**
   * Get swimmer number
   *
   * @return void
   */
  public function getSwimmerNumber() {
    return $this->swimmerNumber;
  }

  /**
   * Get date of birth
   *
   * @return DateTime date of birth
   */
  public function getDateOfBirth() {
    return $this->dateOfBirth;
  }

  /**
   * Get date of birth as ISO string
   *
   * @return string date of birth
   */
  public function getDateOfBirthDB() {
    return ($this->dateOfBirth->format("Y-m-d"));
  }

  /**
   * Undocumented function
   *
   * @return DateTime date of swim
   */
  public function getDateOfSwim() {
    return $this->dateOfSwim;
  }

  /**
   * Get date of swim as ISO string
   *
   * @return string date of swim
   */
  public function getDateOfSwimDB() {
    return ($this->dateOfSwim->format("Y-m-d"));
  }

}