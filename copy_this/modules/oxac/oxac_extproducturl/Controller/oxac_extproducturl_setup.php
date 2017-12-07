<?php

namespace OxidEsales\OxidAcademy\ExtProductUrl\Controller;

class ExtProductUrl_Setup {

    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
    	self::addFields();
    	self::_rebuildViews();
    }

    /**
     * Execute action on deactivate event
     */
    public static function onDeactivate()
    {
    	self::removeFields();
    	self::_rebuildViews();
    }

    /**
     * Add database fields
     */
    public static function addFields()
    {
        $Db = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
    	$Db->execute("ALTER TABLE  `oxarticles` ADD  `OXAC_EXTPRODUCTURLLABEL` VARCHAR( 255 ) NOT NULL;");

    	// imply multilang field creation. OXID will automatically create all the required fields.
        $Db->execute("ALTER TABLE  `oxarticles` ADD  `OXAC_EXTPRODUCTURLLABEL_1` VARCHAR( 255 ) NOT NULL;");

        $Db->execute("ALTER TABLE  `oxarticles` ADD  `OXAC_EXTPRODUCTURL` VARCHAR( 255 ) NOT NULL;");
    }

    /**
     * Remove database fields
     */
    public static function removeFields()
    {
        $Db = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
    	$Db->execute("ALTER TABLE `oxarticles` DROP `OXAC_EXTPRODUCTURL`, DROP `OXAC_EXTPRODUCTURLLABEL`;");
    }

    /**
     * Rebuild Views (see also: "devguide")
     *
     * @param null
     * @return null
     */
    private static function _rebuildViews()
    {
    	if (oxRegistry::getSession()->getVariable('malladmin')){
    		$oMetaData = oxNew('oxDbMetaDataHandler');
    		$oMetaData->updateViews();
    	}
    }
    
}