<?php

$stores = [
    "https://www.okala.com/store/2319",
    "https://www.okala.com/store/10458",
    "https://www.okala.com/store/9871",
    "https://www.okala.com/store/9652",
    "https://www.okala.com/store/2318",
    "https://www.okala.com/store/10381",
    "https://www.okala.com/store/9020",
    "https://www.okala.com/store/9768",
    "https://www.okala.com/store/8840",
    "https://www.okala.com/store/5989",
    "https://www.okala.com/store/10650",
    "https://www.okala.com/store/7500",
    "https://www.okala.com/store/8131",
    "https://www.okala.com/store/9867",
    "https://www.okala.com/store/7791",
    "https://www.okala.com/store/8729",
    "https://www.okala.com/store/9991",
    "https://www.okala.com/store/8662",
];

$categories = [
    "https://www.okala.com/store/2319/browse/kalabarg?rootId=1467",
    "https://www.okala.com/store/2319/browse/refreshments?rootId=1467",
    "https://www.okala.com/store/2319/browse/dairy-products?rootId=1462",
    "https://www.okala.com/store/2319/browse/groceries?rootId=1461",
    "https://www.okala.com/store/2319/browse/home-hygiene?rootId=1471",
    "https://www.okala.com/store/2319/browse/beverages?rootId=1465",
    "https://www.okala.com/store/2319/browse/spices?rootId=1469",
    "https://www.okala.com/store/2319/browse/canned-ready-food?rootId=1464",
    "https://www.okala.com/store/2319/browse/cosmetics-hygiene?rootId=1472",
    "https://www.okala.com/store/2319/browse/proteins?rootId=1463",
    "https://www.okala.com/store/2319/browse/breakfast-goods?rootId=1466",
    "https://www.okala.com/store/2319/browse/home-stuff?rootId=1473",
    "https://www.okala.com/store/2319/browse/baby-mother-care?rootId=1474",
    "https://www.okala.com/store/2319/browse/fruits-vegetables?rootId=1470",
    "https://www.okala.com/store/2319/browse/nuts-sweets?rootId=1468",
    "https://www.okala.com/store/2319/browse/multiples?rootId=1850",
];

