<?php

namespace LocationErag\Get;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\RequestException;
use LocationErag\Services\LocationServices;

class Location extends Controller
{
    public static function MapData(int $pincode)
    {
        try {
            $response = self::getLocationData($pincode);
            if ($response->successful()) {
                return LocationServices::processSuccessfulResponse($response);
            } else {
                return self::handleNonSuccessfulResponse();
            }
        } catch (RequestException $e) {
            return self::handleRequestException();
        } catch (\Exception $e) {
            return self::handleGeneralException();
        }
    }
    private static function handleNonSuccessfulResponse() : array
    {
        return ['data' => [], 'Status' => 'Failure', 'Message' => 'Zip Code is not correct'];
    }

    private static function handleRequestException(): array
    {
        return ['data' => [], 'Status' => 'Failure', 'Message' => 'Failed the request'];
    }

    private static function getLocationData(int $pincode)
    {
        return LocationServices::dataBindRequest(LocationServices::buildData(LocationServices::key()['id'], LocationServices::key()['key']) . $pincode);
    }

    private static function handleGeneralException(): array
    {
        return ['data' => [], 'Status' => 'Failure', 'Message' => 'An unexpected error occurred'];
    }
}
