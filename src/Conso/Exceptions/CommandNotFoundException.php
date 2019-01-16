<?php namespace Conso\Exceptions;

/**
 * 
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   0.1.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 */
use Conso\Contracts\ExceptionInterface;

class CommandNotFoundException extends \Exception implements ExceptionInterface
{ 
}