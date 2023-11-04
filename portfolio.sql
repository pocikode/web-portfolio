-- Adminer 4.8.1 MySQL 11.1.2-MariaDB-1:11.1.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `inboxes`;
CREATE TABLE `inboxes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `inboxes` (`id`, `name`, `email`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1,	'Agus Supriyatna',	'aguzsupriyatna7@gmail.com',	'UBAH DURASI PEMBAYARAN',	'asdsadsad',	1,	'2023-11-04 08:05:58',	'2023-11-04 21:52:30'),
(2,	'Agus Supriyatna',	'aguzsupriyatna7@gmail.com',	'UBAH DURASI PEMBAYARAN',	'asdasd',	1,	'2023-11-04 08:06:56',	'2023-11-04 21:52:36'),
(3,	'Agus Supriyatna',	'aguzsupriyatna7@gmail.com',	'UBAH DURASI PEMBAYARAN',	'asdasd',	1,	'2023-11-04 08:09:13',	'2023-11-04 21:52:40'),
(4,	'Agus Supriyatna',	'aguzsupriyatna7@gmail.com',	'UBAH DURASI PEMBAYARAN',	'asdasd',	1,	'2023-11-04 08:11:58',	'2023-11-04 21:52:43'),
(5,	'Jordane Larkin II',	'frempel@klocko.info',	'Repudiandae quod rem rerum.',	'Sit odio quidem illum et. Maiores ullam voluptatem vel. Sunt fuga dolorum distinctio et sunt neque saepe.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:52:45'),
(6,	'Ruthie Stiedemann MD',	'onie.thiel@glover.com',	'Consectetur dicta dolorem voluptates placeat.',	'Occaecati ipsam enim aliquid hic voluptas rerum. Quibusdam optio vero itaque sed fugit quas consequuntur. Itaque id et ut tempore quo doloremque. Voluptates modi sequi ut porro. Enim culpa molestias veniam dolor aut ut modi.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:52:50'),
(7,	'Norwood Predovic',	'denesik.jerald@bernier.net',	'Doloremque in iste laborum qui minus ut unde.',	'Qui blanditiis commodi officiis et iste repellat et. Sunt minus minima totam repellendus sed delectus sunt temporibus. In laborum debitis suscipit cum molestiae.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:52:53'),
(8,	'Dr. Luciano Murray',	'jturner@yahoo.com',	'Qui et aliquid doloremque voluptatibus iure.',	'Tempore aut fuga atque sit rerum. Labore et voluptatem tempore. Vel aut molestiae totam qui et tenetur pariatur ab.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:52:55'),
(9,	'Mara Mann III',	'mckenzie.maximus@koch.com',	'Excepturi maxime praesentium pariatur aut.',	'Quis voluptatem eaque ut earum sit. Quo fugiat quisquam aut qui veniam numquam voluptatem. Suscipit repellendus ullam deserunt quo dolor sed culpa ut. Expedita autem molestias error id sapiente.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:52:56'),
(10,	'Raoul Wintheiser MD',	'bashirian.randi@hotmail.com',	'Voluptate minima cupiditate labore harum deserunt quis fugiat.',	'Est expedita nobis vitae quod vel eum. Et rerum eligendi quod quis hic. Eius doloribus est in. Perferendis omnis laboriosam porro suscipit excepturi nostrum impedit ex.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:01'),
(11,	'Mrs. Ayana Pfeffer',	'metz.graciela@yahoo.com',	'Qui aut et rem quam.',	'Iure necessitatibus iure tenetur aut consequatur. Dicta praesentium neque aspernatur porro esse similique. Quis quisquam et nam doloremque aliquid laudantium rerum. Eveniet veniam mollitia sequi qui sed a est est.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:03'),
(12,	'Dr. Johathan Bergstrom I',	'walsh.kacie@nicolas.org',	'Sunt beatae est dicta inventore.',	'Enim fugit mollitia eligendi. Numquam eligendi dolore voluptatem. In quia enim consequuntur minima sunt aperiam nihil. Officiis vero ex et eaque nam.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:05'),
(13,	'Prof. Genesis Hirthe',	'gking@rogahn.com',	'Voluptatum ipsa earum ut fugit ex quam ratione.',	'Veritatis et vitae aut aut necessitatibus nobis modi ut. Reiciendis quia eaque eos ratione. Omnis et voluptatum deserunt excepturi voluptatem. Repellendus commodi et voluptatum debitis.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:06'),
(14,	'Candido Mann',	'germaine.okon@morar.net',	'Sit aperiam explicabo deserunt nostrum iure.',	'Occaecati ut laboriosam sint ut aut iste. Dolor provident doloribus iusto. Eaque iusto asperiores itaque repudiandae cupiditate vitae.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:08'),
(15,	'Bret Toy PhD',	'hermiston.cesar@hotmail.com',	'Consequatur tempore aliquam beatae et.',	'Pariatur molestiae voluptatem omnis quibusdam ipsa libero. Sit sunt voluptate dolorum facilis. Doloremque occaecati iure mollitia debitis nesciunt blanditiis iste.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:10'),
(16,	'Prof. Ofelia Shields',	'kurtis.legros@okuneva.com',	'Voluptas ut enim sit accusantium.',	'Sed sed aut ipsa nam omnis optio eum. Suscipit aut maiores in nam magni accusamus. Est ea magni eaque rerum ut corporis. Sit et eum nesciunt voluptas sint.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:31'),
(17,	'Everette Homenick',	'gustave.turcotte@schmidt.com',	'Doloremque non inventore facere sapiente numquam sapiente sequi molestiae.',	'Qui quia dolorum nisi iusto voluptas est. Eum id adipisci accusantium fugiat. Id et consequatur voluptatum aut maxime omnis.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:23'),
(18,	'Dr. Luigi Reilly PhD',	'mercedes12@bergnaum.com',	'Voluptate quas dolores aut et in quasi maiores.',	'Quos minus aut ea neque incidunt est et. Minima modi debitis fuga dolorem culpa quam. Omnis maxime iure tempora. Magnam mollitia rerum blanditiis. Corrupti dolores delectus et quod.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:29'),
(19,	'Mr. Chelsey Fadel',	'zwiza@hodkiewicz.com',	'Praesentium voluptatibus saepe consectetur amet amet.',	'Reiciendis delectus quam minima fugit odit hic cupiditate. Iusto facere ut non est nihil molestias. Explicabo dolore in vel. Aut nam repellat velit dolore pariatur.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:21'),
(20,	'Mrs. Frances Koelpin',	'strosin.reed@gmail.com',	'In ut sapiente enim deleniti delectus porro.',	'Non enim et sed nesciunt veritatis dignissimos earum. Autem voluptas rem nam laudantium et omnis dolor. Unde dolores quidem totam voluptatibus aut. Hic a qui dolores dolores.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:27'),
(21,	'Ms. Stephania McLaughlin',	'elisabeth29@pfeffer.com',	'Architecto autem nobis et illo rem consequatur enim.',	'Eaque aut ea qui sit. Eaque voluptas est fugit.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:17'),
(22,	'Evan Crooks',	'chaim.kassulke@connelly.com',	'Numquam perferendis quas sit beatae veritatis.',	'Esse sed dolor totam minima sit quisquam laborum. Rerum itaque dolore optio corporis ab eos.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:19'),
(23,	'Angel Wisozk',	'kihn.katelin@howe.com',	'Et dolorem est fugit repellendus.',	'Aut sit sapiente id optio. Exercitationem eaque omnis velit enim sed amet incidunt. Eligendi omnis neque eos nobis et quo et porro. Nisi dolores quia molestiae hic dicta sunt consectetur.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:15'),
(24,	'Asia McGlynn',	'corkery.marguerite@mitchell.net',	'Sunt occaecati molestiae alias incidunt animi voluptatibus qui.',	'Magnam et error sit aut. Tenetur consectetur amet et occaecati quod. Est iusto et doloremque.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:14'),
(25,	'Jack Reilly',	'stanton.ransom@mraz.com',	'Veniam sit porro odit reiciendis iusto ut.',	'Quia qui odit fugit blanditiis. Architecto maxime dolor sunt repellendus alias. Repellat sint sit impedit magni pariatur.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:36'),
(26,	'Osvaldo Hickle',	'barton.crawford@hotmail.com',	'Laboriosam sunt accusantium voluptatem eos rerum aut.',	'Enim voluptatem accusamus hic non. Ex et molestias velit et. Nemo veritatis esse enim reiciendis placeat. Quos aut ab beatae error asperiores.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:39'),
(27,	'Nikki Bartoletti',	'ari.littel@gmail.com',	'Officia veritatis quibusdam nihil quisquam tempora.',	'Occaecati eos temporibus vel fugiat repellendus in autem. Repellat enim eligendi ea aut similique similique omnis. Cupiditate laboriosam molestiae necessitatibus.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:41'),
(28,	'Camden Lubowitz',	'maurine78@yahoo.com',	'Aut nostrum sequi ipsam rem autem.',	'Deserunt commodi minima nihil velit laudantium perferendis. Magnam velit eum velit iste voluptatum dolorem. Consequuntur omnis eum natus aperiam ipsa. Accusamus officia qui odio blanditiis tempore dolorem.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:43'),
(29,	'Robb Gleichner',	'medhurst.mireille@bruen.com',	'Veniam et minima aut debitis.',	'Exercitationem vel laboriosam qui eos totam qui qui cumque. Vel sapiente praesentium perspiciatis illo omnis. Temporibus consequatur praesentium eaque quis. Magnam asperiores soluta debitis.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:50'),
(30,	'Rosetta McCullough DDS',	'zackary15@yahoo.com',	'Libero eligendi qui dolor quam dolore.',	'Et est temporibus sit velit iure. Non aperiam ut explicabo illum corrupti dicta quod. Autem excepturi dolores ipsa libero sed minus est. Ratione quia delectus reiciendis sunt molestias.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:44'),
(31,	'Magnolia Casper',	'vanessa.collins@yahoo.com',	'Et eum est magnam.',	'Numquam amet rerum magni distinctio. Soluta asperiores reprehenderit sunt. Unde nesciunt nihil asperiores molestiae sunt magni. Totam sit rerum laborum temporibus omnis dolor sunt.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:48'),
(32,	'Miss Alysson Rodriguez',	'dominique79@dach.com',	'Numquam qui itaque earum sit autem qui.',	'Molestiae ratione ut perferendis officia dolores. In ipsam placeat ex aperiam. Quis saepe ipsa dolores tenetur sint. Provident labore aut aliquam maxime voluptatem porro.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:56'),
(33,	'Vickie Cormier',	'madie20@mann.com',	'Et officia quae in molestiae quibusdam.',	'Quia culpa enim temporibus veniam. Accusantium quaerat saepe nesciunt sed nemo sit ducimus. Qui et aperiam recusandae earum. Sunt voluptatum sed id in consequuntur.',	0,	'2023-11-04 21:01:30',	'2023-11-04 21:01:30'),
(34,	'Mr. Robin Dickens PhD',	'adan.willms@gmail.com',	'Natus blanditiis culpa minus et dolorem consequatur.',	'Voluptatem dicta commodi et qui laborum est. Numquam ut optio totam corporis repudiandae dolor. Nemo sit aspernatur ipsam laboriosam facere laudantium qui. Qui qui natus tenetur qui similique.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:53:52'),
(35,	'Jacinthe Wisoky V',	'marquardt.larry@yahoo.com',	'Quis quisquam inventore dolores quidem velit optio rem error.',	'Sit vel non aut qui optio dolore. Ut excepturi iste quia. Sint consectetur iste blanditiis eum. Architecto numquam facere vel quod consectetur voluptatem blanditiis. Consequatur aperiam veniam veniam sunt consectetur recusandae ut dolore.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:54:05'),
(36,	'Jeanette Dietrich',	'xbatz@collier.info',	'Iusto rem neque qui quaerat.',	'Cum odit qui sit esse. Voluptatem dicta ad dolorem aut sint saepe est. At quia facilis exercitationem aut corrupti minima. Cum quis fugit et magni sapiente unde accusamus.',	0,	'2023-11-04 21:01:30',	'2023-11-04 21:01:30'),
(37,	'Tabitha Christiansen',	'leland33@yahoo.com',	'Commodi omnis qui excepturi.',	'Aut qui et consequatur et dolorem provident. Consequatur cum voluptatem voluptas est voluptas. Ut minus odit quos iure qui.',	0,	'2023-11-04 21:01:30',	'2023-11-04 21:01:30'),
(38,	'Yvette Torphy DVM',	'odell.prohaska@fay.com',	'Qui autem officiis quis.',	'Est doloribus temporibus et consequuntur. Corporis dolorem sed totam corrupti a deserunt optio. Suscipit cupiditate porro et est ut error assumenda voluptatum.',	0,	'2023-11-04 21:01:30',	'2023-11-04 21:01:30'),
(39,	'Tyler Altenwerth',	'shanie94@boyer.info',	'Id quis eum soluta.',	'Dicta impedit ad alias qui quia sed. Voluptas aliquam doloremque aut. Quibusdam neque rerum consequatur omnis corrupti. Qui id dolore provident hic qui et.',	1,	'2023-11-04 21:01:30',	'2023-11-04 21:55:16');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(3,	'2023_11_04_050623_create_social_media_table',	2),
(4,	'2023_11_04_060958_create_resumes_table',	3),
(5,	'2023_11_04_065057_rename_intitution_to_institution_in_table_resumes',	4),
(6,	'2023_11_04_065558_create_skills_table',	5),
(7,	'2023_11_04_072659_create_inboxes_table',	6);

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `resumes`;
CREATE TABLE `resumes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('school','work') NOT NULL,
  `title` varchar(50) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `description` text NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `resumes` (`id`, `type`, `title`, `institution`, `start`, `end`, `description`, `order`, `created_at`, `updated_at`) VALUES
