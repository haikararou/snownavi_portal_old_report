<?php
//文字列置換
/*function replacement_content($content){
$replace = array(
//'変更前' => '変更後'
//複数行ある場合は「,」で繋いでください。最終行には「,」不要です
//'http://www.snownavi.com/' => 'https://www.snownavi.com/',
'http://www.snownavi.com/' => 'https://www.snownavi.com/'
);
$content = str_replace(array_keys($replace), $replace, $content);
return $content;
}
add_filter('wp_get_attachment_url', 'replacement_content');*/
//add_filter('the_content', 'replacement_content');

//プラグイン更新通知を非表示
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
//本体のアップデート通知を非表示
add_filter('pre_site_transient_update_core', create_function('$a', "return  null;"));

function custom_login_logo() { ?>
	<style>
		.login #login h1 a {
			width: 300px;
			height: 50px;
			background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo_login.png) no-repeat 0 0;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );

//月別アーカイブ
function my_custom_post_type_archive_where( $where, $args ){
    $post_type  = isset( $args['post_type'] ) ? $args['post_type'] : 'post';
    $where = "WHERE post_type = '$post_type' AND post_status = 'publish'";
    return $where;
}
add_filter( 'getarchives_where', 'my_custom_post_type_archive_where', 10, 2 );

//記事内の一番最初の画像を取得してサムネイル画像表示
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
        $first_img = "https://www.snownavi.com/cms/wp-content/uploads/2015/11/ph03-267x200.png";
    }
    return $first_img;
}

// function dp_display_pluginhandles() {
//   $wp_styles = wp_styles();
//   $wp_scripts = wp_scripts();
//   $handlename = '<!--<dl><dt>Queuing scripts</dt><dd><ul>';
//   foreach( $wp_styles->queue as $handle ) :
//     $handlename .=  '<li>' . $handle .'</li>';
//   endforeach;
//   $handlename .= '</ul></dd>';
//   $handlename .= '<dt>Queuing styles</dt><dd><ul>';
//   foreach( $wp_scripts->queue as $handle ) :
//     $handlename .=  '<li>' . $handle .'</li>';
//   endforeach;
//   $handlename .= '</ul></dd></dl>-->';
//   return $handlename;
// }
// add_shortcode( 'pluginhandles', 'dp_display_pluginhandles');

// 特定のページにてプラグインの不要なCSSを無効化する
//https://digipress.info/wordpress/tips/how-to-disable-plugin-css-js-in-specific-pages/
//https://www.nxworld.net/wp-deregister-style-script.html
//https://www.webdesignleaves.com/pr/wp/wp_func_style_script.html
function deregister_script_files() {
  if ( is_singular( 'map' ) ) {
    // wp_deregister_script('jquery');
    wp_dequeue_style( 'wpgmp-frontend' );
    wp_dequeue_script( 'wpgmp-google-api' );
    wp_dequeue_script( 'wpgmp-google-map-main' );
    wp_dequeue_script( 'wpgmp-map' );
    wp_dequeue_script( 'wpgmp-backend-google-api' );
    wp_dequeue_script( 'wpgmp-backend-google-maps' );

    // wp_deregister_script( 'wpgmp-google-api' );
    // wp_deregister_script( 'wpgmp-google-map-main' );
    // wp_deregister_style( 'wpgmp-frontend' );
  }
}
add_action( 'wp_enqueue_scripts', 'deregister_script_files' );

// function new_deregister_script() {
// if ( !is_admin() || is_singular( 'map' )) {
//     wp_deregister_script('jquery');
//     wp_dequeue_script( 'wpgmp-google-api' );
//   }
// }
// add_action('init', 'new_deregister_script');

//カレンダー土日クラス
function add_week_class2calendar( $calendar_output ) {
    $week_map = array(
        'mon' => '月曜日',
        'tue' => '火曜日',
        'wed' => '水曜日',
        'thu' => '木曜日',
        'fri' => '金曜日',
        'sat' => '土曜日',
        'sun' => '日曜日',
    );

    $regex = '/<th scope="col" title="([^"]+?)"/';
    $num = preg_match_all( $regex, $calendar_output, $m );

    if ( $num ) {
        $replace = array();
        for ( $i = 0; $i < $num; $i++ ) {
            $replace[$i] = '<th scope="col" class="' . array_search( $m[1][$i], $week_map ) . '" title="' . $m[1][$i] . '"';
        }
        $calendar_output = str_replace( $m[0], $replace, $calendar_output );
    }
    return $calendar_output;
}
add_filter( 'get_calendar', 'add_week_class2calendar' );

