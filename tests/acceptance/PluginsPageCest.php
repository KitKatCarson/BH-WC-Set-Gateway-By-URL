<?php 

class PluginsPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    //

	/**
	 * Check the plugin is in the plugins.php list.
	 * For local dev environment, verifies the symlink is correct.
	 * Verifies the name is unchanged.
	 *
	 * @param AcceptanceTester $I
	 */
    public function testPluginsPageForPluginName(AcceptanceTester $I) {

    	$I->loginAsAdmin();

    	$I->amOnPluginsPage();

    	$I->canSee('BH WC Set Gateway By URL' );
    }

}
