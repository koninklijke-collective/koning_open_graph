<?php
namespace Keizer\KoningOpenGraph\ViewHelper\OpenGraph;

class TitleViewHelper extends \Keizer\KoningOpenGraph\ViewHelper\AbstractViewHelper
{

    /**
     * Override/Use og:title metatag to page renderer
     *
     * @param string $title
     * @return void
     */
    public function render($title = null)
    {
        if ($title === null) {
            $title = $this->renderChildren();
        }

        $title = trim(strip_tags($title));
        $this->getTypoScriptFrontendController()->page['tx_koningopengraph_title'] = $title;
    }

}
