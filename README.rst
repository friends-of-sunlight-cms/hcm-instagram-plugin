HCM Instagram
#############

The plugin is implementantion of `Instafeed.js <https://instafeedjs.com/#/>`_ for Sunlight CMS 8 and adds HCM for loading images from Instagram.

.. contents::

Requirements
************

- SunLight CMS 8
- `Instagram Basic Display API <https://developers.facebook.com/docs/instagram-basic-display-api/>`_ token

Installation
************

::

    Copy the folder 'plugins' and its contents to the root directory

or

::

    Installation via administration: 'Administration > Plugins > Upload new plugins'
    

Configuration
*************

Configure Access token in: 'Administration > Plugins > HCM Instagram'

Usage
*****

You can use like another HCM module in text ``[hcm]instagram[/hcm]`` or in PHP code ``<?=  Sunlight\Hcm::run("instagram") ?>``
