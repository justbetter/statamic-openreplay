<?php

return [
    'enabled' => env('JUSTBETTER_OPENREPLAY_ENABLED', false),
    'url' => env('JUSTBETTER_OPENREPLAY_URL', ''),
    'token' => env('JUSTBETTER_OPENREPLAY_TOKEN', ''),
    'capture_network' => env('JUSTBETTER_OPENREPLAY_CAPTURE_NETWORK', 'true'),
    'default_input_mode' => env('JUSTBETTER_OPENREPLAY_DEFAULT_INPUT_MODE', 0),
    'obscure_text_numbers' => env('JUSTBETTER_OPENREPLAY_OBSCURE_TEXT_NUMBERS', 'true'),
    'obscure_text_emails' => env('JUSTBETTER_OPENREPLAY_OBSCURE_TEXT_EMAILS', 'true'),
    'disable_secure_mode' => env('JUSTBETTER_OPENREPLAY_DISABLE_SECURE_MODE', 'false'),
];
