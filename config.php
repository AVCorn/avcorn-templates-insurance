<?php

/**
 * New Template Configuration
 *
 * PHP version 8.2
 *
 * @phpversion >= 8.2
 * @category   CMS
 * @package    AVCorn
 * @subpackage Template
 * @author     Benjamin J. Young <ben@blaher.me>
 * @license    GNU General Public License, version 3
 * @link       https://github.com/avcorn/avcorn
 */

declare(strict_types=1);

/**
 * Overriding default configuration.
 *
 * @var array $config Configuration
 */
$config['info']['company'] = 'Oak Insurance';
$config['info']['title']   = 'All Your Insurance "Needs"';
$config['info']['motto']   = 'It would be wise to get some "insurance".';
$config['info']['slogan']  = 'GET SOME INSURANCE!!!';
$config['info']['logo']    = '/assets/images/logos/logo-insurance.png';
$config['home']            = '/home/insurance';

$config['navigation'][0]['href'] = $config['home'];