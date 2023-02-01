CREATE TABLE `users` (
	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`name`	TEXT
);

INSERT INTO users(name) VALUES ('Vasya');
INSERT INTO users(name) VALUES ('Dan');
INSERT INTO users(name) VALUES ('Roma');

SELECT * FROM users;
