<?php
/**
 * @file
 * Contains \Drupal\pluginmodule\UnitInterface
 **/
namespace Drupal\pluginmodule;

/**
 * Interface UnitInterface
 **/
interface UnitInterface {
  
  /**
   * @return string
   * The unit's label
   **/
   public function getLabel();

   /**
    * Returns the unit abbreviation.
    *
    * @return string
    * The abbreviation.
    **/
    public function getUnit();

    /**
     *
     * @return int|float
     * The factor amount.
     */
    public function getFactor();

    /**
     * Converts a value to the base unit.
     *
     * @param int|float $value
     * The converted amount.
     **/
    public function toBase($value);

    /**
     * Converts value from base unit to current unit.
     *
     * @param int|float $value
     * The amount to convert
     *
     * @return int|float
     * The converted amount.
     **/
    public function fromBase($value);

    /**
     * Rounds a value
     *
     * @param int|float $value
     * the value to round.
     *
     * @return int|float $value
     * The rounded value.
     **/
    public function round($value);
}