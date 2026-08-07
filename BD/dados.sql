-- ======================================
-- RESPONSÁVEIS
-- ======================================

INSERT INTO responsavel (nome, data_criacao) VALUES
('Ana Paula', '2026-01-10 08:00:00'),
('Bruno Henrique', '2026-01-12 09:15:00'),
('Carla Mendes', '2026-01-15 10:30:00'),
('Diego Martins', '2026-01-18 14:00:00'),
('Eduarda Lima', '2026-01-20 16:20:00'),
('Felipe Souza', '2026-01-22 11:10:00'),
('Gabriela Rocha', '2026-01-25 15:45:00'),
('Henrique Costa', '2026-01-28 08:40:00'),
('Isabela Fernandes', '2026-02-01 13:30:00'),
('José Almeida', '2026-02-05 09:50:00');

-- ======================================
-- TAREFAS
-- ======================================

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Criar tela de login', 'Desenvolver interface de autenticação.', 1, 'CONCLUIDA', '2026-02-01 08:30:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Cadastrar usuários', 'Implementar cadastro de usuários.', 2, 'EM_ANDAMENTO', '2026-02-03 10:00:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Criar banco de dados', 'Modelagem inicial do banco.', 3, 'CONCLUIDA', '2026-02-05 09:15:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Implementar CRUD de tarefas', 'Criar operações básicas.', 4, 'EM_ANDAMENTO', '2026-02-06 14:30:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Documentar API', 'Criar documentação técnica.', 5, 'PENDENTE', '2026-02-08 11:20:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Corrigir bug de autenticação', 'Erro ao validar senha.', 6, 'CONCLUIDA', '2026-02-10 16:40:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Adicionar validações', 'Validar formulários.', 7, 'PENDENTE', '2026-02-12 08:00:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Criar dashboard', 'Tela inicial do sistema.', 8, 'EM_ANDAMENTO', '2026-02-15 09:45:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Gerar relatório PDF', 'Exportação de relatórios.', 9, 'CANCELADA', '2026-02-18 13:10:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Implementar pesquisa', 'Busca por título.', 10, 'PENDENTE', '2026-02-20 15:30:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Criar tela de responsáveis', 'CRUD de responsáveis.', 1, 'CONCLUIDA', '2026-02-22 10:10:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Implementar paginação', 'Listagem paginada.', 2, 'EM_ANDAMENTO', '2026-02-24 08:50:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Configurar servidor', 'Preparar ambiente.', 3, 'CONCLUIDA', '2026-02-26 17:00:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Criar testes unitários', 'Cobertura inicial.', 4, 'PENDENTE', '2026-03-01 09:20:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Melhorar layout', 'Ajustes na interface.', 5, 'EM_ANDAMENTO', '2026-03-03 14:45:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Implementar upload', 'Envio de arquivos.', 6, 'PENDENTE', '2026-03-05 16:10:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Criar backup automático', 'Rotina diária.', 7, 'CONCLUIDA', '2026-03-08 07:50:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Otimizar consultas SQL', 'Melhorar desempenho.', 8, 'EM_ANDAMENTO', '2026-03-10 11:35:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Atualizar documentação', 'Manual do usuário.', 9, 'PENDENTE', '2026-03-12 13:20:00');

INSERT INTO tarefa (titulo, descricao, id_responsavel, status, data_criacao) VALUES
('Publicar versão 1.0', 'Disponibilizar sistema.', 10, 'CANCELADA', '2026-03-15 18:00:00');