
# 🏋️‍♂️ FMU_FIT – PHP - Sistema de Academia

- Wellington Santana — RA: 2663204
- Erik Felipe de Arruda Macedo – RA. 2555294
- David Pereira de Melo – RA. 2446282
- Pedro Henrique de Souza Moural – RA. 2430266

## 📌 Visão Geral

Este é um sistema web desenvolvido para a gestão de academias, ideal para trabalhos acadêmicos ou como base para projetos comerciais. Ele permite o gerenciamento de alunos, planos, treinos e a administração do relacionamento com os clientes de forma simples e funcional.

---

## 🚀 Funcionalidades Principais

- **Autenticação de usuários:** sistema de login e logout com controle de sessão.
- **Cadastro de alunos:** gerenciamento completo dos dados pessoais dos alunos.
- **Plano de assinatura:** criação, edição e visualização de planos de treino ou assinatura.
- **Treinos personalizados:** associação de treinos aos planos e usuários.
- **Dashboard do aluno:** área restrita com informações do usuário.
- **Controle de acesso:** proteção de rotas por middleware (exige login).
- **Interface amigável:** páginas estilizadas com HTML e CSS puro.

---

## 🛠️ Tecnologias Utilizadas

- **Frontend:** HTML5, CSS3 (customizado via `/assets/css/style.css`)
- **Backend:** PHP estruturado em padrão MVC simples
- **Banco de Dados:** MySQL (arquivo de estrutura: `fmu_gym.sql`)
- **Outras ferramentas:** Sessões PHP, inclusão modular de arquivos, scripts SQL

---

## 🗂️ Estrutura do Projeto e Pastas

```
projeto/
│
├── assets/
│   └── css/
│       └── style.css                  # Estilos globais
│
├── controllers/                       # Controladores de lógica da aplicação
│   ├── AlunoController.php
│   ├── AuthController.php
│   ├── PlanoController.php
│   └── TreinoController.php
│
├── includes/                          # Componentes reutilizáveis e configurações
│   ├── db.php                         # Conexão com o banco de dados
│   ├── functions.php                  # Funções utilitárias diversas
│   ├── header.php / footer.php        # Cabeçalho e rodapé do site
│   └── middleware.php                 # Verificações de sessão/autenticação
│
├── models/                            # Modelos representando as entidades do banco
│   ├── Aluno.php
│   ├── Plano.php
│   └── Treino.php
│
├── index.php                          # Arquivo inicial e roteador do sistema
├── README.md                          # Documentação do projeto
└── fmu_gym.sql                        # Dump SQL com estrutura e dados de exemplo
```

---
/
├── aluno/               # Telas e scripts da área do aluno
├── controllers/         # Controladores (lógica das ações)
├── models/              # Modelos do banco de dados
├── views/               # Páginas HTML/PHP
├── includes/            # Arquivos compartilhados (db.php, functions.php)
├── public/              # Recursos públicos (imagens, CSS, JS)
├── banco.sql            # Script de criação do banco de dados
└── index.php            # Página inicial
```

## ⚙️ Como Rodar Localmente

1. Faça o clone ou extraia os arquivos do projeto.
2. Mova a pasta para o diretório `htdocs` do XAMPP ou equivalente no seu servidor local.
3. No phpMyAdmin, crie um banco de dados e importe o arquivo `fmu_gym.sql`.
4. Edite o arquivo `/includes/db.php` com as credenciais do seu banco.
5. Acesse `http://localhost/projeto/index.php` no seu navegador.

---

## 🧠 Observações Técnicas

- O sistema segue uma estrutura MVC básica, separando lógica, dados e visual.
- As conexões com o banco são feitas de forma procedural, podendo ser refatoradas para PDO.
- O middleware de verificação de sessão é simples, ideal para aprendizado.
- O SQL acompanha estrutura de tabelas com dados iniciais para testes.
- As rotas são definidas diretamente via `index.php`, podendo ser organizadas em um roteador.

---

## 👨‍💻 Requisitos Técnicos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Navegador moderno (Google Chrome, Firefox, Edge)
- Ambiente de desenvolvimento local (XAMPP)

---

## 📞 Contato

Este projeto pode ser utilizado como base educacional, trabalhos acadêmicos ou ponto de partida para sistemas comerciais. Fique à vontade para modificar, personalizar e expandir!

