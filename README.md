# MedTrainer - PHP Coding Exercises

A collection of PHP coding exercises and interview questions covering various programming concepts and best practices.

## 📁 Project Structure

The project is organized into 10 question directories, each containing specific exercises:

- **Question1/** - String manipulation and search operations
- **Question2/** - SQL optimization and indexing
- **Question3/** - Password hashing and verification
- **Question4/** - PHP programming concepts
- **Question5/** - Code refactoring exercises
- **Question6/** - PHP programming challenges
- **Question7/** - Caching system implementation with factory pattern
- **Question8/** - FizzBuzz algorithm with PHPUnit testing
- **Question9/** - PHP programming exercises
- **Question10/** - Advanced PHP concepts

## 🚀 Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer (for Question8 testing)
- MySQL/MariaDB (for Question2 SQL exercises)

### Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd medtrainer
```

2. For Question8 (testing), install dependencies:
```bash
cd Question8
composer install
```

## 📋 Exercise Details

### Question 1: String Operations
- **File**: `Question1/question1.php`
- **Topic**: String manipulation and case-insensitive search
- **Concepts**: `strpos()`, `strtolower()`, exception handling

### Question 2: SQL Optimization
- **File**: `Question2/question2.sql`
- **Topic**: Database performance optimization
- **Concepts**: Index creation, query analysis, EXPLAIN statements

### Question 3: Password Security
- **File**: `Question3/question3.php`
- **Topic**: Password hashing and verification
- **Concepts**: `password_hash()`, `password_verify()`, security best practices
- **Additional**: Includes `passwordlib.php` for extended password functionality

### Question 4: PHP Programming
- **File**: `Question4/question4.php`
- **Topic**: General PHP programming concepts

### Question 5: Code Refactoring
- **File**: `Question5/refactCode.php`
- **Topic**: Code improvement and refactoring techniques

### Question 6: PHP Challenges
- **File**: `Question6/question6.php`
- **Topic**: PHP programming challenges and problem-solving

### Question 7: Caching System
- **Files**: 
  - `Question7/question7.php`
  - `Question7/interface.php`
  - `Question7/cacheFactory.php`
- **Topic**: Design patterns and caching implementation
- **Concepts**: Factory pattern, interfaces, environment-based configuration

### Question 8: FizzBuzz with Testing
- **Files**:
  - `Question8/fizzBuzz.php`
  - `Question8/tests/` (test files)
  - `Question8/composer.json`
- **Topic**: Algorithm implementation with unit testing
- **Concepts**: FizzBuzz algorithm, PHPUnit testing, Composer dependency management

### Question 9: PHP Programming
- **File**: `Question9/question9.php`
- **Topic**: PHP programming exercises

### Question 10: Advanced PHP
- **File**: `Question10/question10.php`
- **Topic**: Advanced PHP concepts and techniques

## 🧪 Running Tests

For Question 8 (FizzBuzz with testing):

```bash
cd Question8
composer install
./vendor/bin/phpunit tests/
```

## 🔧 Environment Configuration

Some exercises (like Question 7) use environment variables. You can set them:

```bash
export APP_ENV=development
# or
export APP_ENV=production
```

## 📚 Learning Objectives

This project covers:

- **String Manipulation**: Case-insensitive searches, string operations
- **Database Optimization**: Indexing, query performance analysis
- **Security**: Password hashing, verification, best practices
- **Design Patterns**: Factory pattern, interfaces
- **Testing**: Unit testing with PHPUnit
- **Algorithms**: Classic programming problems (FizzBuzz)
- **Code Quality**: Refactoring, best practices
- **Caching**: Implementation of caching systems

## 🤝 Contributing

Feel free to submit improvements, additional exercises, or bug fixes through pull requests.

## 📄 License

This project is for educational purposes. Feel free to use and modify as needed.

## 👨‍💻 Author Yair Rodríguez Aparicio


**Note**: Each question directory contains self-contained exercises that can be run independently. Make sure to review the specific requirements and dependencies for each exercise before running. 
