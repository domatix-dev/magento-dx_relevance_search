<?php
class Domatix_CatalogSearch_Helper_Data extends Mage_Core_Helper_Abstract {
	public function debug($message, $level = null) {
		Mage::log($message, $level, 'domatixsearch.log');
	}
}
