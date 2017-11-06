CREATE TABLE quizweb.Question
(
    Question_id int(11) NOT NULL,
    Quiz_id int(11) NOT NULL,
    Question_S varchar(255) NOT NULL,
    CONSTRAINT `PRIMARY` PRIMARY KEY (Question_id, Quiz_id),
    CONSTRAINT question_ibfk_1 FOREIGN KEY (Quiz_id) REFERENCES quiz
);
CREATE INDEX Quiz_id ON quizweb.Question (Quiz_id);
INSERT INTO quizweb.Question (Question_id, Quiz_id, Question_S) VALUES (1, 1, 'How many States are in the United States?');
INSERT INTO quizweb.Question (Question_id, Quiz_id, Question_S) VALUES (2, 1, 'The __ Colonies.');