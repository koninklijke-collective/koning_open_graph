<?php
namespace Keizer\KoningOpenGraph\ViewHelper;

/**
 * Abstract ViewHelper: Generic functions used in all viewhelpers
 *
 * @package Keizer\KoningOpenGraph\ViewHelper
 */
abstract class AbstractViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * @return \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController
     * @throws \TYPO3\CMS\Frontend\Exception
     */
    protected function getTypoScriptFrontendController()
    {
        if (TYPO3_MODE === 'FE') {
            return $GLOBALS['TSFE'];
        }
        throw new \TYPO3\CMS\Frontend\Exception('This ViewHelper can only be used in Frontend');
    }

}
