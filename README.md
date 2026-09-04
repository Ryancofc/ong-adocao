# ONG Adoção 🐾

Sistema web desenvolvido como projeto acadêmico para uma ONG de adoção de animais.

O projeto tem como objetivo apresentar os animais disponíveis para adoção e permitir que pessoas interessadas preencham um formulário para demonstrar interesse.

## ✨ Funcionalidades

- Página inicial com apresentação da ONG e dos animais.
- Página de detalhes dos animais.
- Formulário para demonstrar interesse na adoção.
- Página "Sobre a ONG".
- Integração com PHP para processamento do formulário.
- Conexão com banco de dados MySQL.
- Organização do projeto em HTML, CSS, JavaScript e PHP.

## 🛠️ Tecnologias utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- XAMPP

## 📁 Estrutura do projeto

```text
ong-adocao/
├── css/
│   └── style.css
├── imagens/
│   ├── ...
├── js/
│   └── script.js
├── php/
│   ├── conexao.php
│   └── salvar_interesse.php
├── index.html
├── detalhes.html
├── formulario.html
└── sobre.html
```

## 🚀 Como executar o projeto

### 1. Instale o XAMPP

Instale o XAMPP e inicie os serviços **Apache** e **MySQL** pelo painel de controle.

### 2. Coloque o projeto no servidor local

Copie a pasta `ong-adocao` para a pasta:

```text
C:\xampp\htdocs\
```

A estrutura deverá ficar semelhante a:

```text
C:\xampp\htdocs\ong-adocao
```

### 3. Configure o banco de dados

Abra o **phpMyAdmin** pelo endereço:

```text
http://localhost/phpmyadmin
```

Crie o banco de dados utilizado pelo projeto e importe/crie as tabelas necessárias.

> A estrutura SQL do banco deve ser adicionada ao repositório caso você queira que outras pessoas consigam reproduzir o projeto com facilidade.

### 4. Configure a conexão

Verifique o arquivo:

```text
php/conexao.php
```

Ajuste os dados da conexão de acordo com o seu ambiente local.

**Não publique senhas ou credenciais reais no GitHub.**

### 5. Acesse o projeto

Com o Apache e o MySQL funcionando, acesse:

```text
http://localhost/ong-adocao/
```

## 🎓 Contexto acadêmico

Este projeto foi desenvolvido como parte das atividades acadêmicas do curso de **Análise e Desenvolvimento de Sistemas**, aplicando conhecimentos de desenvolvimento web, banco de dados e organização de projetos.

## 👨‍💻 Autor

**Ryan Carlos Rodrigues**

Projeto desenvolvido para fins acadêmicos e de portfólio.

---

⭐ Se este projeto foi útil ou interessante para você, considere deixar uma estrela no repositório!