function fetch_get(string $url): array|string|null {
    $headers = [
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'accept-language: en-US,en;q=0.9,fa;q=0.8,it;q=0.7',
        'cache-control: no-cache',
        'pragma: no-cache',
        'priority: u=0, i',
        'sec-ch-ua: "Not)A;Brand";v="8", "Chromium";v="138", "Google Chrome";v="138"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: "Windows"',
        'sec-fetch-dest: document',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: none',
        'sec-fetch-user: ?1',
        'upgrade-insecure-requests: 1',
    ];

    $cookie = 'analytics_token=cb69e189-3d01-e610-8322-c5ff11918450; _ga=GA1.1.1425407608.1760715667; analytics_campaign={%22source%22:%22takhfifhot.com%22%2C%22medium%22:%22referral%22}; unique_id=64fe04da-484c-4b41-b9ba-9390a077ebcb; _gcl_au=1.1.913143169.1776721055; TS01c37a3d=01f0c73cc98597ed05c8d78d040ba9b4142ea04edd5d42a77ed505453894a93c40199e02ef7889ab52cae8ae2e18693fee892a0212; user_uuid=32063c6e-098f-437f-8777-291d5d7c3786; checkTenant=true; metrix_user_id=null; advertising_id=null; idfa=null; _clck=14u8btu%5E2%5Eg6g%5E0%5E2116; yektanet_session_last_activity=5/29/2026; inapp-modal-visited=5.0; inActivityStatus=true; sessionId=2958b08b-3627-4d55-be9d-dd819d4c9cd9; sessionStartTime=Fri%20May%2029%202026%2013:52:07%20GMT+0330%20(Iran%20Standard%20Time); analytics_session_token=c9bf2716-dcfe-19b5-537c-c40cb308f3ed; refresh_token=0D63E727017591A5AC4A2F4B68BE44ADE63559587E5728BE5B1441C974376431; TS0163d06f=01f0c73cc9a44c902de1b133b3601b3daed99af66420c1687a81718b5389bff5c545160feafd0ac88d46608c5d36dcacc1a79b8428b2a008a7a8ee926d709b22ad2d4571b0; token=eyJhbGciOiJSUzI1NiIsImtpZCI6IjEzRjRFNUExQ0NGNUU4NjRBQTI3MzgyMkM3OENERTIxQTM4MkRBOENSUzI1NiIsInR5cCI6ImF0K2p3dCIsIng1dCI6IkVfVGxvY3oxNkdTcUp6Z2l4NHplSWFPQzJvdyJ9.eyJuYmYiOjE3ODAwNTAyMTQsImV4cCI6MTc4MDA1MjAxNCwiaXNzIjoiaHR0cDovL2NlcmJlcnVzLm1lbWJlcnNoaXAiLCJjbGllbnRfaWQiOiJjdXN0b21lcl9jbGllbnRfaWQiLCJzdWIiOiIxMTE1NzA1MCIsImF1dGhfdGltZSI6MTc4MDA1MDIxNCwiaWRwIjoibG9jYWwiLCJ1c2VySWQiOiIxMTE1NzA1MCIsInVzZXJuYW1lIjoiMDkxMzQ5NTA3ODciLCJhbHRlcm5hdGl2ZUN1c3RvbWVySWQiOiIxMTE1NzA1MCIsInRlbmFudCI6Im9rYWxhIiwidG9rZW4taWQiOiJjMjc4OTcyNi0wNjhlLTQ3MDYtYTgwYi00ZDNjMzBmNzkxMzVfOWFjYTg2ODItMjA3YS00MjkwLTgxMzAtZjYxNWNiZGM2NWJiIiwiY2VyYmVydXNJZCI6ImMyNzg5NzI2LTA2OGUtNDcwNi1hODBiLTRkM2MzMGY3OTEzNSIsImp0aSI6Ijc2ODVFNDU3NzY1MkE2NDQyRDc2QzAxN0IxOEUwRjcyIiwiaWF0IjoxNzgwMDUwMjE0LCJzY29wZSI6WyJvZmZsaW5lX2FjY2VzcyJdLCJhbXIiOlsiY3VzdG9tZXJfZ3JhbnRfdHlwZSJdfQ.Tl5GbNCwoeL8h84_5LPOpQmKfHZuDGWHe1IooqEUdY5He40jkzGto3mThuICC0eJQT4ja0TBAo6XYw5gsy6qEeTM-92y-NxcNRKUOnErk1PgxBgSOhFlQPir1l0Hzv5QIS_extcB6bZz2y2zpxysEfAeGwBAF07Z9r8Sx_pwbKB3JOhFkT-TVBZQfJdE4ArIJY5HTfNdsPx7vMGd4d9gJ85fpGg9ZdIWDdzhNH0lL47ayOoIh8mWbDcYf5g99pMx50AhvYnEbFvTKwybhWQtUugSMroHLl2R9sgPKAlLhww1hzXVtrZaqCeea8PrjrtKpy0-ulI1vzdgX2FgrKu4fQ; tokenMS=eyJhbGciOiJSUzI1NiIsImtpZCI6IjEzRjRFNUExQ0NGNUU4NjRBQTI3MzgyMkM3OENERTIxQTM4MkRBOENSUzI1NiIsInR5cCI6ImF0K2p3dCIsIng1dCI6IkVfVGxvY3oxNkdTcUp6Z2l4NHplSWFPQzJvdyJ9.eyJuYmYiOjE3ODAwNTAyMTQsImV4cCI6MTc4MDA1MjAxNCwiaXNzIjoiaHR0cDovL2NlcmJlcnVzLm1lbWJlcnNoaXAiLCJjbGllbnRfaWQiOiJjdXN0b21lcl9jbGllbnRfaWQiLCJzdWIiOiIxMTE1NzA1MCIsImF1dGhfdGltZSI6MTc4MDA1MDIxNCwiaWRwIjoibG9jYWwiLCJ1c2VySWQiOiIxMTE1NzA1MCIsInVzZXJuYW1lIjoiMDkxMzQ5NTA3ODciLCJhbHRlcm5hdGl2ZUN1c3RvbWVySWQiOiIxMTE1NzA1MCIsInRlbmFudCI6Im9rYWxhIiwidG9rZW4taWQiOiJjMjc4OTcyNi0wNjhlLTQ3MDYtYTgwYi00ZDNjMzBmNzkxMzVfOWFjYTg2ODItMjA3YS00MjkwLTgxMzAtZjYxNWNiZGM2NWJiIiwiY2VyYmVydXNJZCI6ImMyNzg5NzI2LTA2OGUtNDcwNi1hODBiLTRkM2MzMGY3OTEzNSIsImp0aSI6Ijc2ODVFNDU3NzY1MkE2NDQyRDc2QzAxN0IxOEUwRjcyIiwiaWF0IjoxNzgwMDUwMjE0LCJzY29wZSI6WyJvZmZsaW5lX2FjY2VzcyJdLCJhbXIiOlsiY3VzdG9tZXJfZ3JhbnRfdHlwZSJdfQ.Tl5GbNCwoeL8h84_5LPOpQmKfHZuDGWHe1IooqEUdY5He40jkzGto3mThuICC0eJQT4ja0TBAo6XYw5gsy6qEeTM-92y-NxcNRKUOnErk1PgxBgSOhFlQPir1l0Hzv5QIS_extcB6bZz2y2zpxysEfAeGwBAF07Z9r8Sx_pwbKB3JOhFkT-TVBZQfJdE4ArIJY5HTfNdsPx7vMGd4d9gJ85fpGg9ZdIWDdzhNH0lL47ayOoIh8mWbDcYf5g99pMx50AhvYnEbFvTKwybhWQtUugSMroHLl2R9sgPKAlLhww1hzXVtrZaqCeea8PrjrtKpy0-ulI1vzdgX2FgrKu4fQ; user={%22id%22:11157050%2C%22alternativeId%22:%22c2789726-068e-4706-a80b-4d3c30f79135%22%2C%22alternativeCustomerId%22:11157050%2C%22firstName%22:%22%D8%B3%DB%8C%D8%AF%D8%B9%D9%84%DB%8C%22%2C%22lastName%22:%22%D9%85%D8%AD%D9%85%D8%AF%DB%8C%D9%87%22%2C%22birthDate%22:%222000-05-27T19:16:00%22%2C%22genderCode%22:1%2C%22emailAddress%22:%22maxbasecode@gmail.com%22%2C%22userName%22:%2209134950787%22%2C%22mobilePhone%22:%2209134950787%22%2C%22stateCode%22:1%2C%22customerIsLoggedInForFirstTime%22:false%2C%22firstLoginDateTime%22:%222022-08-03T19:34:28.54%22%2C%22state%22:false%2C%22hasAddress%22:false%2C%22hasPassword%22:false%2C%22birthDateEpoch%22:959438760}; _clsk=g1oqzp%5E1780050648228%5E33%5E0%5Er.clarity.ms%2Fcollect; _ga_FBKCT7S8Z5=GS2.1.s1780050130$o10$g1$t1780050655$j22$l0$h211240195';

    $options = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36',
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_TIMEOUT => 10,
    ];

    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($error || $http_code !== 200 || !$response) {
        return null;
    }

    $decoded = json_decode($response, true);
    return json_last_error() === JSON_ERROR_NONE ? $decoded : $response;
}

