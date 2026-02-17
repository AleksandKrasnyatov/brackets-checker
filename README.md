# Обработчик строки со скобками
  
Реализует функцию проверки строки со скобками, например "()()". Проверяется последовательная парность.
  
## Требования  
  
- PHP ^7.0
  
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
