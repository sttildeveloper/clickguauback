<?php

return [
    // Local and simple deployments often use the file cache driver,
    // which does not support cache tags. Disable GeoIP caching by default
    // unless an environment explicitly opts into a compatible store.
    'cache' => env('GEOIP_CACHE', 'none'),
    'cache_tags' => [],
];
