.PHONY: codegen clean

API_VERSION=2.2

codegen: docs.json
	swagger-codegen generate -l php -i docs.json -o . -c swagger-config.json -t templates
docs.json:
	curl https://devdocs.magento.com/swagger/schemas/latest-${API_VERSION}.schema.json > $@

clean:
	rm docs.json
