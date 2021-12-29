<?php
/**
 * music_genres sidebox - displays list of available music genres to filter on
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: music_genres.php 729 2011-08-09 15:49:16Z hugo13 $
 */

  $music_genres_query = "select music_genre_id, music_genre_name
                          from " . TABLE_MUSIC_GENRE . "
                          order by music_genre_name";

  $music_genres = $db->Execute($music_genres_query);

  if ($music_genres->RecordCount()>0) {
    $number_of_rows = $music_genres->RecordCount()+1;

// Display a list
    $music_genres_array = array();
    if (!isset($_GET['music_genre_id']) || $_GET['music_genre_id'] == '' ) {
      $music_genres_array[] = array('id' => '', 'text' => PULL_DOWN_ALL);
    } else {
      $music_genres_array[] = array('id' => '', 'text' => PULL_DOWN_MUSIC_GENRES);
    }

    while (!$music_genres->EOF) {
      $music_genre_name = ((strlen($music_genres->fields['music_genre_name']) > (int)MAX_DISPLAY_MUSIC_GENRES_NAME_LEN) ? substr($music_genres->fields['music_genre_name'], 0, (int)MAX_DISPLAY_MUSIC_GENRES_NAME_LEN) . '..' : $music_genres->fields['music_genre_name']);
      $music_genres_array[] = array('id' => $music_genres->fields['music_genre_id'],
                                       'text' => $music_genre_name);

      $music_genres->MoveNext();
    }
      require($template->get_template_dir('tpl_music_genres_select.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_music_genres_select.php');

    $title = '<label>' . BOX_HEADING_MUSIC_GENRES . '</label>';
    $title_link = false;
    require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
  }
