# **CSI477-2020-01 - Remoto - Trabalho Final - Resultados**
## *Aluna(o): Felipe Sousa Nunes

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

Sistema de desafios para alunos excepcionais que necessitam de uma atenção maior em educação básica.


### 1. Funcionalidades implementadas
<!-- Descrever as funcionalidades que eram previstas e foram implementas. -->

CRUD de Alunos
Desafios de nivel 1: digitar as letras do proprio nome para liberar a recompensa.
Nivel 2: digitar numeros de 0 a 10 para liberar a recompensa.
Nivel 3: Arrastar imagem do personagem do aluno até a casa.
  
### 2. Funcionalidades previstas e não implementadas
<!-- Descrever as funcionalidades que eram previstas e não foram implementas, apresentando uma breve justificativa do porquê elas não foram incluídas -->
Login de professor, e mais niveis de desafios.

### 3. Outras funcionalidades implementadas
<!-- Descrever as funcionalidades implementas além daquelas que foram previstas, caso se aplique.  -->
pagina inicial
### 4. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->
Transmitir os dados de uma pagina para outra na qual nao havia um controller para isso. 
    Solução: Criando o banco de dados na primeira pagina, e na segunda pagina utilizando o update para adicionar os atributos restantes.
    (esse caso ocorreu na hora de configurar o jogo, e os dados de fim de jogo se encontram na mesma tabela).
Salvar dados do jogo no banco de dados, pois utiliza de javascript puro que é onde os dados se encontram.
    Solução: Criei um formulario em hidden (escondido) e manipulei os dados para esse formulario pelo javascript, utilizando o document.getElementById para adicionar os dados no formulario, e depois efetuei o submit desse formulario.
### 5. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
1º clona o projeto
2º abre o projeto e modifica o .env de acordo com suas configurações (principalmente a área de banco de dados).
  Inicializa o banco de dados e cria o banco de dados com o nome informado no .env
3º Abre o cmd, caminha até o arquivo raiz do projeto e executa o migrate para criar as tabelas (php artisan migrate).
4º Inicia o server(php artisan serve).
Abra o navegador e vai até o endereço do server (localhost:8000)


### 6. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->
Aulas ministradas pelo professor.
https://stackoverflow.com/
