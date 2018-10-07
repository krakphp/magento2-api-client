.PHONY: codegen clean

API_VERSION=2.2

codegen: docs.json
	swagger-codegen generate -l php -i docs.json -o . -c swagger-config.json -t templates
docs.json:
	curl https://devdocs.magento.com/swagger/schemas/latest-${API_VERSION}.schema.json \
		| jq '.schemes += ["https"]' \
		| jq '. + {"securityDefinitions": {"OAuth2": {"type": "oauth2", "flow": "password"}}}' \
		| jq '. + {"security": [{"OAuth2": []}]}' \
		> $@

clean:
	rm docs.json
