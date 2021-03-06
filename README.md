# PU-Code-Igniter

## Предлагана функционалност

Приложението предоставя възможност за логин и регистрация на потребители. Всеки потребител може да създава, променя, преглежда и изтрива бележки. Главният метод за навигация из сайта е навигационното меню в горната част на всяка страница.

## Инсталиране

Трябва да имате инсталирано PHP и mySQL сървър на вашият компютър. В php.ini файла трябва да намерите и разкоментирате редът **extension=intl**. В mySQL сървърът, трябва да имате създадена празна база и можете да изпълнете този SQL dump, за да създадете необходимите таблици и колони (https://drive.google.com/file/d/14Kn6ares0WcCjkhkLj9em1hoykTXUqc4/view?usp=sharing). Сред файловете на проекта трябва да копирате файла **env** в нов файл с име **.env** и да разкоментирате и промените следните редове, като също трябва да попълните данните спрямо базата от данни, която се създали.  
  
![env](https://i.ibb.co/XXh03jy/env.png)  
  
След като направите тези промени, можете да стартирате сайта като от конзола изпълните командата **php spark serve** и можете да отворите сайта на адрес **http://localhost:8080**.  

## Техническа спецификация

[https://raw.githubusercontent.com/BagerManBG/PU-Code-Igniter/master/CodeIgniterSpecifications.pdf](https://raw.githubusercontent.com/BagerManBG/PU-Code-Igniter/master/CodeIgniterSpecifications.pdf)

## Презентация

[https://raw.githubusercontent.com/BagerManBG/PU-Code-Igniter/master/CodeIgniter.pptx](https://raw.githubusercontent.com/BagerManBG/PU-Code-Igniter/master/CodeIgniter.pptx)
