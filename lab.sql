-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2024 at 07:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `image` text NOT NULL,
  `image_alt_tag` text NOT NULL,
  `description` text NOT NULL,
  `blog_url` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_desc` text NOT NULL,
  `tags` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_description`, `image`, `image_alt_tag`, `description`, `blog_url`, `meta_title`, `meta_desc`, `tags`, `createdAt`, `status`) VALUES
(1, 'Recognizing the need is the primary condition for design', 'Lorem ipsum simply dummy printing text industry...', '954039834_demo-business-blog-01.jpg', 'Recognizing the need is the primary condition for design', '<p><a href=\"http://localhost/lab/demo-business-blog-single-modern.html\">Recognizing the need is the primary condition for design</a></p>\r\n\r\n<p>Lorem ipsum simply dummy printing text industry...</p>', 'ASGRAF', 'Recognizing the need is the primary condition for design', 'Lorem ipsum simply dummy printing text industry...', 'KSJD SKADFJK SKJDFK', '2024-10-02 10:41:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `image` text NOT NULL,
  `image_alt_tag` text NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_desc` text NOT NULL,
  `tags` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short_description`, `image`, `image_alt_tag`, `description`, `url`, `meta_title`, `meta_desc`, `tags`, `status`) VALUES
(2, 'Electrocardiogram (ECG)', 'Alpha Diagnostics offers reliable ECG services in Govind Puri and Kalkaji to monitor the electrical activity of your heart.', '970137743_ecg.png', 'Electrocardiogram (ECG)', '<p><br />\r\nAlpha Diagnostics offers reliable ECG services in Govindpuri and Kalkaji to monitor the electrical activity of your heart. An ECG is a quick and painless test used to detect heart conditions such as arrhythmias, blockages, or previous heart attacks. It is often recommended for patients experiencing symptoms like chest pain or palpitations, as well as those undergoing routine cardiac evaluations.</p>\r\n\r\n<p>Our modern ECG machines provide highly accurate readings, ensuring that our technicians and doctors can diagnose heart conditions effectively. At Alpha Diagnostics, we prioritize your cardiac health by offering same-day ECG results to aid in the timely detection and treatment of heart issues.</p>\r\n\r\n<p>FAQs<br />\r\n1. How does an ECG work?<br />\r\nElectrodes are placed on your chest, arms, and legs to record your heart&rsquo;s electrical activity. This data is then analyzed to detect irregular heart rhythms or other heart-related issues.</p>\r\n\r\n<p>2. How long does an ECG take?<br />\r\nThe ECG test typically takes about 10 minutes, with results available on the same day.</p>\r\n\r\n<p>3. Do I need an appointment for an ECG?<br />\r\nWhile walk-ins are accepted, scheduling an appointment in Govindpuri/Kalkaji ensures you won&rsquo;t&nbsp;have&nbsp;to&nbsp;wait.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://localhost/lab/contact.php\"><input name=\"Book  Test\" type=\"button\" value=\"Book Test\" /></a></p>', 'ecg', 'Electrocardiogram (ECG) Test | Accurate Heart Monitoring | Alpha Diagnostics', '', '', 1),
(3, 'Computerized Lab Tests', 'Our lab is equipped with state-of-the-art automated machines that help deliver quick, accurate, and reliable results.', '943480521_computerised lab.png', 'Computerized Lab Tests', '<p>Computerized Lab Tests<br />\r\nAt Alpha Diagnostics, located in Govindpuri and Kalkaji, we provide cutting-edge computerized laboratory tests to ensure the highest level of precision and accuracy in diagnosing a wide range of health conditions. Our lab is equipped with state-of-the-art automated machines that help deliver quick, accurate, and reliable results. From routine tests like CBC and cholesterol checks to more specialized diagnostics, our computerized systems reduce human error and deliver precise results.</p>\r\n\r\n<p>Our lab services include tests for conditions such as diabetes, thyroid disorders, liver and kidney diseases, and much more. With advanced technology and strict quality control, we ensure that your health is monitored efficiently, offering rapid turnaround times on all tests. Alpha Diagnostics is dedicated to providing accurate results that help your healthcare provider make informed decisions about your treatment.</p>\r\n\r\n<p>FAQs<br />\r\n1. What is a computerized lab test?<br />\r\nA computerized lab test uses advanced automation to process and analyze blood, urine, or other samples with high accuracy and minimal human error.</p>\r\n\r\n<p>2. How long will it take to get my results?<br />\r\nMost lab results are available within 24 hours. Some specialized tests may take longer depending on the nature of the test.</p>\r\n\r\n<p>3. Can I schedule my lab test in advance?<br />\r\nYes, you can schedule your lab tests by calling us or booking online. Walk-ins are also welcome at both our Govindpuri and Kalkaji&nbsp;locations.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://localhost/lab/contact.php\"><input name=\"Book Test\" type=\"button\" value=\"Book Test\" /></a></p>', 'Computerized-Lab-Tests', 'Computerized Lab Tests | Advanced Diagnostic Services | Alpha Diagnostics', '', '', 1),
(4, 'Urine Tests', 'Our lab offers comprehensive urine tests, including routine urinalysis, and specialized tests for detecting specific.', '571355314_urine.png', 'Urine Tests', '<p>Urine Tests<br />\r\nUrine testing at Alpha Diagnostics, in Govindpuri and Kalkaji, is a valuable tool for diagnosing conditions like kidney disease, urinary tract infections, and metabolic disorders. Our lab offers comprehensive urine tests, including routine urinalysis, urine cultures, and specialized tests for detecting specific substances like proteins, sugars, or ketones.</p>\r\n\r\n<p>These tests help detect infections, monitor chronic conditions, and assess overall health. We ensure accurate results through advanced laboratory techniques and provide quick turnaround times for all types of urine tests.</p>\r\n\r\n<p>FAQs<br />\r\n1. How is a urine test conducted?<br />\r\nYou&rsquo;ll be asked to provide a sample of your urine, which will be analyzed in our lab for substances like proteins, sugars, or cells to detect abnormalities.</p>\r\n\r\n<p>2. Do I need to prepare for a urine test?<br />\r\nNo special preparation is usually required, but for specific tests, we may provide further instructions.</p>\r\n\r\n<p>3. How long will it take to receive my urine test results?<br />\r\nMost results are available within 24 hours. Specialized tests may&nbsp;take&nbsp;longer.</p>', 'Urine-Tests', 'Urine Tests | Accurate Urinalysis Services | Alpha Diagnostics', '', '', 1),
(5, 'Blood Tests', 'Blood tests are essential in diagnosing and monitoring a variety of health conditions.', '282294032_blood.png', 'Blood Tests', '<p>Blood tests are essential in diagnosing and monitoring a variety of health conditions. At Alpha Diagnostics, located in Govindpuri/Kalkaji, we offer a comprehensive range of blood tests, from basic screenings like Complete Blood Count (CBC) to more specialized tests such as thyroid, liver, and hormone panels. These tests help in early detection of diseases like diabetes, infections, and cardiovascular disorders.</p>\r\n\r\n<p>Our laboratory is equipped with the latest technology, allowing us to provide fast and accurate results. Whether you&#39;re undergoing routine testing or specialized screenings, Alpha Diagnostics ensures the highest standards of quality in blood sample analysis.</p>\r\n\r\n<p>FAQs<br />\r\n1. Do I need to fast before a blood test?<br />\r\nSome tests, such as lipid profiles and glucose tests, require fasting for 8-12 hours. Our staff will inform you if fasting is needed for your specific test.</p>\r\n\r\n<p>2. How soon will I receive my blood test results?<br />\r\nMost blood test results are available within 24 hours, depending on the complexity of the test.</p>\r\n\r\n<p>3. How do I prepare for a blood test?<br />\r\nGenerally, there is no special preparation for blood tests, unless fasting is required. Our team will guide you on any necessary&nbsp;steps.</p>', 'Blood-Tests', 'Blood Tests | Accurate & Comprehensive Testing | Alpha Diagnostics', '', '', 1),
(6, 'Stool Tests', 'Alpha Diagnostics offers comprehensive stool testing services in Govindpur', '354400712_stool.png', 'Stool Tests', '<p>Stool Tests<br />\r\nAlpha Diagnostics offers comprehensive stool testing services in Govindpuri and Kalkaji to help diagnose gastrointestinal issues, infections, and digestive disorders. Stool tests can identify parasites, bacteria, and other pathogens that cause gastrointestinal symptoms like diarrhea, abdominal pain, or unexplained weight loss.</p>\r\n\r\n<p>Our lab performs various stool tests, including fecal occult blood tests, stool cultures, and tests for infections or parasites. These tests are crucial for identifying conditions like inflammatory bowel disease (IBD), infections, or colorectal cancer.</p>\r\n\r\n<p>FAQs<br />\r\n1. How is a stool test conducted?<br />\r\nYou&rsquo;ll be required to provide a stool sample, which will be analyzed for bacteria, blood, or parasites that could indicate digestive or gastrointestinal issues.</p>\r\n\r\n<p>2. Do I need to prepare for a stool test?<br />\r\nMinimal preparation is needed, but you may be asked to avoid certain foods or medications before the test. Our team will provide specific instructions if necessary.</p>\r\n\r\n<p>3. When will I receive the results of my stool test?<br />\r\nMost stool test results are available within 2-3 days, although some tests may take longer.</p>\r\n\r\n<p>Sputum Tests<br />\r\nAlpha Diagnostics in Govindpuri/Kalkaji provides expert sputum testing services to diagnose respiratory conditions like tuberculosis, pneumonia, and bronchitis. By analyzing mucus from your lungs, we can identify bacterial, viral, or fungal infections that affect your respiratory&nbsp;system.</p>', 'Stool-Tests', 'Stool Tests | Reliable Digestive Health Diagnostics | Alpha Diagnostics', '', '', 1),
(7, 'X-Ray Services', 'At Alpha Diagnostics, we offer high-quality X-ray services at our facilities in Govindpuri/Kalkaji.', '689595945_xray.png', 'X-Ray Services', '<p>X-Ray Services<br />\r\nAt Alpha Diagnostics, we offer high-quality X-ray services at our facilities in Govindpuri/Kalkaji. X-rays are essential for diagnosing fractures, bone disorders, and internal organ conditions. Our digital X-ray machines provide clear and detailed images that help doctors accurately diagnose conditions like broken bones, dislocations, and lung conditions.</p>\r\n\r\n<p>With fast, non-invasive procedures, our X-ray services are designed for patient comfort and quick diagnosis. Whether you&rsquo;re coming in for an injury or a routine check-up, Alpha Diagnostics ensures safe and efficient imaging services.</p>\r\n\r\n<p>FAQs<br />\r\n1. What should I expect during an X-ray?<br />\r\nDuring an X-ray, you&rsquo;ll be asked to position the affected body part for imaging. The process is quick, painless, and usually takes just a few minutes.</p>\r\n\r\n<p>2. Are X-rays safe?<br />\r\nYes, modern digital X-rays are very safe, with minimal radiation exposure. We take all necessary precautions to ensure your safety during the procedure.</p>\r\n\r\n<p>3. How long does it take to receive X-ray results?<br />\r\nX-ray results are usually available the same day, allowing your doctor to review the findings&nbsp;promptly.</p>', 'X-Ray-Services', 'X-Ray Services | Accurate Imaging Diagnostics | Alpha Diagnostics', '', '', 1),
(8, 'Sputum Tests', 'By analyzing mucus from your lungs, we can identify bacterial, viral, or fungal infections that', '174381210_sputam.png', 'Sputum Tests', '<p>Sputum Tests<br />\r\nAlpha Diagnostics in Govindpuri/Kalkaji provides expert sputum testing services to diagnose respiratory conditions like tuberculosis, pneumonia, and bronchitis. By analyzing mucus from your lungs, we can identify bacterial, viral, or fungal infections that affect your respiratory system.</p>\r\n\r\n<p>Sputum tests are vital in diagnosing lung infections and monitoring chronic respiratory conditions. Our lab conducts in-depth analyses to ensure accurate and timely results that help your doctor prescribe the most effective treatment.</p>\r\n\r\n<p>FAQs<br />\r\n1. What is a sputum test used for?<br />\r\nA sputum test analyzes mucus from your lungs to detect infections like tuberculosis, pneumonia, and other respiratory conditions.</p>\r\n\r\n<p>2. How is a sputum sample collected?<br />\r\nYou will be asked to cough deeply to provide a sample of mucus, which is then analyzed for pathogens.</p>\r\n\r\n<p>3. How long does it take to receive the results of a sputum test?<br />\r\nTypically, sputum test results are available within 2-3 days, depending on the analysis&nbsp;required.</p>', 'Sputum-Tests', 'Sputum Tests | Reliable Respiratory Health Diagnostics | Alpha Diagnostics', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
