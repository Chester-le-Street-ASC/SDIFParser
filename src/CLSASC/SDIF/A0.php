<?php

namespace CLSASC\SDIF;

/**
 * Class to represent an A0 File Description Record.
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
class A0 extends SDIFRecord {

  /**
   * Record fields
   */
  private $org;
  private $file;
  private string $softwareName;
  private string $softwareVersion;
  private string $contactName;
  private string $phone;
  private $date;
  private $submittedByLSC; // Not for GB use

  public function __construct() {
    
  }

  /**
   * Function the return the type of record
   *
   * @return string type
   */
  public function getType() {
    return 'A0';
  }

}