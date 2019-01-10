# RITS CARREIRA

## Padrões do projeto

- [Installation](https://laravel.com/docs/5.7/installation)
- [Config](https://laravel.com/docs/5.7/configuration)
- [Routes](https://laravel.com/docs/5.7/routing)
- [Controllers](https://laravel.com/docs/5.7/controllers)
- [Database](https://laravel.com/docs/5.7/database)
    - [Models](https://laravel.com/docs/5.7/eloquent)
    - [Migrations](https://laravel.com/docs/5.7/migrations)
    - [Seeds](https://laravel.com/docs/5.7/seeding)
- [Views](https://laravel.com/docs/5.7/views)

## Instalando e rodando o projeto

### 1 - Faça o clone projeto

```bash
# https
git clone https://github.com/Nargarath/desafio-rits.git

# ssh
git@github.com:Nargarath/desafio-rits.git

```

### 2 - Instale todos as dependencias do composer, npm e compile os arquivos do npm

```bash

composer install
npm install
npm run dev

```

### 3 - Copie o `.env`

Há um exemplo do arquivo de configuração que deve ser tomado como exemplo. Para isso utilize os comandos:

```bash

cp .env.example .env

```

### 4 - Configurar o `.env`

Aqui é onde vai ser definido as configurações básicas para funcionamento dos softwares ligados ao projeto. No caso, só estamos utilizando o banco de dados sql e o proprio laravel, por tanto, configurar todas as variáveis que iniciarem com 'APP_' e 'DB_'.


### 5 - Gerar chave de encriptação

Nessa etapa , você vai iniciar o comando abaixo no bash ou cmd, estando dentro da pasta do projeto, para que o laravel gere uma chave que ele usa para encriptação de dados.

```bash

php artisan key:generate

```

### 6 - Criar link da pasta storage para a pública

Nosso projeto está usando a pasta pública para salvar todos os pdf's de curriculos enviados para que sejam acessíveis em nosso admin. Por isso, para deixar o storage acessivel, linkamos ele na pasta public.

```bash

php artisan storage:link

```

### 7 - Criar toda estrutura do banco de dados

Nessa etapa, com o comando abaixo, o laravel vai usar as configurações do .env para conectar-se no banco de dados e criar as tabelas configuradas como migrations. 

Obs: Essa etapa pode dar erro caso o banco de dados configurado não tenha sido criado. As migrations não criam o banco de dado, apenas as tabelas dentro dele.

```bash

php artisan migrate

```

### 8 - Popular as tabelas com dados teste

Aqui, o laravel irá popular os banco de dados com dados pré-estabelecidos nas seed que , como o proprio nome diz, são "sementes" que fazem o banco de dados "crescer". Os dados irão ajudar nos testes.


```bash

php artisan db:seed

```


### 9 - Orientações

Se você seguiu todas as etapas acima, o unico erro que pode ocorrer, mas nem sempre ocorre, é que se a pasta storage não estiver com nivel de permissão 777 , pode dar erro ao tentar acessar o sistema, para corrigir é só dar um chmod recursivo na pasta.


## Rotas

```

# Cliente:

Home Principal -> '/'
Vaga X -> '/vaga/{id}'

# Admin:

Admin login -> '/admin/login/'
Admin Home -> '/admin/home/'

```

## User Padrão

O sistema tem um usuário padrão no admin que é inserido pela seed, para usa-lo é só acessar o login do admin com as credenciais:

```
Login: admin@email.com
Password: 123123

```



