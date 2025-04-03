# 🏠 ImovelGuide - Desafio Técnico

Este projeto foi desenvolvido como parte do processo seletivo para a vaga de Estágio em Programação Back-End na **Imóvel Guide**.

---

## 📄 Descrição do Projeto

Sistema simples para gerenciamento de **Corretores**, permitindo:

- ✅ Cadastro de corretores (Nome, CPF, CRECI)
- ✅ Validação de campos no Front-end (HTML5) e Back-end (Laravel)
- ✅ Listagem de corretores cadastrados
- ✅ Edição de dados
- ✅ Exclusão de registros
- ✅ Feedback visual para sucesso ou erro das operações

---

## 🚀 Tecnologias Utilizadas

- PHP 8+
- Laravel 10
- MySQL
- Bootstrap 5 (estilização)
- Blade (Template Engine)

---

## ⚙️ Como rodar o projeto

1. **Clone o repositório:**

git clone git@github.com:tasso121/ImovelGuide.git
cd ImovelGuide

    Instale as dependências:

composer install

    Configure o arquivo .env:

cp .env.example .env

    Gere a chave do Laravel:

php artisan key:generate

    Configure seu banco de dados no .env:

DB_DATABASE=imovelguide
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

    Execute as migrations:

php artisan migrate

    Inicie o servidor:

php artisan serve

Acesse no navegador: http://localhost:8000

🗂️ Estrutura do Banco de Dados

Tabela: corretores
Campo	Tipo	Descrição
id	int	Chave primária (auto incremento)
name	varchar	Nome do corretor
cpf	varchar	CPF do corretor
creci	varchar	CRECI do corretor

⭐️ Funcionalidades Extras

    Validação de campos também no Back-end (Laravel)

    Mensagens de sucesso e erro após cada operação

    Layout limpo e responsivo usando Bootstrap

    Confirmação antes de excluir um registro