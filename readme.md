![](https://github.com/NevesSFelipe/Autenticacao_Simples/blob/master/README/img/capa_readme.jpeg)

Projeto desenvolvido com o objetivo de treinar meus conhecimentos em PHP com PDO e MYSQL. 

O projeto consiste dos seguintes passos:

- index: Usuário insere o email e a senha;
    - Caso email / senha:
        - incorreto: redireciona para index.php, com informativo de dados inválidos;
        - Correto: redireciona para dashboard.php, exibindo uma mensagem com o nome do usuário logado + botão de sair.
        - Vazio: redireciona para index.php, com informativo de que os campos precisam ser preenchidos.

- dashboard: Botão sair
    - O usuário ao clicar no botão, será destrúido as sessões e redirecionado para index.php.

- dashboard: Acesso direto
    - Se o usuário tentar acessar a url do dashboard diretamente (sem login), será redirecionado para index.php com um informativo que precisa realizar o login para acessar.