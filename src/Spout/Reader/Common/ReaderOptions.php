<?php

namespace Box\Spout\Reader\Common;

/**
 * Class ReaderOptions
 * Readers' common options
 *
 * @package Box\Spout\Reader\Common
 */
class ReaderOptions
{
    /** @var bool Whether date/time values should be returned as PHP objects or be formatted as strings */
    protected $shouldFormatDates = false;

    /** @var bool Whether empty rows should be returned or skipped */
    protected $shouldPreserveEmptyRows = false;

    /** @var bool Whether RowIterator should ignore the 'spans' option which is sometimes invalid */
    protected $shouldIgnoreSpans = false;

    /**
     * @return bool Whether date/time values should be returned as PHP objects or be formatted as strings.
     */
    public function shouldFormatDates()
    {
        return $this->shouldFormatDates;
    }

    /**
     * Sets whether date/time values should be returned as PHP objects or be formatted as strings.
     *
     * @param bool $shouldFormatDates
     * @return ReaderOptions
     */
    public function setShouldFormatDates($shouldFormatDates)
    {
        $this->shouldFormatDates = $shouldFormatDates;
        return $this;
    }

    /**
     * @return bool Whether empty rows should be returned or skipped.
     */
    public function shouldPreserveEmptyRows()
    {
        return $this->shouldPreserveEmptyRows;
    }

    /**
     * Sets whether empty rows should be returned or skipped.
     *
     * @param bool $shouldPreserveEmptyRows
     * @return ReaderOptions
     */
    public function setShouldPreserveEmptyRows($shouldPreserveEmptyRows)
    {
        $this->shouldPreserveEmptyRows = $shouldPreserveEmptyRows;
        return $this;
    }

    /**
     * @return bool Whether 'spans' should be ignored
     */
    public function shouldIgnoreSpans()
    {
        return $this->shouldIgnoreSpans;
    }

    /**
     * Sets whether 'spans' should be ignored
     *
     * @param bool $shouldIgnoreSpans
     * @return ReaderOptions
     */
    public function setShouldIgnoreSpans($shouldIgnoreSpans)
    {
        $this->shouldIgnoreSpans = $shouldIgnoreSpans;
        return $this;
    }
}
