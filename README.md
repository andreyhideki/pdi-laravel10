
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

#limpa o cache docker
docker system prune
docker system prune -f

#remover apenas imagens não utilizados
docker container prune

#remover apenas volumes não utilizados
docker volume prune

#remover apenas redes não utilizado
docker network prune


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

Para dropar/resetar as migrations
```
php artisan migrate:reset
```

Eloquent
https://laravel.com/docs/10.x/eloquent
# Generate a model and a FlightFactory class...
php artisan make:model Flight --factory
php artisan make:model Flight -f
 
# Generate a model and a FlightSeeder class...
php artisan make:model Flight --seed
php artisan make:model Flight -s
 
# Generate a model and a FlightController class...
php artisan make:model Flight --controller
php artisan make:model Flight -c
 
# Generate a model, FlightController resource class, and form request classes...
php artisan make:model Flight --controller --resource --requests
php artisan make:model Flight -crR
 
# Generate a model and a FlightPolicy class...
php artisan make:model Flight --policy
 
# Generate a model and a migration, factory, seeder, and controller...
php artisan make:model Flight -mfsc
 
# Shortcut to generate a model, migration, factory, seeder, policy, controller, and form requests...
php artisan make:model Flight --all
 
# Generate a pivot model...
php artisan make:model Member --pivot
php artisan make:model Member -p

# executar o db seed
php artisan db:seed

# Criar validacao via request
php artisan make:request ClasseRequest