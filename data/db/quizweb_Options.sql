CREATE TABLE quizweb.Options
(
    Option_id int(11) NOT NULL,
    Question_id int(11) NOT NULL,
    Option_S varchar(255) NOT NULL,
    CONSTRAINT `PRIMARY` PRIMARY KEY (Option_id, Question_id),
    CONSTRAINT options_ibfk_1 FOREIGN KEY (Question_id) REFERENCES Question (Question_id)
);
CREATE INDEX Question_id ON quizweb.Options (Question_id);
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (1, 1, '50');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (1, 2, '4');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (2, 1, '51');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (2, 2, '10');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (3, 1, '49');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (3, 2, '12');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (4, 1, '5');
INSERT INTO quizweb.Options (Option_id, Question_id, Option_S) VALUES (4, 2, '13');