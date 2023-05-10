-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2023 às 13:44
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
(8, '21:10:29 - 07/05/2023', 1),
(9, '09:44:48 - 09/05/2023', 1),
(10, '12:06:25 - 09/05/2023', 1),
(11, '18:35:00 - 09/05/2023', 1),
(12, '22:31:27 - 09/05/2023', 1),
(13, '10:02:44 - 10/05/2023', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `img_autor` varchar(200) NOT NULL,
  `img_home` varchar(200) NOT NULL,
  `texto_autor` longtext NOT NULL,
  `texto_home` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `img_autor`, `img_home`, `texto_autor`, `texto_home`) VALUES
(1, 'http://localhost/sebastiao_alves/Uploads/Autor/conteudo.jpg', 'http://localhost/sebastiao_alves/Uploads/Autor/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, veniam qui! At sint, fuga voluptas a culpa enim minima tempore, dolor illo, eum corporis voluptatibus beatae. Veritatis, beatae quis totam fugit facere tenetur consectetur soluta ipsum similique ad quod voluptate praesentium accusamus quibusdam, quia deleniti fugiat fuga harum veniam? Laborum autem aut enim libero maxime odit ipsam rem, doloremque cupiditate sunt. Cumque eos minus accusantium voluptate ducimus, ipsum nemo, alias ex natus fugiat deserunt maiores, praesentium porro aperiam modi provident! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi blanditiis obcaecati, laudantium, commodi animi non similique quisquam eveniet aliquam asperiores aut, id amet maxime magni voluptate ullam ducimus quasi doloribus eaque maiores fugit voluptas. Cumque, quisquam unde sed quod autem eius perferendis officiis. Fugiat voluptate quidem illum placeat atque! Error minima culpa, nobis aperiam iure aspernatur temporibus delectus voluptatibus sit optio ea beatae dolorem magnam fuga esse maiores tempora voluptatum. Id nam consequuntur nisi cumque voluptates reprehenderit ullam, vitae et dignissimos facere recusandae sunt velit quasi perspiciatis ipsa architecto dolores at ipsum rem exercitationem ab adipisci officiis. Saepe perspiciatis fugiat beatae.&nbsp;</p><p>Sit debitis iste beatae at reprehenderit consequuntur veritatis, aliquam atque repellat ut sequi hic facere, possimus sapiente ea odit accusamus quam sunt ratione nihil, ex deleniti mollitia. Accusamus reprehenderit vel culpa minus doloremque, beatae corrupti vitae! Vero repudiandae dolor veritatis unde iste nisi assumenda eius quos adipisci temporibus facilis ex corporis odit architecto facere, obcaecati perferendis velit, aliquam voluptates sed aspernatur nemo itaque doloribus delectus. Quaerat obcaecati in facere voluptatibus soluta repudiandae fuga officia mollitia. Quasi dignissimos, laborum deserunt perspiciatis veniam minus explicabo expedita laudantium sunt soluta corrupti odio eius fugiat accusantium repellendus ut quaerat autem saepe ratione pariatur asperiores consectetur reiciendis. Fugit inventore dicta perspiciatis, veniam provident adipisci, vel dolores, molestias ab minima enim voluptates. Aliquid maiores perferendis a praesentium veniam fuga voluptate illum. Obcaecati, sequi voluptatem aliquid dolorum ab commodi rem, officia eos minima, cumque qui labore sit! Mollitia, natus pariatur placeat explicabo sint numquam ea odit magni perspiciatis aut distinctio reprehenderit iusto consectetur quasi quos maxime temporibus vero odio officia dolorum eos laborum aperiam. Quisquam unde iure adipisci sunt, deleniti rem ab soluta doloribus accusantium ut enim laborum, dolorem ipsam dicta obcaecati non repellat! Quod at aspernatur dolore molestias dicta repudiandae aut necessitatibus vitae quia voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, veniam qui! At sint, fuga voluptas a culpa enim minima tempore, dolor illo, eum corporis voluptatibus beatae. Veritatis, beatae quis totam fugit facere tenetur consectetur soluta ipsum similique ad quod voluptate praesentium accusamus quibusdam, quia deleniti fugiat fuga harum veniam? Laborum autem aut enim libero maxime odit ipsam rem, doloremque cupiditate sunt.&nbsp;</p><p>Cumque eos minus accusantium voluptate ducimus, ipsum nemo, alias ex natus fugiat deserunt maiores, praesentium porro aperiam modi provident! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, doloribus? Dolor possimus suscipit illum? Magnam adipisci officia temporibus magni vitae aliquam at dolore non, reprehenderit pariatur quo incidunt laboriosam harum culpa, sapiente dignissimos, nesciunt officiis eos facere dolorem! Id, odit earum voluptas repellat itaque deserunt eveniet, quos magni similique illo sed dolores a recusandae saepe et accusamus eius cupiditate reiciendis?&nbsp;</p><p>Iusto porro impedit fugiat eos quisquam voluptates ea sapiente, vitae voluptas et nisi facilis quos dolor quod quibusdam ipsa consequuntur consequatur ut tempora unde sequi, at animi aliquam. Rerum possimus sit repudiandae cum, blanditiis, praesentium reiciendis autem nisi, atque dolorem nobis porro ipsam sequi! Doloribus molestiae expedita culpa ad reiciendis voluptate a ipsa deserunt cumque dignissimos ipsum provident, pariatur nobis velit at nesciunt exercitationem fugiat. Ab exercitationem accusamus soluta inventore magnam consequatur repudiandae distinctio voluptatem officiis asperiores facere quisquam enim tenetur eligendi corrupti hic, illum eum expedita vero ipsum nisi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, doloribus? Dolor possimus suscipit illum? Magnam adipisci officia temporibus magni vitae aliquam at dolore non, reprehenderit pariatur quo incidunt laboriosam harum culpa, sapiente dignissimos, nesciunt officiis eos facere dolorem! Id, odit earum voluptas repellat itaque deserunt eveniet, quos magni similique illo sed dolores a recusandae saepe et accusamus eius cupiditate reiciendis? Iusto porro impedit fugiat eos quisquam voluptates ea sapiente, vitae voluptas et nisi facilis quos dolor quod quibusdam ipsa consequuntur consequatur ut tempora unde sequi, at animi aliquam.&nbsp;</p><p>Rerum possimus sit repudiandae cum, blanditiis, praesentium reiciendis autem nisi, atque dolorem nobis porro ipsam sequi! Doloribus molestiae expedita culpa ad reiciendis voluptate a ipsa deserunt cumque dignissimos ipsum provident, pariatur nobis velit at nesciunt exercitationem fugiat. Ab exercitationem accusamus soluta inventore magnam consequatur repudiandae distinctio voluptatem officiis asperiores facere quisquam enim tenetur eligendi corrupti hic, illum eum expedita vero ipsum nisi.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo explicabo repellat, dolorem excepturi aspernatur harum assumenda nemo maxime iure nostrum molestiae ut incidunt, consequatur, impedit temporibus quisquam fugit natus facilis alias laudantium aperiam placeat?&nbsp;</p><p>Tempore veritatis, deleniti reprehenderit deserunt fugiat ad in sint aut aspernatur, natus dolor ipsam temporibus atque alias quas possimus eum unde nam labore quasi! Quia voluptas temporibus sapiente, aut culpa quisquam nobis odio quasi doloribus ducimus labore ea minima voluptatum, ad fugit sit distinctio! Quidem architecto praesentium perspiciatis, voluptatibus debitis tempora deleniti quis rem obcaecati reiciendis at, voluptatum harum cum quod et reprehenderit veritatis repudiandae illo qui assumenda. Natus temporibus dolores quaerat corporis labore?</p><p>&nbsp;Voluptatibus debitis dolore quo dolores, sed cupiditate repudiandae, sunt perferendis quos adipisci optio voluptatem animi quod. Blanditiis doloremque reprehenderit ducimus consequatur. Dolor, quidem. Iure, nisi facilis eligendi suscipit temporibus maiores consectetur soluta ipsam quam maxime ullam atque consequuntur, perferendis ipsa aperiam dolores?</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `img_desk` varchar(200) NOT NULL,
  `img_mob` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(355) NOT NULL,
  `quando` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `img_desk`, `img_mob`, `titulo`, `subtitulo`, `quando`, `link`) VALUES
