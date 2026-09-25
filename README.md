# Laravel API Starter

Minimal technical starter for experimenting with a Laravel API baseline, automated tests, and reproducible CI.

This repository is intentionally small: it is a **technical starter / laboratory**, not a production application or a domain-specific product.

## Purpose

The goal is to keep a compact Laravel project where the basic engineering loop is explicit and repeatable:

- install dependencies;
- prepare a test environment;
- run migrations;
- execute automated tests;
- validate the same flow in CI.

## Stack

- Laravel 12
- PHP 8.2+
- PHPUnit / Laravel testing tools
- SQLite for the test environment
- GitHub Actions
- Docker-based CI runtime

## Included

- `GET /health` endpoint returning a small JSON health response;
- feature test for the health endpoint;
- Laravel migrations;
- SQLite test database preparation;
- GitHub Actions workflow;
- CI executed inside the `leoalmadadev/laravel-ci:8.3-min` container image.

## CI

The workflow in `.github/workflows/ci.yml` runs on pushes and pull requests targeting `main`.

The relevant flow is:

```text
composer install
→ prepare .env + SQLite database
→ php artisan key:generate
→ php artisan migrate --force
→ php artisan test
```

## Running locally

Requirements:

- PHP 8.2+
- Composer

Then:

```bash
composer install
cp .env.example .env
mkdir -p database
touch database/database.sqlite
php artisan key:generate
php artisan migrate
php artisan test
php artisan serve
```

The health endpoint is available at:

```text
GET /health
```

## Status

**Technical starter / laboratory.**

Its purpose is to provide a small, reproducible Laravel baseline for API-oriented experiments, testing, migrations, and CI.
