-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 06:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ask_world`
--

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `description`, `question_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, '`NullPointerException`s are exceptions that occur when you try to use a reference that points to no location in memory (null) as though it were referencing an object.  Calling a method on a null reference or trying to access a field of a null reference will trigger a `NullPointerException`.  These are the most common, but other ways are listed on the [`NullPointerException`][1] javadoc page.\r\n\r\nProbably the quickest example code I could come up with to illustrate a `NullPointerException` would be:\r\n\r\n    public class Example {\r\n\r\n        public static void main(String[] args) {\r\n            Object obj = null;\r\n            obj.hashCode();\r\n        }\r\n\r\n    }\r\n\r\nOn the first line inside `main`, I\'m explicitly setting the `Object` reference `obj` equal to `null`.  This means I have a reference, but it isn\'t pointing to any object.  After that, I try to treat the reference as though it points to an object by calling a method on it.  This results in a `NullPointerException` because there is no code to execute in the location that the reference is pointing.\r\n\r\n(This is a technicality, but I think it bears mentioning: A reference that points to null isn\'t the same as a C pointer that points to an invalid memory location.  A null pointer is literally not pointing *anywhere*, which is subtly different than pointing to a location that happens to be invalid.)\r\n\r\n  [1]: http://docs.oracle.com/javase/7/docs/api/java/lang/NullPointerException.html', 79, 2, '2022-11-27 16:12:55', '2022-11-27 16:12:55'),
(8, 'Hi Dear', 77, 22, '2022-12-09 09:38:09', '2022-12-09 09:38:09'),
(9, 'Hi dear 1', 77, 22, '2022-12-09 09:39:59', '2022-12-09 09:39:59'),
(10, 'Hi dear 2\r\n', 77, 22, '2022-12-09 09:44:46', '2022-12-09 09:44:46'),
(11, 'Undefined array key \"endpoint\" in D:\\project\\htdocs\\askWorld\\vendor\\minishlink\\web-push\\src\\Subscription.php on line 79', 77, 22, '2022-12-09 09:45:17', '2022-12-09 09:45:17'),
(12, 'Hi', 77, 22, '2022-12-09 13:10:51', '2022-12-09 13:10:51'),
(13, 'Hi dear', 77, 22, '2022-12-09 18:27:04', '2022-12-09 18:27:04'),
(14, 'This is second Answer', 77, 22, '2022-12-10 03:45:55', '2022-12-10 03:45:55'),
(15, '```\r\npublic class Example {\r\n\r\n    public static void main(String[] args) {\r\n        Object obj = null;\r\n        obj.hashCode();\r\n    }\r\n\r\n}\r\n```', 79, 22, '2022-12-10 07:46:46', '2022-12-10 07:46:46'),
(16, 'fjhvjh', 77, 22, '2022-12-12 06:28:47', '2022-12-12 06:28:47'),
(17, 'Hi', 80, 22, '2022-12-15 05:53:38', '2022-12-15 05:53:38'),
(18, 'This Is another Answer', 78, 22, '2022-12-15 06:33:09', '2022-12-15 06:33:09');

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `body`, `notificable_id`, `notificable_type`, `read_at`, `created_at`) VALUES
(1, 'Someone Answer your question!', 'How to configure the “dotenv gem” in the rails 7 application', 22, 'App\\Model\\User', NULL, '2022-12-09 18:27:04'),
(2, 'Someone Answer your question!', 'How to configure the “dotenv gem” in the rails 7 application', 22, 'App\\Model\\User', NULL, '2022-12-10 03:45:55'),
(3, 'Someone Answer your question!', 'What is a Null Pointer Exception, and how do I fix it?', 22, 'App\\Model\\User', NULL, '2022-12-10 07:46:47'),
(4, 'Someone Answer your question!', 'How to configure the “dotenv gem” in the rails 7 application', 22, 'App\\Model\\User', NULL, '2022-12-12 06:28:47'),
(5, 'Someone Answer your question!', 'Markdown Sample', 22, 'App\\Model\\User', NULL, '2022-12-15 05:53:38'),
(6, 'Someone Answer your question!', 'What is the best way to compare my Answer Key array to my Student Response array to calculate a quiz score?', 22, 'App\\Model\\User', NULL, '2022-12-15 06:33:09');

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `title`, `problem_detail`, `problem_result`, `user_id`) VALUES
(77, 'How to configure the “dotenv gem” in the rails 7 application', 'Add the below line in the `Gemfile`\n    gem \'dotenv-rails\', require: \'dotenv/rails-now\', groups: [:development]\nRun `bundle install`\nAdd the below code just below this line `Bundler.require(*Rails.groups)` in the **application.rb**\n\n    # Load dotenv only in development or test environment\n    if [\'development\', \'test\'].include? ENV[\'RAILS_ENV\']\n    Dotenv::Railtie.load\n    end\n\nCreate one file in the app folder with `.env` name\nAdd your credentials in this `.env` file like below\n\n    DB_USERNAME: username\n    DB_PASSWORD: password\n\nUse this env variable in the appropriate place like below.\nin the `database.yml`\n\n    default: &default\n      adapter: postgresql\n      encoding: unicode\n      pool: <%= ENV.fetch(\"RAILS_MAX_THREADS\") { 5 } %>\n      host: localhost\n      username: <%= ENV[\'DB_USERNAME\'] %>\n      password: <%= ENV[\'DB_PASSWORD\'] %>\n\nNow your ENV variable setup is done. you can check it from the rails console like below.\n\n    rails c\n    > ENV[\"DB_USERNAME\"]\n    > username\n    >ENV[\"DB_PASSWORD\"]\n    > password\n\nThe above answer is for all these below questions you may have.\n\nHow to configure the environment variable / env variable in the rails app?\nHow to set up the environment variable / env variable?\ntutorial to use dotenv gem in the ROR / ruby on rails/rails 7?\nHow to create a .env file in the rails?\nHow to access the environment variable in the rails?\nYou can also refer to this GitHub page for the same https://github.com/bkeepers/dotenv', 'Use this env variable in the appropriate place like below.\r\nin the `database.yml`\r\n\r\n    default: &default\r\n      adapter: postgresql\r\n      encoding: unicode\r\n      pool: <%= ENV.fetch(\"RAILS_MAX_THREADS\") { 5 } %>\r\n      host: localhost\r\n      username: <%= ENV[\'DB_USERNAME\'] %>\r\n      password: <%= ENV[\'DB_PASSWORD\'] %>\r\n\r\nNow your ENV variable setup is done. you can check it from the rails console like below.\r\n\r\n    rails c\r\n    > ENV[\"DB_USERNAME\"]\r\n    > username\r\n    >ENV[\"DB_PASSWORD\"]\r\n    > password\r\n\r\nThe above answer is for all these below questions you may have.\r\n\r\nHow to configure the environment variable / env variable in the rails app?\r\nHow to set up the environment variable / env variable?\r\ntutorial to use dotenv gem in the ROR / ruby on rails/rails 7?\r\nHow to create a .env file in the rails?\r\nHow to access the environment variable in the rails?\r\nYou can also refer to this GitHub page for the same https://github.com/bkeepers/dotenv', 2),
(78, 'What is the best way to compare my Answer Key array to my Student Response array to calculate a quiz score?', 'I have a site where I provide pre-defined and dynamically generated quizes to students from a MySQL database. The answers to each question can be radio buttons (mutually-exclusive) or checkboxes. I build an Answer Key array from a database query and a Student Response array from a different database query. I need to compare the Answer Key array to the Student Response array, using PHP, to score a quiz. I\'ve been struggling for days (literally) with this and need a new perspective.\r\n\r\nHere\'s how the Answer Key array is being constructed: array_push($answers,$row[\'questionID\'],$row[\'answerID\']);\r\n\r\nSimilarly, here\'s how the Student Response array is being constructed: array_push($responses,$row[\'questionID\'],$row[\'answerID\']);', 'Sample Answer Key array:\r\n[enter image description here](https://i.stack.imgur.com/XVZbf.png)\r\n\r\nSample Student Response array:\r\n[enter image description here](https://i.stack.imgur.com/Nh737.png)\r\n\r\nIt\'s been a while since I was a professional developer and I never really used PHP back then, so that\'s one of many reasons for my struggle here. I have the arrays but cannot figure out how to loop through the Answer Key array and check the Student Response array for correct answers. Help?!\r\n\r\nI\'ve tried looping over the Answer Key array using the PHP foreach() method, but I don\'t get expected results. I\'m not sure how to compare the Student Response array to each Answer Key array element within the loop to calculate an accurate score.\r\n\r\nThe site currently used a MySQL except clause with a couple of queries to calculate a score. It\'s working but not very precise, especially when there are checkbox options for a particular question. I\'m attempting to create some \'helper\' function that I can use to score all quizzes.', 2),
(79, 'What is a Null Pointer Exception, and how do I fix it?', 'There are two overarching types of variables in Java: \r\n\r\n 1. *Primitives*: variables that contain data. If you want to manipulate the data in a primitive variable you can manipulate that variable directly. By convention primitive types start with a lowercase letter. For example variables of type `int` or `char` are primitives.\r\n\r\n 2. *References*: variables that contain the memory address of an `Object` i.e. variables that *refer* to an `Object`. If you want to manipulate the `Object` that a reference variable refers to you must *dereference* it. Dereferencing usually entails using `.` to access a method or field, or using `[` to index an array. By convention reference types are usually denoted with a type that starts in uppercase. For example variables of type `Object` are references.\r\n\r\nConsider the following code where you declare a variable of *primitive* type `int` and don\'t initialize it:\r\n\r\n```java\r\nint x;\r\nint y = x + x;\r\n```\r\n\r\nThese two lines will crash the program because no value is specified for `x` and we are trying to use `x`\'s value to specify `y`. All primitives have to be initialized to a usable value before they are manipulated. \r\n\r\nNow here is where things get interesting. *Reference* variables can be set to `null` which means \"**I am referencing *nothing***\". You can get a `null` value in a reference variable if you explicitly set it that way, or a reference variable is uninitialized and the compiler does not catch it (Java will automatically set the variable to `null`).   \r\n\r\nIf a reference variable is set to null either explicitly by you or through Java automatically, and you attempt to *dereference* it you get a `NullPointerException`.\r\n\r\nThe `NullPointerException` (NPE) typically occurs when you declare a variable but did not create an object and assign it to the variable before trying to use the contents of the variable. So you have a reference to something that does not actually exist.\r\n\r\nTake the following code:\r\n```\r\nInteger num;\r\nnum = new Integer(10);\r\n```\r\n\r\nThe first line declares a variable named `num`, but it does not actually contain a reference value yet. Since you have not yet said what to point to, Java sets it to `null`.\r\n\r\nIn the second line, the `new` keyword is used to instantiate (or create) an object of type `Integer`, and the reference variable `num` is assigned to that `Integer` object.\r\n\r\nIf you attempt to dereference `num` *before* creating the object you get a `NullPointerException`. In the most trivial cases, the compiler will catch the problem and let you know that \"`num may not have been initialized`,\" but sometimes you may write code that does not directly create the object.\r\n\r\nFor instance, you may have a method as follows:\r\n\r\n    public void doSomething(SomeObject obj) {\r\n       // Do something to obj, assumes obj is not null\r\n       obj.myMethod();\r\n    }\r\n\r\nIn which case, you are not creating the object `obj`, but rather assuming that it was created before the `doSomething()` method was called. Note, it is possible to call the method like this:\r\n\r\n    doSomething(null);\r\n\r\nIn which case, `obj` is `null`, and the statement `obj.myMethod()` will throw a `NullPointerException`.\r\n\r\nIf the method is intended to do something to the passed-in object as the above method does, it is appropriate to throw the `NullPointerException` because it\'s a programmer error and the programmer will need that information for debugging purposes.\r\n\r\nIn addition to `NullPointerException`s thrown as a result of the method\'s logic, you can also check the method arguments for `null` values and throw NPEs explicitly by adding something like the following near the beginning of a method:\r\n\r\n    // Throws an NPE with a custom error message if obj is null\r\n    Objects.requireNonNull(obj, \"obj must not be null\");\r\n\r\nNote that it\'s helpful to say in your error message clearly *which* object cannot be `null`. The advantage of validating this is that 1) you can return your own clearer error messages and 2) for the rest of the method you know that unless `obj` is reassigned, it is not null and can be dereferenced safely.\r\n\r\nAlternatively, there may be cases where the purpose of the method is not solely to operate on the passed in object, and therefore a null parameter may be acceptable. In this case, you would need to check for a **null parameter** and behave differently. You should also explain this in the documentation. For example, `doSomething()` could be written as:\r\n\r\n    /**\r\n      * @param obj An optional foo for ____. May be null, in which case\r\n      *  the result will be ____.\r\n      */\r\n    public void doSomething(SomeObject obj) {\r\n        if(obj == null) {\r\n           // Do something\r\n        } else {\r\n           // Do something else\r\n        }\r\n    }\r\n\r\nFinally, [How to pinpoint the exception & cause using Stack Trace](https://stackoverflow.com/q/3988788/2775450)\r\n\r\n> What methods/tools can be used to determine the cause so that you stop\r\n> the exception from causing the program to terminate prematurely?\r\n\r\nSonar with find bugs can detect NPE.\r\nhttps://stackoverflow.com/questions/20899931/can-sonar-catch-null-pointer-exceptions-caused-by-jvm-dynamically\r\n\r\nNow Java 14 has added a new language feature to show the root cause of NullPointerException. This language feature has been part of SAP commercial JVM since 2006.\r\n\r\nIn Java 14, the following is a sample NullPointerException Exception message:\r\n\r\n>  in thread \"main\" java.lang.NullPointerException: Cannot invoke \"java.util.List.size()\" because \"list\" is null\r\n\r\n### List of situations that cause a `NullPointerException` to occur\r\n\r\nHere are all the situations in which a `NullPointerException` occurs, that are directly* mentioned by the Java Language Specification:\r\n\r\n- Accessing (i.e. getting or setting) an *instance* field of a null reference. (static fields don\'t count!)\r\n- Calling an *instance* method of a null reference. (static methods don\'t count!)\r\n- `throw null;`\r\n- Accessing elements of a null array.\r\n- Synchronising on null - `synchronized (someNullReference) { ... }`\r\n- Any integer/floating point operator can throw a `NullPointerException` if one of its operands is a boxed null reference\r\n- An unboxing conversion throws a `NullPointerException` if the boxed value is null.\r\n- Calling `super` on a null reference throws a `NullPointerException`. If you are confused, this is talking about qualified superclass constructor invocations:\r\n\r\n```\r\nclass Outer {\r\n    class Inner {}\r\n}\r\nclass ChildOfInner extends Outer.Inner {\r\n    ChildOfInner(Outer o) { \r\n        o.super(); // if o is null, NPE gets thrown\r\n    }\r\n}\r\n```', '- Using a `for (element : iterable)` loop to loop through a null collection/array.\r\n\r\n- `switch (foo) { ... }` (whether its an expression or statement) can throw a `NullPointerException` when `foo` is null.\r\n\r\n- `foo.new SomeInnerClass()` throws a `NullPointerException` when `foo` is null.\r\n\r\n- Method references of the form `name1::name2` or `primaryExpression::name` throws a `NullPointerException` when evaluated when `name1` or `primaryExpression` evaluates to null.\r\n\r\n    a note from the JLS here says that, `someInstance.someStaticMethod()` doesn\'t throw an NPE, because `someStaticMethod` is static, but `someInstance::someStaticMethod` still throw an NPE!\r\n\r\n<sub>* Note that the JLS probably also says a lot about NPEs *indirectly*.</sub>\r\n\r\n  [1]: https://docs.oracle.com/en/java/javase/15/docs/api/java.base/java/util/Objects.html#requireNonNull(T,java.lang.String)', 2),
(80, 'Markdown Sample', '---\r\n__Advertisement :)__\r\n\r\n- __[pica](https://nodeca.github.io/pica/demo/)__ - high quality and fast image\r\n  resize in browser.\r\n- __[babelfish](https://github.com/nodeca/babelfish/)__ - developer friendly\r\n  i18n with plurals support and easy syntax.\r\n\r\nYou will like those projects!\r\n\r\n---\r\n\r\n# h1 Heading 8-)\r\n## h2 Heading\r\n### h3 Heading\r\n#### h4 Heading\r\n##### h5 Heading\r\n###### h6 Heading\r\n\r\n\r\n## Horizontal Rules\r\n\r\n___\r\n\r\n---\r\n\r\n***\r\n\r\n\r\n## Typographic replacements\r\n\r\nEnable typographer option to see result.\r\n\r\n(c) (C) (r) (R) (tm) (TM) (p) (P) +-\r\n\r\ntest.. test... test..... test?..... test!....\r\n\r\n!!!!!! ???? ,,  -- ---\r\n\r\n\"Smartypants, double quotes\" and \'single quotes\'\r\n\r\n\r\n## Emphasis\r\n\r\n**This is bold text**\r\n\r\n__This is bold text__\r\n\r\n*This is italic text*\r\n\r\n_This is italic text_\r\n\r\n~~Strikethrough~~\r\n\r\n\r\n## Blockquotes\r\n\r\n\r\n> Blockquotes can also be nested...\r\n>> ...by using additional greater-than signs right next to each other...\r\n> > > ...or with spaces between arrows.\r\n\r\n\r\n## Lists\r\n\r\nUnordered\r\n\r\n+ Create a list by starting a line with `+`, `-`, or `*`\r\n+ Sub-lists are made by indenting 2 spaces:\r\n  - Marker character change forces new list start:\r\n    * Ac tristique libero volutpat at\r\n    + Facilisis in pretium nisl aliquet\r\n    - Nulla volutpat aliquam velit\r\n+ Very easy!\r\n\r\nOrdered\r\n\r\n1. Lorem ipsum dolor sit amet\r\n2. Consectetur adipiscing elit\r\n3. Integer molestie lorem at massa\r\n\r\n\r\n1. You can use sequential numbers...\r\n1. ...or keep all the numbers as `1.`\r\n\r\nStart numbering with offset:\r\n\r\n57. foo\r\n1. bar\r\n\r\n\r\n## Code\r\n\r\nInline `code`\r\n\r\nIndented code\r\n\r\n    // Some comments\r\n    line 1 of code\r\n    line 2 of code\r\n    line 3 of code\r\n\r\n\r\nBlock code \"fences\"\r\n\r\n```\r\nSample text here...\r\n```\r\n\r\nSyntax highlighting\r\n\r\n``` js\r\nvar foo = function (bar) {\r\n  return bar++;\r\n};\r\n\r\nconsole.log(foo(5));\r\n```\r\n\r\n## Tables\r\n\r\n| Option | Description |\r\n| ------ | ----------- |\r\n| data   | path to data files to supply the data that will be passed into templates. |\r\n| engine | engine to be used for processing templates. Handlebars is the default. |\r\n| ext    | extension to be used for dest files. |\r\n\r\nRight aligned columns\r\n\r\n| Option | Description |\r\n| ------:| -----------:|\r\n| data   | path to data files to supply the data that will be passed into templates. |\r\n| engine | engine to be used for processing templates. Handlebars is the default. |\r\n| ext    | extension to be used for dest files. |\r\n\r\n\r\n## Links\r\n\r\n[link text](http://dev.nodeca.com)\r\n\r\n[link with title](http://nodeca.github.io/pica/demo/ \"title text!\")\r\n\r\nAutoconverted link https://github.com/nodeca/pica (enable linkify to see)\r\n\r\n\r\n## Images\r\n\r\n![Minion](https://octodex.github.com/images/minion.png)\r\n![Stormtroopocat](https://octodex.github.com/images/stormtroopocat.jpg \"The Stormtroopocat\")\r\n\r\nLike links, Images also have a footnote style syntax\r\n\r\n![Alt text][id]\r\n\r\nWith a reference later in the document defining the URL location:\r\n\r\n[id]: https://octodex.github.com/images/dojocat.jpg  \"The Dojocat\"\r\n\r\n\r\n## Plugins\r\n\r\nThe killer feature of `markdown-it` is very effective support of\r\n[syntax plugins](https://www.npmjs.org/browse/keyword/markdown-it-plugin).\r\n\r\n\r\n### [Emojies](https://github.com/markdown-it/markdown-it-emoji)\r\n\r\n> Classic markup: :wink: :crush: :cry: :tear: :laughing: :yum:\r\n>\r\n> Shortcuts (emoticons): :-) :-( 8-) ;)\r\n\r\nsee [how to change output](https://github.com/markdown-it/markdown-it-emoji#change-output) with twemoji.\r\n\r\n\r\n### [Subscript](https://github.com/markdown-it/markdown-it-sub) / [Superscript](https://github.com/markdown-it/markdown-it-sup)\r\n\r\n- 19^th^\r\n- H~2~O\r\n\r\n\r\n### [\\<ins>](https://github.com/markdown-it/markdown-it-ins)\r\n\r\n++Inserted text++\r\n\r\n\r\n### [\\<mark>](https://github.com/markdown-it/markdown-it-mark)\r\n\r\n==Marked text==\r\n\r\n\r\n### [Footnotes](https://github.com/markdown-it/markdown-it-footnote)\r\n\r\nFootnote 1 link[^first].\r\n\r\nFootnote 2 link[^second].\r\n\r\nInline footnote^[Text of inline footnote] definition.\r\n\r\nDuplicated footnote reference[^second].\r\n\r\n[^first]: Footnote **can have markup**\r\n\r\n    and multiple paragraphs.\r\n\r\n[^second]: Footnote text.\r\n\r\n\r\n### [Definition lists](https://github.com/markdown-it/markdown-it-deflist)\r\n\r\nTerm 1\r\n\r\n:   Definition 1\r\nwith lazy continuation.\r\n\r\nTerm 2 with *inline markup*\r\n\r\n:   Definition 2\r\n\r\n        { some code, part of Definition 2 }\r\n\r\n    Third paragraph of definition 2.\r\n\r\n_Compact style:_\r\n\r\nTerm 1\r\n  ~ Definition 1\r\n\r\nTerm 2\r\n  ~ Definition 2a\r\n  ~ Definition 2b\r\n\r\n\r\n### [Abbreviations](https://github.com/markdown-it/markdown-it-abbr)\r\n\r\nThis is HTML abbreviation example.\r\n\r\nIt converts \"HTML\", but keep intact partial entries like \"xxxHTMLyyy\" and so on.\r\n', '*[HTML]: Hyper Text Markup Language\r\n\r\n### [Custom containers](https://github.com/markdown-it/markdown-it-container)\r\n\r\n::: warning\r\n*here be dragons*\r\n:::', 14);

