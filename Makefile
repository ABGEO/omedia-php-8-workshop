###
# Copyright (C) 2020 Temuri Takalandze <me@abgeo.dev>
#
# This material can not be copied and/or
# distributed without the express permission of Temuri Takalandze.
#
# Written by Temuri Takalandze <me@abgeo.dev>, November 2020
###

default: up

.PHONY: up
up:
	docker-compose pull
	docker-compose up -d --remove-orphans

.PHONY: start
start:
	@docker-compose start

.PHONY: stop
stop:
	@docker-compose stop

.PHONY: shell
shell:
	docker exec -ti -e COLUMNS=$(shell tput cols) -e LINES=$(shell tput lines) $(shell docker ps --filter name='php' --format "{{ .ID }}") bash