function clean_store_urls(array $urls): array {
    return array_values(array_filter(array_map(function ($url) {
        $path = parse_url($url, PHP_URL_PATH);
        $parts = explode('/', trim($path, '/'));
        $storeId = end($parts);
        return ctype_digit($storeId) ? $storeId : null;
    }, $urls)));
}

function clean_category_urls(array $urls): array {
    return array_values(array_filter(array_map(function ($url) {
        $path = parse_url($url, PHP_URL_PATH) ?? '';
        $parts = explode('/', trim($path, '/'));
        if (count($parts) >= 4 && $parts[2] === 'browse') {
            $category = strtolower($parts[3]);
            return !empty($category) ? $category : null;
        }
        return null;
    }, $urls)));
}

$clean_stores = clean_store_urls($stores);
$clean_categories = clean_category_urls($categories);

echo "\033[1;34m🔍 Cleaned " . count($clean_stores) . " stores and " . count($clean_categories) . " categories\033[0m\n\n";

$total = count($clean_stores) * count($clean_categories);
$counter = 0;

foreach ($clean_stores as $store_id) {
    echo "\n🛒 Store ID: \033[1;32m$store_id\033[0m\n";
    foreach ($clean_categories as $category_slug) {
        echo "  📂 Category: \033[1;36m$category_slug\033[0m\n";
        $page = 1;
        $has_data = true;
        while ($has_data) {
            $file_dir = "data/search/$store_id/$category_slug";
            if (!is_dir($file_dir)) {
                mkdir($file_dir, 0777, true);
                echo "    📁 Created directory: $file_dir\n";
            }

            $file_path = "$file_dir/$page.json";
            if (file_exists($file_path)) {
                echo "    ✅ Page $page already exists. Skipping...\n";
                $page++;
                continue;
            }

            if (file_exists($file_path)) {
                echo "    🔁 Page $page already exists. Loading from file...\n";
                $data = json_decode(file_get_contents($file_path), true);
            } else {
                $api_url = "https://apigateway.okala.com/api/Search/v1/Product/Search?StoreIds=$store_id&CategorySlugs=$category_slug&HasQuantity=true&Page=$page&Take=16&excludeShoppingCard=false";
                echo "    🌐 Fetching Page $page... ";
                $data = fetch_get($api_url);

                if ($data === null) {
                    echo "\033[1;31m❌ Error or no response\033[0m $api_url\n";
                    break;
                }

                file_put_contents($file_path, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                echo "\033[1;32m✅ Saved page data\033[0m ";
            }

            $products = $data["entities"] ?? [];
            if (empty($products)) {
                echo "\033[1;33m⚠️ No more data\033[0m $api_url\n";
                $has_data = false;
                break;
            }

            file_put_contents($file_path, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            echo "\033[1;32m✅ Saved " . count($products) . " products\033[0m\n";

            foreach ($products as $product_item) {
                $product_id = $product_item["id"];
                $product_dir = "data/product/$product_id";
                $product_store_dir = "$product_dir/$store_id";
                if (!is_dir($product_store_dir)) {
                    mkdir($product_store_dir, 0777, true);
                    echo "      📁 Created product dir: $product_store_dir\n";
                }

                $file_detail_path = "$product_store_dir/detail.json";
                if (!file_exists($file_detail_path)) {
                    $detail_url = "https://apigateway.okala.com/api/azarakhsh/v1/CatalogItem/GetCatalogItemById?storeId=$store_id&catalogId=$product_id";
                    $detail_data = fetch_get($detail_url);
                    if ($detail_data) {
                        file_put_contents($file_detail_path, json_encode($detail_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                        echo "         📝 Saved detail.json\n";
                    } else {
                        echo "         ❌ Failed to fetch detail for $product_id\n";
                    }
                } else {
                    echo "         ✅ detail.json exists\n";
                }

                $file_features_path = "$product_dir/features.json";
                if (!file_exists($file_features_path)) {
                    $features_url = "https://apigateway.okala.com/api/voyager/C/ProductSearch/GetProductPropertyForReact?productId=$product_id";
                    $features_data = fetch_get($features_url);
                    if ($features_data) {
                        file_put_contents($file_features_path, json_encode($features_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                        echo "         📝 Saved features.json\n";
                    } else {
                        echo "         ❌ Failed to fetch features for $product_id\n";
                    }
                } else {
                    echo "         ✅ features.json exists\n";
                }
            }

            $page++;
            $counter++;
            usleep(250_000);
        }
    }
}

echo "\n🎉 \033[1;35mDone!\033[0m Processed $counter pages across $total combinations.\n";
