<?php

namespace Elastic\Apm\PhpAgent\Interfaces;

interface TimerInterface
{
    /**
     * Start the timer
     *
     * @return mixed
     */
    public function start();

    /**
     * Stop current timer
     *
     * @return mixed
     */
    public function stop();

    /**
     * Get spent time
     *
     * @return int
     */
    public function getElapsedTime(): int;

    /**
     * Get current time
     *
     * @param bool|null $us
     *
     * @return int
     */
    public function now(?bool $us = true): int;
}
