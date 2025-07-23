# 🛒 Okala Database Crawler

A robust PHP-based crawler to extract and save product data from [Okala](https://www.okala.com/) including stores, categories, and product details in structured JSON format.

---

## 📦 What It Does

- Crawls multiple **store pages** from Okala
- Iterates through multiple **category slugs**
- Downloads and stores:
  - Product **search result pages**
  - Product **detail.json**
  - Product **features.json**
- Saves all data in structured folders under `/data/`
- Fully supports **UTF-8/Persian** characters
- Respects existing files to avoid redundant requests

---

## 🗂 Folder Structure

```
data/
├── search/
│   └── {store_id}/{category_slug}/{page}.json
├── product/
│   └── {product_id}/
│       ├── features.json
│       └── {store_id}/detail.json

````

---

## 🚀 Usage

### ✅ Requirements

- PHP 7.4+ with `curl` and `json` extensions
- Git (for automated commit + push loop)
- Internet access

### 📥 Clone the Repo

```bash
git clone https://github.com/BaseMax/okala-database-crawler.git
cd okala-database-crawler
````

### 🧪 Run the Crawler

```bash
php crawler.php
```

### 🔁 Auto Git Push (Optional)

To automatically commit and push updated JSON data every 5 minutes:

```bash
crawler.bat
```

> 💡 Useful when you're running long crawling jobs and want a backup of progress on GitHub.

---

## 🛠 Customization

You can edit the following in `crawler.php`:

* **Stores list** (`$stores`)
* **Categories list** (`$categories`)
* **Fetch delay** (`usleep(250_000)` for 250ms between requests)

---

## 🧼 Features

* ✅ Automatic file structure and directory creation
* ✅ Skips already downloaded data (but still verifies products)
* ✅ Handles self-signed SSL issues via cURL
* ✅ UTF-8 safe JSON storage (e.g., Persian: فارسی)
* ✅ Color-coded CLI output for easier tracking

---

## 🤝 Contributions

PRs welcome! Please fork the repo and submit your improvements.

---

## 📬 Contact

Have questions or ideas? Reach out via [GitHub Issues](https://github.com/BaseMax/okala-database-crawler/issues).

---

## 📄 License

MIT License

© 2025 [Max Base](https://github.com/BaseMax)
