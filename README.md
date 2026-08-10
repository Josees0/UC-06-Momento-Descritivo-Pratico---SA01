## 1 Identificação

#### Abaixo contendo equipe, integrantes, turma/turno e data de entrega

```bash
Kelvin
Enzo, Guilherme, Islan, José, Samuel, Vinícius
Desenvolvimento de Sistemas - Senai Apucarana - Diurno
12/08/2026
```
## 2. Contexto do MVP

Este projeto entrega um **MVP de solicitações internas** (ex.: manutenção/TI/suporte), com
**API** para registro e acompanhamento de solicitações, **implantado em nuvem** e com
**integração via API** com um serviço externo.


## 3. Link da aplicação em nuvem
**URL:** [colar link]
**Status:** [online / intermitente / offline]
**Observações de acesso:** [se houver autenticação, informar como testar]


## 4. Requisitos não funcionais adotados (resumo)
Liste de forma objetiva (mínimo 2 por dimensão).


### Qualidade
[RNF-Q1: ...]

[RNF-Q2: ...]


### Integridade
[RNF-I1: ...]
[RNF-I2: ...]


### Usabilidade (técnica)
[RNF-U1: ...]
[RNF-U2: ...]


### Segurança da informação
[RNF-S1: ...]
[RNF-S2: ...]


## 5. Tecnologias e justificativas
**Linguagem/Runtime:** [ex.: Node.js / Java / C# / Python]
**Framework:** [ex.: Express / Spring / ASP.NET / FastAPI]
**Bibliotecas relevantes:** [ex.: validação, HTTP client, autenticação, etc.]
**Banco/Persistência:** [ex.: PostgreSQL / SQLite / arquivo / serviço gerenciado]
**Nuvem/Deploy:** [ex.: serviço de app / container / etc.]
**Justificativa vinculada aos RNFs:**
- [Tecnologia X] foi escolhida porque atende a [RNF ...] por meio de [...].


## 6. Integração via API (o que foi integrado)
**Serviço externo utilizado:** [descrever sem citar empresa real; ex.: “serviço de notificações”, “serviço de autenticação”, “serviço de catálogo”]
**Tipo de integração:** [consumo / exposição / ambos]
**Fluxo integrado:**
[Passo do fluxo em nível de negócio]
[Passo do fluxo]

## 7. Endpoints do MVP (API)
Use uma tabela. Adapte para seu projeto.


| Método | Rota | Descrição | Body/Parâmetros | Respostas |
|---|---|---|---|---|
| POST | /solicitacoes | Cria solicitação | {...} | 201, 400 |
| GET | /solicitacoes | Lista solicitações | filtros | 200 |
| GET | /solicitacoes/{id} | Detalha solicitação | id | 200, 404 |
| PATCH/PUT | /solicitacoes/{id}/status | Atualiza status | {...} | 200, 400, 404 |


## 8. Como executar localmente ### Pré-requisitos
[ex.: runtime, banco, docker, etc.]


### Variáveis de ambiente
Copie `.env.example` para `.env` e preencha:
- [VAR_1=...]
- [VAR_2=...]
**Não versionar segredos**.


### Passos
[comando 1]
[comando 2]
[comando 3]


## 9. Como testar (evidências)
**Coleção de API:** [informar onde está /docs/colecao-api/...]
**Exemplos de chamadas (curl ou cliente HTTP):**
```bash
# exemplo

curl -X GET "[URL]/solicitacoes"                            

EVIDÊNCIAS ANEXADAS
Link em nuvem (/docs/evidencias/01-link-nuvem.txt)
Evidências da integração (requests/responses) (/docs/evidencias/02-integracao-requests-responses.*)
Relatório técnico (/docs/relatorio-tecnico.pdf)
(Opcional) Prints do deploy e logs
DIVISÃO DE TAREFAS (RASTREABILIDADE)
[Nome] – [tarefa] – evidência: [issue/commit]
[Nome] – [tarefa] – evidência: [issue/commit]


---

