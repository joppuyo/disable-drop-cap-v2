<?php

use Facebook\WebDriver\WebDriverBy;

class AcceptanceCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->cli(['core', 'update-db']);
        $I->cli(['core', 'version']);
        $I->cli(['plugin', 'install', 'disable-welcome-messages-and-tips']);
        $I->cli(['plugin', 'activate', 'disable-welcome-messages-and-tips']);
        $I->cli(['option', 'update', 'blogname', 'Test']);
    }

    public function iSeeDropCap(AcceptanceTester $I)
    {
        global $wp_version;
        $I->loginAsAdmin();
        $I->amOnPage('wp-admin/post-new.php');
        
        if (version_compare($wp_version, '6.3', 'ge')) {
            $I->switchToIFrame("editor-canvas");
            $I->wait(1);
            $I->click('.block-editor-default-block-appender__content');
            $I->switchToIFrame();
        } else {
            $I->click('.block-editor-default-block-appender__content');
        }

        if (version_compare($wp_version, '6.4', 'ge')) {
            $I->click("aria-label='Typography options']");
            $I->wait(1);
        } else if (version_compare($wp_version, '6.0', 'ge')) {
            $I->click('//*[@id="editor"]/div/div[1]/div[1]/div[2]/div[3]/div/div[3]/div/div[3]/div[1]/div/button');
            $I->wait(1);
        }

        $I->see('Drop cap');
        $I->amOnUrl('https://google.com');
        $I->acceptPopup();
    }

    public function iActivatePlugin(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPluginsPage();
        $I->activatePlugin('disable-drop-cap');
    }

    public function iDontSeeDropCap(AcceptanceTester $I)
    {
        global $wp_version;

        $I->loginAsAdmin();
        $I->amOnPluginsPage();
        $I->wait(5);
        $I->amOnPage('wp-admin/post-new.php');
        if (version_compare($wp_version, '6.3', 'ge')) {
            $I->switchToIFrame("editor-canvas");
            $I->wait(1);
            $I->click('.block-editor-default-block-appender__content');
            $I->switchToIFrame();
        } else {
            $I->click('.block-editor-default-block-appender__content');
        }

        if (version_compare($wp_version, '6.4', 'ge')) {
            $I->click("aria-label='Typography options']");
            $I->wait(1);
        } else if (version_compare($wp_version, '6.0', 'ge')) {
            $I->click('//*[@id="editor"]/div/div[1]/div[1]/div[2]/div[3]/div/div[3]/div/div[3]/div[1]/div/button');
            $I->wait(1);
        }

        $I->dontSee('Drop cap');
    }

}
