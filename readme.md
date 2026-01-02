# Brukerregistrering med HTML, CSS, PHP og MySQL

## Om oppgaven

I denne oppgaven skal du lage en enkel nettside som lar brukere registrere seg. Prosjektet gir deg praktisk erfaring med hvordan frontend og backend samarbeider i en dynamisk nettside.

Du skal bruke:
- **HTML** til struktur og innhold  
- **CSS** til utseende og design  
- **PHP** til serverlogikk og kommunikasjon med databasen  
- **MySQL** til lagring av brukerdata  

Målet er å forstå hele flyten fra en bruker fyller ut et skjema, til dataene lagres sikkert i en database og brukeren får tilgang til et medlemsområde.

Oppgaven passer godt for vg2-elever og dekker flere sentrale temaer i utviklingsfaget, som databaser, informasjonssikkerhet, brukerstyring og enkel systemutvikling.

---

## Før du starter

For å kunne kjøre PHP og MySQL lokalt på maskinen din, anbefales det å bruke **XAMPP**.

### Anbefalt arbeidsmåte
- Installer XAMPP og start **Apache** og **MySQL**
- Når du oppretter et nytt GitHub-repository i GitHub Desktop, kan du legge det direkte i `htdocs`-mappen til XAMPP  
  - Da slipper du å flytte filer hver gang du vil teste nettsiden i nettleseren
- Alternativt kan du bruke en PHP-extension i VS Code, men XAMPP er ofte enklest for nybegynnere

Nettsiden nås da via:

http://localhost/mappenavn


---

## Funksjonalitet du skal lage

Nettsiden skal inneholde:
- Et registreringsskjema for nye brukere
- En database som lagrer brukerinformasjon
- En sikker løsning for lagring av passord
- Et medlemsområde som kun innloggede brukere har tilgang til

---

## Oppgaver

### 1. Installere og kjøre XAMPP
- Last ned og installer XAMPP
- Start Apache- og MySQL-serveren
- Test at serveren fungerer ved å gå til `http://localhost` i nettleseren

### 2. Opprette database
- Opprett en MySQL-database med navn **brukere**
- Lag en tabell for brukere, for eksempel med:
  - id
  - brukernavn
  - e-post
  - passord (kryptert)

Tenk gjennom hvilke datatyper som passer for de ulike feltene.

### 3. Lage registreringsskjema
- Lag en HTML-side med et skjema for registrering
- Eksempler på felter:
  - Brukernavn
  - E-post
  - Passord
- Bruk `POST` som metode

Tenk over:
- Hvilken informasjon er nødvendig?
- Hva bør du *ikke* lagre?

### 4. Koble til databasen
- Lag en egen PHP-fil som håndterer tilkobling til databasen
- Bruk denne filen der du trenger databasekontakt
- Test at tilkoblingen fungerer før du går videre

### 5. Medlemsområde
- Etter vellykket registrering skal brukeren sendes til et medlemsområde
- Dette kan være en enkel PHP-side som bekrefter at brukeren er logget inn

### 6. Tilgangskontroll
- Sørg for at medlemsområdet kun er tilgjengelig for innloggede brukere
- Bruk PHP-sesjoner til å sjekke om brukeren har tilgang
- Test at andre ikke kan åpne siden direkte via URL

### 7. Sikker lagring av passord
- Passord skal **aldri** lagres i klartekst
- Bruk innebygde PHP-funksjoner for å hashe passord før de lagres
- Forklar kort i koden hvorfor dette er viktig

### 8. Design med CSS
- Lag en egen CSS-fil
- Gi siden et ryddig og brukervennlig design
- Skill tydelig mellom HTML (struktur) og CSS (utseende)

---

## Ekstraoppgave

### Administratorside
- Lag en egen side for administrator
- Vis en oversikt over registrerte brukere
- Kun administrator skal ha tilgang til denne siden

Tips:
- Du kan legge til et felt i databasen som bestemmer rolle (for eksempel `admin` eller `bruker`)

---

## Refleksjon

Du har nå laget en nettside som lar brukere registrere seg og lagrer data i en database.

Tenk gjennom:
- Hva slags nettsider eller systemer kan bruke denne løsningen?
- Hvilke sikkerhetsutfordringer finnes det?
- Hvordan kan løsningen videreutvikles?

Eksempler på videre bruk:
- Innloggingssystemer
- Bookingløsninger
- Medlemssider
- Enkle nettbutikker

---

## Læringsmål

Gjennom denne oppgaven får du erfaring med:
- Samspill mellom frontend og backend
- Databasemodellering
- Enkel informasjonssikkerhet
- Strukturert kode og prosjektarbeid
- Praktisk bruk av utviklingsverktøy og versjonskontroll