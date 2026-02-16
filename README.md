# Процессор строк  
  
Краткое описание пакета  
  
## Требования  
  
- PHP 8.4
  
## Установка  
```sh
composer require aleksand-krasnyatov/brackets-checker
```

## Использование  

```php
<?php  
  
$checker = new BracketsChecker();  
echo $checker->check('()()'); // true
```
