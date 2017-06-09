CREATE TABLE question (
	Id INT AUTO_INCREMENT,
	Question VARCHAR(200),
	AnswerId INT,
	PRIMARY KEY(Id)
);

CREATE TABLE answer (
	Id INT AUTO_INCREMENT,
	QuestionId INT,
	Answer VARCHAR(100),
	PRIMARY KEY(Id)
);

CREATE TABLE camp (
	Id INT AUTO_INCREMENT,
	Date DATE,
	Location VARCHAR(50),
	BloodBank VARCHAR(50),
	PRIMARY KEY(Id)
);

CREATE TABLE donor (
	Id INT AUTO_INCREMENT,
	CampId INT,
	Name VARCHAR(100),
	Gender VARCHAR(7),
	Phone VARCHAR(20),
	Age INT,
	BloodGroup VARCHAR(7),
	Address VARCHAR(100),
	Email VARCHAR(50),
	Source VARCHAR(20),
	BloodPressure VARCHAR(20),
	Hb DOUBLE,
	Weight DOUBLE,
	Pulse DOUBLE,
	Fit BOOLEAN,
	Emergency BOOLEAN,
	CampRating INT(4),
	TimeStamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(Id)
);

/* Hardcoded Database Questions */
/* Modify later with "Add Questions" module */

INSERT INTO `raktarpan`.`question` (`Id`, `Question`, `AnswerId`) VALUES 
(1, 'Have you donated blood before?', NULL),
(2, 'Was your last donation within last three months?', 4),
(3, 'Did you have any discomfort during last donation?', 6),
(4, 'Are you feeling well today?', 7),
(5, 'Did you sleep well last night?', 9),
(6, 'Have you had anything to eat in last 4 hours?', 11),
(7, 'Do you have any reason to believe that you are infected with Hepatitis, Malaria,HIV/AIDS , Veneral Disease?', 14),
(8, 'In last six months have you had history of any of the following?', 19),
(9, 'In last six months have you had any of the following?', 24),
(10, 'Do you suffer from any of the following diseases?', 31),
(11, 'Have you had any of the following in last 72 hours?', 37),
(12, 'Have you had any surgery or Blood Transfusion in past six months?', 42),
(13, 'For Women Donors only, Is any of the following applicable?', 47),
(14, 'Do you DISAGREE with any of these?', 52);

INSERT INTO `raktarpan`.`answer` (`Id`, `QuestionId`, `Answer`) VALUES 
(1, 1, 'Yes'),
(2, 1, 'No'),
(3, 2, 'Yes'),
(4, 2, 'No'),
(5, 3, 'Yes'),
(6, 3, 'No'),
(7, 4, 'Yes'),
(8, 4, 'No'),
(9, 5, 'Yes'),
(10, 5, 'No'),
(11, 6, 'Yes'),
(12, 6, 'No'),
(13, 7, 'Yes'),
(14, 7, 'No'),
(15, 8, 'Unexpected Weight Loss'),
(16, 8, 'Repeated Diarrhea'),
(17, 8, 'Continous Cold n Cough'),
(18, 8, 'Continous Low Grade Fever'),
(19, 8, 'None of the above'),
(20, 9, 'Tattooing'),
(21, 9, 'Ear/Body Piercing'),
(22, 9, 'Dental Extraction'),
(23, 9, 'Accupuncture'),
(24, 9, 'None of the above'),
(25, 10, 'Heart/Lung/Kidney Disease'),
(26, 10, 'Cancer/Malignant Disease'),
(27, 10, 'Malaria/Tuberculosis'),
(28, 10, 'Diabetes'),
(29, 10, 'Allergic Disease/Jaundice/Hepatitis B-C'),
(30, 10, 'Abnormal Bleeding Tendency/Fainting Spells'),
(31, 10, 'None of the above'),
(32, 11, 'Antibiotics/Aspirin/Antiallergy'),
(33, 11, 'Insulins/Steroids/Hormones'),
(34, 11, 'Contraceptive/Immunization pills'),
(35, 11, 'Vaccination / Rabies Vaccine'),
(36, 11, 'Alchohol'),
(37, 11, 'None of the above'),
(38, 12, 'Major'),
(39, 12, 'Minor'),
(40, 12, 'Transplant'),
(41, 12, 'Transfusion'),
(42, 12, 'None of the above'),
(43, 13, 'You are having Menstruations/Periods'),
(44, 13, 'You are pregnant'),
(45, 13, 'You have a baby less than of 18 months'),
(46, 13, 'You have had an abortion in last three months'),
(47, 13, 'None of the above / Not applicable'),
(48, 14, 'Blood donation is totally voluntary act and no inducement or remuneration has been offered for the same.'),
(49, 14, 'Donation of blood is a medical procedure and that by donating voluntarily, I accept risks involved.'),
(50, 14, 'My blood will be tested for Hepatitis B and C, malarial parasite, HIV/AIDS and other venereal disease in addition to any other screening to ensure blood safety.'),
(51, 14, 'I prohibit any information provided by me and donation to be discussed with any other individual or government agency without my prior permission.'),
(52, 14, 'No, I agree with all the above points.');

 
 
