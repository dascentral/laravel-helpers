<?php

use Faker\Factory;

if (!function_exists('faker')) {
    /**
     * Generate data via the Faker\Factory.
     *
     * @param  string $property
     * @return string|Faker\Factory;
     */
    function faker($property = null)
    {
        $faker = Factory::create();

        return $property ? $faker->{$property} : $faker;
    }
}

if (!function_exists('formatPlainText')) {
    /**
     * Format plain text that has been provided for HTML display.
     *
     * @param  string $text
     * @return string
     */
    function formatPlainText($text)
    {
        $text = replaceCarriageReturns($text);
        $text = makeClickableLinks($text);

        return $text;
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
