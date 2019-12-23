-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 05:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foe_uche`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postedBy` int(11) NOT NULL,
  `category` int(11) NOT NULL DEFAULT '1',
  `thumbnail` varchar(50) DEFAULT 'default-image.jpg',
  `alt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `title`, `post`, `date`, `postedBy`, `category`, `thumbnail`, `alt`) VALUES
(1, 'Friends of the Earth Keep Cup - Reduced Rate This Week!', '<p>Our limited edition Friends of the Earth Keep Cups have been hugely popular since we launched them as part of the Sick of Plastic Campaign this time last year.</p>\r\n<p>To celebrate one year of the campaign we''ve decided to offer them at a reduced rate for one week only in the lead up to Christmas.</p>\r\n<p>Until now we have been exclusively gifting our Keep Cups to new monthly donors and those who give &euro;100 or more.</p>\r\n<p><strong>Why have our reusable cups been so popular?</strong></p>\r\n<p>Did you know that in Ireland we waste 20,000 single use coffee cups every hour? That adds up to 300 million a year! In comparison, reusable cups can be used time and time again for years.<br /><br />The Sick of Plastic Campaign has been one of our most popular campaigns in terms of public engagement, which goes to show - people really are sick of plastic and really want to do their bit to tackle plastic waste.</p>\r\n<p><strong>Your reusable cup can convert coffee lovers into action takers!</strong></p>\r\n<p>Carrying a reusable cup sends a strong message to business about tackling waste. It''s also a great conversation starter, your reusable cup can empower others to take action on waste.</p>\r\n<p>Use your reusable coffee cup as a tool to inform people about the Waste Reduction Bill which is calling for a levy on single use coffee cups, a ban on single use plastics and to introduce a deposit return scheme for plastic bottles and aluminium cans.</p>', '2018-12-25 04:27:33', 1, 3, 'christmas-gift.jpg', 'Friends of the Earth Keep Cup - Reduced Rate This Week!'),
(2, 'We can spark the solar revolution if we act right now.', '<p>Over 20,000 people signed our petition to support solar power in Ireland. Even Leo signed, while hanging out at Electric Picnic before he was Taoiseach. He agreed then there should be a fair payment for solar power.</p>\r\n<p>And now it could happen&nbsp;if you email your TDs today.</p>\r\n<p>The D&aacute;il will debate a draft law next Tuesday (the 27th) which would finally mean small-scale generators of renewable energy would get paid for the electricity they supply to the grid.</p>\r\n<p>At the moment in Ireland if you generate your own energy, any you don''t use it all immediately, you have to give it away for free to the ESB.</p>\r\n<p>Think of a school with solar panels on the roof, generating power through the summer holidays. Or a farm with a small hydro or wind turbine, spinning all night with nowhere for the power to go. Across Europe electricity companies are obliged to pay for that extra power. It''s only fair, and it fundamentally changes the economics of an investment in microgeneration for an individual, a community, or a small business. Suddenly pay-back periods are much shorter, a source of income is created, and the extra power is accounted for.</p>\r\n<p>It''s a game changer. But electricity companies do not like it. They want you to buy your power entirely from them, forever.</p>\r\n<p>The Microgeneration Bill will change that. If passed, it will be the law that anyone who generates power through microgeneration will be entitled to be paid for any electricity they do not use.</p>\r\n<p>In practice it will mean solar power, hydro power and small wind turbines will be viable on Irish farms and in Irish Communities all across the country.</p>\r\n<p>More power to you,</p>\r\n<p>Kate, Oisin, Meaghan, Claudia, and Triona<br />Friends of the Earth</p>', '2018-12-25 04:27:33', 1, 1, 'pexels-photo-421888.jpeg', 'We can spark the solar revolution if we act right now.'),
(3, 'We are scared. We are angry. It''s time to rise.', '<p>I''ve been working on climate change for a little over 12 years now.</p>\r\n<p>I have never been more scared.</p>\r\n<p>And I have never been more hopeful.</p>\r\n<p>On the one hand, the recent UN science report is genuinely terrifying [1]. We are currently heading for a catastrophic 3C of global warming and they warn it will &ldquo;require rapid, far-reaching and unprecedented changes in all aspects of society&rdquo; to avert disaster [2].</p>\r\n<p>On the other hand, I have been inspired by wave after wave of grassroots activism in the last couple of years. Combined with dogged NGO advocacy, we have seen significant victories, and the wider public, the media and politicians have begun to take notice.</p>\r\n<p>We are at a moment of unprecedented peril. But our collective campaigning has created a small window of opportunity.</p>\r\n<p>Our future really is in the balance. That&rsquo;s where people like you come in. People who get it. People who are ready to act.</p>\r\n<p>Will you help tip the balance towards hope?</p>\r\n<p><a href="#"><strong>Yes, I''ll help sign-up to talk to my TD</strong></a></p>\r\n<p>Our politicians are paying attention to climate change like never before. But they still just don&rsquo;t really get it, as evidenced by the recent Budget [3], which came the day after the UN climate science report and still ignored climate change.</p>\r\n<p>At a spontaneously organized protest outside the D&aacute;il, where hundreds gathered just days later, a student activist caught the mood well when she told the crowd &ldquo;We are scared. We are angry. We are here to make them act" [4].</p>\r\n<p><strong>Now we want to talk to every TD in the D&aacute;il to drive home the need for #ClimateActionNow. Will you join us?</strong></p>\r\n<p>On Wednesday 5<sup>th</sup>&nbsp;December, we&rsquo;re taking over Buswells Hotel opposite the D&aacute;il to organize conversations between constituents and their TDs.</p>\r\n<p>One the same day, the new Minister, Richard Bruton, who is talking about &ldquo;a revolution&rdquo; to tackle climate change [5], will be presenting to the special all-party Committee on Climate Action.</p>\r\n<p>The EPA will also be publishing the latest figures on Ireland&rsquo;s climate polluting emissions, which are certain to be alarming.</p>\r\n<p>And we want to tell every TD that it&rsquo;s time for #ClimateActionNow.</p>\r\n<p>We&rsquo;ve organized lobby days like this in the past. They have been crucial to winning key amendments to the climate law, like making sure the advisory council Prof John Fitzgerald chair was truly independent. And like building support for the Divestment Bill that is now on the verge of becoming law.</p>\r\n<p><strong><a href="http://bit.ly/SCC_Rise">Come along on December 5<sup>th</sup></a></strong>. You don&rsquo;t have to be an expert in climate policy, you just have to be expert in being a human worried about climate change. It doesn&rsquo;t matter if you have never spoken to your TD before. In fact it makes it all the more powerful. There&rsquo;ll be staff and volunteers from various members of the Stop Climate Choas Coalition there all day to support you no matter what time you come between 10am and 7pm.</p>\r\n<h4>So, what next?</h4>\r\n<p><a href="#">A)&nbsp;Email your TD now&nbsp;to ask them to come to Buswell&rsquo;s</a></p>\r\n<p><a href="#">B)&nbsp;Tell us what time you think you can come at</a></p>\r\n<p>We&rsquo;ll let you know which of your TDs have confirmed and what time they plan to be there.</p>\r\n<p>Thanks to our campaigning a special all-party Committee is now considering the landmark report of the Citizens&rsquo; Assembly on climate change. Our goal on December 5<sup>th</sup>&nbsp;is for citizens to assemble again to&nbsp;<a href="#">make sure TDs know&nbsp;</a>that whatever plan they produce must be at least as strong as the Citizens&rsquo; Assembly report.</p>\r\n<p>Earth is our only home. It&rsquo;s time to rise before it&rsquo;s too late.</p>\r\n<p><strong><a href="#">Register now for #RiseforClimate</a>, Jobs and Justice on December 5<sup>th</sup>.</strong></p>\r\n<p><strong><a href="donate.php">Give what you can now</a>&nbsp;to help us organize this and more climate campaigning.</strong></p>\r\n<p>Together we can tip the balance.</p>\r\n<p>Yours in hope and fellowship,</p>\r\n<p>Oisin Coghlan<br />for the Friends of the Earth team.</p>', '2018-12-25 04:27:33', 1, 1, 'climate-cold-glacier-iceberg.jpg', 'We are scared. We are angry. It''s time to rise.'),
(4, 'Apply now to take part in Mobilize. Resist. Transform. Environmental Issues Course 2018!', '<p>Are you aware of the existence of environmental issues, but unsure how they interconnect? Are you eager to meet like-minded people with whom to delve into these issues and find a point of intervention where you can make a change? Perhaps you have watched a documentary about climate change but don''t know where to start in order to make a change, and that can be a lonely, scary place. So maybe you need to feel part of a community to feel supported enough to try to make those changes?</p>\r\n<p>&nbsp;</p>\r\n<p><strong>If any or all of this sounds like you, then register now to take part in Mobilize.Resist.Transform - a 6 week Autumn evening course run by Friends of the Earth.</strong></p>\r\n<p>Apply to take part by completing this <a href="#">form</a></p>\r\n<p>This course aims to offer a space to explore the environmental issues of our time, how they intersect and what some of the root causes might be. We will use a variety of participatory, development education style methodologies and work with each other to probe the issues over the course of the 6 weeks, with reading materials provided for each week to deepen your experience. Ways of working can in themselves be an act of revolution, so in our sessions we will be using activities that recognise the whole person, not just the intellect, and we will strive to always confront oppression and privilege. Thus, the sessions will, for the most part, not be lecture style, but will employ creative methodologies and interaction. We will also endeavour to have the input of guest speakers in relevant sessions.</p>\r\n<p>The course will run for six&nbsp;<strong>Thursday evenings</strong>, from<strong>&nbsp;November 8th to December 13th</strong>, in Dublin City Centre&nbsp;from&nbsp;<strong>6:30pm to 9pm</strong>.&nbsp;<strong>The location will be given to all those whose applications are successful.</strong></p>\r\n<p>To cover the cost of the space, we will be asking for a contribution of &euro;40 for those in employment and &euro;25 for those unwaged or students. This is payable once your registration is confirmed.</p>\r\n<p><strong>Once again, you can apply to take part by completing&nbsp;<a href="#">this short form</a>.</strong></p>', '2018-12-25 15:43:03', 1, 1, 'pexels-photo-1353365.jpeg', 'Apply now to take part in Mobilize. Resist. Transform. Environmental Issues Course 2018!'),
(5, 'We''re not going down without a fight', '<p>Last Monday a UN scientific panel published&nbsp;<a href="#">an alarming report on climate change</a>. The impacts are worse than we thought and to prevent complete climate chaos we essentially have to halve our pollution by 2030 and reduce it to zero by 2050.</p>\r\n<p>On Tuesday, the Government introduced Budget 2019, dropping plans for an increase in the carbon tax announced by the Taoiseach, and effectively "<a href="#">giving two fingers to the Paris Agreement</a>" and everyone who is threatened by climate change.</p>\r\n<p>It was a staggering failure of political leadership that put us all at risk of devastating climate impacts.</p>\r\n<p><strong>But we''re not going down without a fight.</strong></p>\r\n<p><strong>What you can do:</strong></p>\r\n<h3>1. Ring your TD on 01-6183000</h3>\r\n<p>Call 01-6183000 and ask for the office of one of your local TDs. Leave a message to say you are shocked, alarmed and that you want to see climate action now.<br />(<a href="#">use this map to figure out who your TDs are).</a></p>\r\n<h3><a href="#">2. Email all your local TDs</a></h3>\r\n<p>You can use this link to send an email to all the TDs in your constituency. We haven''t written a preset message for you. Use your own words, it can be as short as you like. Tell them why you want climate action now. You might be worried about your children or grandchildren. Or you own future! Tell your TDs what it is that makes you angry, sad or worried about climate change.</p>\r\n<h3><a href="#">3. Come to the D&aacute;il on Tuesday lunchtime</a></h3>\r\n<p>Three activist groups have organized an impromptu demonstration on Tuesday 15th between 12.30 and 2pm to show TDs that people care about climate change. Friends of the Earth and Stop Climate Chaos are supporting the demo organized by the Dublin Eco-Feminist Collective, Not Here Not Anywhere, and Young Friends of the Earth.</p>\r\n<p>If you are in striking distance of Dublin 2, join us.&nbsp;<strong>If not, call your TD,</strong>&nbsp;that will have a real impact too - let''s make sure they all get dozens of phone calls.</p>\r\n<p>The biggest take-away from the UN report is that every fraction of a degree of climate change matters. And we don''t know which fraction is the difference between climate damage and climate catastrophe. So everything we do matters and every decision government makes now matters. We are almost out of time, and the Government is absolutely out of excuses.</p>\r\n<p>Please make sure they hear from you tomorrow.</p>\r\n<p>All our tomorrows depend on it.</p>\r\n<p>Oisin Coghlan<br />Friends of the Earth</p>\r\n<p><strong>P.S. This is the moment to ask to your family and friends to take action too.</strong>&nbsp;If you''re like me you''re too polite in most social situations to bring up climate change. Today is the day we push through that awkwardness for the sake of our futures:</p>\r\n<ol>\r\n<li><strong>Send this email to the people you care about, cos they need to care about climate change.</strong></li>\r\n<li>Agree with a couple of friends that you''ll call your TDs and compare notes.</li>\r\n<li>Grab a friend and bring them with you to the demo.</li>\r\n</ol>', '2018-12-25 15:43:03', 1, 2, 'pexels-photo-326036.jpeg', 'We''re not going down without a fight'),
(6, 'Hiring: Young FoE Ireland Food Sovereignty Events & Communications Officer!', '<p>Friends of the Earth Ireland is seeking an Events and Communications officer to promote food sovereignty within an 18-35 age range in Ireland.</p>\r\n<p>The post is half-time and based in the Friends of the Earth Ireland office in Dublin. Application details are at the bottom of this page.</p>\r\n<p>Friends of the Earth Ireland is an environmental justice campaigning organization, striving to create a just world where both people and nature thrive. It is a member of the Irish Environmental Network, the Environmental Pillar, and is the secretariat of the Stop Climate Chaos coalition Ireland, a network of 28 civil society, youth and faith-based organisations campaigning for Ireland to do its fair share on climate.</p>\r\n<p>We are a small organization of 2 full-time staff, and 3 part-time staff.</p>\r\n<p>We campaign for the implementation of community-centred alternatives to fossil fuels, and against dirty energy projects. We roll out educational projects to build the knowledge and skill base of prospective campaigners, and support youth action on environmental justice issues of their choosing.</p>\r\n<p>We are part of Friends of the Earth Europe, which campaigns for sustainable and just societies and for the protection of the environment. It unites 33 national organisations with thousands of local groups and is part of the world''s largest grassroots environmental network, Friends of the Earth International. Please see www.foeeurope.org for more information.</p>\r\n<p>Within the FoEE network, Young Friends of the Earth Europe (YFoEE) is a grassroots network of young people and youth organisations working collectively on a local, national and European level. It unites member groups from 15 countries across Europe, bringing together and training young people to campaign for and share knowledge and ideas on social and environmental justice.</p>\r\n<p>Young Friends of the Earth Ireland are a grassroots environmental group of volunteers whose mission is to mobilize and inspire people to join the movement for climate justice in Ireland.</p>\r\n<p><strong>What is the role?</strong></p>\r\n<p>You will be directly involved in the Irish implementation of the ''Growing Together'' youth project, of which there are 7 Young Friends of the Earth Europe partners. You will be reporting to the Head of Mobilisation of Friends of the Earth Ireland and working closely together with the YFoEE working groups for Food &amp; Agriculture and Communications.</p>\r\n<p>''Growing Together'' focuses on building young people''s capacity and knowledge on Food Sovereignty through innovative communications, political analysis and popular education methodologies. The main objectives of the project are:</p>\r\n<ul>\r\n<li>To build educational and communications capacity of young people, and in-depth analysis on food sovereignty topic and enable effective organising with affected rural communities</li>\r\n<li>To raise awareness and promote critical thinking among young people (and especially young farmers) from rural communities to engage in decision-making that directly impacts their livelihood and their future.</li>\r\n<li>To empower young people to become change makers, including support for young people to have a say in European policy development related to food and agricultural policies.</li>\r\n</ul>\r\n<p><strong>Goals and responsibilities of this position include:</strong></p>\r\n<ul>\r\n<li>Organise and develop content for Ireland-based youth trainings, skill-shares and public events in collaboration with Young FoE Ireland on food sovereignty.</li>\r\n<li>Collect and disseminate tools and methodologies of communications and popular education to support Young FoE Ireland group activities on food sovereignty.</li>\r\n<li>Communicate and strengthen relationships with European YFoEE allies working on topics of food and agriculture.</li>\r\n<li>Ensure visibility and outreach of YFoE group activities on food sovereignty.</li>\r\n<li>Support the development of YFoEE ''Food Sovereignty Manifesto'', which will include the voices of young people in relation to food sovereignty issues</li>\r\n<li>Reach out to young farmers in both rural and urban areas to facilitate enhanced connection between youth involved in the food system in rural and urban areas.</li>\r\n<li>Attend European Level online Food and Agriculture Working Group online meetings at a rate of once every one/two months.</li>\r\n<li>Attend an evening Young FoE meeting at least once every 6 weeks.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Applicants should demonstrate the following attributes:</strong></p>\r\n<ul>\r\n<li>Demonstrable commitment to the values, vision and mission of Young Friends of the Earth Ireland and Friends of the Earth Ireland.</li>\r\n<li>Strong interest in environmental justice issues, ideally through voluntary or work experience as social/environmental activist or within an NGO.</li>\r\n<li>Experience of working with young people.</li>\r\n<li>Previous experience of using non-formal education tools and good facilitation skills.</li>\r\n<li>Event management.</li>\r\n<li>Strong organisational and time management skills.</li>\r\n<li>Excellent written and social media communication skills.</li>\r\n<li>High level of IT literacy (Microsoft Office/Excel &ndash; Photoshop is a plus).</li>\r\n<li>High level of English (written and oral).</li>\r\n<li>Ability to take initiative.</li>\r\n<li>Desire to be a team player and build the capacity and power of grassroots groups.</li>\r\n<li>Capacity to manage a basic budget.</li>\r\n</ul>\r\n<p><strong>The following attributes are also desirable (but not essential):</strong></p>\r\n<ul>\r\n<li>Previous experience with Young Friends of the Earth, Friends of the Earth, or another environmental and social justice group/ organisation.</li>\r\n<li>Graphic design skills.</li>\r\n<li>Experience in the arts and/or theatre.</li>\r\n<li>Photography skills.</li>\r\n<li>Familiarity with the Irish environmental movement.</li>\r\n</ul>\r\n<p><strong>Role details:</strong></p>\r\n<p><strong>Starting date: 15th October 2018</strong></p>\r\n<p><strong>The successful applicant will be expected to travel to Brussels on the 16<sup>th</sup>&nbsp;and 17<sup>th</sup>&nbsp;of October for the kick-off of the project.</strong></p>\r\n<ul>\r\n<li>Remuneration: Gross salary &euro;23,625 FT equivalent salary.</li>\r\n<li>Half time: &euro;11,812.5 gross.</li>\r\n<li>12.5 holiday days, 5 weeks.</li>\r\n<li>Salary and holidays are pro-rata.</li>\r\n</ul>\r\n<p>Conditions are according to Irish legislation including the legal ability to live and work in Ireland.</p>\r\n<p>Friends of the Earth Ireland adheres to Irish law that prohibits discrimination on basis of age, sexual orientation, marital status, birth, fortune, religious, philosophical or political beliefs, language, present or future state of health, disability, physical or genetic characteristics, sex, pregnancy, childbirth, maternity, change of sex, nationality, alleged race, skin colour, ancestry, national, ethnic or social origin.</p>\r\n<p>The working language is English, but participants are not expected to be native speakers.</p>\r\n<p><strong>How to apply?</strong></p>\r\n<p><em>Do you feel you meet our criteria, and feel inspired by the objectives and challenges of the position?</em></p>\r\n<p>Then please send an email with an attached CV and a concise letter (around 1 A4 page, one side) explaining your background and your motivation to:</p>\r\n<p><a href="mailto:meaghan@foe.ie">meaghan@foe.ie</a></p>\r\n<p><br />by October 3rd 17:00 GMT+1, with the subject title:</p>\r\n<p><em>Young FoE Application</em></p>\r\n<p>Only candidates selected for interview will be contacted. Thank you for your understanding.</p>\r\n<p>Interviews will be conducted in person in&nbsp;<strong>Dublin 8<sup>th</sup>&nbsp;and 9th October, 2018</strong>. If you have not been contacted by October 5th please consider that you have not been shortlisted.</p>', '2018-12-25 15:45:27', 1, 4, 'pexels-photo-515166.jpeg', 'Hiring: Young FoE Ireland Food Sovereignty Events & Communications Officer!'),
(7, 'The Young FoE Europe Summer Camp', '<p>The Young Friends of the Earth Europe Summer Camp took place in Cyprus this year between the 3rd and 9th of September. High up in the pine forests of the Troodos mountains the international group of 55 young people shared stories of resistance in many different contexts, depicting the differences and commonalities in our struggles. Focusing on a theme of intersectionality, the camp provided a fertile space for both seasoned and new activists to explore this essential component of environmentalism.</p>\r\n<p>We explored how climate change is felt differently along identities of gender, class, ethnicity, sexuality, race and migration status. In turn, this informed our training sessions in popular education, power and privilege and inclusive facilitation, aiming to help us in building a more inclusive movement that engages with diverse people and groups. This is the crucial point if we are serious about environmental justice that leaves no one behind in our struggle.</p>\r\n<p>During the camp we discussed reproductive rights in Ireland and Argentina and why they are part of environmental justice. We heard of struggles from Young Friends of the Earth Africa, including cases from Mozambique, Egypt, South Africa and Nigeria. We learnt about mining in Colombia and visited a community resisting mining in Cyprus. From across the world we shared stories that show the realities of our extractive, profit-driven system. A system rooted in oppressive structures of capitalism, patriarchy, imperialism and white supremacy. If we are to overcome it we must see all struggles against oppression as interrelated. We must listen to the voices and fully engage with those marginalised in society who face the worst impacts of climate change.</p>', '2018-12-25 15:45:27', 1, 3, 'pexels-photo-699558.jpeg', 'The Young FoE Europe Summer Camp');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `category`) VALUES
(1, 'Climate'),
(2, 'Waste'),
(3, 'Recycle'),
(4, 'Renewable Energy');

-- --------------------------------------------------------

--
-- Table structure for table `cat_blog`
--

CREATE TABLE `cat_blog` (
  `catID` int(11) NOT NULL,
  `blogID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_news`
--

CREATE TABLE `cat_news` (
  `catID` int(11) NOT NULL,
  `newsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `news` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donate_record`
--

CREATE TABLE `donate_record` (
  `record_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(10,2) UNSIGNED NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address1` tinytext NOT NULL,
  `address2` tinytext,
  `city` tinytext NOT NULL,
  `country` tinytext NOT NULL,
  `post_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donate_record`
--

INSERT INTO `donate_record` (`record_id`, `amount`, `fName`, `lName`, `email`, `address1`, `address2`, `city`, `country`, `post_code`) VALUES
(1, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(2, '15.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(3, '100.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(4, '150.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(5, '30.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(6, '5.00', 'Jimmy', 'Chen', 'jimmychen0123@gmail.com', '86 Reuben Street', '', 'Dublin 8', 'Ireland', 'D08 YD53'),
(18, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(19, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(20, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(21, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(22, '15.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(23, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(24, '15.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(25, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(26, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(27, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(28, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86'),
(29, '5.00', 'Uche', 'Mbaka', 'uchembaka@gmail.com', '1A Old Farm, Carpenterstown Road', 'Dublin 15', 'Dublin', 'Ireland', 'D15 VE86');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postedBy` int(11) NOT NULL,
  `category` int(11) NOT NULL DEFAULT '1',
  `thumbnail` varchar(50) DEFAULT 'default-image.jpg',
  `alt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `title`, `post`, `date`, `postedBy`, `category`, `thumbnail`, `alt`) VALUES
(1, '24 hours to have your say on Ireland''s energy future', '<p><a href="#">One click now can help</a>&nbsp;change energy policy for good.</p>\r\n<p>A company called Tamboran Resources has just moved on site in Belcoo, Fermanagh, to prepare to test drill for fracking. They also hold licences in Leitrim. A lobby group is calling for a nuclear power plant to be built in Moneypoint, Co Clare. The Minister for Energy thinks "Ireland will remain dependent on fossil fuels well into the future". We''re still ripping up our bogs and burning peat to make electrcity. And Board Na Mona want to build a factory to make "smokeless coal".</p>\r\n<p>Is this the energy future you want? What should Ireland do?</p>\r\n<p><strong><a href="#">You have 24 hours to have your say in the Government''s public consultation.</a></strong></p>\r\n<p>Friends of the Earth wants Ireland to declare that we will be fossil-fuel-free by 2050. Mary Robinson, newly appointed as a UN climate envoy, has said major fossil fuel reserves will have to be left in the ground. And the Interngovernmental Panel on Climate Change says it''s time to stop investing in fossil fuels.</p>\r\n<p>Ireland sends &euro;6.5 billion a year out of the country to buy in fossil fuels. We have some of the best potential for renewable energy in the world and a housing stock crying out for retrofitting to reduce our energy needs.</p>\r\n<p>So please take a minute to&nbsp;<a href="#">use our handy web gizmo to make a submission</a>&nbsp;to the public consultation. It closes at midnight on 31 July.</p>\r\n<p>Every submission that addresses the big picture of climate change, energy security and the need for the public to fully participate in creating a new, truly sustainable energy system, will help push the policy debate in a constructive, progressive direction.</p>\r\n<p><strong><a href="#">Thanks for taking part</a>.</strong></p>\r\n<p><em><strong>And do share this with anyone you know who cares about keeping the lights on, keeping fossil fuels in the ground, or keeping global warming to less than 2C.</strong></em></p>', '2018-12-27 18:38:08', 1, 1, 'pexels-photo-1493374.jpeg', '24 hours to have your say on Ireland''s energy future'),
(2, 'Launching our learning collective - People. Power. Action.', '<p>Are you unhappy with how our society operates at present, would you like to see societal change?</p>\r\n<p>There are certainly many changes I would like to see happen in Ireland and I believe&nbsp;<strong>every citizen needs to be a part of making these changes happen!</strong></p>\r\n<p>This is why this year Friends of the Earth are inviting citizens from across Ireland who are<strong>interested in becoming active in their community</strong>&nbsp;(whether that is in your town, college, work place or other) in relation to environmental and social justice issues, to&nbsp;<strong>come together weekly</strong>&nbsp;to meet&nbsp;<strong>like minded people</strong>, learn and share&nbsp;<strong>new skills</strong>&nbsp;and&nbsp;<strong>take action</strong>&nbsp;as part of the movement for social change and environmental sustainability.</p>\r\n<p>We believe in climate justice but to address this we believe that all other injustices also need to be addressed in order to find an adequate solution and we need you to join with us to be part of the solution.</p>\r\n<p><strong>To be part of the solution...</strong></p>\r\n<p><strong>Join our collective!</strong></p>\r\n<p>This an&nbsp;<strong>opportunity</strong>&nbsp;to share your unique skills and passions within a group setting and in turn develop new insights by hearing from the experiences of others while participating as an equal member of the collective to help us support each other in acting out our vision for a new world.</p>\r\n<p>We will meet together on&nbsp;<strong>Monday evenings</strong>&nbsp;in November in Dublin starting<strong>&nbsp;2nd November&nbsp;</strong>leading up to the UN Climate Talks in December which I hope you will be able to join us in coming to ( 9th-14th Dec) to demonstrate your voice for change along with thousands of other active citizens from across the world.</p>\r\n<p>If you already know this is something you would like to be a part of, please email<strong>heather@foe.ie</strong>&nbsp;with your&nbsp;<strong>name, mobile number</strong>&nbsp;and a&nbsp;<strong>brief description</strong>&nbsp;of why you would like to be&nbsp;<strong>part of the collective</strong>, what you think you could<strong>&nbsp;contribute</strong>&nbsp;to it and what you would like to&nbsp;<strong>gain</strong>&nbsp;from it.</p>\r\n<p><strong>OR</strong></p>\r\n<p>For more information on the collective, please email&nbsp;<strong>heather@foe.ie</strong>. I look forward to hearing from you. :)</p>\r\n<p>Thank you!</p>\r\n<p>Heather</p>\r\n<p>Activism Coordinator</p>\r\n<p>Think Big, Be Bold, Drive Change</p>', '2018-12-27 18:38:08', 1, 4, 'pexels-photo-515166.jpeg', 'Launching our learning collective - People. Power. Action.'),
(5, 'Paris and beyond: get involved in building the climate movement', '<p>In a month''s time world leaders will gather in Paris to try to agree a global climate deal that has eluded them for the last 20 years.</p>\r\n<p>We don''t trust them to have people''s interests at heart. And we know any deal they do won''t be strong enough. So, around the world people and communities are taking the lead themselves. Fighting to keep fossil fuels in the ground, organizing community energy projects to power their own future, and showing that a just transition to a carbon free future is possible.</p>\r\n<p>Any Paris protocol won''t be enough to contain climate change on its own, but Paris can be the moment when the climate movement becomes an unstoppable force for the system change we need.</p>\r\n<h4><strong>Here''s how you can get involved:</strong></h4>\r\n<h4><strong>Come to our "Power through Paris" workshop on Monday 2nd November<br /></strong></h4>\r\n<p>On Monday 2&nbsp;<sup>nd&nbsp;</sup>November we will be running a Power through Paris workshop in the&nbsp;<strong><a href="#">Lantern Centre on Synge Street</a>, Dublin from 6 to 9pm.&nbsp;</strong>The workshop is for anyone interested in how movements build energy and how we can build momentum together in the lead up to Paris and, crucially, beyond Paris. It will be facilitated by our Activism Coordinator, Heather Mason and our Education Adviser, Nicola Winters. So join us in the Lantern Centre Synge Street at 6pm on Monday to power up, share your voice, and join the movement for justice!</p>\r\n<h4><a href="#"><strong>Join our People. Power. Action. Collective</strong></a></h4>\r\n<p>Our new People. Power. Action. Collective will meet every Monday evening in Dublin from Monday 9th November until 7th December.&nbsp;<a href="#">More info here.</a> This an opportunity to learn and share new skills and take action as part of the movement for social justice and environmental sustainability. To register email&nbsp;<a href="mailto:heather@foe.ie" target="_blank" rel="noopener">heather@foe.ie</a>. Members of the Collective will be eligible for a subsidized place on the Stop Climate Chaos coach to Paris from 9th to 13th December.</p>\r\n<h4><strong>Attend a talk</strong></h4>\r\n<p>There''s&nbsp;a series of talks in Cloughjordan&nbsp;(I''m speaking next Thursday evening), there''s&nbsp;a series of lunchtime talks in the Unitarian Church&nbsp;in Dublin (Lorna Gold from Tr&oacute;caire is speaking next Thursday). And there''s a good&nbsp;list of all the upcoming climate talks here.</p>\r\n<p><strong>People''s Climate March, Sunday 29th November</strong></p>\r\n<p>The day before the UN talks start in Paris will be the largest climate mobilization in history, with marches planned from Panama to Pretoria to Paris. In Ireland there are events in&nbsp;&nbsp;Dublin,&nbsp;Belfast,&nbsp;Cork&nbsp;and&nbsp;Galway. This is about more than rounding up the usual suspects. This is the moment to ask your family and friends to come with you. They know you have some weird interest in climate change, now is the moment to talk about it in the pub or at the dinner table. We''ll have succeeded if you don''t recognise most people on the march.</p>\r\n<h3><a href="#"><strong>Come to Paris on the 9th December</strong></a></h3>\r\n<p>Stop Climate Chaos is organizing a mobilization to Paris for the end of the UN talks. You''ll leave Dublin by bus on the evening of Wednesday 9th, go overnight by ferry to Cherbourg and get to Paris on Thursday. On Friday there are all sorts of events during the day, culminating in&nbsp;<a href="#">Friends of the Earth International''s "People. Power. Action." event&nbsp;</a>in Place de la Republique. On Saturday, climate activists from around the world will be converging on the Place de la Republique to have the last word and kickstart the next phase of the global movement for climate justice.&nbsp;<strong><a href="#">Book your place here&nbsp;</a>.</strong></p>\r\n<p>Join us. This time we''re not leaving it to our leaders. This time I know our side will win.</p>', '2018-12-27 18:41:15', 1, 3, 'pexels-photo-929382.jpeg', 'Paris and beyond: get involved in building the climate movement'),
(6, 'Join us at Electric Picnic 2016 and help make it green again!', '<p>In 2015 Friends of the Earth brought a team of volunteers to Electric Picnic to help improve the festival''s environmental impact. We&rsquo;re returning to Electric Picnic this year and we want you to help us make it green again!</p>\r\n<p>Friends of the Earth is partnering with the festival to improve recycling and minimise the waste going to landfill. In exchange for supporting Picnickers to bin their waste responsibly we&rsquo;ll provide you with a weekend pass for this&nbsp;<a href="#" target="_blank" rel="noopener">sold-out festival</a>!</p>\r\n<p><strong>Can you help us?</strong><br />We are looking for enthusiastic people who are willing to chat to festival goers about binning their waste responsibly and about Friends of the Earth&rsquo;s work.&nbsp;<strong><a href="#" target="_blank" rel="noopener">Apply here</a></strong>!</p>\r\n<p><strong>Here''s what&rsquo;s involved:</strong></p>\r\n<ul>\r\n<li>You will work as part of a team of Green Messengers to encourage festival goers to separate their waste properly</li>\r\n<li>You will work in pairs throughout the main arena and the campsites</li>\r\n<li>You will volunteer for a total of 24 hours over the weekend</li>\r\n<li>Your weekend pass will entitle you to full access to the festival which you are free to enjoy outside of your shifts</li>\r\n<li>Your pass includes camping in the Eco-campsite</li>\r\n<li>Transport to and from the festival will be provided (departing from Dublin city centre on Thursday afternoon 1st September)</li>\r\n</ul>\r\n<p><strong>Requirements:</strong></p>\r\n<ul>\r\n<li>You must be over 18 to apply</li>\r\n<li>You must be entitled to work Ireland</li>\r\n<li>You must be willing to provide a deposit that will be refunded in full upon completion of your duties</li>\r\n<li>You have to be available to be on site from Thurs 1st &ndash; Sun 4th September</li>\r\n<li>You must be willing to attend an information session in July and a training session in August</li>\r\n</ul>\r\n<p>To apply,&nbsp;<strong><a href="#" target="_blank" rel="noopener">please fill in this form</a></strong>&nbsp;by midnight&nbsp;<strong>Thursday 30th June</strong>. We''ll then be in touch with further information about the application process.</p>\r\n<p>This is a fantastic chance to enjoy great music, meet fellow environmental enthusiasts and of course contribute to a cleaner, greener festival!</p>\r\n<p>We hope you can join us!</p>', '2018-12-27 18:41:15', 1, 1, 'pexels-photo-1076807.jpeg', 'Join us at Electric Picnic 2016 and help make it green again!'),
(7, 'Young FoE stands in solidarity with Home Sweet Home and the occupiers of Apollo House', '<p>Young Friends of the Earth Ireland wish to express their solidarity with Home Sweet Home and the occupiers of Apollo House.<br /><br />YFOE campaigner Sinead Mercier said</p>\r\n<blockquote>\r\n<p>"The fact that Dublin experienced a 35% increase in homelessness in 2016 alone, as GDP rose 26% in 2015, is an appalling indictment of this Government''s passivity.<br />This disgraceful response to the crisis reveals the essential nature of neoliberalism: capitalism for the poor and the planet, and socialism for the rich. The use of NAMA to advance the wealth of finance capital and vulture funds as 7,500 people are homeless this Christmas shows clearly the nature of this Government''s priorities. The state is not withdrawn from the economy but its intervention and tax base is used exclusively for the ends of finance capital that is destroying our social and environmental structures.</p>\r\n<p>YFOE fundamentally rejects an economy that is based on the cushioning of the few at the expense of the many, and at the expense of our planet. We welcome a national movement to better our society and our planet through people power. We all have a right to the city &amp; to a home on earth, our common&nbsp;<a href="#" >#HomeSweetHome</a>."</p>\r\n</blockquote>\r\n<p>YFOE member Louise Fitzgerald, a campaigner from Berlin''s Divestment movement, said</p>\r\n<blockquote>\r\n<p>"The huge crises we now face; societal, environmental, economic all have the same root cause - the failure of the current economic system to fulfil environmental and social needs.The challenges we have to solve seem daunting in scale, and sometimes it can seem that we are powerless to address them. The beauty of Home Sweet Home is that it demonstrates how much power ordinary people have still today to make positive change. Young Friends of the Earth stand in solidarity with Apollo House in building a life sustaining, fair and just alternative to the current system".</p>\r\n</blockquote>\r\n<p>YFOE member Triona Reid, with 7 years employment experience in homelessness services and a volunteer at Apollo House said</p>\r\n<blockquote>\r\n<p>"Home Sweet Home and the overwhelmingly positive response from the general public shows that the Irish people do not share the cruel intentions of this Government but have a innate sense of social justice. Mats on the cold hard floor of a cafeteria or forcing families long-term into hotel rooms, or people on addictions support programmes to sleep in dorm rooms with drug users is not only dangerous, but reprehensible in a wealthy society".</p>\r\n</blockquote>', '2018-12-27 18:43:51', 1, 1, 'pexels-photo-1493374.jpeg', 'Young FoE stands in solidarity with Home Sweet Home and the occupiers of Apollo House'),
(8, 'Our supporters tell us they''re sick of plastic. Here''s how we plan to help!', '<p>Recently, we sent a survey to our supporters asking what they thought we should campaign on in 2018 in addition to our work on climate and energy. We got a huge response and really enjoyed reading all the great suggestions. All three campaigns we proposed got a positive reaction, but the overwhelming majority of our supporters told us they were most sick of plastic. So are we!</p>\r\n<p>The Ellen MacArthur Foundation recently reported that by 2050 there will be more plastic in the oceans than fish. As an island nation, we think Ireland should be leading the charge to stop this. We want 2018 to be the year Ireland stops drowning in plastic, and there&rsquo;s lots that can be done to reduce plastic use and waste, but it&rsquo;s going to take people power.</p>\r\n<p>Our greatest strength at Friends of the Earth is our ability to mobilize Irish people and pressure elected officials to act in the public interest. With help from people like you, we secured Ireland&rsquo;s first climate law in 2015; supported a national fracking ban in 2017; and just this week the Minister confirmed to us that a scheme to support rooftop solar will happen at least as fast as one for bigger commercial developments.</p>\r\n<p>Now, with your support, we want to put our weight behind a campaign to dramatically reduce single-use plastic waste in Ireland. The ideas are already there: a ban or levy on plastic coffee cups, a deposit and return scheme for plastic bottles, and pressing supermarkets to reduce the plastic packaging they force on us. With your support we can help turn those ideas into action.</p>\r\n<p>As a special gift for being one of our first Sick Of Plastic supporters, we&rsquo;ll send you one of our new, limited-edition Friends of the Earth Keep Cups if you <strong><a href="donate/php">pledge &euro;12 a month or more.</a></strong></p>\r\n<p>That&rsquo;s the cost of just one cup of coffee a week.</p>\r\n<p>With over 2 million disposable coffee cups a day being wasted in Ireland right now, we&rsquo;re sure you&rsquo;ll make good use of this stylish cup for years to come.</p>\r\n<p>Get your limited edition Friends of the Earth Keep Cup now.</p>\r\n<p>If you&rsquo;re not in position to make a monthly gift you can still make a one-off donation to help kick-start our Sick Of Plastic campaign. We campaign on a shoestring so whatever you can give will make a real difference.</p>\r\n<p>All the staff at Friends of the Earth wish you a festive holiday season. Let&rsquo;s make 2018 the year we turn the tide on plastic waste.</p>', '2018-12-27 18:43:51', 1, 2, 'pexels-photo-1201588.jpeg', 'Our supporters tell us they''re sick of plastic. Here''s how we plan to help!'),
(9, 'Day of Action on Supermarket Packaging - Top Ten Questions', '<h4>Who are we?</h4>\r\n<p>The Sick of Plastic campaign consists of consumers, citizens, and concerned members of the public who are sick of the rising amount of single-use plastics in Ireland. The campaign is facilitated by&nbsp;<a href="http://bit.ly/VOICEsop" target="_blank" rel="noopener">VOICE Ireland</a>and&nbsp;<a href="index.php">Friends of the Earth</a>.</p>\r\n<h4>What is the Day of Action on Supermarket Packaging?</h4>\r\n<p>On Saturday 21st April, the day before Earth Day, volunteers will be outside local supermarkets across Ireland, encouraging shoppers to leave their unwanted plastic packaging behind at the checkout. #SickOfPlastic #ShopAndDrop</p>\r\n<p>These efforts will be targeted at the large supermarket chains, such as Supervalu, Tesco, Dunnes, Marks and Spencer, Lidl and Aldi.</p>\r\n<p>The Day of Action is being coordinated from the Friends of the Earth office.</p>\r\n<h4>Why are we doing this?</h4>\r\n<p>We are sick of plastic. And sick of having more and more of it dumped on us by retailers who make us responsible for trying to recycle it.</p>\r\n<p>We have reached a tipping point on public rejection of plastic packaging and waste. Shows such as Blue Planet II, EcoEye and The Story of Stuff, and campaigns including Sky News Ocean Rescue and TCD Plastic Free highlight and underscore the adverse impact plastic has on our natural environment, wildlife, and climate. The growth of citizen-led initiatives to reduce plastic shows not only are we sick of plastic, we&rsquo;re going to do something about it. And we&rsquo;re demanding politicians and supermarkets do too.</p>\r\n<h4>What do we want supermarkets to do?</h4>\r\n<ol>\r\n<li>Offer more items without packaging, such as fruit and vegetables (without plastic trays, wrapping and nets) and freash bread.</li>\r\n<li>Ensure their own brand packaging is easily compostable or recyclable and uses less plastic.</li>\r\n<li>Demand, through your own purchasing power, that brands you carry have easily compostable or recyclable packaging, and use less plastic.</li>\r\n<li>Blaze a trail in Ireland by implementing a plastic free aisle, as has been done in the Netherlands.</li>\r\n<li>Set up systems whereby consumers can buy items in bulk, to reduce packaging, like in the Dublin Food Coop.</li>\r\n<li>Follow in the footsteps of Fallon and Byrne and set up a system whereby customers can use their own containers to buy dried goods, buying only what they need.</li>\r\n</ol>\r\n<h4>What do we want members of the public to do?</h4>\r\n<p>You can be a local organizer, a volunteer or just take part on the day.</p>\r\n<p>On 21st April we are asking people to &ldquo;Shop and Drop&rdquo; - shop as normal in your local supermarket and then take off the excess plastic packaging at the checkout and leave it with the cashier.</p>\r\n<p>We&rsquo;ll have postcards you can sign and hand in backing the 6 demands above.</p>\r\n<p>We&rsquo;re also looking for local organizers and volunteers to help out on the day. Local organizers will promote the day locally and liaise with local supermarkets. Volunteers will hand out postcards and talk to shoppers outside supermarkets on the day.</p>\r\n<p><strong><a href="#" target="_blank" rel="noopener">Fill out this form to get information on being a local organizer or volunteer.</a></strong></p>\r\n<p>If you just want to be keep informed about taking part on the day, sign up for updates by&nbsp;<a href="#">adding your name to the Sick Of Plastic petition</a>.</p>\r\n<p><strong>What is the problem with single-use plastics?</strong></p>\r\n<p>Anybody who buys groceries in supermarkets is regularly inundated with plastic packaging. We do not need or want this amount of plastic &ndash; only a few decades ago we got by without this material, a material that is produced primarily by the input of fossil fuels such as oil and gas.</p>\r\n<p>A huge problem with this rise in plastic packaging is that much of this plastic is not even recyclable! The consumer is required to figure out where to dispose of such packaging and also has to pay for its disposal when it is not recyclable.</p>\r\n<p>People are growing more and more concerned that plastic, which is used for such a short time, takes hundreds of years to decompose. This is causing terrible damage to the oceans, devastating wildlife, and sullying our communities.</p>\r\n<p>It is clear that the tide of plastic isn&rsquo;t ebbing &ndash; it&rsquo;s rising. We see large chain supermarkets as part of this problem. Our problem is not with the manager or the cashiers within the supermarket, rather it is with corporate management, manufacturers and processors who make product and packaging decisions and have control over purchasing decisions.</p>\r\n<p><strong>When will it take place?</strong></p>\r\n<p>The Day of Action will take place on Saturday the 21st of April.</p>\r\n<p><strong>Where will it take place?</strong></p>\r\n<p>The Day of Action will be a nation-wide campaign, taking place in local supermarkets across the country. The supermarkets we hope to reach include Supervalu, Tesco, Dunnes, Marks and Spencer, Lidl, and Aldi.</p>\r\n<p><strong>What else is the Campaign doing?</strong></p>\r\n<p>As well as supermarkets reduce the amount of plastic packaging they use, we want to see:</p>\r\n<ul>\r\n<li>A deposit and return scheme on plastic bottles and cans.</li>\r\n<li>A levy on single-use plastic items, like take-away cups.</li>\r\n<li>A ban on micro-plastics in cosmetics and care products.</li>\r\n</ul>\r\n<p>Over 3,000 people have signed&nbsp;<a href="#">our petition</a>&nbsp;on these goals. And just under 15,000 people have backed a petition for a deposit and return scheme, which was&nbsp;<a href="#">presented to the Oireachtas Committee on the Environment in January</a>, as they began considering the Waste Reduction Bill.</p>\r\n<p>The Bill would introduce a deposit/refund scheme for drinks containers to motivate people to return their plastic bottles and aluminium cans to reclaim their deposit. Incentives like these will reduce the amount of litter strewn around our countryside, streams, and beaches.</p>\r\n<p>It would also ban or tax disposable plastic plates, cups, and other tableware, (including one of the most notoriously inefficient single-use items, plastic coffee cups). Coffee shops and supermarkets would be encouraged to offer compostable packaging.</p>\r\n<p>Additionally, we encourage shops to offer discounts to patrons who bring their own reusable containers and coffee cups - as part of&nbsp;<a href="singlepost.php?page=blog&amp;id=1">the Conscious Cup Campaign</a>.</p>\r\n<p>The campaign also supports a ban microplastics. Minister Denis Naughten has promised the Government will bring forward a Microplastics Bill to be passed by the Dail before the end of the year.</p>\r\n<p>Do support the campaign and get updates,&nbsp;<a href="#">sign the online petition</a>.</p>', '2018-12-27 18:43:51', 1, 2, 'pexels-photo-802221.jpeg', 'Day of Action on Supermarket Packaging - Top Ten Questions');

-- --------------------------------------------------------

--
-- Table structure for table `take_action`
--

CREATE TABLE `take_action` (
  `ID` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` text NOT NULL,
  `postBy` int(11) NOT NULL,
  `thumbnail` varchar(50) DEFAULT 'default-ta-image.jpeg',
  `alt` varchar(100) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `take_action`
