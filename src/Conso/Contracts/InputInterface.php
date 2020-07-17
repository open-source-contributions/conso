<?php namespace  Conso\Contracts;

/**
 *
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   1.0.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 */

interface InputInterface
{
    /**
     * input command
     *
     * @return string|null
     */
    public function command() : ?string;

    /**
     * input sub command
     *
     * @return string|null
     */
    public function subCommand() : ?string;

    /**
     * input options
     *
     * @return array
     */
    public function options() : array;

    /**
     * input flags
     *
     * @return array
     */
    public function flags() : array;
}