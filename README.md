
# Setup Docker Laravel 10 com PHP 8.1

### Passo a passo
Clone Repositório
```sh
git clone -b laravel-10-com-php-8.1 https://github.com/especializati/setup-docker-laravel.git app-laravel
```
```sh
cd app-laravel
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=TrocaNome
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)


Dentro do container app

Para criar controller
```
php artisan make:controller nomeController
```

Para criar controller com padrao CRUD
```
php artisan make:controller nomeController --resource
```

Para criar model
```
php artisan make:model Model
```

Para criar model com migration
```
php artisan make:model Model --migration
```

Para criar uma nova migration
```
php artisan make:migration create_alguma_table
```

Para rodar as migrations
```
php artisan migrate
```

Para ver o status
```
php artisan migrate:status
```

Para listar rotas
```
php artisan route:list
```

Para forcar limpar cache das rotas e recompilar a estrutura de rotas
```
php artisan route:clear
```

