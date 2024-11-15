# SISTEMAS DISTRIBUÍDOS – Trabalho sobre Contêineres

Configurar um ambiente baseado em contêineres Docker com a seguinte especificação:
  - 1 contêiner com um servidor web e o sistema PHP disponibilizado em anexo.
  - 1 contêiner com um servidor de banco de dados MySQL com a estrutura de dados
disponibilizada em anexo
  - 1 contêiner com PHPMyAdmin para administração da base de dados MySQL

O servidor web deve disponibilizar o sistema PHP na porta 8080 da máquina local. 
Esse sistema deve ser capaz de acessar o servidor MySQL que está executando no outro contêiner. O MySQL deve ser capaz de armazenar seus arquivos de dados de alguma forma definitiva 
(sendo que, ao se desligar o contêiner, os dados não se perdem).
O sistema como um todo deve ser executado através do Docker Compose, garantindo assim que as partes que compõem o serviço serão corretamente executadas.

## Os Dockerfiles
Os dockerfiles produzidos estão na pasta destinada a eles: Um para configurar um ambiente PHP
com Apache Server e um para configurar o MySQL, aplicando o script SQL para a modelagem inicial
do banco de dados. No Dockerfile do PHP, está sendo instalada uma extensão para fazer uma 
integração com o MySQL.

## Docker Compose

O arquivo Docker Compose levanta quatro contâineres:
  - PHP;
  - mySQL;
  - PHPMyAdmin;
  - Portainer;

No PHPMyAdmin, os dados de login e senha são `root` e `dev`, respectivamente;

No portainer, Vai aparecer um aviso do seu navegador por causa da request necessária ser `https`. Isso é por causa de certificação SSL. Em um ambiente de desenvolvimento como este, não é necessário fazer essa configuração. Portanto, pode seguir sem riscos para a página principal.