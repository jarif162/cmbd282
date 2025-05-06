<?php
//Create a Table (Only once)

"CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);"

//Insert Data
"INSERT INTO users (name, email, password) 
VALUES ('John Doe', 'john@example.com', 'hashed_password_here');"


// 3. Select All Data

'SELECT * FROM users;'

//Select Specific Data

"SELECT * FROM users WHERE id = 1;"

//Update Data
"UPDATE users SET name = 'Jane Doe' WHERE id = 1;"
// "UPDATE users 
// SET name = 'Jane Doe', email = 'jane@example.com' 
// WHERE id = 1;"

//Delete Data
"DELETE FROM users WHERE id = 1;"

//Delete All Data
"DELETE FROM users;"

//Search / LIKE Query
"SELECT * FROM users WHERE name LIKE '%john%';"

////Search / LIKE Query with Wildcards"
"SELECT * FROM users WHERE name LIKE 'J%';" // Starts with J

"SELECT * FROM users WHERE name LIKE '%Doe';" // Ends with Doe
"SELECT * FROM users WHERE name LIKE '%o%';" // Contains 'o'

//Count Users
"SELECT COUNT(*) FROM users;"

//count rows
"SELECT COUNT(*) FROM users;"

//count rows with condition
"SELECT COUNT(*) FROM users WHERE email LIKE '%@example.com';"

//count rows with condition and group by
"SELECT COUNT(*) FROM users GROUP BY email;"
//count rows with condition and group by with having
"SELECT COUNT(*) FROM users GROUP BY email HAVING COUNT(*) > 1;"

// Login (Check credentials)

"SELECT * FROM users WHERE email = 'john@example.com' AND password = 'hashed_password_here';
"
//🔐 Note: In PHP, you should hash passwords using password_hash() and verify with password_verify() instead of plain matching.

// Check if email exists
"SELECT * FROM users WHERE email = 'john@example.com';"

//Order and Limit
"SELECT * FROM users ORDER BY created_at DESC LIMIT 5;
"
//Pagination
"SELECT * FROM users ORDER BY created_at DESC LIMIT 10 OFFSET 5;"
//Group By and Aggregate Functions
"SELECT COUNT(*) as user_count, created_at FROM users GROUP BY created_at;"
//Group By and Aggregate Functions with HAVING
"SELECT COUNT(*) as user_count, created_at FROM users GROUP BY created_at HAVING COUNT(*) > 1;"

//Join Queries
"SELECT users.*, orders.* FROM users"
"INNER JOIN orders ON users.id = orders.user_id;"

// Bonus: Drop Table (Be careful!)
"DROP TABLE users;"


?>