<?php

namespace CLSASC\SDIF;

/**
 * Class to represent a B1 Meet Record.
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class B1 extends SDIFRecord {

  /**
   * Record stat fields
   */
  private $org;
  private string $meetName;
  private string $addr1;
  private string $addr2;
  private string $city;
  private string $state;
  private string $postCode;
  private string $country;
  private string $meetCode;
  private $meetStart;
  private $meetEnd;
  private int $altitude;
  private string $course;

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
    if ($recordType != 'B1') {
      throw new Exception();
    }

    // Event details
    $this->org = substr($record, 2, 1);
    $this->meetName = trim(substr($record, 11, 30));
    $this->addr1 = trim(substr($record, 41, 22));
    $this->addr2 = trim(substr($record, 63, 22));
    $this->city = trim(substr($record, 85, 20));
    $this->state = trim(substr($record, 105, 2));
    $this->postCode = trim(substr($record, 107, 10));
    $this->country = substr($record, 117, 3);
    $this->meetCode = substr($record, 120, 1);
    try {
      $this->meetStart = \DateTime::createFromFormat('mdY', substr($record, 121, 8));
    } catch (Exception $e) {
      $this->meetStart = new \DateTime('1970-01-01', new DateTimeZone('Europe/London'));
    }
    try {
      $this->meetEnd = \DateTime::createFromFormat('mdY', substr($record, 129, 8));
    } catch (Exception $e) {
      $this->meetEnd = new \DateTime('1970-01-01', new DateTimeZone('Europe/London'));
    }
    $this->altitude = (int) trim(substr($record, 138, 4));
    $this->course = trim(substr($record, 149, 1));
  }

  /**
   * Function the return the type of record
   *
   * @return string type
   */
  public function getType() {
    return 'B1';
  }

  /**
   * Get the meet name
   *
   * @return string name
   */
  public function getMeetName() {
    return $this->meetName;
  }

  /**
   * Get the meet location
   *
   * @return string meet location
   */
  public function getMeetCity() {
    return $this->city;
  }

  /**
   * Get start date
   *
   * @return DateTime start date
   */
  public function getMeetStartDate() {
    return $this->meetStart;
  }

  /**
   * Get start date as ISO string
   *
   * @return string start date
   */
  public function getMeetStartDateDB() {
    return ($this->meetStart->format("Y-m-d"));
  }

  /**
   * Get end date
   *
   * @return DateTime end date
   */
  public function getMeetEndDate() {
    return $this->meetEnd;
  }

  /**
   * Get end date as ISO string
   *
   * @return string end date
   */
  public function getMeetEndDateDB() {
    return ($this->meetEnd->format("Y-m-d"));
  }

  public function getCourse() {
    return $this->course;
  }

}