<?php

use SachinKiranti\NrbForexApi\NrbForexISO3;

return [
    # base_url should end with trailing backslash `/`
    'base_url' => 'https://www.nrb.org.np/api/forex/v1/',

    # Default NPR change to iso3
    'iso3' => NrbForexISO3::US_DOLLAR,

    'routes'   => [
        'rates' => 'rates',
        'rate'  => 'rate',
        'app_rate' => 'app-rate',
    ],
];