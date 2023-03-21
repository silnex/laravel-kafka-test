# Laravel Kafka Test

## install kafka using docker-compose

```bash
docker-compose up -d
```

## install rdkafka

```bash
pecl install rdkafka
```

if have "C compiler cannot create executables" error

```bash
xcode-select --install
```

## install kafka client package

```bash
composer require mateusjunges/laravel-kafka
```

## bitnami/kafka container hosts register

```bash
echo '127.0.0.1' >> /etc/hosts
```

## Run consume

```bash
php artisan kafka:consume
```

## Publish topic

```bash
php artisan kafka:publish
```
