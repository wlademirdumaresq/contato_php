# Fomulário de contato de web básico utilizando as estruturas PHP (com a lib PHPMailer),JQuery Ajax, Bootstrap. 

Projeto desenvolvido para estudo da utilização da biblioteca PHPMailer e suas funções, integrando com o AJAX para retirar a necessidade de mudança de pagina ou reload.

## Descrição

O PHPMailer é uma biblioteca de códigos para enviar e-mails com segurança e facilidade via código PHP a partir de um servidor web.
O presente projeto faz integração dessa biblioteca com AJAX para permitir sua validação sem a necessidade de criar uma pagina apenas para o envio, neste projeto os dados são carregador por trás da estrutura montada e a efetivação se dá atravez de mensgans em um MODAL.

Para testar esse projeto se é necessário ter instalado em sua maquina:

* Composer  ( Intalação pelo comando no ubuntu ```sudo apt-get install composer```
* PHP > 5   ( Recomendo o php7 instalação pelo comando no ubuntu ``` sudo apt-get install PHP7.4 ```
* PHPMailer ( Instalação pelo composer se dá atravez do compando no ubuntu ```composer requer phpmailer / phpmailer ```
* PHPcgi

## Execução

Para gerar esse projeto fiz uso da IDE intellij Idea para subir de forma automatica para o meu localhost.
Se não tiver essa idea instalada pode-se configurar um servidor apache como uma das alternativas e fazer o apontamento para a pasta onde está o projeto web.


### OBS.:
Fiz a validação SMTP utilizando uma ferramenta do GMAIL liberando acesso por "app meno seguro".: https://myaccount.google.com/lesssecureapp

Link explicativo de respostas do google: https://support.google.com/accounts/answer/6010255?hl=pt-BR

Tutorial basico.: https://www.hostinger.com.br/tutoriais/aprenda-a-utilizar-o-smtp-google/