(1, 'http://localhost/sebastiao_alves/Uploads/Banner/Desktop/cabecalho1.jpg', 'http://localhost/sebastiao_alves/Uploads/Banner/Mobile/cabecalho1.jpg', 'SENHORA DO AMOR E DA GUERRA', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima id, autem quis dolores recusandae sunt quae aut consequatur itaque at accusamus voluptates molestiae fugiat assumenda ducimus veritatis iure soluta praesentium, totam ut? Excepturi ut blanditiis nihil officiis repellendus, sequi natus omnis laboriosam repudiandae pariatur a, ...', '12:02:46 - 10/05/2023', 'http://localhost/sebastiao_alves/livros/1');

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
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `destaque` varchar(50) NOT NULL,
  `id_livros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `destaque`, `id_livros`) VALUES
(1, 'NOVIDADE', 1),
(2, 'MAIS VENDIDO', 4),
(3, 'EM PROMOÇÃO', 3);

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
(1, 'http://localhost/sebastiao_alves/Uploads/Imprensa/conteudo-imprensa3.jpg', 'LANÇAMENTO DO LIVRO «O COLECCIONADOR DE AMNÉSIAS», DA AUTORIA DE SEBASTIÃO ALVES, QUE CEDEU OS DIREITOS DE AUTOR À ALZHEIMER PORTUGAL', '<p>No próximo dia 21 de Outubro será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que cedeu os direitos de autor à Alzheimer Portugal?Data 15-10-2014&nbsp;</p><p><br>?No próximo dia 21 de Outubro, pelas 18:00 hrs, no Instituto Superior Técnico em Lisboa, será lançado o livro «O Coleccionador de Amnésias», da autoria de Sebastião Alves, que muito generosamente cedeu à Alzheimer Portugal os direitos de autor. A obra representa bem a realidade de todo o percurso de um Doente de Alzheimer. O interesse do leitor é desde logo conseguido não só pela forma como o autor vai apresentando o Engenheiro Zeferino, uma vez que parte sempre da perspectiva da personagem, mas também por não faltarem os momentos de ternura, os momentos de humor e os momentos de tristeza e solidão.??Não deixe de nos acompanhar neste momento! A Alzheimer Portugal agradece. <a href=\"https://masterprohosting.com/sebastiao_alves//public/uploads/livros/pdf/o%20coleccionador%20de%20amnesias.pdf\">Clique aqui</a> para ler um excerto do livro «O Coleccionador de Amnésias»</p>', 'PUBLICADO A 15 NOVEMBRO 2014'),
(2, 'http://localhost/sebastiao_alves/Uploads/Imprensa/conteudo-imprensa1.jpg', 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', '', 'PUBLICADO A 17 JUNHO 2020'),
(3, 'http://localhost/sebastiao_alves/Uploads/Imprensa/conteudo-imprensa2.jpg', 'LANÇAMENTO DO LIVRO', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, fugit maxime! Nisi eum sunt natus dicta eveniet sit. Consequatur, dolorem! Vitae natus non, adipisci in commodi consectetur aliquid maiores neque eius exercitationem laborum incidunt quibusdam ullam perferendis quaerat animi fugit magnam quasi eaque. Quo aperiam eaque eos illum perspiciatis quia quibusdam minima, sint nulla amet eligendi delectus, rerum, nemo earum voluptas. Voluptatum corrupti consequatur commodi pariatur ratione voluptas suscipit minima nobis dicta! Voluptas quisquam libero inventore facere minima nulla porro recusandae, mollitia, repellendus at alias. Facilis soluta nisi hic quidem rem corrupti expedita optio reiciendis fugiat ad commodi dignissimos, suscipit, exercitationem accusantium eius itaque impedit alias delectus eligendi nobis molestias ab. Harum quaerat exercitationem optio odit molestias itaque dolores, sapiente vel aut tempore maxime in! Veniam dolore similique fugiat vitae non optio libero, labore odio consectetur magni ipsa quibusdam quas earum voluptates nostrum ipsam laborum natus velit consequatur laudantium praesentium. Exercitationem facere unde accusantium quas ipsum error quidem, neque dolores consectetur laborum consequatur natus harum hic, fuga et?</p><p>Ullam a speriores est beatae cumque nemo. Consequatur natus recusandae sed nemo ullam. Quod temporibus, esse molestias, a saepe illum, fugiat quia explicabo repellat quae aperiam laboriosam et quas delectus porro iure impedit?</p>', 'PUBLICADO A 25 SETEMBRO 2021'),
(6, 'http://localhost/sebastiao_alves/Uploads/Imprensa/conteudo-imprensa4.jpg', 'Psychology Now', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, fugit maxime! Nisi eum sunt natus dicta eveniet sit. Consequatur, dolorem! Vitae natus non, delectus, rerum, nemo earum voluptas. Voluptatum corrupti consequatur commodi pariatur ratione voluptas suscipit minima nobis dicta! Voluptas quisquam libero inventore facere minima nulla porro recusandae, mollitia, repellendus at alias. Facilis soluta nisi hic quidem rem corrupti expedita optio reiciendis fugiat ad commodi dignissimos, suscipit, exercitationem accusantium eius itaque impedit alias delectus eligendi nobis molestias ab. . Exercitationem facere unde accusantium quas ipsum error quidem, neque dolores consectetur laborum consequatur natus harum hic, fuga et?</p><p>Ullam a speriores est beatae cumque nemo. Consequatur natus recusandae sed nemo ullam. Quod temporibus, esse molestias, a saepe illum, fugiat quia explicabo repellat quae aperiam laboriosam et quas delectus porro iure impedit?</p>', 'PUBLICADO A 02 JUNHO 2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  `quando` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `imagem`, `titulo`, `texto`, `quando`) VALUES
(1, 'http://localhost/sebastiao_alves/Uploads/Livros/livro-conteudo.jpg', 'SENHORA DO AMOR E DA GUERRA', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima id, autem quis dolores recusandae sunt quae aut consequatur itaque at accusamus voluptates molestiae fugiat assumenda ducimus veritatis iure soluta praesentium, totam ut? Excepturi ut blanditiis nihil officiis repellendus, sequi natus omnis laboriosam repudiandae pariatur a, deleniti perspiciatis. Dolore tempora cupiditate, voluptatibus inventore dolores numquam, rerum laboriosam facere quod placeat voluptate minus ut eum commodi neque tempore, impedit modi accusamus iusto! Omnis, veritatis qui consequuntur quaerat quae adipisci, iste nobis aperiam ipsum animi amet, sint facere. Corrupti provident fugiat iure pariatur esse maxime aut recusandae repellat sequi perferendis debitis, sit fuga!</p><p>&nbsp;</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni dicta ratione voluptatum natus enim, ab error unde tempore reiciendis ad quis, ipsam rem accusamus. Dolore fugit corporis cumque doloribus!</p><p>&nbsp;</p><p>Edição: Junho de 2020</p><p>Dimensões: 150 x 230 x 10 mm</p><p>Encadernação: Capa molestia</p><p>Páginas: 240</p>', '11:34:07 - 09/05/2023'),
(2, 'http://localhost/sebastiao_alves/Uploads/Livros/livro-conteudo3.jpg', 'O CARACOL ESTRÁBICO', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt quos mollitia sequi blanditiis impedit ut libero sit facilis totam, optio voluptatum eligendi maxime aperiam provident consectetur modi eius quaerat.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur et quaerat dolores accusamus iste maiores, vel ipsa reprehenderit aliquam quasi eligendi exercitationem sed labore. Consequatur, porro deleniti eaque, veniam neque vitae non odit architecto reiciendis sint impedit saepe perspiciatis veritatis at? Provident veritatis harum dignissimos repudiandae cum, possimus nihil eligendi officia corporis? Fugiat culpa placeat, excepturi veniam a labore aspernatur voluptate fugit quidem ea laudantium ullam sint eum quas tenetur error, iure dignissimos laboriosam veritatis laborum quaerat illum eos! Corporis ipsam excepturi sunt repudiandae, qui numquam veritatis commodi accusantium aspernatur nisi incidunt non deleniti assumenda officia alias illo nam! A?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo voluptatem repellat assumenda a rem vero voluptate cupiditate dolore eius natus quis, iste, inventore porro ipsum suscipit? Esse nisi sapiente sit, iure deserunt ducimus, consectetur dolorem sequi tempore in deleniti voluptates iusto architecto voluptatem accusantium vel adipisci atque? Provident, commodi explicabo! Eos quasi veritatis ipsam nobis perspiciatis similique laboriosam sed aliquid. Corrupti, iste. Porro consequuntur modi voluptate a sequi autem iure, reiciendis nemo adipisci facere accusamus velit culpa deserunt eligendi quo quia beatae. Nostrum aperiam officia voluptatibus error, adipisci at eveniet quo similique a dolorem accusantium quia commodi numquam veniam eos, eaque magni corrupti expedita in debitis facilis consequuntur, veritatis id. Doloremque dolor voluptas minus delectus, harum explicabo illum praesentium, recusandae quisquam saepe excepturi quis commodi consequatur, ratione distinctio expedita rem! Itaque voluptatibus mollitia cumque distinctio sint id, delectus harum maiores obcaecati corporis? Sed nesciunt nobis beatae ut eveniet a possimus!</p>', '11:39:42 - 09/05/2023'),
(3, 'http://localhost/sebastiao_alves/Uploads/Livros/livro-conteudo2.jpg', 'O COLECCIONADOR DE AMNÉSIAS', '<p>Consequatur, porro deleniti eaque, veniam neque vitae non odit architecto reiciendis sint impedit saepe perspiciatis veritatis at? Provident veritatis harum dignissimos repudiandae cum, possimus nihil eligendi officia corporis?&nbsp;</p><p>Fugiat culpa placeat, excepturi veniam a labore aspernatur voluptate fugit quidem ea laudantium ullam sint eum quas tenetur error, iure dignissimos laboriosam veritatis laborum quaerat illum eos! Corporis ipsam excepturi sunt repudiandae, qui numquam veritatis commodi accusantium aspernatur nisi incidunt non deleniti assumenda officia alias illo nam! A? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo voluptatem repellat assumenda a rem vero voluptate cupiditate dolore eius natus quis, iste, inventore porro ipsum suscipit? Esse nisi sapiente sit, iure deserunt ducimus, consectetur dolorem sequi tempore in deleniti voluptates iusto architecto voluptatem accusantium vel adipisci atque?&nbsp;</p><p>Provident, commodi explicabo! Eos quasi veritatis ipsam nobis perspiciatis similique laboriosam sed aliquid. Corrupti, iste. Porro consequuntur modi voluptate a sequi autem iure, reiciendis nemo adipisci facere accusamus velit culpa deserunt eligendi quo quia beatae. Nostrum aperiam officia voluptatibus error, adipisci at eveniet quo similique a dolorem accusantium quia commodi numquam veniam eos, eaque magni corrupti expedita in debitis facilis consequuntur, veritatis id.&nbsp;</p><p>Doloremque dolor voluptas minus delectus, harum explicabo illum praesentium, recusandae quisquam saepe excepturi quis commodi consequatur, ratione distinctio expedita rem! Itaque voluptatibus mollitia cumque distinctio sint id, delectus harum maiores obcaecati corporis? Sed nesciunt nobis beatae ut eveniet a possimus!</p>', '11:41:38 - 09/05/2023'),
(4, 'http://localhost/sebastiao_alves/Uploads/Livros/livro-conteudo4.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt quos mollitia sequi blanditiis impedit ut libero sit facilis totam, optio voluptatum eligendi maxime aperiam provident consectetur modi eius quaerat. Lorem, ipsum dolor sit amet consectetur adipisicing elit.&nbsp;</p><p>Tenetur et quaerat dolores accusamus iste maiores, vel ipsa reprehenderit aliquam quasi eligendi exercitationem sed labore.&nbsp;</p><p>Consequatur, porro deleniti eaque, veniam neque vitae non odit architecto reiciendis sint impedit saepe perspiciatis veritatis at? Provident veritatis harum dignissimos repudiandae cum, possimus nihil eligendi officia corporis? Fugiat culpa placeat, excepturi veniam a labore aspernatur voluptate fugit quidem ea laudantium ullam sint eum quas tenetur error, iure dignissimos laboriosam veritatis laborum quaerat illum eos! Corporis ipsam excepturi sunt repudiandae, qui numquam veritatis commodi accusantium aspernatur nisi incidunt non deleniti assumenda officia alias illo nam! A?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>', '12:08:36 - 09/05/2023');

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
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
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
