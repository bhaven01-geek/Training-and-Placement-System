-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `fdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `story` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `title`, `fdate`, `story`) VALUES
(1, 'Ronald Patrick', 'JP morgan Interview Experience', '2021-03-25 06:34:00', 'GEP Worldwide Aptitude and Interview\r\n1) Aptitude Test:\r\nThere were about 4 sections for the aptitude test:\r\n• 1st section was a mix of technical mcq’s based on web technology mostly on CSS, Javascript, JQuery, HTML and also some basic mcq questions on OOPS, C#, .Net Framework.\r\n• 2nd section was completely based on SQL. Included questions like what would be the output of this query, what is wrong in the given query, how would you modify the query to obtain the desired output.\r\n• 3rd section was based on quantitative aptitude, logical reasoning for which you can refer Indiabix, R.S Agarwal.\r\n• 4th section was coding round which had 2 coding questions with complexity from simple to moderate. (Mostly on the simpler side)\r\nThe aptitude test was approximately around 2-3 hours, with around 20 questions in each section.\r\n2) Technical Interview Round 1(Team Lead):\r\nThe first technical interview was with a team lead. Before this interview begins and you are called in for it, the interviewer already has the results of your aptitude and looks through it to know where your strengths and weaknesses lie. Types of questions asked:\r\n➢ Starts with the typical ‘Tell me about yourself’. Questions based on your resume.\r\n➢ The next question depends on what you have put on your resume and the answers to your aptitude test. The interviewer can ask you questions on your project, Internships, technical events that you have participated and listed in your resume. After this question the next set of questions asked will purely depend on the reply that you choose to give to these questions. This is the point where you can take charge of the direction you want the interview to go in.\r\n➢ Simple coding problems. The most asked questions during our time was on string manipulation.\r\n➢ Logical Puzzles\r\n3) Technical Interview Round 2(Manager):\r\nThe second technical round is just like the first one and has more or less the same pattern of questions, however this time you will be facing an interviewer who is working at a managerial level.\r\n➢ The first question again will be an introductory question with you telling something about yourself.\r\n➢ Again there will be questions based on your resume, your BE project and projects you have worked on.\r\n➢ This round may have some scenario based questions too based on your internships and projects, to know how you work in a group, your contribution. How will you use OOPS concepts in given scenarios.\r\n➢ Easy level coding question\r\n➢ Puzzle\r\n4) HR Interview:\r\nDue to time constraints and all rounds being conducted on one day, our batch didn’t have an HR round. However, this round could be a part of your process so prepare the general HR questions like\r\n➢ Tell me something about yourself\r\n➢ Where do you see yourself in the next 5 years\r\n➢ What are your strengths and weaknesses\r\nHowever as per our experience, while hiring for the role of Associate Software Engineers, GEP gives a lot more priority to the technical skills than the skills tested in this round. However, having said that no round should be taken lightly and be yourself and confident in every round.\r\nSome Personal tips and tricks:\r\nSome personal tips,tricks suggestions that we would like to give you’ll based on our experience.\r\n1) Anish Allapattu\r\nThe second question the interviewer asked me in the tech round 1 was on my projects. This is where I believe I won the confidence of the interviewer. I presented my project that I deployed on Heroku live. What I learnt and believe you should keep in mind:\r\n➢ You can drive the direction you want your interview to go in.\r\n➢ Try deploying your project on Heroku and show it live.\r\n➢ It’s good to have some basic knowledge of cloud, API, Web Requests.\r\n➢ Be calm and relaxed, just reply to every question with all you know don’t answer if you don’t know, there is no bad in that.\r\n2) Glenice Dsa\r\n➢ Be aware of your resume and draft it with a lot of thinking. Most of the questions you will be facing during the interview will be based on what you have written on your resume and it should only have points that represent your strengths.\r\n➢ Get your basics of OOPS concepts clear, most of the questions will be just on the basics.\r\n➢ Be confident in what you say.\r\n3) Jaydeep Ranoliya\r\n➢ As per what I observed that they are more concerned of the technical knowledge you have.\r\n➢ They can ask you scenario based questions eg. They asked me about what would I do if there was any problem with the app that we launched during my internship when it was already live. Although I didn’t know much about how logging can be implemented, but I knew it could help to find out the problem, so I spoke in those lines. Be clear to them of what you know and what you feel can help in the scenario.\r\n➢ Be confident and calm.\r\n4) Marilyn Pulinthitta\r\n➢ What I observed is that the best interviews are just conversations that you have with the interviewer. After the first introductory question, I was asked about all my projects and then I was asked if I made any project based purely on SQL or DB based since I had fared the best there in my aptitude test. I spoke to him about the basic DBMS project I made in the second year. From making the ER diagram for it, to finding the flaws correcting them was all the questions asked during the course of my interview.\r\n➢ Focus on the basics and go through basic coding and puzzles.\r\n➢ Always be confident , if you know things say it and if you don’t just say you don’t know it.\r\n➢ Expect 90% of the questions to come from your resume itself, so know your resume.\r\n➢ The complexity of questions asked will be purely based on the type of answers you choose to give. So keep it simple and things where you know a lot about you can speak confidently.\r\nWe have been through this phase and believe us it’s not at all intimidating. Just be sure of all you say, be confident. At the end of the day all they need is individuals who are willing to learn and they know that none of you can know it all at this stage. Just be confident and yourself.\r\nALL THE BEST!'),
(9, 'Bhaven', 'Microsoft Interview Experience', '2021-03-27 11:18:44', 'Microsoft, being a large MNC, hires for multitude of positions, hence a generic answer that caters to all positions would be very difficult. Having said that, I recently cleared my rounds at Msft for a Pan-India fairly Senior role which is a Techno-Commercial role cutting through Microsoft Azure and specifically speaking - the realm of Artificial Intelligence (AI), received a very good offer, and currently waiting to join Msft within a few days.\r\n\r\nMy background: I have 11+ years of total work experience, across programming in C, Visual Basic, PHP, Python; generic Linux Kernel programming in C since I was 16; have around 20+ certifications across Microsoft, AWS, IBM, Oracle OCI Architect and finally generic Linux, programming etc. Currently, working on Cloud technologies and AI since past few years in the role of Solutions Architect, Engineer and Pre-Sales, so my role cuts through deep solutioning knowledge yet having customer facing ability and propose complex solutions on Cloud specifically.'),
(10, 'Meet Parmar', 'Android Development Interview', '2021-04-12 14:39:09', 'Android Interview Questions have been designed specially to get you acquainted with the nature of questions you may encounter during your interview for the subject of Android. As per my experience good interviewers hardly plan to ask any particular question during your interview, normally questions start with some basic concept of the subject and later they continue based on further discussion and what you answer −\r\n\r\nWhat is Android?\r\nDescribe Android application Architecture?\r\nWhat is An Activity?\r\nWhat is the APK format?\r\nWhat is An Intent?\r\nWhat is an explicit Intent?\r\nWhat is an implicit Intent?\r\nWhat is An android manifest file?\r\nWhat language does android support to develop an application?\r\nWhat do ADT stands for?\r\nWhat are the tools are placed in An Android SDK?\r\nWhat is viewGroup in android?\r\nWhat is a service in android?\r\nWhat is a content provider in android?\r\nWhat are the notifications available in android?\r\nWhat is container in android?\r\nWhat is ADB in android?\r\nWhat is ANR in android?\r\nWhat is an Adapter in android?\r\nWhat is shared preferences in android?\r\nWhat are the key components in android architecture?\r\nWhat does the intent filter do in android?\r\nWhere layouts are placed in android?\r\nWhat is nine-patch images tool in android?\r\nHow many dialog boxes do support in android?\r\nWhat are the exceptions available in android?\r\nWhat is the order of dialog-box in android?\r\nWhat are the different storages available in android?\r\nWhat is a Sticky Intent in android?\r\nHow to Translate in Android?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
