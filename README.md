# Fake_news

## How to use

Download the repository and run index.php on a PHP-server.

## About

Appen hämtar data från en live databas på heroku. Ett CMS för att editera den databasen är inte skapat ännu.
Korten renderas dynamiskt baserat på datan i databasen. Författare, content, datum, likes och färg hämtas därifrån. (Färger som kan användas är röd, blå och grön).
Tanken är att korten ska kunna expanderas med detta är inte implementerat ännu.
Korten är uppbyggda i CSS-grid och går mellan en till tre kolumner baserat på bredd.

Koden är uppdelad i komponenterna header, main och footer. Kort-logiken sker i main.php.
variabeln \$data importeras från server-connection.php

## Code Review

Review (Martin):

1. Love the thought of functionality to save the articles for i'm assuming reading later on the site. Nice touch for articles which im just quickly skimming through now but would like to deep dive later on when i have more time.
2. The way of hiding the cards with a div with a transparent gradient looks super clean.
3. First card is not properly aligned with the rest of the cards on desktop view or tablet.
4. Some parts of the text is showing beneath the div hiding the content.
5. Have left ?> showing on the bottom of the page beneath all the cards.
6. As for php, nicely broken down into reusable components such as header, footer etc
7. Prob don't want to expose password string in expert_author publicly on github, but rather place it in an .env file.
8. Don't know if posts are sorted or not as they're all the same date.
9. body.php is highly readable, very easy to understand so seems like something easy to maintain so big + there, also nice touch of being able to set corresponding color in database.
10. Can't find a functions.php file so not much to comment on regarding functions made in php. I guess a case could be made for server-connection.php as it has a defined function, code looks good and types have been declared, should include strict_types to enable typesafety.
