<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package Configuration Option
    |--------------------------------------------------------------------------
    | Describe what it does.
    */

    'redis_key'            => 'announcements',
    'broadcasting_channel' => env('ANNOUNCEMENTS-CHANNEL', 'public-announcement-channel'),
];
