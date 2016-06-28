<?php

class PluginTest extends WP_UnitTestCase {

    // Check that that activation doesn't break
    function test_plugin_activated() {

        $this->assertTrue( is_plugin_active( PLUGIN_PATH ) );

    }

    function test_martialblog_ifc_convert() {

        $expected = "March 1, 2016";
        $actual = martialblog_ifc_convert("January 1, 2016");

        $this->assertEquals($actual, $expected);

    }

}