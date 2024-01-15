-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2024 at 04:38 PM
-- Server version: 10.11.6-MariaDB-1
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalprojecthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(1, 'Rohit Bhure', 'rohitbhure.cse@gmail.com', '6812f136d636e737248d365016f8cfd5139e387c', '2002-07-18', '8839178090');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `description`) VALUES
(1, 'Computer Science', 'Welcome to a world of limitless possibilities in our Computer Science project categories!'),
(2, 'Machine Learning', 'where algorithms meet ambition, and every line of code paves the way to a smarter, data-driven future!'),
(3, 'App Development', 'where every block is a step towards a secure and transparent tomorrow.'),
(4, 'Web Development\r\n', 'where creativity meets coding, and your vision transforms into a stunning digital reality!');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_ID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `keyword` longtext NOT NULL,
  `slug` longtext NOT NULL,
  `author` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) DEFAULT 'carousel.svg',
  `image_1` varchar(300) DEFAULT 'carousel.svg',
  `image_2` varchar(300) DEFAULT 'carousel.svg',
  `image_3` varchar(300) DEFAULT 'carousel.svg',
  `image_4` varchar(300) DEFAULT 'carousel.svg',
  `video` varchar(300) DEFAULT NULL,
  `price` varchar(20) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `code_file` varchar(300) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ratingvalue` text NOT NULL,
  `ratingcount` text NOT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `title`, `description`, `keyword`, `slug`, `author`, `content`, `image`, `image_1`, `image_2`, `image_3`, `image_4`, `video`, `price`, `category_id`, `code_file`, `date`, `ratingvalue`, `ratingcount`, `views`) VALUES
(1, 'Stock Market Prediction Project Using Machine Learning ', 'I have created a stock market prediction project in Python. In this project, you can find out about both types of stocks, NSE & BSE, whether the price of that stock will increase or decrease in the future.', 'Stock Market Prediction Using Machine Learning project, Stock Market Prediction Using Machine Learning Project Code, Stock Market Prediction Using Python Source Code, stock, Machine Learning Project, Machine Learning', 'stock-market-prediction-project-using-machine-learning', 1, '    <p>\r\n      I have created a <a href=\"http://www.nseindia.com/\" target=\"_blank\">stock</a> market prediction project in Python. In this\r\n      project, you can find out about both types of stocks, NSE & BSE, whether\r\n      the price of that stock will increase or decrease in the future. This\r\n      prediction is based on the past Historical data/records. It is true to some extent, but it\r\n      is absolutely true or should I say that you can make money using it, it is\r\n      not at all true!\r\n    </p>\r\n    <p>\r\n      This project calculates the moving average of the last 100 days and 200\r\n      days and also draws a line on the chart with the close till now so that we\r\n      can get the prediction whether the market will go up or down.\r\n    </p>\r\n    <p>\r\n      In this project, LSTM MODEL has been used, which means (long short term\r\n      memory) with the help of which we can study large data.\r\n    </p>\r\n\r\n    <h2>Purpose of the Project</h2>\r\n    <p>\r\n      The main purpose of making this project is to give predictions to the\r\n      people who invest in stocks so that they can take better decisions. This\r\n      project will help you in decision making whether you should buy stock or\r\n      not. You can reduce the risk to some extent by doing this.\r\n    </p>\r\n\r\n    <h2>An Improvement over Existing Systems</h2>\r\n    <p>\r\n      Old systems provide CLI-based (Command Line Interface) systems which non-technical users face\r\n      difficulty in understanding. In this project, we are providing you GUI\r\n      user interface (Graphical User Interface).\r\n    </p>\r\n\r\n    <h2>Technology Used:</h2>\r\n    <ul>\r\n      <li>Python</li>\r\n      <li>TensorFlow</li>\r\n      <li>yfinance</li>\r\n      <li>Scikit-Learn</li>\r\n      <li>pandas</li>\r\n      <li>Matplotlib</li>\r\n      <li>Jupyter Notebooks</li>\r\n      <li>streamlit</li>\r\n    </ul>\r\n\r\n    <h2>Software Requirements</h2>\r\n\r\n    <ul>\r\n      <li>\r\n        <strong>PYTHON:</strong> For implementing machine learning algorithms\r\n        and making UI using Streamlit Python library\r\n      </li>\r\n      <li><strong>Big Data Frameworks:</strong> yfinance</li>\r\n      <li><strong>Code editor:</strong> VS Code</li>\r\n    </ul>\r\n\r\n    <h2>Hardware Requirements</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Processor:</strong> Intel Core 2 Duo (i3 Recommended or higher\r\n        than this)\r\n      </li>\r\n      <li><strong>Ram:</strong> 2GB (4GB recommended or higher than this)</li>\r\n      <li>\r\n        <strong>Graphics Card:</strong> I GPU 2GB (1GB Dedicated GPU Recommended\r\n        or higher than this)\r\n      </li>\r\n      <li><strong>Internet:</strong> 1 Mbps (10+ Mbps recommended)</li>\r\n      <li><strong>Storage:</strong> 150GB HDD (SSD Recommended)</li>\r\n    </ul>\r\n\r\n    <h2>Supported Operating System</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Windows:</strong> You can run this project in Windows operating\r\n        system, for this you will have to install python in your Windows system,\r\n        then you can use it in your Windows operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Linux:</strong> You can easily run this project in your Linux\r\n        operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Mac Os:</strong> You can easily run this project in your Mac\r\n        operating system.\r\n      </li>\r\n    </ul>\r\n    pip install Python TensorFlow yfinance scikit-learn pandas matplotlib\r\n    jupyter streamlit\r\n    <h2>Getting Started:</h2>\r\n    <p>1. install TenserFlow</p>\r\n    <pre><code>pip install --upgrade pip</code></pre>\r\n    <p>Then, install TensorFlow with pip.</p>\r\n    <pre><code># For GPU users\r\npip install tensorflow[and-cuda]\r\n# For CPU users\r\npip install tensorflow\r\n</code></pre>\r\n    <p>2. install yfinance</p>\r\n    <pre><code>pip install finance</code></pre>\r\n    <p>3. install scikit-learn</p>\r\n    <pre><code>pip install scikit-learn</code></pre>\r\n    <p>4. install pandas</p>\r\n    <pre><code>pip install pandas</code></pre>\r\n    <p>5. install matplotlib</p>\r\n    <pre><code>pip install matplotlib</code></pre>\r\n    <p>6. install jupyter</p>\r\n    <pre><code>pip install jupyter</code></pre>\r\n    <p>7. install streamlit</p>\r\n    <pre><code>pip install streamlit</code></pre>\r\n    <p>8. Download project file and unzip then Go to the project directory</p>\r\n    <pre><code>cd stock-market-prediction</code></pre>\r\n    <p>9. Start the server</p>\r\n    <pre><code>streamlit run stock_market_prediction.py</code></pre>', 'stock-market-prediction-using-machine-learning.jpg', 'stock-market-prediction-using-machine-learning_1.png', 'stock-market-prediction-using-machine-learning_2.png', 'stock-market-prediction-using-machine-learning_3.png', 'stock-market-prediction-using-machine-learning_4.png', 'r3WRDap_f4M', '100', 2, 'Machine Learning/stock-market-prediction-using-machine-learning.zip', '2024-01-10 20:07:39', '4', '473', 24),
(119, 'Stock Market Prediction Project Using Machine Learning ', 'I have created a stock market prediction project in Python. In this project, you can find out about both types of stocks, NSE & BSE, whether the price of that stock will increase or decrease in the future.', 'Stock Market Prediction Using Machine Learning project, Stock Market Prediction Using Machine Learning Project Code, Stock Market Prediction Using Python Source Code, stock, Machine Learning Project, Machine Learning', 'stock-market-prediction-project-using-machine-learning', 1, '    <p>\r\n      I have created a <a href=\"http://www.nseindia.com/\" target=\"_blank\">stock</a> market prediction project in Python. In this\r\n      project, you can find out about both types of stocks, NSE & BSE, whether\r\n      the price of that stock will increase or decrease in the future. This\r\n      prediction is based on the past Historical data/records. It is true to some extent, but it\r\n      is absolutely true or should I say that you can make money using it, it is\r\n      not at all true!\r\n    </p>\r\n    <p>\r\n      This project calculates the moving average of the last 100 days and 200\r\n      days and also draws a line on the chart with the close till now so that we\r\n      can get the prediction whether the market will go up or down.\r\n    </p>\r\n    <p>\r\n      In this project, LSTM MODEL has been used, which means (long short term\r\n      memory) with the help of which we can study large data.\r\n    </p>\r\n\r\n    <h2>Purpose of the Project</h2>\r\n    <p>\r\n      The main purpose of making this project is to give predictions to the\r\n      people who invest in stocks so that they can take better decisions. This\r\n      project will help you in decision making whether you should buy stock or\r\n      not. You can reduce the risk to some extent by doing this.\r\n    </p>\r\n\r\n    <h2>An Improvement over Existing Systems</h2>\r\n    <p>\r\n      Old systems provide CLI-based (Command Line Interface) systems which non-technical users face\r\n      difficulty in understanding. In this project, we are providing you GUI\r\n      user interface (Graphical User Interface).\r\n    </p>\r\n\r\n    <h2>Technology Used:</h2>\r\n    <ul>\r\n      <li>Python</li>\r\n      <li>TensorFlow</li>\r\n      <li>yfinance</li>\r\n      <li>Scikit-Learn</li>\r\n      <li>pandas</li>\r\n      <li>Matplotlib</li>\r\n      <li>Jupyter Notebooks</li>\r\n      <li>streamlit</li>\r\n    </ul>\r\n\r\n    <h2>Software Requirements</h2>\r\n\r\n    <ul>\r\n      <li>\r\n        <strong>PYTHON:</strong> For implementing machine learning algorithms\r\n        and making UI using Streamlit Python library\r\n      </li>\r\n      <li><strong>Big Data Frameworks:</strong> yfinance</li>\r\n      <li><strong>Code editor:</strong> VS Code</li>\r\n    </ul>\r\n\r\n    <h2>Hardware Requirements</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Processor:</strong> Intel Core 2 Duo (i3 Recommended or higher\r\n        than this)\r\n      </li>\r\n      <li><strong>Ram:</strong> 2GB (4GB recommended or higher than this)</li>\r\n      <li>\r\n        <strong>Graphics Card:</strong> I GPU 2GB (1GB Dedicated GPU Recommended\r\n        or higher than this)\r\n      </li>\r\n      <li><strong>Internet:</strong> 1 Mbps (10+ Mbps recommended)</li>\r\n      <li><strong>Storage:</strong> 150GB HDD (SSD Recommended)</li>\r\n    </ul>\r\n\r\n    <h2>Supported Operating System</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Windows:</strong> You can run this project in Windows operating\r\n        system, for this you will have to install python in your Windows system,\r\n        then you can use it in your Windows operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Linux:</strong> You can easily run this project in your Linux\r\n        operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Mac Os:</strong> You can easily run this project in your Mac\r\n        operating system.\r\n      </li>\r\n    </ul>\r\n    pip install Python TensorFlow yfinance scikit-learn pandas matplotlib\r\n    jupyter streamlit\r\n    <h2>Getting Started:</h2>\r\n    <p>1. install TenserFlow</p>\r\n    <pre><code>pip install --upgrade pip</code></pre>\r\n    <p>Then, install TensorFlow with pip.</p>\r\n    <pre><code># For GPU users\r\npip install tensorflow[and-cuda]\r\n# For CPU users\r\npip install tensorflow\r\n</code></pre>\r\n    <p>2. install yfinance</p>\r\n    <pre><code>pip install finance</code></pre>\r\n    <p>3. install scikit-learn</p>\r\n    <pre><code>pip install scikit-learn</code></pre>\r\n    <p>4. install pandas</p>\r\n    <pre><code>pip install pandas</code></pre>\r\n    <p>5. install matplotlib</p>\r\n    <pre><code>pip install matplotlib</code></pre>\r\n    <p>6. install jupyter</p>\r\n    <pre><code>pip install jupyter</code></pre>\r\n    <p>7. install streamlit</p>\r\n    <pre><code>pip install streamlit</code></pre>\r\n    <p>8. Download project file and unzip then Go to the project directory</p>\r\n    <pre><code>cd stock-market-prediction</code></pre>\r\n    <p>9. Start the server</p>\r\n    <pre><code>streamlit run stock_market_prediction.py</code></pre>', 'stock-market-prediction-using-machine-learning.jpg', 'stock-market-prediction-using-machine-learning_1.png', 'stock-market-prediction-using-machine-learning_2.png', 'stock-market-prediction-using-machine-learning_3.png', 'stock-market-prediction-using-machine-learning_4.png', 'r3WRDap_f4M', '100', 2, 'Machine Learning/stock-market-prediction-using-machine-learning.zip', '2024-01-10 20:07:39', '4', '473', 24),
(120, 'Stock Market Prediction Project Using Machine Learning ', 'I have created a stock market prediction project in Python. In this project, you can find out about both types of stocks, NSE & BSE, whether the price of that stock will increase or decrease in the future.', 'Stock Market Prediction Using Machine Learning project, Stock Market Prediction Using Machine Learning Project Code, Stock Market Prediction Using Python Source Code, stock, Machine Learning Project, Machine Learning', 'stock-market-prediction-project-using-machine-learning', 1, '    <p>\r\n      I have created a <a href=\"http://www.nseindia.com/\" target=\"_blank\">stock</a> market prediction project in Python. In this\r\n      project, you can find out about both types of stocks, NSE & BSE, whether\r\n      the price of that stock will increase or decrease in the future. This\r\n      prediction is based on the past Historical data/records. It is true to some extent, but it\r\n      is absolutely true or should I say that you can make money using it, it is\r\n      not at all true!\r\n    </p>\r\n    <p>\r\n      This project calculates the moving average of the last 100 days and 200\r\n      days and also draws a line on the chart with the close till now so that we\r\n      can get the prediction whether the market will go up or down.\r\n    </p>\r\n    <p>\r\n      In this project, LSTM MODEL has been used, which means (long short term\r\n      memory) with the help of which we can study large data.\r\n    </p>\r\n\r\n    <h2>Purpose of the Project</h2>\r\n    <p>\r\n      The main purpose of making this project is to give predictions to the\r\n      people who invest in stocks so that they can take better decisions. This\r\n      project will help you in decision making whether you should buy stock or\r\n      not. You can reduce the risk to some extent by doing this.\r\n    </p>\r\n\r\n    <h2>An Improvement over Existing Systems</h2>\r\n    <p>\r\n      Old systems provide CLI-based (Command Line Interface) systems which non-technical users face\r\n      difficulty in understanding. In this project, we are providing you GUI\r\n      user interface (Graphical User Interface).\r\n    </p>\r\n\r\n    <h2>Technology Used:</h2>\r\n    <ul>\r\n      <li>Python</li>\r\n      <li>TensorFlow</li>\r\n      <li>yfinance</li>\r\n      <li>Scikit-Learn</li>\r\n      <li>pandas</li>\r\n      <li>Matplotlib</li>\r\n      <li>Jupyter Notebooks</li>\r\n      <li>streamlit</li>\r\n    </ul>\r\n\r\n    <h2>Software Requirements</h2>\r\n\r\n    <ul>\r\n      <li>\r\n        <strong>PYTHON:</strong> For implementing machine learning algorithms\r\n        and making UI using Streamlit Python library\r\n      </li>\r\n      <li><strong>Big Data Frameworks:</strong> yfinance</li>\r\n      <li><strong>Code editor:</strong> VS Code</li>\r\n    </ul>\r\n\r\n    <h2>Hardware Requirements</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Processor:</strong> Intel Core 2 Duo (i3 Recommended or higher\r\n        than this)\r\n      </li>\r\n      <li><strong>Ram:</strong> 2GB (4GB recommended or higher than this)</li>\r\n      <li>\r\n        <strong>Graphics Card:</strong> I GPU 2GB (1GB Dedicated GPU Recommended\r\n        or higher than this)\r\n      </li>\r\n      <li><strong>Internet:</strong> 1 Mbps (10+ Mbps recommended)</li>\r\n      <li><strong>Storage:</strong> 150GB HDD (SSD Recommended)</li>\r\n    </ul>\r\n\r\n    <h2>Supported Operating System</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Windows:</strong> You can run this project in Windows operating\r\n        system, for this you will have to install python in your Windows system,\r\n        then you can use it in your Windows operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Linux:</strong> You can easily run this project in your Linux\r\n        operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Mac Os:</strong> You can easily run this project in your Mac\r\n        operating system.\r\n      </li>\r\n    </ul>\r\n    pip install Python TensorFlow yfinance scikit-learn pandas matplotlib\r\n    jupyter streamlit\r\n    <h2>Getting Started:</h2>\r\n    <p>1. install TenserFlow</p>\r\n    <pre><code>pip install --upgrade pip</code></pre>\r\n    <p>Then, install TensorFlow with pip.</p>\r\n    <pre><code># For GPU users\r\npip install tensorflow[and-cuda]\r\n# For CPU users\r\npip install tensorflow\r\n</code></pre>\r\n    <p>2. install yfinance</p>\r\n    <pre><code>pip install finance</code></pre>\r\n    <p>3. install scikit-learn</p>\r\n    <pre><code>pip install scikit-learn</code></pre>\r\n    <p>4. install pandas</p>\r\n    <pre><code>pip install pandas</code></pre>\r\n    <p>5. install matplotlib</p>\r\n    <pre><code>pip install matplotlib</code></pre>\r\n    <p>6. install jupyter</p>\r\n    <pre><code>pip install jupyter</code></pre>\r\n    <p>7. install streamlit</p>\r\n    <pre><code>pip install streamlit</code></pre>\r\n    <p>8. Download project file and unzip then Go to the project directory</p>\r\n    <pre><code>cd stock-market-prediction</code></pre>\r\n    <p>9. Start the server</p>\r\n    <pre><code>streamlit run stock_market_prediction.py</code></pre>', 'stock-market-prediction-using-machine-learning.jpg', 'stock-market-prediction-using-machine-learning_1.png', 'stock-market-prediction-using-machine-learning_2.png', 'stock-market-prediction-using-machine-learning_3.png', 'stock-market-prediction-using-machine-learning_4.png', 'r3WRDap_f4M', '100', 2, 'Machine Learning/stock-market-prediction-using-machine-learning.zip', '2024-01-10 20:07:39', '4', '473', 24),
(121, 'Stock Market Prediction Project Using Machine Learning ', 'I have created a stock market prediction project in Python. In this project, you can find out about both types of stocks, NSE & BSE, whether the price of that stock will increase or decrease in the future.', 'Stock Market Prediction Using Machine Learning project, Stock Market Prediction Using Machine Learning Project Code, Stock Market Prediction Using Python Source Code, stock, Machine Learning Project, Machine Learning', 'stock-market-prediction-project-using-machine-learning', 1, '    <p>\r\n      I have created a <a href=\"http://www.nseindia.com/\" target=\"_blank\">stock</a> market prediction project in Python. In this\r\n      project, you can find out about both types of stocks, NSE & BSE, whether\r\n      the price of that stock will increase or decrease in the future. This\r\n      prediction is based on the past Historical data/records. It is true to some extent, but it\r\n      is absolutely true or should I say that you can make money using it, it is\r\n      not at all true!\r\n    </p>\r\n    <p>\r\n      This project calculates the moving average of the last 100 days and 200\r\n      days and also draws a line on the chart with the close till now so that we\r\n      can get the prediction whether the market will go up or down.\r\n    </p>\r\n    <p>\r\n      In this project, LSTM MODEL has been used, which means (long short term\r\n      memory) with the help of which we can study large data.\r\n    </p>\r\n\r\n    <h2>Purpose of the Project</h2>\r\n    <p>\r\n      The main purpose of making this project is to give predictions to the\r\n      people who invest in stocks so that they can take better decisions. This\r\n      project will help you in decision making whether you should buy stock or\r\n      not. You can reduce the risk to some extent by doing this.\r\n    </p>\r\n\r\n    <h2>An Improvement over Existing Systems</h2>\r\n    <p>\r\n      Old systems provide CLI-based (Command Line Interface) systems which non-technical users face\r\n      difficulty in understanding. In this project, we are providing you GUI\r\n      user interface (Graphical User Interface).\r\n    </p>\r\n\r\n    <h2>Technology Used:</h2>\r\n    <ul>\r\n      <li>Python</li>\r\n      <li>TensorFlow</li>\r\n      <li>yfinance</li>\r\n      <li>Scikit-Learn</li>\r\n      <li>pandas</li>\r\n      <li>Matplotlib</li>\r\n      <li>Jupyter Notebooks</li>\r\n      <li>streamlit</li>\r\n    </ul>\r\n\r\n    <h2>Software Requirements</h2>\r\n\r\n    <ul>\r\n      <li>\r\n        <strong>PYTHON:</strong> For implementing machine learning algorithms\r\n        and making UI using Streamlit Python library\r\n      </li>\r\n      <li><strong>Big Data Frameworks:</strong> yfinance</li>\r\n      <li><strong>Code editor:</strong> VS Code</li>\r\n    </ul>\r\n\r\n    <h2>Hardware Requirements</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Processor:</strong> Intel Core 2 Duo (i3 Recommended or higher\r\n        than this)\r\n      </li>\r\n      <li><strong>Ram:</strong> 2GB (4GB recommended or higher than this)</li>\r\n      <li>\r\n        <strong>Graphics Card:</strong> I GPU 2GB (1GB Dedicated GPU Recommended\r\n        or higher than this)\r\n      </li>\r\n      <li><strong>Internet:</strong> 1 Mbps (10+ Mbps recommended)</li>\r\n      <li><strong>Storage:</strong> 150GB HDD (SSD Recommended)</li>\r\n    </ul>\r\n\r\n    <h2>Supported Operating System</h2>\r\n    <ul>\r\n      <li>\r\n        <strong>Windows:</strong> You can run this project in Windows operating\r\n        system, for this you will have to install python in your Windows system,\r\n        then you can use it in your Windows operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Linux:</strong> You can easily run this project in your Linux\r\n        operating system.\r\n      </li>\r\n      <li>\r\n        <strong>Mac Os:</strong> You can easily run this project in your Mac\r\n        operating system.\r\n      </li>\r\n    </ul>\r\n    pip install Python TensorFlow yfinance scikit-learn pandas matplotlib\r\n    jupyter streamlit\r\n    <h2>Getting Started:</h2>\r\n    <p>1. install TenserFlow</p>\r\n    <pre><code>pip install --upgrade pip</code></pre>\r\n    <p>Then, install TensorFlow with pip.</p>\r\n    <pre><code># For GPU users\r\npip install tensorflow[and-cuda]\r\n# For CPU users\r\npip install tensorflow\r\n</code></pre>\r\n    <p>2. install yfinance</p>\r\n    <pre><code>pip install finance</code></pre>\r\n    <p>3. install scikit-learn</p>\r\n    <pre><code>pip install scikit-learn</code></pre>\r\n    <p>4. install pandas</p>\r\n    <pre><code>pip install pandas</code></pre>\r\n    <p>5. install matplotlib</p>\r\n    <pre><code>pip install matplotlib</code></pre>\r\n    <p>6. install jupyter</p>\r\n    <pre><code>pip install jupyter</code></pre>\r\n    <p>7. install streamlit</p>\r\n    <pre><code>pip install streamlit</code></pre>\r\n    <p>8. Download project file and unzip then Go to the project directory</p>\r\n    <pre><code>cd stock-market-prediction</code></pre>\r\n    <p>9. Start the server</p>\r\n    <pre><code>streamlit run stock_market_prediction.py</code></pre>', 'stock-market-prediction-using-machine-learning.jpg', 'stock-market-prediction-using-machine-learning_1.png', 'stock-market-prediction-using-machine-learning_2.png', 'stock-market-prediction-using-machine-learning_3.png', 'stock-market-prediction-using-machine-learning_4.png', 'r3WRDap_f4M', '100', 2, 'Machine Learning/stock-market-prediction-using-machine-learning.zip', '2024-01-10 20:07:39', '4', '473', 24);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionId` varchar(300) NOT NULL,
  `orderId` longtext DEFAULT NULL,
  `name` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `phone` longtext DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `success` tinyint(1) DEFAULT NULL,
  `code` longtext DEFAULT NULL,
  `tmessage` longtext DEFAULT NULL,
  `merchantId` longtext DEFAULT NULL,
  `amount` longtext DEFAULT NULL,
  `tstate` longtext DEFAULT NULL,
  `responsecode` longtext DEFAULT NULL,
  `ttype` longtext DEFAULT NULL,
  `utrId` longtext DEFAULT NULL,
  `cardtype` longtext DEFAULT NULL,
  `pgTransactionId` longtext DEFAULT NULL,
  `pgAuthorizationCode` longtext DEFAULT NULL,
  `pgServiceTransactionId` longtext DEFAULT NULL,
  `bankTransactionId` longtext DEFAULT NULL,
  `bankId` longtext DEFAULT NULL,
  `brn` longtext DEFAULT NULL,
  `responseCodeDescription` longtext DEFAULT NULL,
  `paymentInstrument` longtext DEFAULT NULL,
  `file` longtext DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` bigint(20) UNSIGNED NOT NULL,
  `uimg` longtext NOT NULL,
  `uname` longtext NOT NULL,
  `udescription` longtext NOT NULL,
  `url` longtext NOT NULL,
  `phone` longtext NOT NULL,
  `email` longtext NOT NULL,
  `type` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uimg`, `uname`, `udescription`, `url`, `phone`, `email`, `type`) VALUES
(1, 'rohit.jpg', 'Rohit Bhure', '<p><strong>Rohit Bhure</strong> is Founder of <strong>DigitalProjectHub.com</strong> &amp; with an <strong>Entrepreneur</strong>. He is Also a College Student &amp; Full Time Passionate Developer.</p>', 'https://instagram.com/rohitbhure65', '8839178090', 'rohitbhure.cse@gmail.com', 'owner'),
(2, 'divyansh.jpg', 'Divyansh Sharma', '<p><strong>Divyansh Sharma</strong> is Founder of <strong>DigitalProjectHub.com</strong> &amp; with an <strong>Entrepreneur</strong>. He is Also a College Student &amp; Full Time Passionate Developer.</p>', 'https://www.instagram.com/dc.ode/', '9752431614', '', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `catagory_id` (`category_id`),
  ADD KEY `author` (`author`),
  ADD KEY `slug` (`slug`(768));

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
