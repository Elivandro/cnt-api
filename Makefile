default: env prepare up key-generate migrate npm-install npm-dev
	@echo "--> Your environment is ready to use! Access http://laravel.test and enjoy it!"

.PHONY: env
env:
	@echo "--> Copying .env.example to .env file"
	@cp .env.example .env

.PHONY: prepare
prepare:
	@echo "--> Installing composer dependencies..."
	@sh ./bin/prepare.sh

.PHONY: up
up:
	@echo "--> Starting all docker containers..."
	@./vendor/bin/sail up -d

.PHONY: key-generate
key-generate:
	@echo "--> Generating new laravel key..."
	@./vendor/bin/sail art key:generate

.PHONY: migrate
migrate:
	@echo "--> run sail art migrate command..."
	@./vendor/bin/sail art migrate

.PHONY: npm-install
npm-install:
	@echo "--> run npm install command command..."
	@./vendor/bin/sail npm install

.PHONY: npm-dev
npm-dev:
	@echo "--> run npm run dev command command..."
	@./vendor/bin/sail npm run dev
