<?php

use Illuminate\Support\Str;

// Generate media asset URL
if (! function_exists('media')) {
    /**
     * Return media asset or fallback placeholder
     *
     * @param string|null $path
     * @param string $fallback
     * @return string
     */
    function media(?string $path, string $fallback = 'frontend/images/common/placeHolder.jpg'): string
    {
        if (! empty($path)) {
            return asset($path);
        }

        return asset($fallback);
    }
}

if (! function_exists('shortTitle')) {
    /**
     * Truncate text by character limit,
     * then extend to nearest space and add dots if needed.
     *
     * @param string $text
     * @param int $limit
     * @param string $dots
     * @return string
     */
    function shortTitle(string $text, int $limit = 45, string $dots = '...'): string
    {
        // Empty or short text
        if (Str::length($text) <= $limit) {
            return $text;
        }

        // Take first N characters
        $cut = Str::substr($text, 0, $limit);

        // Find next space after limit
        $spacePos = Str::position($text, ' ', $limit);

        if ($spacePos !== false) {
            $cut = Str::substr($text, 0, $spacePos);
        }

        return rtrim($cut) . $dots;
    }
}