(1,	'school',	'Bachelor Of Informatics',	'Universitas Pembangunan Jaya',	'2021-07-01',	NULL,	'Pursuing a Bachelor of Science degree in Computer Science, with a focus on computer programming, data structures, and software development.',	1,	NULL,	NULL),
(2,	'school',	'High School Diploma',	'SMA N 3 Slawi, Kab. Tegal',	'2014-07-01',	'2017-05-01',	'Completed high school with a major in Science (IPA - Ilmu Pengetahuan Alam), gaining a strong foundation in subjects such as physics, chemistry, and biology.',	2,	NULL,	NULL),
(3,	'work',	'Backend Developer',	'PT MNC Teknologi Nusantara',	'2021-07-01',	NULL,	'<ul>\r\n                            <li>Developed backend logic and APIs using Python and Flask framework.</li>\r\n                            <li>Optimized application performance by implementing caching mechanisms and improving database query efficiency.</li>\r\n                            <li>Collaborated with frontend developers to ensure seamless integration between the frontend and backend components</li>\r\n                            <li>Participated in agile development methodologies, sprint planning, and retrospective meetings.</li>\r\n                        </ul>',	1,	NULL,	NULL),
(4,	'work',	'Backend Developer',	'PT Bahaso Intermedia Cakrawala',	'2020-07-01',	'2021-07-01',	'<ul>\r\n                            <li>Developed backend logic and APIs using Python and Flask framework.</li>\r\n                            <li>Optimized application performance by implementing caching mechanisms and improving database query efficiency.</li>\r\n                            <li>Collaborated with frontend developers to ensure seamless integration between the frontend and backend components</li>\r\n                            <li>Participated in agile development methodologies, sprint planning, and retrospective meetings.</li>\r\n                        </ul>',	2,	NULL,	NULL),
(5,	'work',	'Backend Developer',	'PT Anterin Digital Nusantara',	'2019-06-01',	'2020-07-01',	'<ul>\r\n                            <li>Developed backend logic and APIs using Python and Flask framework.</li>\r\n                            <li>Optimized application performance by implementing caching mechanisms and improving database query efficiency.</li>\r\n                            <li>Collaborated with frontend developers to ensure seamless integration between the frontend and backend components</li>\r\n                            <li>Participated in agile development methodologies, sprint planning, and retrospective meetings.</li>\r\n                        </ul>',	3,	NULL,	NULL),
(6,	'work',	'Backend Developer (Intern)',	'PT Zahir Internasional',	'2019-01-01',	'2019-01-01',	'<ul>\r\n                            <li>Developed backend logic and APIs using Python and Flask framework.</li>\r\n                            <li>Optimized application performance by implementing caching mechanisms and improving database query efficiency.</li>\r\n                            <li>Collaborated with frontend developers to ensure seamless integration between the frontend and backend components</li>\r\n                            <li>Participated in agile development methodologies, sprint planning, and retrospective meetings.</li>\r\n                        </ul>',	4,	NULL,	NULL);

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `value` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `skills` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1,	'Python',	80,	NULL,	NULL),
(2,	'PHP',	75,	NULL,	NULL),
(3,	'Javascript',	70,	NULL,	NULL),
(4,	'Go',	60,	NULL,	NULL),
(5,	'SQL',	60,	NULL,	NULL),
(6,	'HTML',	75,	NULL,	NULL),
(7,	'CSS',	50,	NULL,	NULL);

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE `social_media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `social_media_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `social_media` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1,	'linkedin',	'https://www.linkedin.com/in/agus-supriyatna/',	'2023-11-04 05:19:17',	'2023-11-04 05:26:31'),
(2,	'github',	'https://github.com/pocikode',	'2023-11-04 05:19:17',	'2023-11-04 18:46:21'),
(3,	'twitter',	'#',	'2023-11-04 05:19:17',	'2023-11-04 18:46:21'),
(5,	'instagram',	'#',	'2023-11-04 16:31:11',	'2023-11-04 16:31:11');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `photo`, `phone`, `city`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Agus Supriyatna',	'agus',	'supriyatnaagus@outlook.com',	'$2y$12$eSC5867kGG034HmsmIrYp.Kic4EmPt0pqSLMTbIngSBBCkjIzqVY2',	'img/profile_1.jpg',	'081393817875',	'Tegal',	'Experienced Backend Developer with a broad knowledge of backend development and programming. Proﬁcient in PHP, Python, Go, and JavaScript. Possess 4 years of experience in developing and maintaining complex backend systems. Strong analytical skills and ability to work in a team. Capable of implementing eﬃcient solutions and enhancing the performance of web applications.',	NULL,	'2023-11-04 03:23:17',	'2023-11-04 07:24:34');

-- 2023-11-04 22:25:50
