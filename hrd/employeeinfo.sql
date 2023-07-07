
CREATE TABLE info (
   id INT AUTO_INCREMENT PRIMARY KEY,
  Firstname varchar(50) NOT NULL,
  address varchar(50) NOT NULL,
  Contactno varchar(30) NOT NULL,
  Birthday varchar(30) NOT NULL,
  nameofMother varchar(10) NOT NULL,
  nameofFather varchar(30) NOT NULL,
  CivilStatus varchar(30) NOT NULL,
  Gender varchar(30) NOT NULL,
  EducationalBackground varchar(100) NOT NULL,
  Training varchar(100) NOT NULL,
  Seminars varchar(150) NOT NULL,
  WorkExperience varchar(100) NOT NULL,
  WorkDuration varchar(50) NOT NULL,
  CompanyName varchar(30) NOT NULL,
  FormerPosition varchar(30) NOT NULL,
  ReasonsForLeaving varchar(100) NOT NULL,
  CurrentPosition varchar(30) NOT NULL,
  Status varchar(30) NOT NULL,
  Rate varchar(50) NOT NULL,
  SSS varchar(50) NOT NULL,
  PAGIBIG varchar(30) NOT NULL,
  PhilHealth varchar(50) NOT NULL,
  taxid varchar(50) NOT NULL,
  UMID varchar(50) NOT NULL,
  PHILSYS varchar(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;


