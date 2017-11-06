CREATE TABLE quizweb.Quiz
(
    Quiz_id int(11) PRIMARY KEY NOT NULL,
    Quiz_name varchar(255),
    Url varchar(255) NOT NULL,
    Date_created date NOT NULL,
    Date_updated datetime NOT NULL
);
INSERT INTO quizweb.Quiz (Quiz_id, Quiz_name, Url, Date_created, Date_updated) VALUES (1, 'Test Quiz', 'test', '2017-11-03', '2017-11-03 02:57:50');