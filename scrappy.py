import scrapy
import csv

class QuotesSpider(scrapy.Spider):
    name = "categories"
    start_urls = ["https://hartmannsplantcompany.com/wholesale/"]

    def parse(self, response):
        # grab each category <a>
        for a in response.css("li.navList-item a.navList-action"):
            category = a.css("::text").get(default="").strip()
            href = a.attrib.get("href")
            if not href:
                continue

            # optional: write categories too
            # yield {"level": "category", "category": category, "url": response.urljoin(href)}

            # follow each category page, pass the category name along
            yield response.follow(
                href,
                callback=self.parse_category,
                cb_kwargs={"category": category},
            )

    def parse_category(self, response, category):
        # each product card
        for product in response.css("ul.productGrid > li.product"):
            title = product.css("h4.card-title a::text").get(default="").strip().replace(" - Wholesale", "")
            href  = product.css("h4.card-title a::attr(href)").get()
            price = product.css("[data-test-info-type='price'] .price--withoutTax::text").get(default="").strip()

            if title and href:
                yield response.follow(
                    href,
                    callback=self.parse_product,
                    cb_kwargs={"category": category, "title": title, "price": price},
                )

                # yield {
                #     "level": "product",
                #     "category": category,
                #     "title": title,
                #     "url": response.urljoin(href),
                #     "price": price,
                # }

        # pagination (if present)
        next_page = response.css("li.pagination-item--next > a.pagination-link::attr(href)").get()
        if next_page:
            yield response.follow(
                next_page,
                callback=self.parse_category,
                cb_kwargs={"category": category},
            )


    def parse_product(self, response, category, title, price):
        sizes = response.css('div[data-product-attribute="set-radio"] label[data-product-attribute-value]::text').getall()
        sizes = [s.strip() for s in sizes if s.strip()]

        header = ["Name", "Age", "City"]

        yield {
            "level": "product",
            "category": category,
            "title": title,
            "url": response.url,
            "price": price,
            "description": response.css("section.product-description").get(),
            "image": response.css("img.productView-image--default::attr(src)").get(),
            "sizes": sizes,
        }
