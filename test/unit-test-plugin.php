<?php

class PluginTest extends TestCase
{
    public function test_plugin_installed() {
        activate_plugin( 'disciple-tools-apps/disciple-tools-apps.php' );

        $this->assertContains(
            'disciple-tools-apps/disciple-tools-apps.php',
            get_option( 'active_plugins' )
        );
    }
}
