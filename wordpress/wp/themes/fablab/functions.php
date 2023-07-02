<?php
// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}

function add_theme_scripts()
{
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', 1.1, true);
    wp_enqueue_script('moment', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('moment-be', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/nl-be.js', array('jquery'), 1.1, true);
    wp_enqueue_script('fullcalendar', get_stylesheet_directory_uri() . '/js/fullcalendar/fullcalendar.min.js', array('jquery'), 1.1, true);
    // wp_enqueue_script('fullcalendar', get_stylesheet_directory_uri() . '/js/fullcalendar/dist/index.global.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('gcal', get_stylesheet_directory_uri() . '/js/fullcalendar/gcal.min.js', array('fullcalendar'), 1.1, true);
    wp_enqueue_script('calendar', get_stylesheet_directory_uri() . '/js/calendar.js', array('fullcalendar'), 1.1, true);
   wp_enqueue_style( 'fullcalendar', get_stylesheet_directory_uri() . '/css/fullcalendar.min.css', false, '1.1', 'screen');
   wp_enqueue_style( 'fullcalendar-print', get_stylesheet_directory_uri() . '/css/fullcalendar.print.min.css', array('fullcalendar'), '1.1', 'print');
}


add_action('admin_head', 'fix_svg');
add_action('wp_enqueue_scripts', 'add_theme_scripts');

