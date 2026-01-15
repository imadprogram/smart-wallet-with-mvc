-- Active: 1768299878596@@127.0.0.1@5432@smart_wallet
CREATE DATABASE smart_wallet;

CREATE TABLE users(
    id SERIAL PRIMARY KEY,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    email TEXT NOT NULL,
    password TEXT NOT NULL
);
CREATE TABLE incomes (
    id SERIAL PRIMARY KEY,
    amount DECIMAL(9,2) NOT NULL,
    date DATE DEFAULT CURRENT_DATE,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE TABLE expenses (
    id SERIAL PRIMARY KEY,
    amount DECIMAL(9,2) NOT NULL,
    date DATE DEFAULT CURRENT_DATE,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE TABLE income_categories(
    id SERIAL PRIMARY KEY,
    category_name TEXT NOT NULL,
    income_id INT NOT NULL,
    FOREIGN KEY (income_id) REFERENCES incomes(id)
);
CREATE TABLE expense_categories(
    id SERIAL PRIMARY KEY,
    category_name TEXT NOT NULL,
    expense_id INT NOT NULL,
    FOREIGN KEY (expense_id) REFERENCES expenses(id)
);