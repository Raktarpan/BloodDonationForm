CREATE TABLE question (
	Id INT AUTO_INCREMENT,
	Question VARCHAR(200),
	AnswerId INT,
	PRIMARY KEY(Id)
);

CREATE TABLE answer (
	QuestionId INT,
        OptionId INT,
	Answer VARCHAR(100),
	PRIMARY KEY(QuestionId, OptionId)
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
        Roll VARCHAR(20),
	Gender VARCHAR(7),
	Phone VARCHAR(20),
	Age INT,
	BloodGroup VARCHAR(7),
	Address VARCHAR(100),
        Hostel VARCHAR(20),
	Email VARCHAR(50),
	Source VARCHAR(20),
        Medical VARCHAR(200),
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
(1, 'Have you donated blood before?', 0),
(2, 'Was your last donation within last three months?', 2),
(3, 'Did you have any discomfort during last donation?', 2),
(4, 'Are you feeling well today?', 1),
(5, 'Did you sleep well last night?', 1),
(6, 'Have you had anything to eat in last 4 hours?', 1),
(7, 'Do you have any reason to believe that you are infected with Hepatitis, Malaria,HIV/AIDS , Veneral Disease?', 2),
(8, 'In last six months have you had history of any of the following?', 5),
(9, 'In last six months have you had any of the following?', 5),
(10, 'Do you suffer from any of the following diseases?', 7),
(11, 'Have you had any of the following in last 72 hours?', 6),
(12, 'Have you had any surgery or Blood Transfusion in past six months?', 5),
(13, 'For Women Donors only, Is any of the following applicable?', 5),
(14, 'Do you DISAGREE with any of these?', 5);

INSERT INTO `raktarpan`.`answer` (`QuestionId`, `OptionId`, `Answer`) VALUES 
(1, 1, 'Yes'),
(1, 2, 'No'),
(2, 1, 'Yes'),
(2, 2, 'No'),
(3, 1, 'Yes'),
(3, 2, 'No'),
(4, 1, 'Yes'),
(4, 2, 'No'),
(5, 1, 'Yes'),
(5, 2, 'No'),
(6, 1, 'Yes'),
(6, 2, 'No'),
(7, 1, 'Yes'),
(7, 2, 'No'),
(8, 1, 'Unexpected Weight Loss'),
(8, 2, 'Repeated Diarrhea'),
(8, 3, 'Continous Cold n Cough'),
(8, 4, 'Continous Low Grade Fever'),
(8, 5, 'None of the above'),
(9, 1, 'Tattooing'),
(9, 2, 'Ear/Body Piercing'),
(9, 3, 'Dental Extraction'),
(9, 4, 'Accupuncture'),
(9, 5, 'None of the above'),
(10, 1, 'Heart/Lung/Kidney Disease'),
(10, 2, 'Cancer/Malignant Disease'),
(10, 3, 'Malaria/Tuberculosis'),
(10, 4, 'Diabetes'),
(10, 5, 'Allergic Disease/Jaundice/Hepatitis B-C'),
(10, 6, 'Abnormal Bleeding Tendency/Fainting Spells'),
(10, 7, 'None of the above'),
(11, 1, 'Antibiotics/Aspirin/Antiallergy'),
(11, 2, 'Insulins/Steroids/Hormones'),
(11, 3, 'Contraceptive/Immunization pills'),
(11, 4, 'Vaccination / Rabies Vaccine'),
(11, 5, 'Alchohol'),
(11, 6, 'None of the above'),
(12, 1, 'Major'),
(12, 2, 'Minor'),
(12, 3, 'Transplant'),
(12, 4, 'Transfusion'),
(12, 5, 'None of the above'),
(13, 1, 'You are having Menstruations/Periods'),
(13, 2, 'You are pregnant'),
(13, 3, 'You have a baby less than of 18 months'),
(13, 4, 'You have had an abortion in last three months'),
(13, 5, 'None of the above / Not applicable'),
(14, 1, 'Blood donation is totally voluntary act and no inducement or remuneration has been offered for the same.'),
(14, 2, 'Donation of blood is a medical procedure and that by donating voluntarily, I accept risks involved.'),
(14, 3, 'My blood will be tested for Hepatitis B and C, malarial parasite, HIV/AIDS and other venereal disease in addition to any other screening to ensure blood safety.'),
(14, 4, 'I prohibit any information provided by me and donation to be discussed with any other individual or government agency without my prior permission.'),
(14, 5, 'No, I agree with all the above points.');

 
 
