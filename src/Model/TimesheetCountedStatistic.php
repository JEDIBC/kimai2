<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class TimesheetCountedStatistic
{
    /**
     * @var int
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"Default"})
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("recordAmount")
     */
    protected $recordAmount = 0;
    /**
     * @var int
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"Default"})
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("recordDuration")
     */
    protected $recordDuration = 0;
    /**
     * @var float
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"Default"})
     * @Serializer\Type("float")
     * @Serializer\SerializedName("recordRate")
     */
    protected $recordRate = 0.0;
    /**
     * @var float
     *
     * @Serializer\Expose()
     * @Serializer\Groups({"Default"})
     * @Serializer\Type("float")
     * @Serializer\SerializedName("recordInternalRate")
     */
    protected $recordInternalRate = 0.0;

    /**
     * Returns the total amount of included timesheet records.
     *
     * @return int
     */
    public function getRecordAmount()
    {
        return $this->recordAmount;
    }

    /**
     * @param int $recordAmount
     * @return $this
     */
    public function setRecordAmount($recordAmount)
    {
        $this->recordAmount = (int) $recordAmount;

        return $this;
    }

    /**
     * Returns the total duration of all included timesheet records.
     *
     * @return int
     */
    public function getRecordDuration()
    {
        return $this->recordDuration;
    }

    /**
     * @param int $recordDuration
     * @return $this
     */
    public function setRecordDuration($recordDuration)
    {
        $this->recordDuration = (int) $recordDuration;

        return $this;
    }

    /**
     * Returns the total rate of all included timesheet records.
     *
     * @return float
     */
    public function getRecordRate()
    {
        return $this->recordRate;
    }

    /**
     * @param float $recordRate
     * @return $this
     */
    public function setRecordRate($recordRate)
    {
        $this->recordRate = (float) $recordRate;

        return $this;
    }

    /**
     * Returns the total internal rate of all included timesheet records.
     *
     * @return float
     */
    public function getRecordInternalRate()
    {
        return $this->recordInternalRate;
    }

    /**
     * @param float $recordInternalRate
     * @return $this
     */
    public function setRecordInternalRate($recordInternalRate)
    {
        $this->recordInternalRate = (float) $recordInternalRate;

        return $this;
    }
}
