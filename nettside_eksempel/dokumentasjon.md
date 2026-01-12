# Dokumentasjon – Brukerreg


## Flyt

1. Bruker registrerer seg. Skjema på hovedsiden (index.php)
2. Brukerdata lagres i databasen
3. Bruker logger inn (login.php)
4. Session startes
5. Bruker får tilgang til medlem.php
6. Bruker kan logge ut via logout.php

## 1. Introduksjon
Denne nettsiden er en enkel PHP-basert løsning for registrering, innlogging og medlemstilgang. Prosjektet bruker PHP, MySQL (via mysqli), sessions og enkel CSS for utseende.
---

## 2. Filstruktur

Prosjektet består av følgende filer:

- `index.php`
- `login.php`
- `registrere.php`
- `medlem.php`
- `logout.php`
- `style.css`
- `db.php`

---

## 3. Forklaring av filer

### db.php
- Kobler nettsiden til databasen
- Inneholder database-tilkoblingen (`$conn`)
- Blir inkludert i andre PHP-filer

---

### index.php
- Tar imot brukerinformasjon fra skjema
- Lagrer brukere i databasen
- Passord lagres sikkert med `password_hash()`

---


### login.php
- Side for innlogging
- Sjekker e-post og passord mot databasen
- Bruker `password_verify()` for å sjekke passord
- Starter en session når innlogging er korrekt

---

### medlem.php
- Beskyttet side
- Kun tilgjengelig for innloggede brukere
- Sjekker om session finnes
- Viser innhold for innlogget bruker

---

### logout.php
- Logger brukeren ut
- Fjerner session
- Sender brukeren tilbake til innloggingssiden

---

