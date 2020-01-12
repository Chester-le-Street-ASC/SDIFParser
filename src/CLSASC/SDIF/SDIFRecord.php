<?php

namespace CLSASC\SDIF;

/**
 * A PHP Class to represent a Standard Data Interchange Format record.
 * 
 * Some functionality may not be implemented.
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
abstract class SDIFRecord {

  /**
   * Function the return the type of record
   *
   * @return string type
   */
  abstract protected function getType();

}