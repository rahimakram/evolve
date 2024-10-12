<?php

if (!function_exists('jsonToCommaSeparatedString')) {
    /**
     * Convert JSON data to a comma-separated string.
     *
     * @param string $json
     * @return string
     */
    function jsonToCommaSeparatedString($json)
    {
        $array = json_decode($json, true); // Decode JSON to an array
        return $array ? implode(' |', $array) : ''; // Convert to comma-separated string
    }

    function jsonToCommaSeparated($json)
    {
        $array = json_decode($json, true); // Decode JSON to an array
        return $array ? implode(',', $array) : ''; // Convert to comma-separated string
    }
}
