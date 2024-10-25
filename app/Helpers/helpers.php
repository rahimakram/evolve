<?php
use Carbon\Carbon;

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
}

if (!function_exists('jsonToCommaSeparated')) {
    function jsonToCommaSeparated($json)
    {
        $array = json_decode($json, true); // Decode JSON to an array
        return $array ? implode(',', $array) : ''; // Convert to comma-separated string
    }
}

if (!function_exists('getFutureDatesForDay')) {

    function getFutureDatesForDay($dayName, $currentMonth, $currentYear)
    {
        $dates = [];
        $startDate = Carbon::createFromDate($currentYear, $currentMonth, 1);
        $endDate = $startDate->copy()->endOfMonth();

        // Loop through the current month and find all future occurrences of the specified day
        while ($startDate->lte($endDate)) {
            if ($startDate->format('l') === $dayName && $startDate->isFuture()) {
                $dates[] = $startDate->toDateString(); // Store the date
            }
            $startDate->addDay(); // Increment by 1 day
        }
        return $dates;
    }
}