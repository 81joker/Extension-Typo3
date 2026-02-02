<?php

declare(strict_types=1);

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['lesson_typo3'] = 'EXT:lesson_typo3/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:lesson_typo3/Configuration/TsConfig/Page/All.tsconfig">');




ExtensionManagementUtility::addPageTSConfig('
    mod.wizards.newContentElement.wizardItems {
        common.elements.about {
            title = About Us Content Element
            description = What other people are saying
            tt_content_defValues.CType = about
            iconIdentifier = content-text
        }
        common.show := addToList(about)
    }
');

ExtensionManagementUtility::addPageTSConfig('
    mod.wizards.newContentElement.wizardItems {
        common.elements.lauraelement {
            title = Laura Element
            description = What other people are saying
            tt_content_defValues.CType = lauraelement
            iconIdentifier = content-elements-mailform
        }
        common.show := addToList(lauraelement)
    }
');
ExtensionManagementUtility::addPageTSConfig('
mod.wizards.newContentElement.wizardItems {
    common.elements.bannerslider {
        title = Banner Slider
        description = Homepage banner slider
        tt_content_defValues.CType = bannerslider
        iconIdentifier = content-image
    }
    common.show := addToList(bannerslider)
}
');
ExtensionManagementUtility::addPageTSConfig('
  mod.wizards.newContentElement.wizardItems.common {
    elements.bookquote {
      title = Book Quote
      description = Author quote with image
      iconIdentifier = content-text
      tt_content_defValues {
        CType = bookquote
      }
    }
    show := addToList(bookquote)
  }
');
