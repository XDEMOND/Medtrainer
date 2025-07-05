-- using IA for comments
EXPLAIN select * from users where email = 'yair.rodriguez1000@gmail.com';

-- Create an index on the email column
CREATE INDEX idx_email ON users(email);

-- Analyze the table to get statistics
ANALYZE TABLE users;

