# FISEMI
Fisemi - SISTEMA DE CADASTRO FISEMI
AUTOR: THIAGO PEREIRA DOS SANTOS

### Instalation in 5 steps
```bash
git clone https://github.com/taboritis/coreui-laravel.git
cd coreui-laravel
composer install
cp .env.example .env
php artisan key:generate
```

- You have to register and login to app (database needed)
- If you are user MySQL you can paste this to your .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coreui
DB_USERNAME=root
DB_PASSWORD=
```

- CRIAR AS TABELAS DO SISTEMA
```bash
	php artisan migrate
```

- EXECUTAR O SERVIDOR
	php artisan serve