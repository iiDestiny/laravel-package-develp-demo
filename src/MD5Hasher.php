<?php

namespace Destiny\Hasher;


/**
 * Class MD5Hasher
 * @package Destiny\Hasher
 */
/**
 * Class MD5Hasher
 * @package Destiny\Hasher
 */
class MD5Hasher
{
    /**sdfsadfasdfs
     * @param $value
     * @param array $options
     * @return string
     * @author: Luoyan
     */
    public function make($value, array $options = [])
    {
        // 判断是否加盐
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     * @author: Luoyan
     */
    public function check($value, $hashValue, array $options = [])
    {
        // 判断是否加盐
        // 1
        // 2
        // 3
        // sdf
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value . $salt) == $hashValue;
    }
}