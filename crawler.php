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
    "https://www.okala.com/store/2319/browse/refreshments?rootId=1467",
    "https://www.okala.com/store/2319/browse/dairy-products?rootId=1462",
    "https://www.okala.com/store/2319/browse/groceries?rootId=1461",
    "https://www.okala.com/store/2319/browse/home-hygiene?rootId=1471",
    "https://www.okala.com/store/2319/browse/Beverages?rootId=1465",
    "https://www.okala.com/store/2319/browse/spices?rootId=1469",
    "https://www.okala.com/store/2319/browse/canned-ready-food?rootId=1464",
    "https://www.okala.com/store/2319/browse/cosmetics-hygiene?rootId=1472",
    "https://www.okala.com/store/2319/browse/proteins?rootId=1463",
    "https://www.okala.com/store/2319/browse/breakfast-goods?rootId=1466",
    "https://www.okala.com/store/2319/browse/home-stuff?rootId=1473",
    "https://www.okala.com/store/2319/browse/baby-mother-care?rootId=1474",
    "https://www.okala.com/store/2319/browse/fruits-vegetables?rootId=1470",
    "https://www.okala.com/store/2319/browse/nuts?rootId=1468",
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

    $cookie = '_gcl_au=1.1.1510460956.1748602831; _ga=GA1.1.379923437.1748602833; analytics_campaign={"source":"github.com","medium":"referral"}; _clck=ostbpu|2|fxu|0|1976; BIGipServerTEK-Prod-NginX-VIP--443=120987564.47873.0000; _ga_FBKCT7S8Z5=GS2.1.s1753293081$o20$g1$t1753294121$j12$l0$h217809384; _clsk=4tibz0|1753294136607|14|1|y.clarity.ms/collect; TS01ac68a0=01f0c73cc9b0a467e79d79c478af9b1a8664c59cc7b3374585adf2affac7a5478bc35a3ba8f37abef4adea8c38c55110c8516c5c6510c8880a56002670135f0724983f10b9; TSb7bc4491027=0841fa63d9ab200069f59feb957064c1e22f15cb330b4a1e8b7fdd883255be2f5cce061027efc363088c739ad8113000a5c8b8b7e1511389860729e05dc6df00b21bd4dee41a8c6b178b28d063b305ba7866707675021925db89ee402444c1bb';

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
