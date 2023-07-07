CREATE TABLE payroll_data (
    ename VARCHAR(50) NOT NULL,
    enumber INT NOT NULL,
    cposition VARCHAR(50) NOT NULL,
    edate VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    cnum INT NOT NULL,
    tnum INT NOT NULL,
    daysworked INT NOT NULL,
    rate INT NOT NULL,
    overtime INT NOT NULL,
    bonus1 INT NOT NULL,
    bonus2 INT NOT NULL,
    bonus3 INT NOT NULL,
    bonus4 INT NOT NULL,
    mop VARCHAR(50) NOT NULL,
    message TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
