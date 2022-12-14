INSERT INTO `user` (`id`, `customer_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, NULL, 'John Doe', 'johndoe@example.com', '$2y$10$zf0s55lCEfRWx94QbXJv7uV.1C2bAz2HAJhOIXvW8d/miwor.aJjm', '2022-12-16 02:42:48', '2022-12-16 02:42:48');

INSERT INTO `question` (`id`, `title`, `problem_detail`, `problem_result`, `user_id`) VALUES
(1, 'How can I run Ask World Project on my local device?', 'I am trying to use [Ask World](https://github.com/Tanvir-Sadi/ask-world \"A Question Answering website for Developers Developed using own Framework\") project on my local PC. But I am unable to do so. \n\n![image](https://i.imgur.com/hcIZ1ox.png)', 'I am Expecting it will run on my **PHP** server.', 1);

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'ask-world'),
(2, 'php'),
(3, 'localhost');

INSERT INTO `question_tag` (`id`, `question_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);


INSERT INTO `answer` (`id`, `description`, `question_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '## Step by step installation guideline\r\nClone Website from GitHub\r\n```\r\ngit clone https://github.com/Tanvir-Sadi/askWorld.git\r\n```\r\nInstall all the composer packages\r\n```\r\ncomposer install\r\ncomposer dump-autoload\r\n```\r\nNext, copy the `.env.example` to `.env` and `.htaccess.example` to `.htaccess` update `.env` file if necessary. Generate VAPID KEY for web push functionality. [Learn More](https://www.stephane-quantin.com/en/tools/generators/vapid-keys)\r\n*Make sure you update your public vapid key also in `script.js`*\r\n```\r\ndocument.addEventListener(\'DOMContentLoaded\', () => {\r\n    const applicationServerKey =\r\n        \'BNM_Z-BptwxKRu0KWtZ6OT0anYfHJHVMPLKlCV0NWvY8uv400LL2z1HUqABCwL0lfL17E75zL4LFFhGomTKlank\';\r\n```\r\nCreate Database from PHP my admin SQL query.\r\n```\r\nCREATE DATABASE ask_world;\r\n```\r\nImport Table using `database.sql` files from this project directory. After that, you will see all the tables created successfully.\r\n\r\n![image](https://user-images.githubusercontent.com/48437977/207918534-7f095da8-0d04-4e8f-8aa7-67c89c56b3e9.png)\r\n\r\nRun Webserver and Enjoy!\r\n\r\n```\r\nphp -S localhost:4242 --docroot=public\r\n```\r\n\r\n', 1, 1, '2022-12-16 03:01:35', '2022-12-16 03:01:35');

INSERT INTO `notification` (`id`, `title`, `body`, `notificable_id`, `notificable_type`, `read_at`, `created_at`) VALUES
(1, 'Someone Answer your question!', 'How can I run Ask World Project on my local device?', 1, 'App\\Model\\User', NULL, '2022-12-16 03:01:35');