function add_week_classes2calendar( $calendar_output ) {
    global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

    if ( isset($_GET['w']) )
        $w = ''.intval($_GET['w']);

    // Let's figure out when we are
    if ( !empty($monthnum) && !empty($year) ) {
        $thismonth = ''.zeroise(intval($monthnum), 2);
        $thisyear = ''.intval($year);
    } elseif ( !empty($w) ) {
        // We need to get the month from MySQL
        $thisyear = ''.intval(substr($m, 0, 4));
        $d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
        $thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
    } elseif ( !empty($m) ) {
        $thisyear = ''.intval(substr($m, 0, 4));
        if ( strlen($m) < 6 )
                $thismonth = '01';
        else
                $thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
    } else {
        $thisyear = gmdate('Y', current_time('timestamp'));
        $thismonth = gmdate('m', current_time('timestamp'));
    }

    $jp_holidays = get_option( 'jp_holidays' );

    if ( ( ! $jp_holidays || !isset( $jp_holidays[$thisyear . $thismonth] ) || $jp_holidays[$thisyear . $thismonth]['expire'] < time() ) && $thisyear >= 2000 ) {
        $holiday_api = 'http://www.finds.jp/ws/calendar.php?php&y=' . $thisyear . '&m=' . $thismonth . '&t=h&l=2';
        $ch = curl_init( $holiday_api );
        curl_setopt( $ch, CURLOPT_FAILONERROR, true );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
        $source = curl_exec( $ch );
        curl_close( $ch );
        if ( $source ) {
            $results = maybe_unserialize( $source );
            if ( isset( $results['status'] ) && $results['status'] == 200 ) {
                if ( ! is_array( $jp_holidays ) ) {
                    $jp_holidays = array();
                }
                $jp_holidays[$thisyear . $thismonth] = array();
                if ( isset( $results['result']['day'] ) ) {
                    foreach ( $results['result']['day'] as $hday ) {
                        $jp_holidays[$thisyear . $thismonth][$hday['mday']] = array( 'type' => $hday['htype'], 'name' => $hday['hname'] );
                    }
                    $jp_holidays[$thisyear . $thismonth]['expire'] = time() + 365 * 24 * 3600;
                }
                update_option( 'jp_holidays', $jp_holidays );
            }
        }
    }

    $yar = (int)$thisyear;
    $mon = (int)$thismonth;
    $day = 1;
    $regex = array();
    while( checkdate( $mon, $day, $yar ) ) {
        $classes = array();
        $wday = date( 'w', strtotime( sprintf( '%04d-%02d-%02d', $yar, $mon, $day ) ) );
        switch ( $wday ) {
        case 0 :
            $classes[] = 'sun';
            break;
        case 6 :
            $classes[] = 'sat';
            break;
        default :
        }
        if ( $jp_holidays && is_array( $jp_holidays ) && count( $jp_holidays[$thisyear . $thismonth] ) && isset( $jp_holidays[$thisyear . $thismonth][$day] ) ) {
            $classes[] = 'holiday';
        }
        $class = '';

        if ( count( $classes ) ) {
            $class =  ' class="' . implode( ' ', $classes ) . '"';
        }
        if ( $class ) {
            $regex['|<td( id="today")?>(()?' . $day . '()?)</td>|'] = '<td$1' . $class . '>$2</td>';
        }
        $day++;
    }

    $calendar_output = preg_replace( array_keys( $regex ), $regex, $calendar_output );

    return $calendar_output;
}
add_filter( 'get_calendar', 'add_week_classes2calendar', 0 );

//カスタムフィールド画像
function get_custom_img($fname,$fsize) {
 $attachment_id = get_field($fname);
 $image = wp_get_attachment_image_src( $attachment_id, $fsize );
 $attachment = get_post( get_field($fname) );
 $alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
 $image_title = $attachment->post_title;
 $fimgobj = '<img src="'.$image[0].'" width="'.$image[1].'" height="'.$image[2].'" alt="'.$alt.'" title="'.$image_title.'">';
 return $fimgobj;
}

