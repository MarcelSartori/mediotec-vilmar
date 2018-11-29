-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 23:26
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Cidade'),
(2, 'Esporte'),
(3, 'Geral');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `fonte` varchar(50) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Notícias do Site';

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `categoria`, `titulo`, `texto`, `foto`, `fonte`, `usuario`, `data_cadastro`) VALUES
(2, 1, 'Fungos diminuem consumo de forragem\r\n', 'Um estudo realizado pela Faculdade de Agronomia da Universidade de Buenos Aires indicou que a presença de fungos endofíticos (Epichloë occultans) diminuem em 25% o interesse do gado pelo consumo da forragem. De acordo com os realizadores da pesquisa, o ato acontece especificamente com o Azevém (L. Multiflorum).\r\n\r\nSegundo a professora Maria Semmartin, especialista em Ecologia e diretora do Bacharelado em Ciências Ambientais desta universidade, o estudo foi bastante esclarecedor. “Nosso objetivo foi detectar se a presença do fungo no azevém desencoraja o consumo do vegetal pelo gado. Sabíamos que este era o caso com ratos e insetos, mas não do gado”, explica.\r\n\r\nDe acordo com Marina Omacini, professora da Cadeira de Ecologia da universidade e coautora do trabalho, é possível encontrar plantações com 100% das plantas infectadas pelo fungo. “O azevém dá ao fungo a possibilidade de perpetuar-se através das sementes, enquanto os alcalóides do endófito dão às plantas certas vantagens como, por exemplo, a capacidade de repelir insetos herbívoros”, comenta.', NULL, '1', 1, '2018-10-31 00:00:00'),
(3, 1, 'Emprego formal cresceu para pretos e pardos entre 2016 e 2017', 'O número de empregos formais de pretos e pardos cresceu entre 2016 e 2017, segundo dados da Relação Anual de Informações Sociais (Rais), cadastro administrado pelo Ministério do Trabalho e Emprego. Já brancos e amarelos tiveram variações negativas no número de vagas.\r\n\r\nEm 2017, o saldo de empregos de pretos foi 35,8 mil, um aumento de 1,87%. Já o de pardos ficou em 39,2 mil, variação positiva de 0,32%. Na população branca, a diferença entre vagas formais criadas e fechadas foi negativa em 494 mil, redução de 2,54%. Entre quem se declarou cor amarela, foram 14,5 mil vagas a menos, queda de 5,3%.\r\n\r\nNo cômputo geral, o saldo de vagas em 2017 em relação a 2016 fechou negativo em 123 mil postos. No ano passado foram registrados 37,34 milhões de pessoas empregadas, contra 37,46 milhões no ano anterior.\r\n\r\nNo recorte por escolaridade, o aumento de vagas formais para pretos foi maior entre os com nível superior, chegando a 8,6% na comparação entre os dois anos. Entre os pardos, a variação positiva ficou em 2,9%. Na população branca, o número de vagas ficou estável, com oscilação de 0,1%. Na faixa das pessoas com ensino médio, a ampliação de postos com carteira de trabalho foi 4,3% para pretos e 1,9% para pardos.\r\n\r\nA região com maior número de pretos e pardos contratados foi a Sudeste, com 6,7 milhões. Na análise por setores com maior representatividade dessa população foram serviços (6,28 milhões), comércio (3,52 milhões) e indústria de transformação (2,4 milhões).', NULL, '1', 1, '2018-10-31 00:00:00'),
(4, 1, 'Assomasul é parceira do Seminário de Finanças Públicas e Educação Fiscal para Prefeituras', 'Com apoio institucional da Assomasul (Associação dos Municípios de Mato Grosso do Sul), prefeitos e secretários municipais vão participar nos próximos dias 21 e 22 de novembro, no auditório da entidade, em Campo Grande, do Seminário de Finanças Públicas e Educação Fiscal para Prefeituras.\r\n\r\nO seminário está sendo organizado pela ESAF (Escola de Administração Fazendária, vinculada ao Ministério da Fazenda, e conta com a parceria da Sefaz (Secretaria de Estado de Fazenda) e do PEEF/MS (Programa Estadual de Educação Fiscal).\r\n\r\nDe acordo com os organizadores, o seminário tem por objetivo aperfeiçoar o conhecimento dos gestores públicos municipais sobre temas relacionados à área tributária de interesse da União, do Estado e municípios.\r\n\r\nEntre os temas a serem abordados durante os dois dias do evento constam Planejamento Fiscal; Fiscalização e Arrecadação do ITR (Imposto Territorial Rural), Simples Nacional e Compensações e Crédito não aceitos pela Receita Federal; Improbidade Administrativa; Regime Geral: Reflexões sobre a Reforma da Previdência e seus benefícios sócio-econômicos; e Susceptibilidade das Organizações Públicas do Estado de MS ao risco de ocorrência de Fraude e Corrupção.', NULL, '1', 1, '2018-10-31 00:00:00'),
(5, 1, 'Naviraí sedia Fórum de Cidades Digitais dia 8 de novembro', 'Com apoio institucional da Assomasul (Associação dos Municípios de Mato Grosso do Sul), a cidade de Naviraí sediará no próximo dia 8 de novembro o I Fórum de Cidades Digitais do Sul de Mato Grosso do Sul.\r\n\r\nO encontro é direcionado a prefeitos, gestores e vereadores da região com o objetivo de promover a troca de experiências, aproximando o poder público das novas tecnologias.\r\n\r\nPromovido em parceria com a Prefeitura de Naviraí, o Fórum é gratuito para servidores públicos. As inscrições podem ser feitas pelo http://forum.redecidadedigital.com.br.\r\n\r\nA ideia é levar informação e serviços tecnológicos que facilitem a modernização dos municípios.\r\n\r\nO I Fórum de Cidades Digitais é patrocinado pela GOVBR e da CTMEGEO.\r\n\r\n\"Facilita o acesso a informações importantes sobre como aprimorar os serviços públicos e melhorar a vida das pessoas pela tecnologia. As cidades digitais e inteligentes possibilitam maior controle da gestão, além de estreitar a relação entre cidade e cidadão\", observa o diretor da RCD, José Marinho', NULL, '1', 1, '2018-10-31 00:00:00'),
(7, 1, 'Título da minha Notícia', 'Texto da minha notícia', NULL, 'Fonte da Notícia', 1, '2018-11-01 20:27:13'),
(8, 1, 'Título da minha Notícia', 'Texto da minha notícia', NULL, 'Fonte da Notícia', 1, '2018-11-01 20:31:10'),
(9, 1, 'Título da minha Notícia', 'Texto da minha notícia', NULL, 'Fonte da Notícia', 1, '2018-11-01 20:31:10'),
(10, 1, 'Título da minha Notícia', 'Texto da minha notícia', NULL, 'Fonte da Notícia', 1, '2018-11-01 20:31:10'),
(11, 1, 'Título da minha Notícia', 'Texto da minha notícia', NULL, 'Fonte da Notícia', 1, '2018-11-01 20:31:10'),
(12, 1, 'Título da minha Notícia', 'Texto da minha notícia', NULL, 'Fonte da Notícia', 1, '2018-11-01 20:31:10'),
(13, 1, '[EDITADO] NotÃ­cia de Teste', '[EDITADO] Texto da NotÃ­cia de Teste', '', '[EDITADO] Marcel', 1, '0000-00-00 00:00:00'),
(15, 1, 'NotÃ­cia de Teste', 'Texto da NotÃ­cia de Teste', '', 'Marcel', 1, '2018-11-09 20:29:42'),
(16, 1, 'Trabalhando com FormulÃ¡rio em PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id nisi ultricies, molestie enim ut, dictum erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus at mauris pellentesque hendrerit. Nam lacus risus, luctus id elit sit amet, fringilla sollicitudin tellus. Aenean vehicula aliquam dapibus. Suspendisse nibh tortor, rhoncus ac nunc nec, fringilla commodo tellus. Curabitur pellentesque sem eget arcu tempus, at pulvinar nisl porttitor. Morbi nec ornare sapien, at consequat eros. Cras vel dolor augue. Ut nec nulla erat.', NULL, 'Professor Marcel', 1, '2018-11-28 20:14:23'),
(17, 2, 'Palmeiras Ã© o CampeÃ£o do BrasileirÃ£o de 2018', 'Aceita que dÃ³i menos!', NULL, 'Eu mesmo', 1, '2018-11-28 21:03:07'),
(18, 3, 'Testando a Geral', 'Deve salvar com a categoria 3', NULL, 'Eu mesmo', 1, '2018-11-28 21:04:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;
