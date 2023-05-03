.DEFAULT_GOAL := testenv

.PHONY: testenv
testenv:
	docker run \
		--rm -it \
		-v $(PWD):/sdk \
		-w /sdk \
		composer:1.8 \
		/bin/bash -c "composer i; /bin/bash"