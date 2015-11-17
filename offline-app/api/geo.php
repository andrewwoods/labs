<?php
namespace Geo;
/**
 * A package for manipulationg Geographic Location information
 *
 * @package Geo
 */

/**
 * Represents a specific point on Earth
 */
class Point {

	public $latitude  = '';
	public $longitude = '';

	const MAX_LATITUDE = 90;
	const MIN_LATITUDE = -90;

	const MAX_LONGITUDE = 180;
	const MIN_LONGITUDE = -180;

	/**
	* Create a point from a lat/long
	*
	* @throws OutOfRangeException
	*
	* @param String $one a necessary parameter
	* @param String optional $two an optional value
	* @return void
	*/
	public function __construct( $latitude, $longitude ) {

		if ( $latitude > self::MAX_LATITUDE || $latitude < self::MIN_LATITUDE ){
			throw new \OutOfRangeException('Invalid Latitude');
		}

		if ( $longitude > self::MAX_LONGITUDE || $longitude < self::MIN_LONGITUDE ){
			throw new \OutOfRangeException('Invalid Longitude');
		}

		$this->latitude  = $latitude;
		$this->longitude = $longitude;
	}

	/**
	 * Return the Coordiantes as a string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->latitude . ', ' . $this->longitude;
	}

}


