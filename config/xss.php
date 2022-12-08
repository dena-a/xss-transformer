<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The cleaner method for tags
    |--------------------------------------------------------------------------
    | strip_tags: Strip HTML and PHP tags from a string
    | html_entities: Convert all applicable characters to HTML entities
    | null: do nothing
    */
    'cleaner' => 'strip_tags',

    /*
    |--------------------------------------------------------------------------
    | The html tags which should not be cleaned.
    |--------------------------------------------------------------------------
    */
    'allowed_tags' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | The html tag attributes which should not be removed.
    |--------------------------------------------------------------------------
    */
    'allowed_attributes' => [
        'class',
        'style',
    ],

    /*
    |--------------------------------------------------------------------------
    | The names of the inputs that should be ignored.
    |--------------------------------------------------------------------------
    */
    'ignored_inputs' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | The wildcards for names of the inputs that should be ignored.
    |--------------------------------------------------------------------------
    */
    'ignored_wildcards_inputs' => [
        // '*_html',
    ],

    /*
    |--------------------------------------------------------------------------
    | The Exceptions
    |--------------------------------------------------------------------------
    */
    'exceptions' => [
        'html_input' => [
            'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
            'u', 'ol', 'ul', 'li',
            'strong',
            'span',
            'em',
            'a' => [
                'href',
                'target',
            ],
        ],
        // Wildcards support
        '*_html' => [
            'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
            'u', 'ol', 'ul', 'li',
            'strong',
            'span',
            'em',
            'a' => [
                'href',
                'target',
            ],
        ],
    ],
];
