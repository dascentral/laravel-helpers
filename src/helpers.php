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
