# Grunnleggende PHP – kort og konkret


## 1. PHP-kode
PHP skrives inne i HTML, men må ligge mellom disse taggene:

```php
<?php
// PHP-kode her
?>
```

PHP-filer har endelsen .php

---
## 2. Variabler
```php
<?php
$navn = "Ola";
$alder = 17;
?>
```

---

## 3. Skrive ut tekst
```php
<?php
echo "Hei verden";
?>
```

## Hente ut fra skjema (POST)

HTML skjema:
```html
<form method="post">
  <input type="text" name="brukernavn">
  <button type="submit">Send</button>
</form>
```

PHP som hener verdien fra brukernavn-feltet ovenfor: 

```php
<?php
$brukernavn = $_POST["brukernavn"];
echo $brukernavn;
?>
```


Nyttige ressurser: https://www.w3schools.com/php/default.asp 