-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2022 at 09:10 PM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ribye`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blockquote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_extra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_one` text COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_two` text COLLATE utf8mb4_unicode_ci,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_three` text COLLATE utf8mb4_unicode_ci,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_four` text COLLATE utf8mb4_unicode_ci,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_five` text COLLATE utf8mb4_unicode_ci,
  `image_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category_id`, `slung`, `image`, `blockquote`, `content_extra`, `content_one`, `image_one`, `content_two`, `image_two`, `content_three`, `image_three`, `content_four`, `image_four`, `content_five`, `image_five`, `content`, `credit`, `created_at`, `updated_at`) VALUES
(1, 'Things to Know When Choosing the Perfect Sofa', 1, 'things-to-know-when-choosing-the-perfect-sofa', 'blog-01-650x510.jpg', '<p>Once the brief is defined and we’ve signed all the boring papers, Our people will draw sketches, prepare moodboards, source furniture &amp; materials and many other things. The project doesn’t proceed till you’ve agreed on everything!</p>', 'Hello There! Checkered DIY For Candlestick Holder 11 Must Have DIY Interior Tools For The Beginners! How To Give New Life To A Dated Dresser Table? How To Add Cooling To A Computer In Cabinet? How To Create A Unique Workspace For Yourself? 5 Self-Adhesive Wallpaper That Will Bring Interest! Transform,Simple Dining Table Beautiful Piece!”\r\n\r\nHello There! Checkered DIY For Candlestick Holder 11 Must Have DIY Interior Tools For The Beginners! How To Give New Life To A Dated Dresser Table?', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>A small newly opened interior design business that aims to cover different issues, from sustainability to social, from equal opportunities to education, from giving space<span id=\"more-230\"></span> to emerging <u><a class=\"ttm-textcolor-skincolor\" href=\"#\">artists</a></u> and artisans to the most disadvantaged.</p>\r\n                                            <p>Unfortunately, or fortunately, these beliefs do<strong> not apply when it comes to interiors.</strong> In fact, if a product is cheap today, it will be expensive in the long term. To better explain this concept just think of a £ 20 desk; at&nbsp;<u><a class=\"ttm-textcolor-skincolor\" href=\"#\">first glance it would seem</a></u> a great deal, yet the low price tells us that it was probably produced with poor materials.</p>', NULL, '2022-09-05 12:03:35', NULL),
(2, 'The Best Ergonomic Office Stools 2022', 1, 'the-best-ergonomic-office-stools-2022', '6__53688.jpeg', 'In this post, I will review five best-selling ergonomic office stools. But don’t worry I will also give a little love to my favorite side stools as well. Here we go.', '', '<h3>The Think Stool by Steelcase</h3>\r\n<p>This is the stool version of the best-selling think chair. Simplicity is the secret behind the success of Think products. The integrated LiveBack adjusts automatically to provide ergonomic support and you move. This stool also features a weight-activated seat which provides perfect support. Although the Think Stool is simple you don’t have to sacrifice adjustability. The Think can be customized with fully adjustable arms and adjustable lumbar support. This stool includes the innovative Buzz 2 upholstery with so many color options. The Think Stool is relatively lightweight but incredibly durable. Priced in the middle of the pack, the Think offers a lot of bang for the buck.</p>', 'Think-Stool-400x400.jpeg', '<h3>The Mirra 2 Stool, Butterfly Back by Herman Miller</h3>\r\n<p>The Mirra 2 is a very close but less well-known relative of the Aeron Chair/Stool. The Mirra 2 office stool is infinitely adjustable. It’s the personalized ergonomics that really make this stool stand out. The arms are fully adjustable. The stool has a very intuitive lumbar mechanism known as the loop spine. The Mirra 2 comes standard with a tilt limiter and seat angle adjustments. And finally, the seat depth is adjustable. This stool is designed for everybody. The Mirra 2 falls on the higher end of the cost spectrum. It’s an investment and worth every penny.\r\n</p>\r\n\r\n', 'mirra-2-office-stool-400x400.jpeg', '<h3>The Series 1 Stool by Steelcase</h3>\r\n<p>\r\nThe Series 1 Office Stool is an incredible ergonomic stool that is budget-friendly. This is our value choice office stool. It’s a good value yes, but without sacrificing quality. This stool really is the real deal. In fact, CNN voted the Series 1 office chair the best office chair of the year in 2020 and 2021. This stool is fully adjustable, lightweight, and built to last. The Series 1 has a slim profile and is perfect for a small office space. Features of Series 1 include Integrated LiveBack Technology, 4D adjustable arms, adaptive bolstering seat cushion, weight-activated adjustment, and full back angle and back tension adjustability. If you need to stretch your budget, this is the best option.\r\n</p>', 'Series-1-Office-Stool-400x400.jpeg', '<h3>The Aeron Stool by Herman Miller</h3>\r\n<p>\r\nJust as the Aeron office chair is an industry legend, the Aeron office stool is as well. The secret to Aeron’s success is human-centric design. That and cutting-edge technology. The Aeron office stool is the Aeron chair built for working at high counters or drafting tables.</p>\r\n<p>\r\nThis office stool includes Herman Miller’s patented Pellicle suspension and PostureFit SL back support. These features position the back perfectly to open the chest positioning the shoulders back and the pelvis tilted just slightly forward. This positioning supports long hours of pain-free seated work. The Aeron office stool also includes fully adjustable arms, adjustable seat height, adjustable seat depth, and full recline. Best of all the Aeron office stoom includes an adjustable footrest!</p>\r\n<p>\r\nThe Aeron office stool is sold with a 12-year full warranty and will arrive at your house fully assembled. The breathable mesh fabric promotes airflow to keep you comfortable while you work. Although the Aeron is on the higher end of our price range, this stool is the creme de la creme of office stools. Your great-grandkids will sit on this stool.\r\n</p>', 'Aeron-Office-Stool-500x464.jpeg', '<h3>The QiVi Stool by Steelcase</h3>\r\n<p>\r\nThe QiVi is our non-traditional office stool selection. The Qivi is the best stool for a dynamic collaborative workspace. This stool was designed for conference rooms and group meeting rooms. The QiVi was designed with a gliding seat and a pivoting backrest. The features adjust automatically as the user moves. This creates a dynamic work experience that actually encourages movement. This supported movement promotes comfort for hours of work or discussion.\r\n</p>\r\n<p>\r\nThe QiVi is lightweight compared to most office stools. This makes it easy to move from place to place quickly and easily. Movement and interaction are at the heart of this office stool.</p><p>\r\n\r\nAll five of the office stools featured are fantastic. The two most important things to consider are your budget and your body type. Ergonomic office tools are worth the investment. A good stool will last a lifetime and protect your body from long-term injury.\r\n\r\n</p>', 'QiVi-Office-Stool-300x300.jpeg', 'There are two categories of office stools ergonomic office stools and side stools. A side stool is typically chair height. Most side stools are not height adjustable. They are lightweight and easy to move. Side stools are designed to be pull-up, collaborative seating. They are perfect for creative conversations in front of a single monitor. Ergonomic office stools are designed to sustain long periods of work. They are adjustable and ergonomically sound.\r\n<br><br>\r\nErgonomic office stools are perfect for drafting tables, height-adjustable desks, and standing height conference tables. A good ergonomic office stool should have all the adjustment features of an office chair. The main difference between the two is the high-end height. When the chair is fully raised, the user’s feet will not touch the ground. This makes the footrest solution an important consideration.\r\n\r\nIn this post, I will review five best-selling ergonomic office stools. But don’t worry I will also give a little love to my favorite side stools as well. Here we go.\r\n\r\n', 'Credits to <a href=\"https://blog.officedesigns.com/uncategorized/the-best-ergonomic-office-stools-2022/\">Office Designs</a>', '2022-09-05 12:03:35', NULL),
(4, 'The Ultimate Guide to Planning a Productive Office', 1, 'the-ultimate-guide-to-planning-a-productive-office', 'Productive-office.jpeg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<section class=\"post-contents\">\r\n\r\n						\r\n<figure class=\"wp-block-image\"><img src=\"https://lh6.googleusercontent.com/oTXR8rSdI72skFfAcJ8DU-YMHct050F8OPDqEr0r7rBwooJ04Yl1Ybq6qFuRPSqzdfbdqPPmsSUoMQVYD5unzuCwa5EDt-Sj4ov8tJWtzLsWeyqlHEYAyXpYGBbdoxq1-6E-HH7uYecC3t-OtQ\" alt=\"\" data-no-retina=\"true\"></figure>\r\n\r\n\r\n\r\n<ol><li>Which file and storage solutions do offices need?</li></ol>\r\n\r\n\r\n\r\n<p>Keeping tidy records ensures nothing falls through the cracks. So it makes sense to have dedicated spaces to put important documents. Besides files, we’ll also need to store gear and other valuable items.</p>\r\n\r\n\r\n\r\n<p>If you’ve ever seen the movie <em>Office Space</em>, you might recall when Peter Gibbons takes remodeling into his own hands and dismantles the cubicle wall blocking his view out the window. Anyone who has worked in a similar environment has thought about how nice it would be to switch things up. We can avoid impromptu employee repairs by planning a productive office environment.</p>\r\n\r\n\r\n\r\n<h2>What factors should you consider when making an office remodeling plan?</h2>\r\n\r\n\r\n\r\n<p>Before we go shopping, we have a variety of factors to consider. So let’s explore a handful of essential variables to have in mind for your next office design.&nbsp;</p>\r\n\r\n\r\n\r\n<ol><li><strong>Seek &zwnj;feedback from employees</strong></li></ol>\r\n\r\n\r\n\r\n<p>Include employees in the planning process&zwnj;. They can offer guidance on prioritizing design choices. Let workers pick the products they’ll be working with every day.&nbsp;</p>\r\n\r\n\r\n\r\n<ol start=\"2\"><li><strong>Consider the number of people working at the same time</strong></li></ol>\r\n\r\n\r\n\r\n<p>Make the most out of every room. First, estimate the maximum number of employees in the office simultaneously. Then figure out how many people can fit comfortably in each room.&nbsp;</p>\r\n\r\n\r\n\r\n<ol start=\"3\"><li><strong>Account for remote workers</strong></li></ol>\r\n\r\n\r\n\r\n<p>The popularity of remote work has prompted the restructuring of offices everywhere. Some offices now have smaller work areas and plan on a percentage of their staff working remotely. If the team is remote, we may not need a desk for every employee.</p>\r\n\r\n\r\n\r\n<ol start=\"4\"><li><strong>Plan for growth</strong></li></ol>\r\n\r\n\r\n\r\n<p>Planning for growth will help you decide how much space and stuff you need. For example, we want to avoid situations where we don’t have enough chairs or have to change offices when business booms. So it makes sense to have some extra growing room.</p>\r\n\r\n\r\n\r\n<ol start=\"5\"><li><strong>Make dedicated spaces</strong></li></ol>\r\n\r\n\r\n\r\n<p>While smaller offices may rely on a modular approach, finding rooms dedicated to specific tasks is normal. Make unique spaces for collaboration, relaxation, and work.</p>\r\n\r\n\r\n\r\n<h2>What are the key components of a functional office space?</h2>\r\n\r\n\r\n\r\n<p>We must ensure we cover all the bases. We want to make sure our new office looks professional and fosters a productive environment. Below is a list of critical components to hitting a home run in creating a functional workspace.</p>\r\n\r\n\r\n\r\n<ol start=\"2\"><li><strong>What types of seating do offices need?</strong></li></ol>\r\n\r\n\r\n\r\n<p>We have several types of seating solutions to consider. The size and structure of our company will ultimately determine the importance of each type. Let’s look at the seating we’ll need to accommodate.</p>\r\n\r\n\r\n\r\n<p><strong>Desk chairs</strong></p>\r\n\r\n\r\n\r\n<p>Navigating the workday requires a proper captain’s seat. Every office desk needs a comfortable and <a href=\"https://blog.officedesigns.com/work-space/ergonomic-office-chairs-shipping-today/\">ergonomic chair</a>. Chairs see a lot of action, so they need to be high quality. Set workers up for success with comfortable, supportive, and durable chairs. They’ll sail through their shifts in comfort.&nbsp;</p>\r\n\r\n\r\n\r\n<p><strong>Lounge seating</strong><br>For companies working with clients in person, lounge seats are crucial. Every presentable lobby has at least a couple of chairs. People need a place where they can sit and wait.</p>\r\n\r\n\r\n\r\n<p><br>Lounge seating is vital for improving relaxation in open workspaces. Adding plenty of comfortable seating to open areas makes collaboration possible.</p>\r\n\r\n\r\n\r\n<p><strong>Break areas</strong></p>\r\n\r\n\r\n\r\n<p>People need a place to eat that isn’t their desk. Break areas benefit from kitchen seating that is easy to clean. If there isn’t a lounge area, a few pieces of cozy furniture can make it easier for workers to recharge.&nbsp;</p>\r\n\r\n\r\n\r\n<ol start=\"3\"><li><strong>Which desks are important for offices?</strong></li></ol>\r\n\r\n\r\n\r\n<p>Desks come in all shapes and sizes. The best idea is to pick desks that fit the space. Every office has different needs. Thankfully, we have plenty of options for creating any work center. Consider a combination of the following &zwnj;desks:</p>\r\n\r\n\r\n\r\n<ul><li><strong>Bench desks </strong>– Easy to line up in rows and against walls.</li><li><strong>Corner desks</strong> – Maximize every square foot of space by adding <a href=\"https://officedesigns.com/corner-desks/\" data-type=\"URL\" data-id=\"https://officedesigns.com/corner-desks/\" target=\"_blank\" rel=\"noreferrer noopener\">desks to corners.</a></li><li><strong>Standard desks</strong> – Pick <a href=\"https://officedesigns.com/standard-desks/\" data-type=\"URL\" data-id=\"https://officedesigns.com/standard-desks/\" target=\"_blank\" rel=\"noreferrer noopener\">traditional desks</a> strong enough for the daily grind.</li><li><strong>Laptop desks</strong> – Get things done in any room with portable and adjustable desks.</li><li><strong>Height-adjustable desks</strong> – Use <a href=\"https://blog.officedesigns.com/uncategorized/sit-stand-desks-and-converters-our-favorite-five/\">standing desks</a> to switch from sitting to standing quickly.<br></li></ul>\r\n\r\n\r\n\r\n<ol start=\"4\"><li><strong>What kind of tables make sense for offices?</strong></li></ol>\r\n\r\n\r\n\r\n<p>We use tables where desks don’t fit the bill. There is a different &zwnj;table out there for every unique office need. Add these to your office planning checklist:</p>\r\n\r\n\r\n\r\n<ul><li><strong>Conference tables</strong> – Large meeting rooms benefit from <a rel=\"noreferrer noopener\" href=\"https://officedesigns.com/conference-tables/\" data-type=\"URL\" data-id=\"https://officedesigns.com/conference-tables/\" target=\"_blank\">conference tables</a>.</li><li><strong>Shared workspace tables</strong> – Tables dedicated to shared workspaces can be more practical than lining up desks.</li><li><strong>Coffee tables</strong> – The &zwnj;ingredient to completing any lounge is a <a rel=\"noreferrer noopener\" href=\"https://officedesigns.com/coffee-tables\" data-type=\"URL\" data-id=\"https://officedesigns.com/coffee-tables\" target=\"_blank\">coffee table</a> with magazines.</li><li><strong>End tables</strong> – An <a href=\"https://officedesigns.com/end-tables/\" data-type=\"URL\" data-id=\"https://officedesigns.com/end-tables/\" target=\"_blank\" rel=\"noreferrer noopener\">end table</a> is fantastic next to comfortable seating and when coffee tables are too big.</li><li><strong>Dining tables</strong> – We must have a place to put the cake on cake day.</li></ul>\r\n\r\n\r\n\r\n<figure class=\"wp-block-image\"><img src=\"https://lh3.googleusercontent.com/CMZVJ5luXIvqnzaLlDWNzS88hFbHwuSPUn4HVQFFg-0kfgHtQnGmERYpcUpSXHF_cfiYNU-xaCtGAlx22iD0-zeftOlSi_lEFAlpRx11_-MA8q9GTsYgZLwqjilhMNK9GH0xgHDkOc9fQ6N_Sw\" alt=\"\" data-no-retina=\"true\"></figure>\r\n\r\n\r\n\r\n<p><strong>Tall supply storage cabinets</strong><br>Tall storage cabinets are excellent for office supplies. They make them sturdy enough to support hundreds of pounds. We need cabinets for pens, paper clips, and reams of paper. Lockable options make it easy for one person to manage inventory.&nbsp;</p>\r\n\r\n\r\n\r\n<p><strong>Filing cabinets</strong></p>\r\n\r\n\r\n\r\n<p>Paperwork finds its way into files, and files need cabinets. They make filing cabinets in all shapes and sizes; tall, wide, or on wheels.&nbsp;</p>\r\n\r\n\r\n\r\n<p><strong>Bookcases</strong><br>We use bookcases to store binders, paper, and educational materials. Anything that doesn’t need the security of a cabinet door can go in a bookcase.</p>\r\n\r\n\r\n\r\n<p><strong>Wall shelves</strong></p>\r\n\r\n\r\n\r\n<p>Use wall shelves in places where bookcases don’t fit. Shelves are modular versions of bookcases.</p>\r\n\r\n\r\n\r\n<p><strong>Cubbies</strong></p>\r\n\r\n\r\n\r\n<p>Storage cubes excel at holding files or supplies and look extra cool in cubbies.&nbsp;</p>\r\n\r\n\r\n\r\n<ol start=\"5\"><li>Which office accessories are crucial?</li></ol>\r\n\r\n\r\n\r\n<p>After covering the fundamentals, it’s time to deck out the place with accessories. Of course, accessories are optional, but some choices offer a lot of functionality.</p>\r\n\r\n\r\n\r\n<p><strong>Desk accessories</strong></p>\r\n\r\n\r\n\r\n<p>It’s the little things in life that make all the difference. We have a lot of inventions that help us get through the day in the office. Remember to shop for the following <a href=\"https://officedesigns.com/desk-accessories/\">desk accessories</a>:</p>\r\n\r\n\r\n\r\n<ul><li><a href=\"https://officedesigns.com/floor-mats/\" data-type=\"URL\" data-id=\"https://officedesigns.com/floor-mats/\" target=\"_blank\" rel=\"noreferrer noopener\">Floor mat</a> for office chairs</li><li>Underneath the desk <a href=\"https://officedesigns.com/footrests/\" data-type=\"URL\" data-id=\"https://officedesigns.com/footrests/\" target=\"_blank\" rel=\"noreferrer noopener\">footrests</a></li><li>Cord organizers and modesty screens</li><li>Paper and <a href=\"https://officedesigns.com/keyboard-trays/\" data-type=\"URL\" data-id=\"https://officedesigns.com/keyboard-trays/\" target=\"_blank\" rel=\"noreferrer noopener\">keyboard trays</a></li><li>Computer <a href=\"https://officedesigns.com/monitor-arms/\" data-type=\"URL\" data-id=\"https://officedesigns.com/monitor-arms/\" target=\"_blank\" rel=\"noreferrer noopener\">monitor arms</a></li><li>Padded standing mats and lumbar supports</li></ul>\r\n\r\n\r\n\r\n<p><strong>Coat racks</strong></p>\r\n\r\n\r\n\r\n<p>Most of us live somewhere that requires wearing a coat for some time throughout the year. Use a coat rack so workers and clients don’t have to carry their wet gear around. Place a heat source or fan near the rack to improve drying times.&nbsp;</p>\r\n\r\n\r\n\r\n<p><strong>Space dividers</strong></p>\r\n\r\n\r\n\r\n<p>Dividing workspaces improves productivity and reduces distractions. Cubicles or space dividers create zones streamlined for productivity.<br><br><strong>Whiteboards</strong>&nbsp;</p>\r\n\r\n\r\n\r\n<p>Working in offices is more wonderful with whiteboards. They’re great for tracking the progress of team projects. Whiteboards also make brainstorming sessions a breeze. You won’t find many offices without at least one whiteboard.&nbsp;<br></p>\r\n\r\n\r\n\r\n<figure class=\"wp-block-image\"><img src=\"https://lh5.googleusercontent.com/94Q82bX3sK1iPSvqfWy9m8IZxKb9IeOXKDGS-rL2oBK4eSsqXGPG8hObGXLY23XWi7_Y8fBvNdJ8J3QZ177L12aqeRnRR-rnuEJNjOWi-InnM3hm0lcVOGPXa_7Pg2taqA3zo5rCKlcyk2sfeg\" alt=\"\" data-no-retina=\"true\"></figure>\r\n\r\n\r\n\r\n<ol start=\"6\"><li>How important is decorating the outside of an office?</li></ol>\r\n\r\n\r\n\r\n<p>Don’t forget to deck out any outdoor spaces. It doesn’t take much to transform a boring old patio, balcony, or porch into a relaxing place.</p>\r\n\r\n\r\n\r\n<p>People need a place outside for eating and phone calls. Plus, it’s always fun to bring a laptop outside for work on a nice day—as long as you have a comfortable place to sit. Workers will love seeing outdoor tables, chairs, and stools.</p>\r\n\r\n\r\n\r\n<p>Put a few yard gnomes on display for good measure. We can never have enough yard art!</p>\r\n\r\n\r\n\r\n<ol start=\"7\"><li>Which office decor items should have priority?</li></ol>\r\n\r\n\r\n\r\n<p>After covering the important stuff, we can spruce up our office decor. The idea is to use anything leftover from our budget to upgrade the office’s appearance. Add some elegance with the following pieces:</p>\r\n\r\n\r\n\r\n<ul><li><a href=\"https://officedesigns.com/search/?search_query=clocks\" data-type=\"URL\" data-id=\"https://officedesigns.com/search/?search_query=clocks\" target=\"_blank\" rel=\"noreferrer noopener\">Wall and desk clocks</a></li><li><a href=\"https://officedesigns.com/search/?search_query=mirror#/filter:categories:Mirrors\" data-type=\"URL\" data-id=\"https://officedesigns.com/search/?search_query=mirror#/filter:categories:Mirrors\" target=\"_blank\" rel=\"noreferrer noopener\">Decorative mirrors</a></li><li>Tasteful flower vases, bowls, and plates</li><li>Magazine racks and umbrella holders<br></li></ul>\r\n\r\n\r\n\r\n<ol start=\"8\"><li>What about creating a flexible workspace?</li></ol>\r\n\r\n\r\n\r\n<p>We make flex spaces usable for a variety of purposes. Some folks might need to have an impromptu collaboration session. Others may appreciate the change in scenery from their usual station. We can use any unused areas for flex space. Flex spaces usually have a combination of the following items:</p>\r\n\r\n\r\n\r\n<ul><li><strong>Mobile tables</strong> – Movable tables, <a href=\"https://officedesigns.com/laptop-desks/\" data-type=\"URL\" data-id=\"https://officedesigns.com/laptop-desks/\" target=\"_blank\" rel=\"noreferrer noopener\">laptop stands</a> on wheels, and end tables.</li><li><strong>Modular soft seating</strong> – Ottomans, sectionals, and comfy chairs.</li><li><strong>Bench desking</strong> – Desks that can accommodate multiple workspaces</li><li><strong>Personal storage lockers</strong> – Lockers are handy for shared offices.<br></li></ul>\r\n\r\n\r\n\r\n<ol start=\"9\"><li>How much additional lighting do you need?</li></ol>\r\n\r\n\r\n\r\n<p>Guarantee a bright future with plenty of <a href=\"https://officedesigns.com/lighting/\" data-type=\"URL\" data-id=\"https://officedesigns.com/lighting/\" target=\"_blank\" rel=\"noreferrer noopener\">office lighting</a>. Use desk, table, and floor lamps to brighten rooms. Wall sconces add flare to conference rooms, lounges, or hallways. Consider using lights that attach to walls for space-limited areas.</p>\r\n\r\n\r\n\r\n<h2>How do you make sure you’re staying within regulations and building codes?</h2>\r\n\r\n\r\n\r\n<p>Doing things the right way is important. Renovating offices requires knowing all the regulations and staying within building codes. For example, some remodeling tasks require permits, while other jobs do not.</p>\r\n\r\n\r\n\r\n<p>We can use designers for things like paint without worrying about permits. However, we’ll still have to ensure we meet any applicable code requirements.</p>\r\n\r\n\r\n\r\n<p>If you’re planning on putting up, moving, or removing walls, you’ll need an architect. Architects know the laws and get the permits for anything that requires a structural change.&nbsp;</p>\r\n\r\n\r\n\r\n<p>Choosing architects who use design apps to create estimates and invoices streamlines the process. Certified pros list their details in the corresponding directories to <a href=\"https://www.houzz.com/for-pros/architect-leads\">find new architect leads</a>. Nowadays, all we do is download an app and choose an architect from the list.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<figure class=\"wp-block-image\"><img src=\"https://lh3.googleusercontent.com/mfzpO9j3nkHx2ml14Emqy3sEFQNZGhFfRNCPLorE3XJnwY0jkc9JXB2lohnZuO8TIdvhJ9d6uEp5YzyvMdGxcqw68Y2_Ps2hhf8mV4mKvK6_q-2w5WGhjO6x0tWHSAhWu-QtD-cR0mWsN4lB9A\" alt=\"\" data-no-retina=\"true\"></figure>\r\n\r\n\r\n\r\n<h2>How will you coordinate with employees during the renovation?</h2>\r\n\r\n\r\n\r\n<p>Construction can be noisy, and office hours usually coincide with remodeling hours. The dust and debris can also be overwhelming. However, we can do a few things to cope with construction occurring in established offices.</p>\r\n\r\n\r\n\r\n<h3>Announce the remodeling plans</h3>\r\n\r\n\r\n\r\n<p>Give employees plenty of time to prepare by letting them know the construction dates in advance. Hold important client meetings offsite until the repairs are complete.&nbsp;</p>\r\n\r\n\r\n\r\n<h3>Take home valuables and cover desks</h3>\r\n\r\n\r\n\r\n<p>Construction is dirty and hazardous. Take home anything valuable that might not withstand a mishap. Cover desks with sheets to keep the dust and debris off desks and computers.&nbsp;</p>\r\n\r\n\r\n\r\n<h3>Encourage remote work</h3>\r\n\r\n\r\n\r\n<p>Ask workers to connect remotely to minimize hazards and expedite the process. Fewer distractions for workers and contractors equals faster project completion.</p>\r\n\r\n\r\n\r\n<h2>Final thoughts</h2>\r\n\r\n\r\n\r\n<p>We want to create a space that makes it easy to have meetings or work independently. It’s best if we can solicit input from employees to guide office design choices. Items that get the most use—chairs, desks, lighting—should have priority over decorative nice-to-haves. Empty offices are much easier to remodel than existing ones, so closing the office for renovation may be worth considering. Modular items make it easier to switch things up on the fly.&nbsp;</p>\r\n\r\n\r\n\r\n<h2>Summary</h2>\r\n\r\n\r\n\r\n<p>Planning an office space is a lot of work. Make the process easier by assessing needs, surveying workers, and creating a checklist of fundamentals. We’ll set ourselves up for success by thinking about as much in advance as possible. This guide outlines important factors to consider, key components of offices, following regulations, and coordinating with employees during renovations. If we make the office nice enough initially, we won’t have to worry about workers taking down walls—like Peter Gibbons.&nbsp;</p>\r\n\r\n\r\n\r\n<p><em>This is an article written by Ryan Mahoney. He is a content creator with a degree in sociology. He enjoys writing about generational trends, technology, energy efficiency, and design.</em><em><br></em><em><br></em><em></em></p>\r\n\r\n						<div class=\"post-numbers\">\r\n													</div>\r\n\r\n						\r\n	\r\n\r\n					</section>', 'Credits to <a href=\"https://blog.officedesigns.com/uncategorized/the-best-ergonomic-office-stools-2022/\">Office Designs</a>', '2022-09-10 11:13:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slung`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Office Fitouts', 'office-fitouts', '', NULL, NULL),
(2, 'Door Windows', 'door-windows', '', NULL, NULL),
(3, 'Home Land', 'home-land', '', NULL, NULL),
(4, 'Roof Installation', 'roof-installation', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` int DEFAULT '10',
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `orders`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Jade Collection', 10, '2019-09-2915:14:51imageJADE-COLLECTIONS.png', '2019-01-17 02:57:52', '2019-01-17 02:57:52'),
(6, 'Safeway Hypermarket', 10, '2019-09-2915:15:06imageSAFEWAY-SUPERMARKETS.png', '2019-01-17 12:33:37', '2019-01-17 12:33:37'),
(7, 'Open Capital Advisors', 10, '2019-09-2915:15:29imageOPEN-CAPITAL-ADVISORS.png', '2019-01-17 12:34:37', '2019-01-17 12:34:37'),
(8, 'Bollore Transport & Logistics Kenya LTD', 10, '2019-09-2915:15:48imageBOLOROLE-LOGISTICS.png', '2019-01-17 12:35:23', '2019-01-17 12:35:23'),
(9, 'First Cargo Logistics', 10, '2019-09-2915:16:01imageFIRST-LOGISTICS.png', '2019-01-17 12:36:27', '2019-01-17 12:36:27'),
(10, 'IDLO-International Development Law', 10, '2019-09-2915:16:18imageIDLO.png', '2019-01-17 12:36:54', '2019-01-17 12:36:54'),
(12, 'Selex Es Technologies', 10, '2019-09-2915:16:35imageSELEX-ES.png', '2019-01-17 12:37:55', '2019-01-17 12:37:55'),
(14, 'PJ Kakad', 10, '2019-09-2915:16:59imageP-KAKAD-ADVOCATES.png', '2019-01-17 12:42:17', '2019-01-17 12:42:17'),
(16, 'Westside Towers', 10, '2019-09-2915:17:19imageWESTSIDE-APARTMENTS.png', '2019-02-14 12:05:20', '2019-02-14 12:05:20'),
(17, 'Credit Bank Limited', 3, '2019-09-2915:59:00imageCredit-Bank-Logo.png', '2019-09-29 12:59:00', '2019-09-29 12:59:00'),
(18, 'leonardo', 10, '2021-04-2108:08:21image1.png', '2021-04-21 05:08:21', '2021-04-21 05:08:21'),
(19, 'Sub Way', 6, '2022-01-2214:44:26imagephoto_2022-01-22_12-14-19(2).jpg', '2021-04-21 05:08:48', '2021-04-21 05:08:48'),
(20, 'NegusMed LTD', 10, '2021-04-2108:09:36image5.png', '2021-04-21 05:09:36', '2021-04-21 05:09:36'),
(21, 'Safeway', 10, '2021-04-2108:10:11image8.png', '2021-04-21 05:10:11', '2021-04-21 05:10:11'),
(22, 'Africa Ceramics', 10, '2021-04-2108:11:20image9.png', '2021-04-21 05:11:20', '2021-04-21 05:11:20'),
(23, 'SBA  Group', 8, '2021-04-2206:56:10image10.png', '2021-04-22 03:56:10', '2021-04-22 03:56:10'),
(24, 'PayTech ', 10, '2021-04-2206:57:34image19.png', '2021-04-22 03:57:35', '2021-04-22 03:57:35'),
(25, 'Liberty eagle', 10, '2021-04-2206:58:35image17.png', '2021-04-22 03:58:35', '2021-04-22 03:58:35'),
(26, 'Shofco ', 10, '2021-04-2206:59:39image13.png', '2021-04-22 03:59:39', '2021-04-22 03:59:39'),
(27, 'Bectel ', 10, '2021-04-2207:00:33image20.png', '2021-04-22 04:00:33', '2021-04-22 04:00:33'),
(28, 'Global Star ', 10, '2021-04-2207:01:14image21.png', '2021-04-22 04:01:14', '2021-04-22 04:01:14'),
(29, 'Abno Software International ', 10, '2021-04-2207:04:06image11.png', '2021-04-22 04:04:06', '2021-04-22 04:04:06'),
(30, 'Valar', 7, '2022-01-2214:45:47imagephoto_2022-01-22_12-13-08(2).jpg', '2021-04-22 04:04:38', '2021-04-22 04:04:38'),
(31, 'Engineering ', 10, '2021-04-2207:06:49image15.png', '2021-04-22 04:06:49', '2021-04-22 04:06:49'),
(32, 'Africa Flashmc Tours and Travel ', 10, '2021-04-2207:08:23image16.png', '2021-04-22 04:08:23', '2021-04-22 04:08:23'),
(33, 'World Animal Protection ', 10, '2021-04-2207:10:10image23.png', '2021-04-22 04:10:10', '2021-04-22 04:10:10'),
(35, 'Centric ', 10, '2021-04-2207:10:48image22.png', '2021-04-22 04:10:48', '2021-04-22 04:10:48'),
(36, 'HTG ', 10, '2021-04-2207:11:46image24.png', '2021-04-22 04:11:46', '2021-04-22 04:11:46'),
(37, 'Intrarget ', 10, '2021-04-2207:12:38image27.png', '2021-04-22 04:12:38', '2021-04-22 04:12:38'),
(38, 'Finton Logistics ', 10, '2021-04-2207:14:09image25.png', '2021-04-22 04:14:09', '2021-04-22 04:14:09'),
(39, 'Shelter Afrique ', 10, '2021-04-2207:15:20image28.png', '2021-04-22 04:15:20', '2021-04-22 04:15:20'),
(40, 'Fact ', 10, '2021-04-2207:16:08image26.png', '2021-04-22 04:16:08', '2021-04-22 04:16:08'),
(41, 'Prodrivers', 10, '2021-04-2207:16:43image29.png', '2021-04-22 04:16:43', '2021-04-22 04:16:43'),
(42, 'GT Bank', 1, '2022-01-2214:38:43imagephoto_2022-01-22_12-13-00.jpg', '2022-01-21 07:07:50', '2022-01-21 07:07:50'),
(43, 'STIHL East Africa Ltd', 2, '2022-01-2214:40:04imagephoto_2022-01-22_12-13-09.jpg', '2022-01-21 07:13:04', '2022-01-21 07:13:04'),
(44, 'IGAD', 3, '2022-01-2214:41:18imagephoto_2022-01-22_12-34-38.jpg', '2022-01-21 07:17:59', '2022-01-21 07:17:59'),
(45, 'National Olympic committee', 4, '2022-01-2214:42:49imagephoto_2022-01-22_12-24-34.jpg', '2022-01-21 07:20:12', '2022-01-21 07:20:12'),
(46, 'Yves Rocher', 5, '2022-01-2214:43:47imagephoto_2022-01-22_12-13-10(2).jpg', '2022-01-21 07:22:20', '2022-01-21 07:22:20'),
(47, 'Intra health', 10, '2022-01-2215:06:03imagephoto_2022-01-22_12-09-31.jpg', '2022-01-22 12:04:22', '2022-01-22 12:04:22'),
(48, 'Alkar', 10, '2022-01-2215:07:53imagephoto_2022-01-22_12-13-02.jpg', '2022-01-22 12:07:53', '2022-01-22 12:07:53'),
(49, 'Shofco', 10, '2022-01-2215:08:33imagephoto_2022-01-22_12-13-05.jpg', '2022-01-22 12:08:33', '2022-01-22 12:08:33'),
(50, 'Negus Med', 10, '2022-01-2215:09:44imagephoto_2022-01-22_12-13-06.jpg', '2022-01-22 12:09:44', '2022-01-22 12:09:44'),
(51, 'Resolution Insurance', 9, '2022-01-2215:10:33imagephoto_2022-01-22_12-13-06(2).jpg', '2022-01-22 12:10:33', '2022-01-22 12:10:33'),
(52, 'MicroSave Consulting', 9, '2022-01-2215:11:27imagephoto_2022-01-22_12-13-09(2).jpg', '2022-01-22 12:11:27', '2022-01-22 12:11:27'),
(53, 'Medecins Sans Frontiers', 9, '2022-01-2215:12:20imagephoto_2022-01-22_12-13-10.jpg', '2022-01-22 12:12:20', '2022-01-22 12:12:20'),
(54, 'Kiptinness & Odhiambo Associates', 10, '2022-01-2215:13:33imagephoto_2022-01-22_12-13-11.jpg', '2022-01-22 12:13:33', '2022-01-22 12:13:33'),
(55, 'Heva Enterprises', 10, '2022-01-2215:15:04imagephoto_2022-01-22_12-14-19.jpg', '2022-01-22 12:15:04', '2022-01-22 12:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_08_111431_create_blogs_table', 1),
(6, '2022_09_08_113853_create_categories_table', 2),
(7, '2022_09_09_071349_create_services_table', 3),
(8, '2022_09_10_093605_create_portolios_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `meta`, `slung`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Centric Ambulance ', 'Centric Ambulance Interiors Design and Office Fitouts', '', 'Centric.jpg', '', NULL, NULL),
(2, 'Olympic Kenya', 'Olympic Kenya Interior Design & Office Fitouts', '', 'olympic.jpg', '', NULL, NULL),
(3, 'STIHL East-Africa-Ltd', 'STIHL Offices Interiors & Office Fit-Outs ', '', 'STIHL-East-Africa-Ltd.jpg', '', NULL, NULL),
(4, 'TLS Contact', 'TLS Offices Interiors, Office Fit-Outs & Office Partitioning ', '', 'TLS.jpg', '', NULL, NULL),
(5, 'Valar Frontier Solutions', 'Valar Frontier Solutions Office Fitouts & Interior Design', '', 'VALAR.jpg', '', NULL, NULL),
(6, ' Yves Rocher', ' Yves Rocher Westlands, Nairobi Kenya, Office Interiors and Fit-Outs', '', 'Yves.jpg', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` tinyint NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_extra` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `meta`, `slung`, `home`, `icon`, `image`, `content`, `content_extra`, `created_at`, `updated_at`) VALUES
(1, 'Interior Design', 'We push our design thinking boundaries through research, observation and experience to develop truly adaptable spaces.', 'interior-design', 1, 'flaticon flaticon-interior-design', 'iteriors.jpg', 'We push our design thinking boundaries through research, observation and experience to develop truly adaptable spaces.\r\nGreat architecture inspires change and fundamentally has the power to improve lives. For us, this is all about designing with purpose to achieve the best human experience of space.<br><br>\r\nOur Interiors work spans the globe. It touches communities big and small and seamlessly harmonizes with mother nature, remote and urban settings, and local cultures to effect positive outcomes.<br><br>\r\nRibye Designers brings experience across eleven market sectors and disciplines, from empathy-based design to sustainability. Whether you are from a small or large organization, we’re here to help you achieve your goals and the goals of your community.', 'It always feels different to work with us. We start by listening to build a complete picture of your needs. We strive tirelessly to enhance your vision and business goals to ensure results that give rise to rich and memorable human experiences. We partner with you and your stakeholders to incorporate an integrated design process to deliver pragmatic and rigorous design solutions delivered on time and on budget. From the outset, we employ strategic thinking that is informed, integrated, and forges intelligent pre-design and design decision-making.<br><br>', NULL, NULL),
(2, 'Office Fit-Outs', 'We challenge convention so that our clients receive Interior Fit-Out solutions that blend high-end aesthetics with flexible functionality.', 'Office-Fit-Outs', 1, 'flaticon flaticon-apartment', 'ceilingandfloor.jpg', 'We challenge convention so that our clients receive Interior Fit-Out solutions that blend high-end aesthetics with flexible functionality. Throughout the office, commercial and retail sectors, the quality of our work, which is renowned for its attention to detail, has set the standard across the Eastern Africa.\r\n<br><br>\r\nPartnering with global tech giants or household names in fashion, we listen to our clients to deliver cost effective outcomes no matter how challenging, or complex, the project. With a proven track record, we have a reputation for adding value and delivering on time in the face of even the most stringent deadlines.\r\n<br><br>\r\nWe deliver where others have not – making us the preferred supplier in Uganda.', NULL, NULL, NULL),
(3, 'Construction', 'We understand that each customer is unique and deserves a tailored approach, from project start to finish.', 'construction', 1, 'flaticon flaticon-apartment', 'refurbish.jpg', '<br><br>\nOnce interior drawings are approved, we will engage our experts in the construction stages. We will construct interior walls in full accordance with the structural engineers’ notes for the premises so as not to compromise with the structural strength and stability of the existing structure.<br><br>\nWe understand that each customer is unique and deserves a tailored approach, from project start to finish. By utilizing our strong relationships with architects and professional sub-contractors, we take full responsibility of a project and work to minimize risks, reduce cost, improve efficiency, and deliver to owner standards.', NULL, NULL, NULL),
(4, 'Refurbishments', 'Over Time, The brand image evolves and it’s easy to become desensitized to inefficiencies in your workspace...', 'refurbishments', 1, 'flaticon flaticon-living-room', 'refurbish.jpg', '<br><br>\r\n\r\nOver Time, The brand image evolves and it’s easy to become desensitized to inefficiencies in your workspace.An office refurbishment is a great way of refreshing your current space to fit your brand needs.<br><br>\r\nRibye Designers engages in refurbishment of space. We repair walls, leaking roofs, replace worn out ceilings while at the same time taking care of electrical works arising thereof. We also redecorate surrounding landscapes and even build landmarks to compliment the refurbished structures.', NULL, NULL, NULL),
(5, 'Partitioning', 'Our partitioning experts use aluminum and dry walls to partition spaces. Use of glass ensures a lot of natural lighting thus conserving energy', 'partitioning', 0, 'flaticon flaticon-workspace', 'Partition.jpg', '<br><br>\r\n\r\nWe are aware that you may need changes to your workspace to fit in with how your business operates and to mould around a core culture that make life easier for your staff\r\n<br><br>\r\nOur partitioning experts use aluminum and dry walls to partition spaces. Use of glass ensures a lot of natural lighting thus conserving energy. The use of dry walls like Gypsum and MDF leads to conservation of environment since we do not use wood. We put a lot of emphasis on green design', NULL, NULL, NULL),
(6, 'Ceiling & Floors Finishes', 'We provide a range of ceiling and flooring solutions based on client needs and existing space structures.', 'ceiling-and-floors-finishes', 0, 'flaticon flaticon-blueprint', 'ceilingandfloor.jpg', '<br><br>\n<br>\nWe provide various ceiling and flooring solutions based on client needs and existing space structures. Ceiling finishes include but are not limited to gypsum bulkheads, acoustic ceilings, lighting fixtures, and wood detail. Our flooring expertise includes the installation of carpets, tiles, and floorboards. We also undertake the supply and fit of window solar films and blinds.', NULL, NULL, NULL),
(7, 'Furniture Supplies', 'Whether fixed or modular, we supply and fit office furniture for offices and other associated areas like the kitchen and the washrooms.', 'furniture-supplies', 0, 'flaticon flaticon-interior-design-2', 'Stationry.jpg', '<br><br>\n<br>Whether fixed or modular, we supply and fit office furniture for offices and other associated area like the kitchen and the washrooms. We ensure that our furniture fits the designs created to match. We choose the right materials and colours for comprehensive wholeness', NULL, NULL, NULL),
(8, 'Custom Solutions', 'We have endless solutions to your Design and construction needs, Our creative 3D artists are always ready to translate your designs.', 'custom-solutions', 1, 'flaticon flaticon-interior-design-1', 'iteriors.jpg', '<br><br>\n<br>We have endless solutions to your Design and construction needs, Our creative 3D artists are always ready to translate your designs.\nFrom Home Spaces , Commercial Spaces to  Warehouses, Feel free to contact Ribye Designers.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
