<?php

namespace CLSASC\SDIF\Code;

/**
 * Abstract class for SDIF codes
 * 
 * Some functionality may not be implemented.
 *
 * @copyright Chester-le-Street ASC https://github.com/Chester-le-Street-ASC
 * @author Chris Heppell https://github.com/clheppell
 */
abstract class SDIFCode {

  /**
   * Function the return the value of the code
   *
   * @return string type
   */
  abstract protected function getCode();

  /**
   * Get the value returned when looking up the code
   *
   * @return string value, eg org name, committee code etc
   */
  abstract protected function getValue();

}