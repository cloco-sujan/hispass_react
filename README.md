## Composer install

```shell
docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install
```

## Start the sail environment

```shell
./vendor/bin/sail up 
```

## Install required Node modules

```shell
./vendor/bin/sail npm install 
```

## Run Database migrations

```shell
./vendor/bin/sail php artisan migrate
```

## Run the laravel mix watch

```shell
./vendor/bin/sail npm run watch
```