add_image_size('stay_s',400,267);
add_image_size('stay_l',800,533);
add_image_size('ski_s',300,200);
add_image_size('stay_top',1000,400);
add_image_size('tokusen_m',800,500);
add_image_size('tokusen_s',320,240);
add_image_size('after_s',480,360);
add_image_size('bn_top01',400,190);
add_image_size('bn_top02',400,160);
add_image_size('bn_top03',525,120);
add_image_size('banner10',178,134);
add_image_size('top_case',450,426);
add_image_size('bn_sidebar',290,80);

//カスタム投稿タイプ用カレンダー
function get_cpt_calendar($cpt, $initial = true, $echo = true) {
    global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

    $cache = array();
    $key = md5( $m . $monthnum . $year );
    if ( $cache = wp_cache_get( 'get_calendar', 'calendar' ) ) {
        if ( is_array($cache) && isset( $cache[ $key ] ) ) {
            if ( $echo ) {
                echo apply_filters( 'get_calendar',  $cache[$key] );
                return;
            } else {
                return apply_filters( 'get_calendar',  $cache[$key] );
            }
        }
    }

    if ( !is_array($cache) )
        $cache = array();

    // Quick check. If we have no posts at all, abort!
    if ( !$posts ) {
        $gotsome = $wpdb->get_var("SELECT 1 as test FROM $wpdb->posts WHERE post_type = '$cpt' AND post_status = 'publish' LIMIT 1");
        if ( !$gotsome ) {
            $cache[ $key ] = '';
            wp_cache_set( 'get_calendar', $cache, 'calendar' );
            return;
        }
    }

    if ( isset($_GET['w']) )
        $w = ''.intval($_GET['w']);

    // week_begins = 0 stands for Sunday
    $week_begins = intval(get_option('start_of_week'));

    // Let's figure out when we are
    if ( !empty($monthnum) && !empty($year) ) {
        $thismonth = ''.zeroise(intval($monthnum), 2);
        $thisyear = ''.intval($year);
    } elseif ( !empty($w) ) {
        // We need to get the month from MySQL
        $thisyear = ''.intval(substr($m, 0, 4));
        $d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
        $thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
    } elseif ( !empty($m) ) {
        $thisyear = ''.intval(substr($m, 0, 4));
        if ( strlen($m) < 6 )
                $thismonth = '01';
        else
                $thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
    } else {
        $thisyear = gmdate('Y', current_time('timestamp'));
        $thismonth = gmdate('m', current_time('timestamp'));
    }

    $unixmonth = mktime(0, 0 , 0, $thismonth, 1, $thisyear);
    $last_day = date('t', $unixmonth);

    // Get the next and previous month and year with at least one post
    $previous = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_date < '$thisyear-$thismonth-01'
        AND post_type = '$cpt' AND post_status = 'publish'
            ORDER BY post_date DESC
            LIMIT 1");
    $next = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_date > '$thisyear-$thismonth-{$last_day} 23:59:59'
        AND post_type = '$cpt' AND post_status = 'publish'
            ORDER BY post_date ASC
            LIMIT 1");

    /* translators: Calendar caption: 1: month name, 2: 4-digit year */
    $calendar_caption = _x('%1$s %2$s', 'calendar caption');
    $calendar_output = '<table id="wp-calendar">
    <caption>' . sprintf($calendar_caption, $wp_locale->get_month($thismonth), date('Y', $unixmonth)) . '</caption>
    <thead>
    <tr>';

    $myweek = array();

    for ( $wdcount=0; $wdcount<=6; $wdcount++ ) {
        $myweek[] = $wp_locale->get_weekday(($wdcount+$week_begins)%7);
    }

    foreach ( $myweek as $wd ) {
        $day_name = (true == $initial) ? $wp_locale->get_weekday_initial($wd) : $wp_locale->get_weekday_abbrev($wd);
        $wd = esc_attr($wd);
        $calendar_output .= "\n\t\t<th scope=\"col\" title=\"$wd\">$day_name</th>";
    }

    $calendar_output .= '
    </tr>
    </thead>

    <tfoot>
    <tr>';

    if ( $previous ) {
        $calendar_output .= "\n\t\t".'<td colspan="3" id="prev"><a href="' . get_month_link($previous->year, $previous->month) . '?post_type='.$cpt.'" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($previous->month), date('Y', mktime(0, 0 , 0, $previous->month, 1, $previous->year)))) . '">&laquo; ' . $wp_locale->get_month_abbrev($wp_locale->get_month($previous->month)) . '</a></td>';
    } else {
        $calendar_output .= "\n\t\t".'<td colspan="3" id="prev" class="pad">&nbsp;</td>';
    }

    $calendar_output .= "\n\t\t".'<td class="pad">&nbsp;</td>';

    if ( $next ) {
        $calendar_output .= "\n\t\t".'<td colspan="3" id="next"><a href="' . get_month_link($next->year, $next->month) . '?post_type='.$cpt.'" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($next->month), date('Y', mktime(0, 0 , 0, $next->month, 1, $next->year))) ) . '">' . $wp_locale->get_month_abbrev($wp_locale->get_month($next->month)) . ' &raquo;</a></td>';
    } else {
        $calendar_output .= "\n\t\t".'<td colspan="3" id="next" class="pad">&nbsp;</td>';
    }

    $calendar_output .= '
    </tr>
    </tfoot>

    <tbody>
    <tr>';

    // Get days with posts
    $dayswithposts = $wpdb->get_results("SELECT DISTINCT DAYOFMONTH(post_date)
        FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
        AND post_type = '$cpt' AND post_status = 'publish'
        AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'", ARRAY_N);
    if ( $dayswithposts ) {
        foreach ( (array) $dayswithposts as $daywith ) {
            $daywithpost[] = $daywith[0];
        }
    } else {
        $daywithpost = array();
    }

    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'camino') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'safari') !== false)
        $ak_title_separator = "\n";
    else
        $ak_title_separator = ', ';

    $ak_titles_for_day = array();
    $ak_post_titles = $wpdb->get_results("SELECT ID, post_title, DAYOFMONTH(post_date) as dom "
        ."FROM $wpdb->posts "
        ."WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00' "
        ."AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59' "
        ."AND post_type = '$cpt' AND post_status = 'publish'"
    );
    if ( $ak_post_titles ) {
        foreach ( (array) $ak_post_titles as $ak_post_title ) {

                /** This filter is documented in wp-includes/post-template.php */
                $post_title = esc_attr( apply_filters( 'the_title', $ak_post_title->post_title, $ak_post_title->ID ) );

                if ( empty($ak_titles_for_day['day_'.$ak_post_title->dom]) )
                    $ak_titles_for_day['day_'.$ak_post_title->dom] = '';
                if ( empty($ak_titles_for_day["$ak_post_title->dom"]) ) // first one
                    $ak_titles_for_day["$ak_post_title->dom"] = $post_title;
                else
                    $ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . $post_title;
        }
    }

    // See how much we should pad in the beginning
    $pad = calendar_week_mod(date('w', $unixmonth)-$week_begins);
    if ( 0 != $pad )
        $calendar_output .= "\n\t\t".'<td colspan="'. esc_attr($pad) .'" class="pad">&nbsp;</td>';

    $daysinmonth = intval(date('t', $unixmonth));
    for ( $day = 1; $day <= $daysinmonth; ++$day ) {
        if ( isset($newrow) && $newrow )
            $calendar_output .= "\n\t</tr>\n\t<tr>\n\t\t";
        $newrow = false;

        if ( $day == gmdate('j', current_time('timestamp')) && $thismonth == gmdate('m', current_time('timestamp')) && $thisyear == gmdate('Y', current_time('timestamp')) )
            $calendar_output .= '<td id="today">';
        else
            $calendar_output .= '<td>';

        if ( in_array($day, $daywithpost) ) // any posts today?
                $calendar_output .= '<a href="' . get_day_link( $thisyear, $thismonth, $day ) . '?post_type='.$cpt.'" title="' . esc_attr( $ak_titles_for_day[ $day ] ) . "\">$day</a>";
        else
            $calendar_output .= $day;
        $calendar_output .= '</td>';

        if ( 6 == calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins) )
            $newrow = true;
    }

    $pad = 7 - calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins);
    if ( $pad != 0 && $pad != 7 )
        $calendar_output .= "\n\t\t".'<td class="pad" colspan="'. esc_attr($pad) .'">&nbsp;</td>';

    $calendar_output .= "\n\t</tr>\n\t</tbody>\n\t</table>";

    $cache[ $key ] = $calendar_output;
    wp_cache_set( 'get_calendar', $cache, 'calendar' );

    if ( $echo )
        echo apply_filters( 'get_calendar',  $calendar_output );
    else
        return apply_filters( 'get_calendar',  $calendar_output );

}




/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});