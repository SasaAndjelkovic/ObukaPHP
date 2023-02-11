DROP DATABASE IF EXISTS fakultet;

CREATE DATABASE fakultet;

CREATE TABLE fakultet.korisnici (
  email VARCHAR(50) NOT NULL PRIMARY KEY,
  sifra VARCHAR(255) NOT NULL,
  ime VARCHAR(30) NOT NULL,
  prezime VARCHAR(30) NOT NULL,
  jmbg VARCHAR(13) NOT NULL,
  telefon VARCHAR(20) NOT NULL,
  tip VARCHAR(20) NOT NULL,
  indeks VARCHAR(20) NULL,
  status VARCHAR(20) NULL
);

CREATE TABLE fakultet.profesori (
  email VARCHAR(50) NOT NULL PRIMARY KEY,
  sifra VARCHAR(255) NOT NULL,
  ime VARCHAR(30) NOT NULL,
  prezime VARCHAR(30) NOT NULL,
  jmbg VARCHAR(13) NOT NULL,
  telefon VARCHAR(20) NOT NULL,
  tip VARCHAR(20) NOT NULL
);

CREATE TABLE fakultet.administratori (
  email VARCHAR(50) NOT NULL PRIMARY KEY,
  sifra VARCHAR(255) NOT NULL,
  ime VARCHAR(30) NOT NULL,
  prezime VARCHAR(30) NOT NULL,
  jmbg VARCHAR(13) NOT NULL,
  telefon VARCHAR(20) NOT NULL,
  tip VARCHAR(20) NOT NULL
);

CREATE TABLE fakultet.predmet (
  sifra VARCHAR(30) NOT NULL PRIMARY KEY,
  naziv VARCHAR(30) NOT NULL,
  nivoStudija VARCHAR(20) NOT NULL
);

CREATE TABLE fakultet.ocene (
  student_email VARCHAR(50) NOT NULL,
  profesor_email VARCHAR(50) NOT NULL,
  predmet_sifra VARCHAR(30) NOT NULL,
  ocena INT NOT NULL,
  datum DATE NOT NULL,
  PRIMARY KEY (
    student_email,
    profesor_email,
    predmet_sifra,
    ocena
  ),
  FOREIGN KEY (student_email) REFERENCES korisnici(email),
  FOREIGN KEY (profesor_email) REFERENCES korisnici(email),
  FOREIGN KEY (predmet_sifra) REFERENCES predmet(sifra)
);

CREATE TABLE fakultet.PredmetProfesor (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email_profesor VARCHAR(50) NOT NULL,
  sifra_predmet VARCHAR(30) NOT NULL,
  FOREIGN KEY (email_profesor) REFERENCES korisnici(email),
  FOREIGN KEY (sifra_predmet) REFERENCES predmet(sifra)
);

CREATE TABLE fakultet.PredmetStudent (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email_student VARCHAR(50) NOT NULL,
  sifra_predmet VARCHAR(30) NOT NULL,
  FOREIGN KEY (email_student) REFERENCES korisnici(email),
  FOREIGN KEY (sifra_predmet) REFERENCES predmet(sifra)
);

INSERT INTO
  fakultet.administratori (ime, prezime, email, sifra, jmbg, telefon, tip)
VALUES
  (
    'admin',
    'admin',
    'admin@elab.rs',
    'admin123',
    '1234234324',
    '0965938392',
    'administrator'
  );