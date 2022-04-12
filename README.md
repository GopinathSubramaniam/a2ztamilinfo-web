# a2ztamilinfo-web

Solved the breadcrumb error
1. open page D:\WORKSPACE\PROJECTS\a2ztamilinfo-web\wp-content\themes\chromenews\lib\breadcrumb-trail\inc\breadcrumbs.php
2. Inside the trail() function copy paste the below line

$item = !empty($matches) ? preg_replace('/(<a.*?)([\'"])>/i', '$1$2 itemprop=$2item$2>', $item) : sprintf('<a href="%s" itemprop="item">%s</a>', esc_url( $link_item ), $item );

#### Update database data
UPDATE td_options SET option_value = REPLACE(option_value, 'http://localhost/', 'http://localhost/a2ztamilinfo-web') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE td_posts SET guid = REPLACE(guid, 'http://localhost/','http://localhost/a2ztamilinfo-web');

UPDATE td_posts SET post_content = REPLACE(post_content, 'http://localhost/', 'http://localhost/a2ztamilinfo-web');

UPDATE td_postmeta SET meta_value = REPLACE(meta_value, 'http://localhost/', 'http://localhost/a2ztamilinfo-web');


#### Copy content to server
scp -r -oHostKeyAlgorithms=+ssh-dss tamilpedia.zip fullsm3q@103.195.185.187:/home4/fullsm3q/public_html/