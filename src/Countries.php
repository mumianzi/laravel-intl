<?php

namespace Mumianzi\LaravelIntl;

use Illuminate\Support\Arr;

/**
 * Class to work with countries
 */
class Countries
{

    /**
     * Loaded localized country data.
     *
     * @var array
     */
    protected $data;

    protected $locale;
    /**
     * The current locale.
     *
     * @var string $locale
     */
    protected $fallbackLocale;

    /**
     * Get the current locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set the current locale.
     *
     * @param $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get the fallback locale.
     *
     * @return string
     */
    public function getFallbackLocale()
    {
        return $this->fallbackLocale;
    }

    /**
     * Set the fallback locale.
     *
     * @param $locale
     *
     * @return $this
     */
    public function setFallbackLocale($locale)
    {
        $this->fallbackLocale = $locale;

        return $this;
    }

    /**
     * Get a localized record by key.
     *
     * @param string $key
     *
     * @return string
     */
    public function get($key)
    {
        return Arr::get($this->all(), $key);
    }

    /**
     * Get all localized records.
     *
     * @return array
     */
    public function all()
    {
        $default = $this->data($this->getLocale());
        $fallback = $this->data($this->getFallbackLocale());

        return $default + $fallback;
    }

    /**
     * Get the data for the given locale.
     *
     * @param string $locale
     *
     * @return array
     */
    protected function data($locale)
    {
        if ( ! isset($this->data[$locale])) {
            $path = base_path('vendor/umpirsky/country-list/data/'.$locale.'/country.php');

            $this->data[$locale] = is_file($path) ? require $path : [];
        }

        return $this->data[$locale];
    }
}
