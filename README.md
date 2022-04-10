# a2ztamilinfo-web

Solved the breadcrumb error
1. open page D:\WORKSPACE\PROJECTS\a2ztamilinfo-web\wp-content\themes\chromenews\lib\breadcrumb-trail\inc\breadcrumbs.php
2. Inside the trail() function copy paste the below line

$item = !empty($matches) ? preg_replace('/(<a.*?)([\'"])>/i', '$1$2 itemprop=$2item$2>', $item) : sprintf('<a href="%s" itemprop="item">%s</a>', esc_url( $link_item ), $item );
