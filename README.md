# backend
crud, projetos e estudos

## Para executar com o Docker

### Pré requisitos

1. Instale o [git](https://git-scm.com/downloads) caso não tenha instalado ainda.

2. instale o [Docker](https://docs.docker.com/get-docker) caso não tenha instalado ainda.

### Instalação

1. Clone o repositório:

```bash
git clone https://github.com/eliseu-daniel/backend.git
```

2. Entre no diretório do repositório:

```bash
cd ./backend
```

3. Crie uma imagem do Docker baseado no Dockerfile do projeto:

```bash
docker build -t php-app .
```

4. Crie um container baseado na imagem gerada:

```bash
docker run -d -p 8080:80 --name eliseu-backend-php -v ./src:/var/www/html php-app
```

5. Acesse o navegador pela url `localhost:8080`.
