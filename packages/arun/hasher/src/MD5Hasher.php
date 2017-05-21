<?php
/**
 * Created by PhpStorm.
 * User: arun
 * Date: 21/05/2017
 * Time: 7:17 PM
 */

namespace Arun\Hasher;


/**
 * Class MD5Hasher
 * @package Arun\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $option
     * @return string
     */
    public function make($value, array $option = [])
    {
        $salt = isset($option['salt']) ? $option['salt'] : '';
        return hash('md5', $value.$salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $option
     * @return bool
     */
    public function check($value, $hashValue, array $option = [])
    {
        $salt = isset($option['salt']) ? $option['salt'] : '';
        return hash('md5', $value.$salt) === $hashValue;
    }
}