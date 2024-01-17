<?php

namespace LocationErag\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;

class Location extends Controller
{

    public static function MapData($pincode)
    {
        $locationErag = new Location();
        try {
            $response = Http::get($locationErag->buildData($locationErag->key()['id'], $locationErag->key()['key']) . $pincode);
            if ($response->successful()) {
                return $response->json();
            } else {
                // Handle non-successful response, e.g., return an error response or log the error
                return ['PostOffice' => [], 'Status' => 'Failure', 'Message' => 'Zip Code is not correct'];
            }
        } catch (RequestException $e) {
            // Handle request-related exceptions
            return ['PostOffice' => [], 'Status' => 'Failure', 'Message' => 'Failed the request'];
        } catch (\Exception $e) {
            // Handle other unexpected exceptions
            return ['PostOffice' => [], 'Status' => 'Failure', 'Message' => 'An unexpected error occurred'];
        }
    }

    public function buildData($data, $key)
    {
        $cipher = "aes-256-cbc";
        $data = base64_decode($data);
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = substr($data, 0, $ivlen);
        $data = substr($data, $ivlen);
        $decrypted = openssl_decrypt($data, $cipher, $key, 0, $iv);
        return $decrypted;
    }

    public function key(){
        $id = "jf5lq/YtCj9nDR7yFR6ixGVTRGpyc1U4WnVSYVRaem5aVTZvcm5HQlJSdmtoL2FvbWRvZ2V3dWhYRTJxQnBCN255eXRNTitkUGFuaUZ5dkE=";
        $key = "secret_key";
        return ['id'=> $id, 'key'=> $key];
    }
}
