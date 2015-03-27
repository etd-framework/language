<?php
/**
 * @package     EtdInterfaces
 *
 * @version     0.0.1
 * @copyright   Copyright (C) 2014 ETD Solutions, SARL Etudoo. Tous droits réservés.
 * @license     http://etd-solutions.com/LICENSE
 * @author      ETD Solutions http://etd-solutions.com
 */

namespace EtdSolutions\Language\Localise;

use Joomla\Language\Localise\AbstractLocalise;

defined('_JEXEC') or die;

/**
 * fr-FR localise class
 */
class Fr_FRLocalise extends AbstractLocalise {

    /**
     * Returns the potential suffixes for a specific number of items
     *
     * @param int $count The number of items.
     *
     * @return array An array of potential suffixes.
     */
    public function getPluralSuffixes($count) {
        if ($count == 0) {
            $return = array('0');
        } elseif ($count == 1) {
            $return = array('1');
        } else {
            $return = array('MORE');
        }
        return $return;
    }

}