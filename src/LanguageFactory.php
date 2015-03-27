<?php
/**
 * Part of the ETD Framework Language Package
 *
 * @copyright   Copyright (C) 2015 ETD Solutions, SARL Etudoo. Tous droits réservés.
 * @license     Apache License 2.0; see LICENSE
 * @author      ETD Solutions http://etd-solutions.com
 */

namespace EtdSolutions\Language;

/**
 * Language package factory
 */
class LanguageFactory extends \Joomla\Language\LanguageFactory {

	/**
	 * Application's default language
	 *
	 * @var    string
	 */
	private $defaultLanguage = 'fr-FR';

	/**
	 * Get the application's default language
	 *
	 * @return  string
	 */
	public function getDefaultLanguage() {

		return $this->defaultLanguage;
	}

}
