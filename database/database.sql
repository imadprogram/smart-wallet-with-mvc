DROP TABLE IF EXISTS incomes;
DROP TABLE IF EXISTS expenses;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS users;


CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL
);

CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    type TEXT CHECK (type IN ('income', 'expense')) NOT NULL,
    user_id INT REFERENCES users(id) ON DELETE CASCADE 
);

CREATE TABLE incomes (
    id SERIAL PRIMARY KEY,
    amount DECIMAL(9,2) NOT NULL,
    description TEXT,
    date DATE DEFAULT CURRENT_DATE,
    user_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    category_id INT REFERENCES categories(id) ON DELETE SET NULL
);

CREATE TABLE expenses (
    id SERIAL PRIMARY KEY,
    amount DECIMAL(9,2) NOT NULL,
    description TEXT,
    date DATE DEFAULT CURRENT_DATE,
    user_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    category_id INT REFERENCES categories(id) ON DELETE SET NULL
);

INSERT INTO categories (name, type) VALUES 
('Salary', 'income'),
('Freelance', 'income'),
('Investments', 'income'),
('Gifts', 'income'),
('Rental Income', 'income'),
('Other Income', 'income'); 

INSERT INTO categories (name, type) VALUES 
('Groceries', 'expense'),
('Rent', 'expense'),
('Utilities', 'expense'),
('Transportation', 'expense'),
('Entertainment', 'expense'),
('Healthcare', 'expense'),
('Shopping', 'expense'),
('Education', 'expense');

SELECT * FROM incomes