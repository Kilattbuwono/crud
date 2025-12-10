curl -LO https://windows.php.net/downloads/releases/php-8.3.28-Win32-vs16-x64.zip

unzip php-8.3.28-Win32-vs16-x64.zip
mv php.ini-development php.ini

setx PATH "$env:PATH;C:\php"

php -v




INSERT INTO users (name, email, password, role, created_at, updated_at)
VALUES (
  'Admin',
  'admin@mail.com',
  '$2y$12$xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'admin',
  NOW(),
  NOW()
);