--
-- Dumping data for table `question_tag`
--

INSERT INTO `question_tag` (`id`, `question_id`, `tag_id`) VALUES
(79, 77, 79),
(80, 77, 80),
(81, 77, 81),
(82, 78, 82),
(83, 78, 62),
(84, 78, 83),
(85, 78, 84),
(86, 79, 85),
(87, 79, 86),
(88, 80, 77);

--
-- Dumping data for table `remember_token`
--

INSERT INTO `remember_token` (`id`, `token`, `tokenable_id`, `last_used_at`, `created_at`, `tokenable_type`) VALUES
(3, '1bb365ddd1d5d0659a57d916b57fa974', 2, '2022-11-30 10:28:23', '2022-11-30 10:28:23', 'App\\Model\\User'),
(8, 'a32ea66866074de2c0c98e36a4036f72', 22, '2022-12-09 06:11:17', '2022-12-09 06:11:17', 'App\\Model\\User'),
(12, 'b93be91c0a63c7a836353d33ad996378', 22, '2022-12-12 06:26:44', '2022-12-12 06:26:44', 'App\\Model\\User');

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(62, 'mysql'),
(63, 'many-to-many'),
(64, 'm'),
(65, 'Irure'),
(66, 'nostrud'),
(67, 'fugiat'),
(68, 'Expedita'),
(69, 'ad'),
(70, 'et'),
(71, 'tempo'),
(72, 'Similique'),
(73, 'aliqua'),
(74, 'Vo'),
(75, 'select'),
(76, 'laravel'),
(77, 'markdown'),
(78, 'markdown'),
(79, 'ruby-on-rails'),
(80, 'ruby'),
(81, 'dot-env'),
(82, 'php'),
(83, 'arrays'),
(84, 'associative-array'),
(85, 'java'),
(86, 'null-pointer-exception'),
(87, '');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `customer_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'cus_Msb0PiqFoGyKNa', 'Admin', 'admin@gmail.com', '$2y$10$js2ATbZoj/gV1g3bsbdcluQuzyYXNs4LPQdtXcnF/MEu3R7HO65jS', '2022-11-27 15:01:03', '2022-11-27 18:43:15'),
(14, 'cus_MsiTlfda3tS47W', 'Rowan Lott', 'nyfoluzu@mailinator.com', '$2y$10$mZDM6F8kdpyBdIQRoeOynOsTRw2XtjU0Jfdc.4eYF1kIwsc5V6toK', '2022-11-27 15:01:03', '2022-11-28 02:25:23'),
(15, NULL, 'Jakeem Morris', 'guzobon@mailinator.com', '$2y$10$UsHO/K9l1Zxce7z7Qfj88eeWrDyX4Ju57/tuGhnH2mq0YzxYKMH.O', '2022-11-27 15:01:03', '2022-11-27 15:01:03'),
(16, NULL, 'Britanni Sweeney', 'kikecyxywi@mailinator.com', '$2y$10$rrQEnipg74GKgOWS09edEO4EBg8vIf3lC3zSCEMveb369FBxHyf52', '2022-11-27 15:01:03', '2022-11-27 15:01:03'),
(17, NULL, 'romzan', 'romzan@gmail.com', '$2y$10$GrnDZZOEsfAHTillk75Fn.ctg9DwK816K2OYoMyGb5CFn0KMijyYq', '2022-11-27 15:01:03', '2022-11-27 15:01:03'),
(18, NULL, 'Gregory Henderson', 'mudoqo@mailinator.com', '$2y$10$kurKsjvAZDqC.QfvHiLgWe2W7p96xlV9A6vVr47OE61LuoaQRkEAi', '2022-11-27 15:01:03', '2022-11-27 15:01:03'),
(19, NULL, 'Malcolm Livingston', 'dukexacu@mailinator.com', '$2y$10$GdqJ.U3mDrGEVAeadDOC9eP9nVQ7rIycIZSBmbEgHQWhaIo2ic4yS', '2022-11-29 15:47:20', '2022-11-29 15:47:20'),
(20, NULL, 'Hadley Little', 'byxewamosu@mailinator.com', '$2y$10$ZD7rL.wbfT41x.BZJVk98uhQ7TSz7iBo4YmARAL8f/F1.tXYCeg4u', '2022-11-29 15:51:48', '2022-11-29 15:51:48'),
(21, 'cus_MtUmBT8xxeJhpV', 'Florence Vinson', 'gewakicu@mailinator.com', '$2y$10$R3Vg1LclQTDXfNUK48.6Vej4.baLD48iTvoIOSDhOIFlxpJRMkzqW', '2022-11-29 15:52:47', '2022-11-30 04:21:10'),
(22, 'cus_MuRKOBHi1OM0Rv', 'Tanvir', 'tanvirsadi4@gmail.com', '$2y$10$gr4RvLJ.SBzX.uYqlD/lSe1lBezhSY7sTzMrEb5PB8MqDCJEoV8wG', '2022-11-30 13:41:21', '2022-12-02 16:51:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
