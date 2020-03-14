<?php

use Mumianzi\LaravelIntl\Countries;

if (! function_exists('country')) {
    /**
     * Get a localized country name.
     *
     * @param string|null $countryCode
     * @return Countries |string
     */

    function country($countryCode = null)
    {
        if (is_null($countryCode)) {
            return app('intl.countries');
        }

        return app('intl.countries')->get($countryCode);
    }
}

