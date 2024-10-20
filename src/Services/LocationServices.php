<?php

namespace LocationErag\Services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LocationServices extends Controller
{
    public static function buildData(string $data, string $key)
    {
        $cipher = 'aes-256-cbc';
        $data = base64_decode($data);
        $ivlen = openssl_cipher_iv_length($cipher);

        return self::verifyedData($data, $ivlen, $cipher, $key);
    }

    public static function verifyedData($data, $ivlen, $cipher, $key)
    {
        $iv = substr($data, 0, $ivlen);
        $data = substr($data, $ivlen);

        return openssl_decrypt($data, $cipher, $key, 0, $iv);
    }

    public static function dataBindRequest($request)
    {
        return Http::get($request);
    }

    public static function processSuccessfulResponse($response): array
    {
        $responseData = $response->json();

        $responseData['data'] = $responseData['PostOffice'] ?? [];
        unset($responseData['PostOffice']);

        $responseData['data'] = array_map([self::class, 'removeUnwantedFields'], $responseData['data']);

        $responseData['Message'] = 'Number of found: '.count($responseData['data']);

        return $responseData;
    }

    private static function removeUnwantedFields($post)
    {
        unset($post['BranchType']);
        unset($post['Description']);
        unset($post['Taluk']);
        unset($post['Circle']);

        return $post;
    }

    public static function key(): array
    {
        $id = 'jf5lq/YtCj9nDR7yFR6ixGVTRGpyc1U4WnVSYVRaem5aVTZvcm5HQlJSdmtoL2FvbWRvZ2V3dWhYRTJxQnBCN255eXRNTitkUGFuaUZ5dkE=';
        $key = 'secret_key';

        return ['id' => $id, 'key' => $key];
    }
}
