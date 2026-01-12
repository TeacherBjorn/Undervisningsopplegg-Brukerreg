# Tips til databasedelen av oppgaven
I utgangspunktet skal dere bruke NDLA som hovedressurs, og sørg for at dere har lest gjennom denne før dere feilsøker videre. Jeg har dog samlet noen tips som er spesifikk for denne oppgaven. 

## Tilgang til databasen får dere via XAMPP og phpMyAdmin

- phpMyadmin kjører mySQL. 
- Her må vi opprette ny database som passer prosjektet vårt. Gi databasen et unikt navn. 
- Databasen kan opprettes via terminal med kommandoer eller via brukergrensesnittet. 

## Opprette database med terminal

1) Opprette database

```sql  
CREATE DATABASE medlemsdatabase;
```

2) Velg databasen vi nettopp laget

```sql  
USE medlemsdatabase;
```

3) Opprett tabell
Her er det viktig at vi innhenter informasjonen vi trenger. I utgangspunktet baseres dette på ER-diagrammet, men vi bruker ikke dette i denne oppgaven. 

```sql  
CREATE TABLE brukere (
    id INT AUTO_INCREMENT PRIMARY KEY,
    navn VARCHAR(100) NOT NULL,
    epost VARCHAR(150) NOT NULL,
    passord VARCHAR(255) NOT NULL
);
```

Forklaringer:

- id → unikt nummer for hver bruker
- navn → tekst (VARCHAR) 
- epost → tekst (VARCHAR) 
- passord → plass til hashet passord (VARCHAR) 
- AUTO_INCREMENT → MySQL teller selv

4) Sammenheng med PHP-koden på nettsiden

I registreingsskjema har du forhåpenligvis følgende: 
```php 
$navn = $_POST["navn"];
$epost = $_POST["epost"];
$passord = $_POST["passord"];
```

Vi kan lagre det slik: 

```php
$sql = "INSERT INTO brukere (navn, epost, passord)
        VALUES ('$navn', '$epost', '$passord')";
```

## Opprette database med phpMyAdmin

Velg database deretter SQL. Her kan du kjøre spørringer mot databasen. Lim inn: 

```sql 
CREATE TABLE brukere (
    id INT AUTO_INCREMENT PRIMARY KEY,
    navn VARCHAR(100) NOT NULL,
    epost VARCHAR(150) NOT NULL,
    passord VARCHAR(255) NOT NULL
);
```

Trykk deretter "gå". Verifiser om tabellen er satt opp. 