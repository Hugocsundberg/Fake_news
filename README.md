# Fake_news

## How to use
Download the repository and run index.php on a PHP-server.

## About
Appen hämtar data från en live databas på heroku. Ett CMS för att editera den databasen är inte skapat ännu. 
Korten renderas dynamiskt baserat på datan i databasen. Författare, content, datum, likes och färg hämtas därifrån. (Färger som kan användas är röd, blå och grön). 
Tanken är att korten ska kunna expanderas med detta är inte implementerat ännu. 
Korten är uppbyggda i CSS-grid och går mellan en till tre kolumner baserat på bredd. 

Koden är uppdelad i komponenterna header, main och footer. Kort-logiken sker i main.php. 
variabeln $data importeras från server-connection.php   