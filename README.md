# plant-scrapper

A [Scrapy](https://scrapy.org/) spider that scrapes product data from [Hartmann's Plant Company](https://hartmannsplantcompany.com/wholesale/) wholesale catalog, including categories, product titles, prices, sizes, descriptions, and images.

---

## Requirements

- Python 3.12+
- Scrapy

---

## Setup

**1. Clone the repository and navigate to the project folder:**
```bash
cd C:/dev/plant-scrapper
```
> ⚠️ Avoid paths with spaces (e.g. `C:\Users\Joseph Kahan\...`). Use a path like `C:\dev\plant-scrapper` to prevent virtual environment issues.

**2. Create and activate a virtual environment:**
```powershell
python -m venv venv
& "C:\dev\plant-scrapper\venv\Scripts\Activate.ps1"
```

**3. Install dependencies:**
```bash
pip install scrapy
```

---

## Usage

Run the spider and export to your desired format:

```bash
# Export to CSV (opens in Excel / Google Sheets)
scrapy runspider scrappy.py -o output.csv

# Export to JSON
scrapy runspider scrappy.py -o output.json

# Export to JSONL (one record per line)
scrapy runspider scrappy.py -o output.jsonl
```

---

## Output Fields

Each scraped product record contains the following fields:

| Field         | Description                                      |
|---------------|--------------------------------------------------|
| `level`       | Always `"product"`                               |
| `category`    | The category the product belongs to              |
| `title`       | Product name (with " - Wholesale" stripped out)  |
| `url`         | Full URL of the product page                     |
| `price`       | Price (excluding tax)                            |
| `description` | Full HTML product description                    |
| `image`       | URL of the product's primary image               |
| `sizes`       | List of available sizes (if applicable)          |

---

## How It Works

The spider runs in three stages:

1. **`parse`** — Visits the wholesale homepage and collects all category links from the navigation.
2. **`parse_category`** — Visits each category page, collects product cards, and handles pagination automatically.
3. **`parse_product`** — Visits each individual product page and extracts the full product details.

---

## Notes

- The spider targets `https://hartmannsplantcompany.com/wholesale/`
- Pagination is handled automatically — all pages in a category will be scraped
- The `csv` module is imported but Scrapy's built-in feed exporter handles CSV output via the `-o` flag
- To also export category-level data, uncomment the relevant `yield` lines in `parse` and `parse_category`