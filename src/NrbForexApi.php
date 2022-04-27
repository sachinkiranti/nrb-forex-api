<?php

namespace SachinKiranti\NrbForexApi;

use Exception;

class NrbForexApi
{

    private $forexRates;

    public $iso3;

    public $name;

    public $perUnit;

    public function __construct()
    {
        $this->forexRates = collect([]);
    }

    /**
     * @throws Exception
     */
    public function today()
    {
        $this->fetch(
                config('nrb-forex-api.routes.app_rate')
            );

        return $this;
    }

    public function convert($npr)
    {
        return $this->perUnit * $npr;
    }

    public function to($iso3)
    {
        if ($this->forexRates->isEmpty()) {
            $this->today();
        }

        $rate = (object) $this->forexRates->where('iso3',  $iso3)->first();

        $this->iso3 = $rate->iso3;

        $this->name = $rate->name;

        $this->perUnit = $rate->per_unit;

        return $this;
    }

    private function resolveRate(array $rates): NrbForexApi
    {
        $this->forexRates = collect($rates)
            ->map(function ($rate) {
                return [
                    'iso3'     => $rate->iso3,
                    'name'     => $rate->name,
                    'per_unit' => $rate->buy / $rate->unit,
                ];
            });
        return $this;
    }

    /**
     * @param string $url
     * @param array $filter
     * @return mixed
     * @throws Exception
     */
    private function fetch(string $url, array $filter = [])
    {
        if ( function_exists('curl_version') ) {
            $ch = curl_init(
                config('nrb-forex-api.base_url') . $url . '?' . http_build_query($filter)
            );

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);

            $response = curl_exec($ch);
            curl_close($ch);

            return $this->resolveRate(
                json_decode($response)
            );
        }

        throw new Exception("CURL is not found!");
    }

}