<?php
/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015, 2016, 2017  Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Seat\Eseye\Containers;

use Monolog\Logger;
use Seat\Eseye\Cache\FileCache;
use Seat\Eseye\Log\FileLogger;
use Seat\Eseye\Traits\ConstructsContainers;
use Seat\Eseye\Traits\ValidatesContainers;


/**
 * Class EsiConfiguration
 * @package Seat\Eseye\Containers
 */
class EsiConfiguration extends AbstractArrayAccess
{

    use ConstructsContainers, ValidatesContainers;

    /**
     * @var array
     */
    protected $data = [
        'datasource'          => 'tranquility',

        // Logging
        'logger'              => FileLogger::class,
        'logger_level'        => Logger::INFO,
        'logfile_location'    => 'logs/eseye.log',

        // Cache
        'cache'               => FileCache::class,
        'file_cache_location' => 'cache/',
    ];

}
