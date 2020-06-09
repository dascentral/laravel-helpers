<?php

use Faker\Factory;

if (!function_exists('faker')) {
    /**
     * Generate data via the Faker\Factory.
     *
     * @return Faker\Factory;
     */
    function faker($property)
    {
        $faker = Factory::create();

        return $property ? $faker->{$property} : $faker;
    }
}


if (!function_exists('makeClickableLinks')) {
    /**
     * Convert plain text URLs with clickable links.
     *
     * @param string $notes
     * @return string
     */
    function makeClickableLinks($notes)
    {
        return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $notes);
    }
}

if (!function_exists('makeCarriageReturns')) {
    /**
     * Convert newline characters with <br /> HTML tags.
     *
     * @param string $notes
     * @return string
     */
    function replaceCarriageReturns($notes)
    {
        return str_replace("\n", '<br />', $notes);
    }
}
