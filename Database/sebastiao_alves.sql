-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Maio-2023 às 02:45
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `entrada` varchar(150) NOT NULL,
  `id_utilizador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `entrada`, `id_utilizador`) VALUES
(1, '18:46:25 - 07/05/2023', 1),
(2, '18:46:34 - 07/05/2023', 1),
(3, '20:01:26 - 07/05/2023', 1),
(4, '20:05:45 - 07/05/2023', 1),
(5, '21:06:54 - 07/05/2023', 1),
(6, '21:07:36 - 07/05/2023', 1),
(7, '21:09:41 - 07/05/2023', 1),
(8, '21:10:29 - 07/05/2023', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `morada` varchar(200) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `mail`, `horario`, `instagram`, `facebook`, `linkedin`) VALUES
(1, '+351 123 456 789', 'lorem ipsum dolor sit amet, 12, 1234-543 lorem', 'sebastiao@lorem.pt', 'De Segunda a Sexta das 00:00H às 00:00H', 'https://instagram.com', 'https://facebook.com', 'https://linkedin.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` longtext NOT NULL,
  `quando` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `imagem`, `titulo`, `texto`, `quando`) VALUES
(1, 'http://localhost/sebastiao_alves/Uploads/Desktop/conteudo-imprensa3.jpg', 'LANÇAMENTO DO LIVRO «O COLECCIONADOR DE AMNÉSIAS», DA AUTORIA DE SEBASTIÃO ALVES, QUE CEDEU OS DIREITOS DE AUTOR À ALZHEIMER PORTUGAL', '<p>No próximo dia 21 de Outubro será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que cedeu os direitos de autor à Alzheimer Portugal?Data 15-10-2014&nbsp;</p><p><br>?No próximo dia 21 de Outubro, pelas 18:00 hrs, no Instituto Superior Técnico em Lisboa, será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que muito generosamente cedeu à Alzheimer Portugal os direitos de autor. A obra representa bem a realidade de todo o percurso de um Doente de Alzheimer. O interesse do leitor é desde logo conseguido não só pela forma como o autor vai apresentando o Engenheiro Zeferino, uma vez que parte sempre da perspectiva da personagem, mas também por não faltarem os momentos de ternura, os momentos de humor e os momentos de tristeza e solidão.??Não deixe de nos acompanhar neste momento! A Alzheimer Portugal agradece. <a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20coleccionador%20de%20amnesias.pdf\">Clique aqui</a> para ler um excerto do livro «O Coleccionador de Amnésias»</p>', 'PUBLICADO A 15 NOVEMBRO 2014'),
(2, 'http://localhost/sebastiao_alves/Uploads/Desktop/conteudo-imprensa1.jpg', 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', '', 'PUBLICADO A 17 JUNHO 2020'),
(3, 'http://localhost/sebastiao_alves/Uploads/Desktop/conteudo-imprensa2.jpg', 'LANÇAMENTO DO LIVRO', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, fugit maxime! Nisi eum sunt natus dicta eveniet sit. Consequatur, dolorem! Vitae natus non, adipisci in commodi consectetur aliquid maiores neque eius exercitationem laborum incidunt quibusdam ullam perferendis quaerat animi fugit magnam quasi eaque. Quo aperiam eaque eos illum perspiciatis quia quibusdam minima, sint nulla amet eligendi delectus, rerum, nemo earum voluptas. Voluptatum corrupti consequatur commodi pariatur ratione voluptas suscipit minima nobis dicta! Voluptas quisquam libero inventore facere minima nulla porro recusandae, mollitia, repellendus at alias. Facilis soluta nisi hic quidem rem corrupti expedita optio reiciendis fugiat ad commodi dignissimos, suscipit, exercitationem accusantium eius itaque impedit alias delectus eligendi nobis molestias ab. Harum quaerat exercitationem optio odit molestias itaque dolores, sapiente vel aut tempore maxime in! Veniam dolore similique fugiat vitae non optio libero, labore odio consectetur magni ipsa quibusdam quas earum voluptates nostrum ipsam laborum natus velit consequatur laudantium praesentium. Exercitationem facere unde accusantium quas ipsum error quidem, neque dolores consectetur laborum consequatur natus harum hic, fuga et?</p><p>Ullam a speriores est beatae cumque nemo. Consequatur natus recusandae sed nemo ullam. Quod temporibus, esse molestias, a saepe illum, fugiat quia explicabo repellat quae aperiam laboriosam et quas delectus porro iure impedit?</p>', 'PUBLICADO A 25 SETEMBRO 2021'),
(5, 'http://localhost/sebastiao_alves/Uploads/Desktop/conteudo-imprensa4.jpg', 'Psychology Now', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, fugit maxime! Nisi eum sunt natus dicta eveniet sit. Consequatur, dolorem! Vitae natus non, adipisci in commodi consectetur aliquid maiores neque eius exercitationem laborum incidunt quibusdam ullam perferendis quaerat animi fugit magnam quasi eaque.&nbsp;</p><p>Quo aperiam eaque eos illum perspiciatis quia quibusdam minima, sint nulla amet eligendi delectus, rerum, nemo earum voluptas. Voluptatum corrupti consequatur commodi pariatur ratione voluptas suscipit minima nobis dicta! Voluptas quisquam libero inventore facere minima nulla porro recusandae, mollitia, repellendus at alias. Facilis soluta nisi hic quidem rem corrupti expedita optio reiciendis fugiati ipsa quibusdam quas earum voluptates nostrum ipsam laborum natus velit consequatur laudantium praesentium. Exercitationem facere unde accusantium quas ipsum error quidem, neque dolores consectetur laborum consequatur natus harum hic, fuga et?</p>', 'PUBLICADO A 02 JUNHO 2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Admin', 'admin', '$2y$10$YF8d1UBiO9ittaNBvKc6Yeqgwz1f/ShhUYUosxKIv3MCVHq49OuxO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