--

INSERT INTO `take_action` (`ID`, `title`, `post`, `postBy`, `thumbnail`, `alt`, `Date`, `intro`) VALUES
(1, 'Leo, let there be light!', '<p>Please sign this petition to urge the Government not to exclude small-scale rooftop solar from new plans to support renewable electricity.</p>\r\n<p>As solar panel tecnolology improves and costs fall we want to see Ireland unlock its solar power potential.</p>\r\n<p>As a first step we&rsquo;re demanding the Government guarantee a fair payment for solar electricity, so people get paid for the excess energy they generate with panels on the roofs of their homes, farm buildings, schools, clubs and community halls.&nbsp;</p>\r\n<p>Leo Varadkar signed this petition at Electric Picnic last year. But the new draft plan for renewable electricity doesn''t include support for small-scale rooftop solar - it''s all about big business.</p>\r\n<p>A new bill to force electricity companies to pay small scale generators for their excess power passed the second stage of the Dail last month, and will be debated by the Oireachtas Committee on Communications, Climate Action and the Environment early in 2019.&nbsp;</p>', 1, 'pexels-photo-929382_1100x500.jpeg', 'Leo, let there be light!', '2018-12-31 01:03:20', 'Please sign this petition to urge the Government include a fair payment for small-scale renewable energy. Leo Varadkar signed this petition at Electric Picnic last year. But the new draft plan for renewable electricity doesn''t include support for small-scale rooftop solar - it''s all about big business.'),
(2, 'Climate Action Now', '<p>Last Monday a UN scientific panel published&nbsp;<a href="#">an alarming report on on climate change</a>. The impacts are worse than we thought and to prevent complete climate chaos we essentially have to halve our pollution by 2030 and reduce it to zero by 2050.</p>\r\n<p>On Tuesday, the Government introduced Budget 2019, dropping plans for an increase in the carbon tax announced by the Taoiseach, and effectively "<a href="#">giving two fingers to the Paris Agreement</a>" and everyone who is threatened by climate change.</p>\r\n<p>It was a staggering failure of political leadership that put us all at risk of devastating climate impacts.</p>\r\n<h3>But we''re not going down without a fight.</h3>\r\n<h3>What you can do:</h3>\r\n<h4>1. Ring your TD on 01-6183000</h4>\r\n<p>Call 01-6183000 and ask for the office of one of your local TDs. Leave a message to say you are shocked, alarmed and that you want to see climate action now.<br />(<a href="#">use this map to figure out who your TDs are</a>).</p>\r\n<h4><a href="#">2. Email all your local TDs</a></h4>\r\n<p>You can use this link to send an email to all the TDs in your constituency. We haven''t written a preset message for you. Use your own words, it can be as short as you like. Tell them why you want climate action now. You might be worried about your children or grandchildren. Or you own future! Tell your TDs what it is that makes you angry, sad or worried about climate change.</p>\r\n<h4><a href="#">3. Come to the D&aacute;il on Tuesday lunchtime</a></h4>\r\n<p>Three activist groups have organized an impromptu demonstration on Tuesday 15th between 12.30 and 2pm to show TDs that people care about climate change. Friends of the Earth and Stop Climate Chaos are supporting the demo organized by the Dublin Eco-Feminist Collective, Not Here Not Anywhere, and Young Friends of the Earth.</p>\r\n<p>If you are in striking distance of Dublin 2, join us.&nbsp;<strong>If not, call your TD,</strong>&nbsp;that will have a real impact too - let''s make sure they all get dozens of phonecalls.</p>\r\n<p>The biggest take-away from the UN report is that every fraction of a degree of climate change matters. And we don''t know which fraction is the difference between climate damage and climate catastrophe. So every thing we do matters and every decision government makes now matters. We are almost out of time, and the Government is absolutely out of excuses.</p>\r\n<p>Please make sure they hear from you tomorrow.</p>\r\n<p>All our tomorrows depend on it.</p>\r\n<p>Oisin Coghlan<br />Friends of the Earth</p>\r\n<p><strong>P.S. This is the moment to ask to your family and friends to take action too.</strong>If you''re like me you''re too polite in most social situations to bring up climate change. Today is the day we push through that awkwardness for the sake of our futures:</p>\r\n<ol>\r\n<li><strong>Send this email to the people you care about, cos they need to care about climate change.</strong></li>\r\n<li>Agree with a couple of friends that you''ll call your TDs and compare notes.</li>\r\n<li>Grab a friend and bring them with you to the demo.</li>\r\n</ol>', 1, 'pexels-photo-459728_1100x500.jpeg', 'Climate Action Now', '2018-12-31 01:03:20', 'Tell you TDs why climate change matters to you. The UN has published an alarming scientific report and the very next day our Government did nothing on climate change in Budget 2019. Tell them why you''re upset, angry, worried or hopeful.'),
(3, 'I''m sick of plastic and I want to see action', '<p>We are all sick of plastic.&nbsp;</p>\r\n<p>Everyday in Ireland we use more than 500,000 plastic-lined coffee cups that can''t be recycled, more than 2 million plastic bottles that don''t get recycled, and supermarkets foist more and more packaging on us. Meanwhile, micro-plastics are making the fish we eat sick, and if we keep going the way we are, plastic waste will outweigh fish in the oceans by 2050.</p>\r\n<p>But there are solutions.</p>\r\n<h4>What politicians can do</h4>\r\n<p>A D&aacute;il Committee has backed a Waste Reduction Bill that contains the measures we are calling for.</p>\r\n<p>The Bill (draft law) would introduce a deposit on plastic bottles, which would be refunded when you bring the bottle back for recycling. In countries where they have a scheme like this recycling rates are as high as 98%. We had a deposit and refund scheme for glass bottles in the past. It''s time to do it for plastic.</p>\r\n<h4>Denis Naughten is threatening to torpedo the Bill</h4>\r\n<p>We know producers and retailers are lobbying hard *against* a deposit and return scheme because they say it would be inconvenient or too expensive. Independent research shows the scheme would cost about 1c per bottle. We need to show that people really want to see action on plastic and don''t want supermarkets and big business dragging their heels.</p>\r\n<p>The Bill would also ban or introduce a levy on single-use plastic items like plastic-lined take-away cups. A 15c "latte levy" as it has been described would encourage more and more people to bring their own cup to the coffee shop, like the Friends of the Earth KeepCup. Many coffee shops have joined the Conscious Cup Campaign and offer customers a discount, double loyalty points, or like coffee angel do, make a donation to Friends of the Earth every time someone brings a reusable cup.</p>\r\n<p>The Government has promised a separate ban on micro-plastics before the end of the 2018 but they have been slow to bring forward legislation to progress the opposition Bill that is waiting for a D&aacute;il Committee to make time to consider it.</p>\r\n<h4>What Irish supermarkets can do</h4>\r\n<p>We''ve written to the ceos of big supermarket chains asking them to take these Six Steps:</p>\r\n<ol>\r\n<li>Offer more items without packaging, such as fruit and vegetables (without plastic trays, wrapping and nets).</li>\r\n<li>Make their own-brand packaging easily compostable or recyclable, and use less plastic.</li>\r\n<li>Demand, through their purchasing power, that other brands they carry have easily compostable or recyclable packaging, and use less plastic.</li>\r\n<li>Blaze a trail in Ireland by implementing a plastic free aisle, as has been done in the Netherlands.</li>\r\n<li>Provide items in bulk, where possible, to reduce packaging.</li>\r\n<li>Allow shoppers use their own containers to buy dried goods, buying only what they need.</li>\r\n</ol>', 1, 'pexels-photo-802221_1100x500.jpeg', 'I''m sick of plastic and I want to see action', '2018-12-31 01:17:08', 'Tell the new Climate Minister to support Waste Reduction Bill!'),
(4, 'No to Shannon LNG', '<p>In 2008 a company called Shannon LNG was granted planning permission to build a terminal on the Shannon estuary in northern Kerry, to import liquefied natural gas (LNG). The terminal hasn''t been built, but now the company is looking to get an extension of the planning permission.&nbsp;An Bord Plean&aacute;la are considering whether this constitutes a material change to the original permission.</p>\r\n<p>So much has changed since 2008:</p>\r\n<ul>\r\n<li>In 2012, the&nbsp;<a href="#">International Energy Agency concluded</a>&nbsp;"No more than one-third of proven reserves of fossil fuels can be consumed prior to 2050 if the world is to achieve the 2&deg;C goal" for limiting climate change.</li>\r\n<li>In 2013&nbsp;<a href="#">the IPCC published</a>&nbsp;their latest assessment of climate science and estimated that we had used over half the "global carbon budget" if we want to avoid&nbsp;2&deg;C of global warming, and the entire budget will be exhausted in less than 30 years (5 years ago) if we continue to burn fossil fuels at current rates.</li>\r\n<li>In 2015 the Oireachtas passed the Climate Action law to underpin Government policy of reducing Irish carbon dioxide emissions by 80% by 2050. Moreover, the Energy White Paper adopted by Government shortly afterwards set a target for the energy sector of cutting emissions by 80-95% by 2050.</li>\r\n<li>Also in 2015, 196 countries agreed&nbsp;<a href="#">the Paris Climate Accord</a>&nbsp;with the aim of "Holding the increase in the global average temperature to well below 2&deg;C above pre-industrial levels and pursuing efforts to limit the temperature increase to 1.5&deg;C above pre-industrial levels".&nbsp;</li>\r\n<li>In 2017,&nbsp;<a href="#">the Tyndall Centre in Manchester University and Teeside University published a study</a>&nbsp;which found "Current levels of emissions will use up the EU&rsquo;s 2&deg;C carbon budget in under nine years", "Liquefied Natural Gas (LNG) transport increases the climate change impact of natural gas supply chains" and crucially "within two decades fossil fuel use, including gas, must have all but ceased, with complete decarbonisation following soon after."</li>\r\n<li>And in 2017, Ireland banned hydraulic fracturing - fracking - for the exploration and extraction of oil and gas onshore in Ireland.</li>\r\n</ul>\r\n<p>Building LNG terminals that last 30 years makes no economic or environmental sense for Ireland, when we have to leave 2/3 of known fossil fuels in the ground and stop burning gas altogether within two decades. There is a high risk the terminals would become stranded assets, white elephants, monuments to the folly of the late fossil age.</p>\r\n<p>Building LNG terminals to import fracked gas makes no moral sense when we banned fracking - just last year - because the public and our parliament decided the potentially devastating impacts on communities'' water, health and tourism and farming were two high a price to pay. Surely we don''t now want to import fracked gas from communities from the US and elsewhere struggling to cope with those same impacts.</p>\r\n<p>We urge An Bord Plean&aacute;la to refuse an extension to the planning permission as importing LNG is clearly no longer a sustainable option for Ireland.</p>\r\n<p>We urge the Government to reverse it''s short-sighted support for building LNG terminals and locking us into fossil fuel dependence, just when opportunities to invest in saving energy and ramping up community-centred renewables are opening up.</p>\r\n<p><em>*If you sign this petition we will include your name on a list endorsing this explanatory text as a submission to An Bord Pleanala.&nbsp;</em></p>', 1, 'pexels-photo-221012_1100x500.jpeg', 'No to Shannon LNG', '2018-12-31 01:17:08', 'We oppose the building of terminals to import fracked gas, lock us into fossil fuel dependence, and blow our chances of containing climate change.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `date`) VALUES
(1, 'uche', 'sewa', '2018-12-20 14:01:19'),
(2, 'jimmy', 'sewa', '2019-01-04 15:21:05'),
(3, 'gemma', 'sewa', '2019-01-04 15:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blogBy` (`postedBy`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `cat_blog`
--
ALTER TABLE `cat_blog`
  ADD PRIMARY KEY (`catID`,`blogID`),
  ADD KEY `blogID` (`blogID`);

--
-- Indexes for table `cat_news`
--
ALTER TABLE `cat_news`
  ADD PRIMARY KEY (`catID`,`newsID`),
  ADD KEY `newsID` (`newsID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post` (`post`),
  ADD KEY `news` (`news`);

--
-- Indexes for table `donate_record`
--
ALTER TABLE `donate_record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `newsBy` (`postedBy`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `take_action`
--
ALTER TABLE `take_action`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `postBy` (`postBy`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donate_record`
--
ALTER TABLE `donate_record`
  MODIFY `record_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `take_action`
--
ALTER TABLE `take_action`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`postedBy`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`catID`);

--
-- Constraints for table `cat_blog`
--
ALTER TABLE `cat_blog`
  ADD CONSTRAINT `cat_blog_ibfk_2` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`),
  ADD CONSTRAINT `cat_blog_ibfk_3` FOREIGN KEY (`blogID`) REFERENCES `blog` (`ID`);

--
-- Constraints for table `cat_news`
--
ALTER TABLE `cat_news`
  ADD CONSTRAINT `cat_news_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`),
  ADD CONSTRAINT `cat_news_ibfk_2` FOREIGN KEY (`newsID`) REFERENCES `news` (`ID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news`) REFERENCES `news` (`ID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post`) REFERENCES `blog` (`ID`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catID`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`postedBy`) REFERENCES `users` (`ID`);

--
-- Constraints for table `take_action`
--
ALTER TABLE `take_action`
  ADD CONSTRAINT `take_action_ibfk_1` FOREIGN KEY (`postBy`) REFERENCES `users` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
