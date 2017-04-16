<?php namespace Performance\Lib;

/**
 * Created by PhpStorm.
 * User: bvanhoekelen
 * Date: 13-03-17
 * Time: 21:35
 */
interface PerformanceInterface
{
    /*
     * Set measuring point X
     *
     * @param string|null   $label
     * @return void
     */
    public static function point($label = null);

    /*
     * Finish measuring point
     *
     * @return void
     */
    public static function finish();

    /*
     * Return test results
     *
     * @return mixed
     */
    public static function results();

    /*
     * Change config items
     *
     * @param
     * @return mixed
     */
    public static function config($configItem);

    /*
     * Change single config item
     *
     * @param string    $item
     * @param mixed     $value
     * @return mixed
     */
    public static function changeConfig($item, $value);

}