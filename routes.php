<?php

require_once __DIR__ . '/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'views/index.php');
get('/partners', 'views/partners.php');
get('/about-us', 'views/about.php');
get('/news', 'views/news.php');
get('/product', 'views/product.php');
get('/product.php', 'views/product.php');
get('/category', 'views/category.php');

get('/product_page', 'views/product_page.php');
get('/view-news', 'views/news.php');
get('/read-news', 'views/news_page.php');
get('/contacts', 'views/contacts.php');
get('/admin', 'admin/admin.php');
get('/admin/view-vendor', 'admin/view_vendor.php');
get('/admin/view-order', 'admin/view_order.php');
get('/admin/view-client', 'admin/view_client.php');
get('/admin/view-news', 'admin/view_news.php');
get('/admin/view-product', 'admin/view_product.php');
get('/admin/view-product_info', 'admin/view_product_info.php');
get('/admin/view-product-settings', 'admin/view_product_settings.php');
get('/admin/view-product_images', 'admin/view_product_images.php');
get('/admin/view-manufacturers', 'admin/view_manufacturers.php');
get('/admin/view-offers', 'admin/view_offers.php');


get('/admin/create-vendor', 'admin/create_vendor.php');
get('/admin/create-manufacturer', 'admin/create_manufacturer.php');
get('/admin/create-product', 'admin/create_product.php');
get('/admin/create-product-info', 'admin/create_product_info.php');
get('/admin/create-product-image', 'admin/create_product_image.php');


get('/admin/update-vendor', 'admin/update_vendor.php');
get('/admin/update-client', 'admin/update_client.php');
get('/admin/update-news', 'admin/update_news.php');
get('/admin/update-product', 'admin/update_product.php');
get('/admin/update-product-info', 'admin/update_product_info.php');
get('/admin/update-manufacturer', 'admin/update_manufacturer.php');


get('/objects/order', 'objects/order.php');
get('/admin/delete_order.php', 'admin/delete_order.php');
get('/admin/delete_vendor.php', 'admin/delete_vendor.php');
get('/admin/delete_client.php', 'admin/delete_client.php');
get('/admin/delete_news.php', 'admin/delete_news.php');
get('/admin/delete_product.php', 'admin/delete_product.php');
get('/admin/delete_product_info.php', 'admin/delete_product_info.php');
get('/admin/delete_manufacturer.php', 'admin/delete_manufacturer.php');
get('/admin/delete_product_image.php', 'admin/delete_product_image.php');
get('/admin/delete_offer.php', 'admin/delete_offer.php');


get('/admin/read-order', 'admin/read_order.php');
get('/admin/read-vendor', 'admin/read_vendor.php');
get('/admin/read-client', 'admin/read_client.php');
get('/admin/read-news', 'admin/read_news.php');
get('/admin/read-product', 'admin/read_product.php');
get('/admin/read-product-info', 'admin/read_product_info.php');
get('/admin/read-manufacturer', 'admin/read_manufacturer.php');
get('/admin/read-offer', 'admin/read_offer.php');


get('/admin/exit', 'admin/exit.php');
get('/admin/create-news', 'admin/create_news.php');
get('/audio/notification.mp3', 'audio/notification.mp3');


post('/admin', 'admin/admin.php');
post('/admin/read-vendor', 'admin/read_vendor.php');
post('/admin/read-news', 'admin/read_news.php');
post('/admin/read-product', 'admin/read_product.php');
post('/admin/read-product-info', 'admin/read_product_info.php');
post('/admin/read-manufacturer', 'admin/read_manufacturer.php');
post('/admin/read-offer', 'admin/read_offer.php');


post('/admin/readNew', 'admin/readNew.php');
post('/admin/view-order', 'admin/view_order.php');
post('/admin/view-client', 'admin/view_client.php');
post('/admin/view-news', 'admin/view_news.php');
post('/admin/view-product', 'admin/view_product.php');
post('/admin/view-product-settings', 'admin/view_product_settings.php');
post('/admin/view-product_info', 'admin/view_product_info.php');
post('/admin/view-manufacturers', 'admin/view_manufacturers.php');
post('/admin/view-product_images', 'admin/view_product_images.php');
post('/admin/view-offers', 'admin/view_offers.php');


post('/objects/create-deal', 'objects/ajax_create_deal.php');
post('/objects/create-order', 'objects/ajax_create_order.php');
post('/objects/create-client', 'objects/ajax_create_client.php');
post('/admin/create-product', 'admin/create_product.php');
post('/admin/create-product-info', 'admin/create_product_info.php');
post('/admin/create-manufacturer', 'admin/create_manufacturer.php');
post('/admin/create-product-image', 'admin/create_product_image.php');


post('/admin/update-vendor', 'admin/update_vendor.php');
post('/admin/update-client', 'admin/update_client.php');
post('/admin/update-news', 'admin/update_news.php');
post('/admin/update-product', 'admin/update_product.php');
post('/admin/update-product-info', 'admin/update_product_info.php');
post('/admin/update-manufacturer', 'admin/update_manufacturer.php');


post('/admin/create-vendor', 'admin/create_vendor.php');
post('/admin/create-news', 'admin/create_news.php');




post('/', 'views/index.php');
post('/objects/order', 'objects/order.php');


post('/admin/search', 'admin/search.php');
get('/admin/search', 'admin/search.php');

post('/admin/search_product_info', 'admin/search_product_info.php');
get('/admin/search_product_info', 'admin/search_product_info.php');

post('/admin/search_news', 'admin/search_news.php');
get('/admin/search_news', 'admin/search_news.php');


// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
get('/user/$id', 'views/user');

// Dynamic GET. Example with 2 variables
// The $name will be available in full_name.php
// The $last_name will be available in full_name.php
// In the browser point to: localhost/user/X/Y
get('/user/$name/$last_name', 'views/full_name.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
get('/product/$type/color/$color', 'product.php');

// A route with a callback
get('/callback', function () {
  echo 'Callback executed';
});

// A route with a callback passing a variable
// To run this route, in the browser type:
// http://localhost/user/A
get('/callback/$name', function ($name) {
  echo "Callback executed. The name is $name";
});

// A route with a callback passing 2 variables
// To run this route, in the browser type:
// http://localhost/callback/A/B
get('/callback/$name/$last_name', function ($name, $last_name) {
  echo "Callback executed. The full name is $name $last_name";
});

// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/default.php');
