CREATE TABLE `users` (
	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`name`	TEXT
);


INSERT INTO users(name) VALUES ('Vasya');
INSERT INTO users(name) VALUES ('Dan');
INSERT INTO users(name) VALUES ('Roma');

SELECT * FROM users;

CREATE TABLE "news" (
	"id"	INTEGER,
	"title"	TEXT,
	"text"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
);

INSERT INTO news(title, text) 
VALUES 
('News one', 'Description news one');

INSERT INTO news(title, text) 
VALUES 
('News two', 'Description news two');

INSERT INTO news(title, text) 
VALUES 
('News three', 'Description news three');

SELECT * FROM news;
