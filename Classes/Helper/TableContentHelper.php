<?php
namespace Keizer\KoningOpenGraph\Helper;

/**
 * Static Content Helper: TableContent
 *
 * @package Keizer\KoningOpenGraph\Helper
 */
class TableContentHelper
{

    /**
     * @return array
     */
    public static function getOpenGraphTypes()
    {
        return array(
            'article',
            'books.author',
            'books.book',
            'books.genre',
            'books.quotes',
            'books.reads',
            'books.wants_to_read',
            'business.business',
            'fitness.bikes',
            'fitness.course',
            'fitness.runs',
            'fitness.walks',
            'game.achievement',
            'games.achieves',
            'games.celebrate',
            'music.album',
            'music.listens',
            'music.playlist',
            'music.playlists',
            'music.radio_station',
            'music.song',
            'news.publishes',
            'og.follows',
            'og.likes',
            'pages.saves',
            'place',
            'product',
            'product.group',
            'product.item',
            'profile',
            'restaurant.menu',
            'restaurant.menu_item',
            'restaurant.menu_section',
            'restaurant.restaurant',
            'restaurant.visited',
            'restaurant.wants_to_visit',
            'sellers.rates',
            'video.episode',
            'video.movie',
            'video.other',
            'video.tv_show',
            'video.wants_to_watch',
            'video.watches',
        );
    }

    /**
     * Generate nice listing for TCA Output
     *
     * @return array
     */
    public static function getOpenGraphTypesForTcaSelect()
    {
        $select = array();
        foreach (static::getOpenGraphTypes() as $type) {

            $select[] = array($type, $type);
        }
        return $select;
    }

}
