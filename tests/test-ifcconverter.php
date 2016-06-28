<?php

class PluginTest extends WP_UnitTestCase {

    // Check that that activation doesn't break
    function test_plugin_activated() {

        $this->assertTrue( is_plugin_active( PLUGIN_PATH ) );

    }

    function test_martialblog_ifc_convert_yearday() {

        $expected = "Year Day";
        $actual = martialblog_ifc_convert("December 31, 2016");

        $this->assertEquals($actual, $expected);

    }

    function test_martialblog_ifc_convert_Ymd() {
        # Test: Y-m-d

        $expected = "2016-01-01";
        $actual = martialblog_ifc_convert("2016-01-01");

        $this->assertEquals($actual, $expected);

    }

    function test_martialblog_ifc_convert_mdY() {
        # Test: m/d/Y

        $expected = "01/01/2016";
        $actual = martialblog_ifc_convert("01/01/2016");

        $this->assertEquals($actual, $expected);

    }

    function test_martialblog_ifc_convert_FjY() {
        # Test: F j, Y

        $expected = "March 1, 2016";
        $actual = martialblog_ifc_convert("January 1, 2016");

        $this->assertEquals($actual, $expected);

    }

}