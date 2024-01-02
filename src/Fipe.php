<?php

namespace FelipeArnold\Fipeapi;

abstract class Fipe
{
    const URL = 'https://parallelum.com.br/fipe/api/v2/';

    /**
     * @var string
     */
    protected static $type;

    /**
     * @var array
     */
    private static $defaultCurlOptions = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_TIMEOUT        => 5,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_SSL_VERIFYPEER => 0,
    ];

    /**
     * @param string $uri
     *
     * @return mixed|false
     */
    protected static function request($uri)
    {
        $ch = curl_init($uri);
        curl_setopt_array($ch, self::$defaultCurlOptions);
        $html = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return ($httpCode >= 200 && $httpCode < 300) ? json_decode($html, true) : false;
    }

    public static function getBrands(): array
    {
        $uri = self::URL.static::$type.'/brands';

        return self::request($uri);
    }

    public static function getModelsBrands($codeBrand): array
    {
        $uri = self::URL.static::$type.'/brands/'.$codeBrand.'/models';

        return self::request($uri);
    }
    
    public static function getYearsBrands($codeBrand, $codeModel): array
    {
        $uri = self::URL.static::$type.'/brands/'.$codeBrand.'/models/'.$codeModel.'/years';

        return self::request($uri);
    }

    public static function getVehicle($codeBrand, $codeModel, $codeYear): array
    {
        $uri = self::URL.static::$type.'/brands/'.$codeBrand.'/models/'.$codeModel.'/years/'.$codeYear;

        return self::request($uri);
    }

    /**
     * Update the cURL Default Options.
     *
     * @param array $config
     */
    public static function setCurlOptions(array $config = [])
    {
        self::$defaultCurlOptions = array_replace(self::$defaultCurlOptions, $config);
    }

}
