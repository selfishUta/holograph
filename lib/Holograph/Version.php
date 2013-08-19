<?php
/**
 * Version class
 *
 * @package Holograph
 */

namespace Holograph;

/**
 * Version
 *
 * @package Holograph
 * @author Jansen Price <jansen.price@gmail.com>
 * @version $Id$
 */
class Version
{
    /**
     * Current version
     */
    const VERSION = '0.2';

    /**
     * Render version
     *
     * @return string
     */
    public static function renderVersion()
    {
        return 'Holograph ' . self::VERSION . "\n";
    }

    /**
     * To string
     *
     * @return string
     */
    public function __toString()
    {
        return self::renderVersion();
    }
}
