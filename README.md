# Aplicação `Clinica Unisagrado`
### API para lidar com as requisições ao banco de dados

## Passo a passo para executar os containers do docker
> Execute os seguintes comando no seu terminal
```json
# git clone https://github.com/mateusmlsv/backend-clinica-unisagrado.git
# cd backend-clinica-unisagrado
# docker-compose -f docker-compose.yml up --build -d
```

### Após executar esses comandos, estará disponível na sua maquina 3 containers
* PHP 7.4-fpm
* Nginx 1.19
* Mysql 5.7

## Outras configurações
### Copie o conteúdo do arquivo `./banco/script-banco.sql` e execute-o na IDE de banco de dados de sua preferência, contanto que seja para mysql
