## TODO:

Arrumar responsividade / estilização.

# HDCEvents

HDCEvents é um sistema de gerenciamento de eventos desenvolvido em PHP utilizando o framework **Laravel**. Com ele, os usuários podem criar eventos, fazer o CRUD completo dos mesmos, participar de eventos criados por outras pessoas e acompanhar tudo em um dashboard dinâmico. Para criar ou participar de eventos, é necessário criar uma conta e realizar a autenticação.

---

## ⚙️ Funcionalidades

- **Cadastro de usuários:** Crie uma conta para acessar o sistema.
- **Autenticação:** Login seguro para proteger seus dados.
- **CRUD de eventos:** Crie, edite, visualize e exclua eventos.
- **Participação em eventos:** Inscreva-se em eventos de outros usuários.
- **Dashboard:** Acompanhe todos os eventos de forma prática e organizada.

---

## 🛠️ Tecnologias utilizadas

O projeto foi desenvolvido com as seguintes tecnologias:

- **PHP** com **Laravel** (framework backend)
- **Vite** para compilação de assets
- **Axios** para requisições HTTP no frontend

---

## 📂 Como rodar o projeto

### Pré-requisitos

- PHP (versão recomendada: 8.x)
- Composer
- Node.js (versão recomendada: 16.x ou superior)
- MySQL ou outro banco de dados compatível

### Passo a passo

1. Clone este repositório:
```bash
git clone https://github.com/iagooteles/hdcEventsPHP.git
cd hdcevents
```

2. Instale as dependências do Laravel:
```bash
composer install
```

3. Instale as dependências do Node.js:
```bash
npm install
```

4. Configure o arquivo .env:
Crie uma cópia do arquivo .env.example e renomeie para .env.
Configure as credenciais do banco de dados e outras variáveis necessárias.

5. Execute as migrações:
```bash
php artisan migrate
```

6. Rode o servidor local:
```bash
php artisan serve
```

OBS: Certifique-se de estar rodando o XAMPP (se necessário);

7. Compile os assets para desenvolvimento:
```bash
npm run dev
```

8. Acesse o projeto no navegador:
```bash
http://localhost:8000
```

### 📺 Base de aprendizado e Créditos
Este projeto foi desenvolvido com base na videoaula disponível no canal Hora de Codar, ministrada por Matheus Battisti.
Matheus Battisti - Hora de Codar
[Canal no YouTube](https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG)
