<?php

use SachinKiranti\NrbForexApi\NrbForexApi;

if (! function_exists('nrb_forex_api')) :

    function nrb_forex_api () {
        return app(NrbForexApi::class);
    }

endif;

if (! function_exists('nrb_forex_convert')) :

    function nrb_forex_convert( string $iso3, $npr )
    {
        return nrb_forex_api()
            ->to($iso3)
            ->convert($npr);
    }

endif;