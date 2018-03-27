CREATE TABLE quizweb.Answer
(
    Option_id int(11) NOT NULL,
    Question_id int(11) NOT NULL,
    Reason varchar(255),
    CONSTRAINT `PRIMARY` PRIMARY KEY (Option_id, Question_id),
    CONSTRAINT answer_ibfk_1 FOREIGN KEY (Option_id) REFERENCES options(Option_id),
    CONSTRAINT answer_ibfk_2 FOREIGN KEY (Question_id) REFERENCES question(Question_id)
);
CREATE INDEX Question_id ON quizweb.Answer (Question_id);
INSERT INTO quizweb.Answer (Option_id, Question_id, Reason) VALUES (1, 1, 'Because There Is.');
INSERT INTO quizweb.Answer (Option_id, Question_id, Reason) VALUES (4, 2, 'Because There Is.');
