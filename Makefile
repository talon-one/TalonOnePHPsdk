.DEFAULT_GOAL := testenv

.PHONY: testenv apply-patch
testenv:
	docker run \
		--rm -it \
		-v $(PWD):/sdk \
		-w /sdk \
		composer:1.8 \
		/bin/bash -c "composer i; /bin/bash"

apply-patch:
	@echo "Applying fix patch"
	git apply --ignore-space-change --ignore-whitespace ./managementApi.patch
