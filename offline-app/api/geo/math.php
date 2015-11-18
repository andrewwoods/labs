<?php
namespace Geo;
/**
 * Math for GPS coordinates (latitude/longitude)
 *
 * @package Geo
 */

class Math
{
	const KM_TO_MI = 0.62137119;
	const MI_TO_KM = 1.609344;
	const EARTH_RADIUS = 6371.01; // average radius in km
	const DUE_NORTH = 0;
	const DUE_EAST  = 90;
	const DUE_SOUTH = 180;
	const DUE_WEST  = 270;

	//---------------------------------------------------------------------------
	//--[ Conversion Methods ]---------------------------------------------------
	//---------------------------------------------------------------------------


	public function milesToKm($miles)
	{
		return $miles * self::MI_TO_KM;
	}

	public function kmToMiles($kilometers)
	{
		return $kilometers * self::KM_TO_MI;
	}

	//---------------------------------------------------------------------------
	//--[ Calcultion Methods ]---------------------------------------------------
	//---------------------------------------------------------------------------

	/**
	 * Calculate a box around an origin point to filter a search
	 *
	 * @param \Geo\Point $origin a necessary parameter
	 * @param String optional $two an optional value
	 * @return void
	 */
	public static function calculateBox(\Geo\Point $origin, $distance) {

		$lat = $origin->getLatitude();
		$lng = $origin->getLongitude();

		$coords_north = self::pointRadialDistance($lat, $lng, $distance_km, DUE_NORTH);
		$coords_east  = self::pointRadialDistance($lat, $lng, $distance_km, DUE_EAST);
		$coords_south = self::pointRadialDistance($lat, $lng, $distance_km, DUE_SOUTH);
		$coords_west  = self::pointRadialDistance($lat, $lng, $distance_km, DUE_WEST);

		return array('north' => $coords_north, 'east' => $coords_east,
		             'south' => $coords_south, 'west' => $coords_west );
	}

	/**
	 * Calculate the distance between 2 points
	 *
	 * @param \Geo\Point $start
	 * @param \Geo\Point $end
	 * @return float
	 */
	public static function calculateDistance(\Geo\Point $start, \Geo\Point $end)
	{
		$lat1 = $start->getLatitude();
		$lng1 = $start->getLongitude();
		$lat2 = $end->getLatitude();
		$lng2 = $end->getLongitude();

	    // If 2 coords are the same dist=0
	    if ( ($lat1 == $lat2) && ($lng1 == $lng2) ){
	        return 0;
	    }
	    // Convert degrees to radians.
	    $lat1=deg2rad($lat1);
	    $lng1=deg2rad($lng1);
	    $lat2=deg2rad($lat2);
	    $lng2=deg2rad($lng2);

	    // Calculate delta longitude and latitude.
	    $delta_lat=($lat2 - $lat1);
	    $delta_lng=($lng2 - $lng1);
	    //Calculate distance based on curvature of the earth.
	    $temp=pow(sin($delta_lat/2.0),2) + cos($lat1) * cos($lat2) * pow(sin($delta_lng/2.0),2);
	    $distance=number_format(self::EARTH_RADIUS * 2 * atan2(sqrt($temp),sqrt(1-$temp)),2,'.','');
	    return $distance;
	}


	public static function pointRadialDistance($lat1, $lon1, $distance, $bearing)
	{
		$epsilon = 0.000001;    // threshold for floating-point equality

	    $rlat1 = deg2rad($lat1);
	    $rlon1 = deg2rad($lon1);
	    $rbearing = deg2rad($bearing);

		// normalize linear distance to radian angle
	    $rdistance = $distance / self::EARTH_RADIUS;
	    $rlat = asin( sin($rlat1) * cos($rdistance)
			+ cos($rlat1) * sin($rdistance) * cos($rbearing) );

	    if (cos($rlat) == 0 or abs(cos($rlat)) < $epsilon) # Endpoint a pole
		{
			$rlon = $rlon1;
		}
	    else
	    {
			$rlon = $rlon1 + atan2(
				sin($rbearing) * sin($rdistance) * cos($rlat1),
				cos($rdistance) - sin($rlat1) * sin($rlat)
			);
		}
	    $lat = rad2deg($rlat);
	    $lon = rad2deg($rlon);

	    return array($lat, $lon);
	}

}
