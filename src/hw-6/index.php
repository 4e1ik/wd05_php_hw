<?php
include_once 'Worker.php';
include_once 'Worker2.php';
include_once 'Worker3.php';
include_once 'User.php';
include_once 'Worker4.php';
include_once 'Student.php';
include_once 'Driver.php';
include_once 'Form.php';
include_once 'SmartForm.php';
include_once 'Cookie.php';
include_once 'Session.php';

function br(){
    echo "<br>";
    echo "<br>";
    echo "<br>";
}

//1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи

$worker1 = new Worker();
$worker2 = new Worker();

$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;

echo $worker1->age + $worker2->age;
echo "<br>";
echo $worker1->salary + $worker2->salary;
echo "<br>";

br();

//2. Сделайте класс Worker2, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge,
//setSalary, getSalary. Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи.
//Выведите на экран сумму возрастов Ивана и Васи.

$worker3 = new Worker2();
$worker4 = new Worker2();

$worker3->setName('Иван');
$worker3->setAge(25);
$worker3->setSalary(1000);

$worker4->setName('Вася');
$worker4->setAge(26);
$worker4->setSalary(2000);

echo $worker3->getAge() + $worker4->getAge();
echo "<br>";
echo $worker3->getSalary() + $worker4->getSalary();
echo "<br>";

br();

//3. Дополните класс Worker2 из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет).
// Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

$worker3->setAge(22);
echo $worker3->getAge();

br();

//4. Сделайте класс Worker3, в котором будут следующие private поля - name (имя), salary (зарплата).
//Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
//Сделайте также public методы getName, getSalary.

//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

$worker5 = new Worker3('Дима', 25, 1000);

echo $worker5->getAge()*$worker5->getSalary();

br();

//5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
//
//Сделайте класс Worker4, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
//
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.

$worker6 = new Worker4('Иван', 25, 1000);
$worker7 = new Worker4('Вася', 26, 2000);

echo $worker6->getSalary() + $worker7->getSalary();

$student = new Student('Артем', 23, 0, 5, 200);

echo "<pre>";
print_r($student);
echo "<pre>";

br();

//6.  Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker4 из предыдущей задачи.
//Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).


$driver = new Driver('Катя', 42, 2000, 15, 'B');
echo "<pre>";
print_r($driver);
echo "<pre>";

br();

//7. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close.
//Каждый метод принимает массив атрибутов.Для решения задачи сделайте private метод, который параметром будет принимать массив,
//например, ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами, в нашем случае type="text" value="!!!".

//+

//8. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea после отправки.
//
//То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть. Мало ли что-то пойдет не так, например,
//форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново. Этого следует избегать.

$form = new SmartForm();

echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->sumbit(['type'=>'submit','value'=>'Отправить']);
echo $form->close();

br();

//9. Создайте класс Cookie - оболочку над работой с куками. Класс должен иметь следующие методы: установка куки set(имя куки, ее значение),
//получение куки get(имя куки), удаление куки del(имя куки).

$cooc1 = new Cookie();

$cooc1->setCookie('Artem', 21);

//echo  $cooc1->getCookie($cooc1->name); // Закомментировано, так как ругается на эту строку при удалении куки

$cooc1->delCookie($cooc1->name, $cooc1->value);


//10. Создайте класс Session - оболочку над сессиями. Он должен иметь следующие методы: создать переменную сессии, получить переменную,
//удалить переменную сессии, проверить наличие переменной сессии.
//
//Сессия должна стартовать (session_start) в методе __construct

$sess = new Session();

$sess->setSession('Artem', 21);
echo "<br>";
echo  $sess->getSession($sess->name);

$sess->delSession($sess->name);

var_dump($sess->chekSession());



//11. Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи (именно использовать, а не наследовать).
//
//Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии. Зачем это нужно: такой класс часто используется для форм.
//Например на одной странице пользователь отправляет форму, мы сохраняем в сессию сообщение об успешной отправке, редиректим пользователя на другую страницу
//и там показываем сообщение из сессии.
//
//Класс должен иметь да метода - setMessage, который сохраняет сообщение в сессию и getMessage, который получает сообщение из сессии.

?>