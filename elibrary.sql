-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2026 at 12:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminEmail`, `adminPass`) VALUES
(1, 'hadeel', 'hadeel@gmail.com', '12345'),
(4, 'mohammad', 'mohammad@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `bookTitle` varchar(200) NOT NULL,
  `authorName` varchar(200) NOT NULL,
  `bookCat` varchar(100) NOT NULL,
  `bookCover` varchar(200) NOT NULL,
  `book` varchar(200) NOT NULL,
  `bookContent` varchar(1000) NOT NULL,
  `bookDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookTitle`, `authorName`, `bookCat`, `bookCover`, `book`, `bookContent`, `bookDate`) VALUES
(2, 'Chalmers Education Brochure', 'unknown', 'CHEMISTRY', '487_chalmers-education-brochure.jpg', '893_chalmers-education-brochure.jpg', 'Chalmers University of Technology in Gothenburg conducts research and education in technology and natural sciences at a high international level.\r\n\r\nWith scientific excellence as a basis, Chalmers promotes knowledge and technical solutions for a sustainable world. Through global commitment and entrepreneurship, we foster an innovative spirit, in close collaboration with wider society.\r\n\r\nChalmers was founded in 1829 and has the same motto today as it did then: Avancez – forward.', '2022-08-12'),
(3, 'Quantum Mechanics and Spectroscopy I', 'J. E. Parker ', 'CHEMISTRY', '298_chemistry-quantum-mechanics-and-spectroscopy.jpg', '10_chemistry-quantum-mechanics-and-spectroscopy.pdf', 'The book covers the physical-chemistry aspects of quantum mechanics and spectroscopy in years 1–3 of a typical university degree in chemistry, chemical-physics, chemical engineering, biology or biochemistry. The lectures, tutorials and laboratory experiments I developed and gave on quantum mechanics and spectroscopy to our first, second and third year chemistry students over many years at the Chemistry Department, Heriot-Watt University, Edinburgh, Scotland have formed the basis for book. The feedback from students was an important part of this process. The book is also a useful reference source for graduates in their later professional careers. The book has a companion text which has tutorial and workshop questions with full and complete solutions including considerable extra background material that clarifies the solutions.\r\n\r\n', '2022-08-12'),
(4, 'Essential Engineering Mathematics', ' Michael Batty ', 'ARTS', '186_essential-engineering-mathematics.jpg', '537_essential-engineering-mathematics.pdf', 'This textbook covers topics such as functions, single variable calculus, multivariate calculus, differential equations and complex functions. The necessary linear algebra for multivariate calculus is also outlined. More advanced topics which have been omitted, but which you will certainly come across, are partial differential equations, Fourier transforms and Laplace transforms.\r\n\r\n', '2022-08-12'),
(5, 'Exercises in Statistical Inference', 'Robert Jonsson ', 'MATHEMATICS', '516_exercises-in-statistical-inference.jpg', '333_exercises-in-statistical-inference.pdf', 'Statistical inference is a process of drawing general conclusions from data in a specific sample. Typical inferential problems are: Does alternative A give higher return than alternative B? Is drug A more effective than drug B? In both cases solutions are based on observations in a single sample.\r\nTo solve inferential problems one has to deal with the problems: (i) How to find the best estimate of an unknown quantity, (ii) How to find an interval that covers the true unknown value and (iii) How to test hypothesis about the value of an unknown quantity. The treatment of these issues can be found in a large amount of statistical textbooks. The present book differs from the latter since it focuses on problem solving and only a minimum of the theory needed is presented.\r\n\r\n\r\n', '2022-08-12'),
(6, 'Fisheries and aquaculture economics', 'Ola Flaaten ', 'BUSINESS & ECONOMICS', '719_fisheries-and-aquaculture-economics.jpg', '64_fisheries-and-aquaculture-economics.pdf', 'This book discusses the economic and biological forces and consequences of wild fish harvesting, for both open access and sustainable management.\r\n', '2022-08-12'),
(7, 'From Chaos to Consciousness', 'Mike Corwin ', 'ASTRONOMY', '276_from-chaos-to-consciousness.jpg', '374_from-chaos-to-consciousness.pdf', 'From Chaos to Consciousness” is a textbook intended for a one-semester course in Astronomy. As the title implies, it is the story of human evolution in the cosmic sense of the word.\r\n', '2022-08-12'),
(8, 'Fundamentals of Hydrogen Safety Engineering II', 'y Vladimir Molkov ', 'CHEMISTRY', '815_fundamentals-of-hydrogen-safety-engineering-i.jpg', '585_fundamentals-of-hydrogen-safety-engineering-i.pdf', 'The first part of this book is available in \"Fundamentals of Hydrogen Safety Engineering, I. This is the first state-of-the-art book on hydrogen safety engineering.\r\n', '2022-08-12'),
(9, 'Introduction to Astronomy', 'Dr. Karina Kjær ', 'ASTRONOMY', '454_introduction-to-astronomy.jpg', '27_introduction-to-astronomy.pdf', 'This book provides a comprehensive tour of astronomy at an introductory level. Observational facts are balanced against the physics behind, where discussions are kept at a fundamental level.\r\n', '2022-08-12'),
(10, 'Introductory Chemistry', 'Edward W. Pitzer ', 'CHEMISTRY', '327_introductory-chemistry.jpg', '656_introductory-chemistry.pdf', 'The textbook is designed to introduce chemistry to students who will take only one chemistry course in their academic career.\r\n', '2022-08-12'),
(11, 'Language across the Curriculum', 'Manmohan Joshi ', 'LANGUAGES', '506_language-across-the-curriculum.jpg', '850_language-across-the-curriculum.pdf', 'The problem of using a common language as medium of instruction in schools and colleges has been a matter of concern in various countries. When students come together in a particular class/educational institution, they are all not from the same linguistic background. This makes the task of content-area subject teachers difficult to cope with. This book is an attempt to suggest strategies as to how they can not only cope with the problem but also help the students overcome it. It will be quite useful to both practising teachers and teacher trainees.\r\n\r\n', '2022-08-12'),
(12, 'Learn English', 'Manmohan Joshi', 'LANGUAGES', '520_learn-english-ahead-with-grammar.jpg', '98_language-across-the-curriculum.pdf', 'English is the most widely used language in almost all countries. Yet a lot of people – students and working people alike – lack in the understanding of grammatical concepts which are essential for error-free and acceptable form of the language. The explanations and exercises provided in this book will equip the learners – native as well as non-native speakers of the language – the basic understanding of English Language and will enable them to acquire skills necessary for the specific purpose of comprehending text and responding suitably using grammatically correct language.\r\n\r\n', '2022-08-12'),
(13, 'Mathematics Fundamentals\n', 'Dr Ramzan Nazim Khan Dr Des Hill ', 'MATHEMATICS', '931_mathematics-fundamentals.jpg', '373_mathematics-fundamentals.pdf', 'This book is an introduction to basic mathematics and is intended for students who need to reach the minimum level of mathematics required for their sciences, engineering and business studies. It begins by reviewing mathematical ideas usually encountered in early high school, such as fractions, algebra and solving equations. We then build on that base by introducing simultaneous equations, powers, exponentials and logarithms; quadratic equations; functions and their graphs. We finish with a brief introduction to calculus.\r\n\r\n', '2022-08-12'),
(14, 'Motivation for Education and Training', 'Elitsa Petrova ', 'TEACHING', '93_motivation-for-education-and-training.jpg', '939_motivation-for-education-and-training.pdf', 'The research objective of the work is to analyse motivational salience and satisfaction in security and defence training, based on the example of higher education institutions in Europe. It further provides guidance on how to formulate a methodology for conducting research on motivation for learning and activity and its relation to the satisfaction of the learners. On this basis, the book formulates recommendations for improvement of the motivational salience in an academic environment.\r\n\r\n', '2022-08-12'),
(15, 'Policing Cyber Crime', 'Petter Gottschalk ', 'COMPUTERS', '266_policing-cyber-crime.jpg', '735_policing-cyber-crime.pdf', 'Computer crime is an overwhelming problem worldwide. It has brought an array of new crime activities and actors and, consequently, a series of new challenges in the fight against this new threat (Picard, 2009). Policing computer crime is a knowledge-intensive challenge because of the innovative aspect of many kinds of computer crime.\r\n\r\n', '2022-08-12'),
(16, 'Statistics for Business and Economics', 'Marcelo Fernandes ', 'BUSINESS & ECONOMICS', '698_statistics-for-business-and-economics.jpg', '84_statistics-for-business-and-economics.pdf', 'Statistics for Business and Economics is a straightforward and detailed introduction to the concepts and theory which appear in most undergraduate or MBA courses in this field. The text complements such well-referenced textbooks as D.K. Hildebrand and R.L. Ott’s “Basic Statistical Ideas for Managers,” and “The Practice of Business Statistics: Using Data for Decisions,” by D.S. Moore et al. It is available as a free e-book and can be downloaded here.\r\n\r\n', '2022-08-12'),
(17, 'The Evolution of Modern Science', 'Thomas L. Isenhour ', 'EARTH SCIENCES', '339_the-evolution-of-modern-science.jpg', '397_the-evolution-of-modern-science.pdf', 'The Evolution of Modern Science outlines the story of science from Aristotle to the present. The first third progresses from the ancient Greeks to the developments of the Renaissance that prepared the way for the Scientific Revolution. The second covers the Scientific Revolution and Enlightenment and the final third is devoted to the 19th, 20th, and 21st centuries.\r\n\r\n', '2022-08-12'),
(18, 'Understanding Computer Simulation', 'Roger McHaney ', 'COMPUTERS', '407_understanding.jpg', '499_understanding.pdf', 'This book describes computer simulation concepts then provides basic details about using discrete-event computer simulation for decision making. Input data collection and analysis, model construction, project mechanics, output analysis, verification, validation, reporting, logic transfer, and robust experimental design are all covered in detail. Example models are provided and illustrated using the GPSS simulation language, spreadsheet tools, and other products available on the Web. Statistical analysis is covered, with considerations for using simulation in business and project settings.\r\n\r\n', '2022-08-12'),
(19, 'Water Resource Management', 'Walter Lükenga ', 'EARTH SCIENCES', '577_water-resource-management.jpg', '759_water-resource-management.pdf', 'At the beginning of the twenty-first century, the Earth is facing a serious water crisis. The sector is plagued by a chronic lack of political support, poor governance and underinvestment. Hundreds of millions of people remain trapped in poverty and ill health and exposed to the risk of water-related disasters, environmental degradation and even political instability and conflict. This is especially the case in sub-Saharan Africa, a region on which this text is mainly focused.\r\n\r\n', '2022-08-12'),
(20, 'Daylighting Natural Light in Architecture', 'Henry Jensen Frandsen ', 'ARTS', '945_Daylighting Natural Light in Architecture (Derek Phillips) (z-lib.org).jpg', '78_Daylighting Natural Light in Architecture (Derek Phillips) (z-lib.org).pdf', 'This book was specifically written to inspire sales people. It can be used as a motivational tool to encourage and raise the level of sales personnel. It is a stimulating and thought-provoking manuscript. You can read a chapter of this book as a highlight before finishing off a sales meeting. The idea is to read a chapter and then conduct a question and answer session encouraging the sales team to debate the moral of the story.\r\n\r\n', '2022-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDate`) VALUES
(1, 'BUSINESS & ECONOMICS', '2022-08-12'),
(2, 'CHEMISTRY', '2022-08-12'),
(3, 'COMPUTERS', '2022-08-12'),
(4, 'EARTH SCIENCES', '2022-08-12'),
(5, 'HISTORY', '2022-08-12'),
(6, 'LANGUAGES', '2022-08-12'),
(7, 'TEACHING', '2022-08-12'),
(8, 'ASTRONOMY', '2022-08-12'),
(9, 'ARTS', '2022-08-12'),
(10, 'MATHEMATICS', '2022-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'hadeel', 'hadeel@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'hadeel', 'harousan@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'hadeel', 'ex@gmail.com', 'e9510081ac30ffa83f10b68cde1cac07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
