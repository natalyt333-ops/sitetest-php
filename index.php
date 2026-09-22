<?php
/*echo "Hello";
$name = "Иван";
$price = 100;
$isActive = true;
$isActive = false;
$sales = null;
echo $sales;
echo "<br>";
$price = 100+50;
echo $price;
echo "<br>";
$price = $price + 30;
echo $price;
echo "<br>";
$price +=30;
echo $price;
echo "<br>";
$i = 0;
$i = $i + 1;
$i += 1;
$i++; // увеличение на 1
echo $i;

echo "<br>";
echo $i++;
echo "<br>";
echo ++$i;
echo "<br>";
echo --$i;
$i -= 5;
$i *= 5;
$i /=5;
$i %=5;
echo "<br>";
$num = 1.55654;
echo round ($num);
$a = round ($num);
$b = floor($num);
echo "<br>";
echo "Округленное число $a =" .$a;
echo "<br>";
echo 'Округленное число $b = ' .$b;
echo "<br>"; 


$salary = 50000;
$bonus = 340000*0.05;
$sumsalary = $salary + $bonus;
echo "Зарплата: $sumsalary руб.";
 

echo "<br>";
$summoney= 15000;
$usd = 92.5;
$eur = 100.2;
$moneyusd = $summoney / $usd;
echo round ($moneyusd,2);
echo "<br>";
$moneyeur = $summoney / $eur;
echo round ($moneyeur,2);
echo "<br>";

$st = 120000;
$x =$st* 0.2;
$y = $st + $x;
echo "ндс:$x, Итого : $y";

echo "<br>";
$v = 45750;
$z = 12;
$sr = $v/$z;
echo round ($sr,2);

$sum=40000;
if ($sum>50000 && $sum<100000){
    $sum= $sum-($sum*0.1);
    } else if ( $sum>100000 && $sum<=500000 && $sum!==1000000) {
        $sum =$sum -($sum*0.15);
    } else {
        $sum =$sum- ($sum*0.05);
    }
    echo "Итоговая стоимость: $sum";

    // && - И

// || - ИЛИ

// ! - НЕ

// == - проверка на равенство без учета типа ('10' == 10) - true

// === - проверка на равенство с учетом типа ('10' === 10) - false
echo "<br>";
$totalSpent=850000;
if ($totalSpent >1000000){
    echo "Клиент VIP";
}else { 
    echo "Клиент обычный";
}
echo "<br>";
$sum=($sum>50000 && $sum<100000)? $sum-($sum*0.1):$sum- ($sum*0.05);
echo ($sum>50000 && $sum<100000)? $sum-($sum*0.1):$sum- ($sum*0.05);
echo "<br>";
echo ($totalSpent> 1000000)? "Клиент VIP": "клиент обычный";
echo "<br>";
$status = "Новая";
switch ($status) {
    case "Новая":
        echo "Статус: Новая";
        break;
        case "В работе":
            echo "Статус в работе";
            break;
            case "Закрыта":
                echo "Статус :Закрыта";
                break;
                default:
                echo "статус не определен";
}
echo "<br>";
//Дана переменная $stage = 'negotiation'. Используя switch, задайте цвет: 'new' – серый, 'contact' – синий, 'negotiation' – жёлтый, 'closed_won' – зелёный, 'closed_lost' – красный, иначе – чёрный. Выведите цвет.
$stage = 'negotiation'; 
switch ($stage) {
    case "new": 
       echo $color="#d4d1d1";
        break;
    case "contact":
       echo $color="#530dea";
        break;
    case "negotiation":
        echo $color="#f7f452d3";
        break;
    case "closed_won":
        echo $color="#3bd80b";
        break;
    case "closed_lost":
        echo $color="#f50909";
        break;
        default:
        echo $color="#0c0c0c";  
        break;      
        }
echo "<br>";

//Сумма заказа – 7 500 руб. Если >= 10 000 – скидка 10%, если >= 5 000 – 5%, иначе – 0%. Выведите итоговую сумму к оплате.
$order=7500;
if ($order>=5000 && $order<10000){
    $order=$order-($order*0.05);
} else if ($order>=10000) {
    $order=$order-($order*0.1);
} 
echo "Итоговая сумма: $order";
echo "<br>";

//2.4. Приоритет лида Источник лида: $source = 'website'. Установите приоритет: • 'website' – высокий • 'referral' – средний • 'cold_call' – низкий
//• иначе – неизвестный. Выведите строку с приоритетом.
$sourse='website';
switch ($sourse){
    case "website":
        echo "Приоритет высокий";
        break;
    case 'referral':
        echo "Приоритет средний";
        break;
    case 'cold_call':
        echo "Приоритет низкий";
        break;
    default:
        echo "Приоритет неизвестный";
}



//Урок 3. Циклы

for ($i=0; $i <10 ; $i++) {  //проверяет на условие и делает действие
   for ($j=0; $j<54; $j++) {
    if ($i % 2 ===0){
        echo $i. "<br>";
    }
   if ($i % 2 ===0){
        echo "$i <br>";
}
}
}
$a = 0;                      //цикл с условием
while ($a<=10){
    echo "$a <br>";

    $a++;
}


do {                   //пост условие
    echo "$a <br>";

    $a++;
}while ($a <= 10);


//Задача от 1000 до .

for ($i=1000; $i <2000 ; $i+=50) { 
    if ($i<=1500){
        echo $i*0.05."<br>";
        } elseif ($i>1500 && $i<=1750){
            echo $i*0.1."<br>";
        } elseif ($i>1750 && $i<=2000){
            echo $i*0.15. "<br>";
        }
}
// Сгенерируйте 10 кодов товаров в формате "ITEM-XXX", где ХХХ - случайное число от 100 до 110

for ($k=1; $k<=10; $k++) { 
    $code = rand(100, 110);
    echo "ITEM - $code". "<br>";
}

// ОДНОМЕРНЫЕ МАССИВЫ

$array=[34,54.76, "Иван", true]; //в одном массиве данные любых типов
echo  $array[4]; // выведется true, начинается с 0
echo $array[5]; // выведет ошибку
echo count($array); // длина массива - кол-во элементов в массиве

for ($i=0; $i < count($array); $i++){
    echo $array[$i]."<br>";
}

//функции работы с массивами
$array []=76; //добавление элемента в конец
echo in_array("Иван", $array); // проверка наличия элемента в массиве
 if (in_array("Иван", $array)){
    echo "Элемент существует";
 } else {
    echo "Элемент не существует";
}
//5.1. Максимальная выручка за месяц Дан массив сумм за 12 месяцев: 
// [25000, 31000, 18000, 42000, 39000, 55000, 47000, 60000, 52000, 48000, 73000, 81000]. 
// Найдите месяц (индекс+1) с максимальной суммой и выведите его номер и сумму.
$array = [25000, 31000, 18000, 42000, 39000, 55000, 47000, 60000, 52000, 48000, 73000, 81000];
$max = $array[0];
$index =0;
for ($i=1; $i < count($array); $i++) { 
    if ($array [$i] > $max) {
        $index = $i;
        $max = $array[$i];
        
    }
}
echo "<br> $max";
echo "<br>". ($index+1);


$mas = []; //создать пустой массив
var_dump($mas); //вывод массива
print_r($mas); //вывод массива
$mas = [45,7,2,6,0,3];
$sum = 0;
for ($i=0; $i < count($mas); $i++) { 
    $sum += $mas[$i];
}

//5.2. Фильтрация клиентов по сумме Дан массив сумм покупок: [150000, 820000, 1200000, 300000].
//  Создайте новый массив, содержащий только суммы > 500 000, и выведите его.
$array=[150000, 820000, 1200000, 300000];

for ($i=0; $i < count($array) ; $i++) { 
    if ($array[$i]>500000) {
       var_dump($array[$i]);
    }
    
}
echo "<br>";
//5.3. Сумма всех элементов Дан массив [120, 80, 300, 50, 70, 90] 
// – суммы покупок за 6 месяцев. Найдите общую сумму.

$mas = [120, 80, 300, 50, 70, 90];
echo array_sum ($mas);
echo "<br>";

//5.4. Сортировка сумм по убыванию Дан массив [450, 120, 780, 340, 560]. 
// Отсортируйте его по убыванию (используйте встроенную rsort) и выведите.

$arr=[450, 120, 780, 340, 560];
rsort($arr);
    
echo "<br>";
var_dump($arr);

// Двумерные/многомерные массивы
$dmas = [4,5,6,7, [3,5,7,[3,45,7,9,3],3]];
var_dump($dmas[4]); //[3,5,7,3,3]
echo $dmas[4][0]; //3
echo $dmas[4][0][1]; //45
$dmas = [
    [3,4,7,3,8],
    [4,6,8,3,8]
    ];
$user = ["name" => "Иван", "firstname" => "Иванов"];
echo $user["name"]; //Иван
$leads = [
    ["ID" => 124458, "name" => "Заказ№12456","contacts" => [12546, 4587, 63985], "sum" => 458667, "date" => "2025-12-02"],
    ["ID" => 124458, "name" => "Заказ№12456","contacts" => [12546, 4587, 63985], "sum" => 458667, "date" => date("Y-m-d")],
    ["ID" => 124458, "name" => "Заказ№12456","contacts" => [12546, 4587, 63985], "sum" => 458667],
    ["ID" => 124458, "name" => "Заказ№12456","contacts" => [12546, 4587, 63985], "sum" => 458667]
];


for ($i=0; $i < count($leads); $i++) { 
   echo $leads[$i]["ID"] . "<br>";
   echo $leads[$i]["name"] . "<br>";
   echo $leads[$i]["sum"] . "<br>";
}
for ($i=0; $i < count($leads); $i++) { 
    var_dump($leads[$i]["contacts"]);
    for ($j=0; $j < count($leads[$i]["contacts"]); $j++) { 
        echo "<br>".$leads[$i]["contacts"][$j] . "<br>";
    }
}
for ($i=0; $i < count($leads); $i++) { 
    foreach ($leads[$i] as $key => $value) {
    echo "Ключ: $key<br>"; // Ключ: ID; Ключ: name
    echo "Значение: $value<br>"; // Значение: 124458 ; Значение: Заказ№12456
    }
}
foreach ($leads as $lead) { //Сокращенная форма foreach
   echo $value;
}
$leads[0]["name"] = "fjfh;s"; //Заменить название лида в нулевом элементе
*/
// Домашнее задание
// 6.1. Поиск клиента по email
//Дан ассоциативный массив клиентов:
//$clients = [
//['email' => 'ivan@mail.ru', 'name' => 'Иван', 'total' => 150000],
//['email' => 'petr@mail.ru', 'name' => 'Пётр', 'total' => 820000],
//['email' => 'maria@mail.ru', 'name' => 'Мария', 'total' => 1200000],
//];
//Напишите код, который ищет клиента с email 'maria@mail.ru' и выводит его имя и
//сумму.
/*
$clients = [
['email' => 'ivan@mail.ru', 'name' => 'Иван', 'total' => 150000],
['email' => 'petr@mail.ru', 'name' => 'Пётр', 'total' => 820000],
['email' => 'maria@mail.ru', 'name' => 'Мария', 'total' => 1200000],
];
for ($i=0; $i <count($clients); $i++) { 
    
        if ($clients[$i]['email'] === 'maria@mail.ru') {
        echo $clients[$i]['name'] . "<br>";
        echo $clients[$i]['total'] . "<br>";
    }
}
    

  
//6.2. Обновление статуса клиента Дан массив клиентов (с полями id, name, status). 
// У клиента с id=3 измените статус на 'VIP' и выведите обновлённый массив
$clients = [
    ["id" => 1, "name" => "Иван",  "status" => "обычный"],
    ['id' => 2, 'name' => 'Петр',  'status' => 'обычный'],
    ['id' => 3, 'name' => 'Ирина', 'status' => 'обычный'],
];

foreach ($clients as $client) {
    if ($client['id'] === 3) {
        $client['status'] = 'VIP';
        break;
    }
}
unset($client); // важно: разрываем ссылку

print_r($clients);

//6.3. Группировка по менеджерам 
// Дан массив сделок с полями manager и amount: php
//$deals = [
//['manager' => 'Анна', 'amount' => 1000],
//['manager' => 'Иван', 'amount' => 2000],
//['manager' => 'Анна', 'amount' => 1500],
//['manager' => 'Иван', 'amount' => 3000],
//]; Создайте ассоциативный массив, где ключ – имя менеджера, значение – общая сумма сделок этого менеджера. Выведите результат.
$deals = [
['manager' => 'Анна', 'amount' => 1000],
['manager' => 'Иван', 'amount' => 2000],
['manager' => 'Анна', 'amount' => 1500],
['manager' => 'Иван', 'amount' => 3000]
];
$groupdeals=[];
foreach ($deals as $item) {
    $manager = $item['manager'];
    $amount = $item['amount'];
    if (!isset ($groupdeals[$manager])){
        $groupdeals[$manager]=0;
    }
    $groupdeals[$manager] += $amount;
}
print_r ($groupdeals);


//7.1. Сумма продаж по месяцам и менеджерам Дан двумерный массив, где строки – менеджеры, 
// столбцы – месяцы (январь-март):
$sales = [
['manager' => 'Анна', 'jan' => 100, 'feb' => 200, 'mar' => 150],
['manager' => 'Иван', 'jan' => 300, 'feb' => 250, 'mar' => 400]
]; 
//Вычислите общую сумму продаж за каждый месяц (по столбцам) и выведите. 


$sales = [
    ['manager' => 'Анна', 'jan' => 100, 'feb' => 200, 'mar' => 150],
    ['manager' => 'Иван', 'jan' => 300, 'feb' => 250, 'mar' => 400]
];

$totals = [];

foreach ($sales as $row) {
    foreach ($row as $key => $value) {
        if ($key === 'manager') {
            $totals[$value]=[];
            $name=$value;
            continue; // пропускаем имя менеджера
        }
        
        $totals[$name][$key]= $value;
}
}
echo "<pre>";
print_r ($totals);

foreach ($totals as $name => $item) {
     $totalsum = 0;
    foreach ($item as $sum){
       $totalsum = $totalsum +$sum;
    }
   /* $totals[$value] = ($totals[$value] ?? 0) + $value;//проверяет существование $value и сохраняет 0, или прибавляет к существующему след значение
    }
  
    echo "$name: $totalsum\n";
}

 */


/*

//7.2. Поиск клиента с максимальной суммой Дан массив клиентов (каждый – ассоциативный массив 
// с полями id, name, totalSpent).
//  Найдите клиента с максимальной totalSpent и выведите его имя и сумму.

$clients = [ 
    ['id'=> 13678, 'name'=> 'Мария', 'totalSpent'=> 45000],
    ['id'=> 16589, 'name'=> 'Иван', 'totalSpent'=> 76500],
    ['id'=> 19800, 'name'=> 'Сергей', 'totalSpent'=> 22300],
    ['id'=> 45332, 'name'=> 'Юлия', 'totalSpent'=> 67850]
];
$maxclient = $clients[0];
 foreach ($clients as $client) {
        if ($client['totalSpent'] > $maxClient['totalSpent']) {
            $maxClient = $client;
        }
    }

    echo "Клиент с максимальной суммой: " . $maxClient['name'] . " (" . $maxClient['totalSpent'] . ")";




//  7.3. Таблица категорий (рекурсия пока не нужна, просто двумерный массив)
//  Дан массив категорий с подкатегориями (простые вложенные списки): php
$categories = [
['name' => 'Электроника', 'sub' => ['Смартфоны', 'Ноутбуки']],
['name' => 'Одежда', 'sub' => ['Мужская', 'Женская']],
];
// Выведите все категории и подкатегории в виде списка (без вложенности, просто перечислить).

echo "<pre>";
//Дан массив с ID ответственных менеджеров `[12, 12, 5, 8, 5, 12, 3]`. Удалите дубликаты 
// через `array_unique()` и выведите уникальные ID. Подсчитайте количество уникальных менеджеров
$manager = [12, 12, 5, 8, 5, 12, 3];
print_r (array_unique($manager));

print_r (count (array_unique($manager)));

//7.Дан массив сделок `[15000, 23000, 8000, 45000, 12000]`. Отсортируйте по убыванию через `rsort()`,
//  возьмите первые 3 элемента через `array_slice()` и выведите топ-3 сделок
$i = [15000, 23000, 8000, 45000, 12000];
rsort ($i);
$firstthree = array_slice($i, 0, 3);

print_r($firstthree);


//Дан массив строк (названия компаний). 
// Отсортируйте по алфавиту через `sort()` и выведите результат. Затем отсортируйте в обратном порядке через `rsort()`.
 $comp = ['ромашка', 'фиалка','нарцисс','гладиолус','хризантема'];
 sort ($comp);
 print_r($comp);
 rsort ($comp);
 print_r($comp);

//9. Дан массив с пустыми значениями `
// ["Иван", "", "Анна", null, "Петр"]`. Отфильтруйте пустые элементы через `array_filter()` и выведите только непустые.
$i=["Иван", "", "Анна", null, "Петр"];
$j= array_filter($i);
print_r($j);

//10. Дан ассоциативный массив контакта `["id" => 1, "name" => "Иван", "notes" => "звонил", "email" => "ivan@mail.ru"]`. 
// Удалите поле `notes` через `unset()` и выведите обновлённый массив.
// Проверьте через `array_key_exists()`, что поля `notes` больше нет.
 $contact = ["id" => 1, "name" => "Иван", "notes" => "звонил", "email" => "ivan@mail.ru"];
 unset($contact["notes"]);
 print_r ($contact);
 var_dump(array_key_exists('notes', $contact));

 //11. Дан массив из 5 контактов (ассоциативные массивы внутри, каждый с `name`, `status`, `email`). 
 // Выведите имена только тех контактов, у которых `status` = `"active"`, используя `foreach` и условие.
 $clients = [
    ['name'=> 'Елена','status'=>'active','email'=>'gfjk@mail.ru'],
    ['name'=> 'Ирина','status'=>'passiv','email'=>'oiiwl@mail.ru'],
    ['name'=> 'Григорий','status'=>'active','email'=>'45j@mail.ru'],
    ['name'=> 'Юрий','status'=>'active','email'=>'gklo@mail.ru'],
    ['name'=> 'Иван','status'=>'passiv','email'=>'wertk@mail.ru']
 ];
foreach ($clients as $client) {
    if ($client['status'] === 'active') {
        echo $client['name'] . '<br>';
    }
}

//12. Даны два массива: ID контактов из CRM `[101, 102, 103, 104]` и ID из внешней системы `[103, 104, 105, 106]`. 
// Найдите пересечение через `array_intersect()` (контакты в обеих системах) и разность через `array_diff()` 
// (контакты только в CRM). Выведите оба результата.
$crm = [101, 102, 103, 104];
$site = [103, 104, 105, 106];
$s = array_intersect($crm, $site);
print_r ($s);
print_r (array_diff($crm,$site));

//13. Дан массив чисел (суммы сделок). С помощью `array_map()` умножьте каждый элемент на 1.2 (НДС 20%)
//  и верните новый массив. Затем через `array_filter()` отфильтруйте только значения больше 20000. Выведите оба массива.
$g = [45000,11000,3600,4500,19000,17000,87000];
$nds = array_map(fn($value) => $value * 1.2, $g);
print_r ($nds);
$result = array_filter($nds, fn($value) => $value > 20000);
print_r ($result);

//14. Дан массив сделок. Разбейте его на две группы: сделки дороже 10000 и дешевле 10000. 
// Используйте `array_filter()` с замыканием для каждой группы.
//  Выведите обе группы с количеством элементов в каждой.
$s = [4500,3200,6600,14000,18500,1200,8700,65000];
$more10000 = array_filter ($s, function ($sum){
    return $sum>10000;
});                                              //Что значит эта скобочка?
$less10000 = array_filter ($s, function($sum){
    return $sum<10000;
});
print_r ($more10000);
print_r ($less10000);

//15. Создайте многомерный массив: 3 сделки, каждая содержит `id`, `title`, `amount`, `tags` (массив строк).
//  Выведите все сделки в формате «Сделка #ID: title (amount руб.) [тег1, тег2]». 
// Подсчитайте общее количество тегов во всех сделках
$sales =[
    ['id'=>456987,'title'=>'монитор','amount'=>45000,'tags'=>['тег1','тег2','тег3','тег4']],
    ['id'=>58746,'title'=>'ноутбук','amount'=>145000,'tags'=>['тег8','тег5','тег3','тег4']],
    ['id'=>4567,'title'=>'телевизор','amount'=>85000,'tags'=>['тег1','тег4','тег6','тег5']]
];
$totaltags = 0;
foreach ($sales as $sale){
   $tagsString = implode(', ', $sale['tags']);

 echo 'Сделка #' . $sale['id']
        . ': ' . $sale['title']
        . ' (' . $sale['amount'] . ' руб.)'
        . ' [' . $tagsString . ']<br>';

    $totaltags += count($sale['tags']);
}

echo '<br>Общее количество тегов: ' . $totaltags;

//16. Дан массив из 10 сделок, каждая с полями `amount`, `status` (won/lost/in_progress), `manager_id`.
//  Сгруппируйте сделки по менеджеру (создайте ассоциативный массив `managerId → массив сделок`). 
// Для каждого менеджера выведите: количество сделок, общую сумму, сумму выигранных и конверсию.
//  Используйте `foreach` и динамическое построение массива.


$deals = [
    ['amount' => 15000, 'status' => 'won', 'manager_id' => 1],
    ['amount' => 8500, 'status' => 'lost', 'manager_id' => 2],
    ['amount' => 23000, 'status' => 'in_progress', 'manager_id' => 3],
    ['amount' => 47000, 'status' => 'won', 'manager_id' => 1],
    ['amount' => 12000, 'status' => 'lost', 'manager_id' => 2],
    ['amount' => 31500, 'status' => 'won', 'manager_id' => 3],
    ['amount' => 9000, 'status' => 'in_progress', 'manager_id' => 1],
    ['amount' => 54000, 'status' => 'lost', 'manager_id' => 3],
    ['amount' => 28000, 'status' => 'won', 'manager_id' => 2],
    ['amount' => 19500, 'status' => 'in_progress', 'manager_id' => 2]
];

// Группируем сделки по manager_id
$groupedDeals = [];

foreach ($deals as $deal) {
    $managerId = $deal['manager_id'];
    $groupedDeals[$managerId][] = $deal;
}

// Считаем показатели каждого менеджера
foreach ($groupedDeals as $managerId => $managerDeals) {
    $dealsCount = count($managerDeals);
    $totalAmount = 0;
    $wonAmount = 0;
    $wonCount = 0;

    foreach ($managerDeals as $deal) {
        $totalAmount += $deal['amount'];

        if ($deal['status'] === 'won') {
            $wonAmount += $deal['amount'];
            $wonCount++;
        }
    }

    $conversion = ($wonCount / $dealsCount) * 100;

    echo 'Менеджер №' . $managerId . '<br>';
    echo 'Количество сделок: ' . $dealsCount . '<br>';
    echo 'Общая сумма: ' . $totalAmount . ' руб.<br>';
    echo 'Сумма выигранных: ' . $wonAmount . ' руб.<br>';
    echo 'Конверсия: ' . round($conversion, 2) . '%<br><br>';
}
*/
//Урок 6. Функции
/*
function calcDiscount($amount = 1, $percent = 10) { // аргументы со значениями по умолчанию
    $total = $amount * $percent;
    return $total; // вернуть (выбросить за функцию во вне) результат
}

$sum = calcDiscount(1000, 10); //$sum = 10000

echo $sum;

if (calcDiscount(1500, 10) > 10000) {
    echo (calcDiscount(1500, 10) / 5); //3000
}

for ($i=0; $i < calcDiscount(150, 10); $i++) { 
    echo $i * calcDiscount(150, 10); 
}

calcDiscount(); // 10
calcDiscount(15); // 15
calcDiscount(45,); // 450

function isEmailValid($email) {
    echo "<br>".strpos($email, "@")."<br>";
    if (strpos($email, "@") !== false) {//@mail.ru
        return true;
    } else {
        return false;
    }
} 

echo "<br>".isEmailValid('fhj@mail.ru')."<br>";
var_dump(isEmailValid('fhjmail.ru'));
*/
//Дан массив из 15 сделок с полями `id`, `amount`, `status`, `created_at` (дата). Напишите функцию, которая:
//  1) сортирует сделки по сумме (по убыванию); 2) разбивает на 3 категории (крупные > 100000, средние 10000–100000, малые < 10000); 
// 3) для каждой категории вычисляет количество, 
// общую сумму, средний чек; 4) возвращает структурированный отчёт в виде ассоциативного массива. Выведите отчёт.

echo "<pre>";
/*
$sales=[
    ['id'=>3, 'amount' => 15000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>4, 'amount' => 22000, 'status' => 'wait', 'created_at' => "2026-02-21"],
    ['id'=>19, 'amount' => 15000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>22, 'amount' => 3500, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>1, 'amount' => 32556, 'status' => 'reject', 'created_at' => "2026-02-21"],
    ['id'=>66, 'amount' => 150000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>22, 'amount' => 100000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>9, 'amount' => 75000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>78, 'amount' => 15000, 'status' => 'reject', 'created_at' => "2026-02-21"],
    ['id'=>44, 'amount' => 15000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>2, 'amount' => 36000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>19, 'amount' => 5500, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>55, 'amount' => 15000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>99, 'amount' => 78000, 'status' => 'won', 'created_at' => "2026-02-21"],
    ['id'=>33, 'amount' => 15000, 'status' => 'won', 'created_at' => "2026-02-21"],
];
function modifisales ($deals){
    function diff($a, $b){
        return $b['amount']-$a['amount'];
    }
    usort ($deals, "diff");
   
    $categories = [];
    foreach ($deals as $deal){
        if ($deal['amount']>100000){
            if (!isset($categories['крупные'])){
             $categories['крупные']=[];   
            } 
            $categories['крупные'][]=$deal; // добавить в конец

        } elseif($deal['amount']<=100000 && $deal['amount'] >10000){
            if (!isset($categories['средние'])){
                $categories['средние']=[];
            }
            $categories['средние'][]=$deal;

        } elseif ($deal['amount']<=10000){
            if (!isset($categories['малые'])){
                $categories['малые']=[];

        }
        $categories['малые'][]=$deal;
    }
    $result = [];
    foreach ($categories as $name => $categorydeals){ 
        $count = count($categorydeals);
        $total = 0;

        foreach ($categorydeals as $deal){
            $total += $deal ['amount'];
        }
        $result[$name] = ['deals'=>$categorydeals, 'count'=> $count, 'total'=> $total, 'average'=> $count > 0 ? $total / $count : 0];
        //Если $count > 0, средний чек равен $total / $count
        //Если сделок нет ($count равен 0), средний чек равен 0
    }
    
    
    }
  
    return [$deals,$categories,$result];

    


}

$result = modifisales ($sales);
print_r ($result);
*/
//17. Дан массив из 8 контактов, каждый с полями `name`, `email`, `phone`, `company`. 
// Напишите функцию `deduplicateContacts($contacts)`, которая находит дубликаты по email и объединяет их: 
// берёт данные из более «полного» контакта (где больше заполненных полей). Возвращает массив уникальных контактов.
//  Выведите количество до и после дедупликации.

    $contacts = [ 
        ['name'=>'Светлана', 'email'=>'svet@mail.ru', 'phone'=>'+79654547878', 'company'=>'Ромашка'],
        ['name'=>'Николай', 'email'=>'nik@mail.ru', 'phone'=>'+79648956455', 'company'=>'Василек'],
        ['name'=>'Иван', 'email'=>'ivan@mail.ru', 'phone'=>'', 'company'=>''],
        ['name'=>'Татьяна', 'email'=>'svet@mail.ru', 'phone'=>'+79654547878', 'company'=>'Ромашка'],
        ['name'=>'Любовь', 'email'=>'l77@mail.ru', 'phone'=>'+79657897878', 'company'=>'Фиалка'],
        ['name'=>'Светлана', 'email'=>'svet@mail.ru', 'phone'=>'+79654547878', 'company'=>''],
        ['name'=>'Иван', 'email'=>'ivan@mail.ru', 'phone'=>'+79154447878', 'company'=>'Нарцисс'],
        ['name'=>'Игорь', 'email'=>'702@mail.ru', 'phone'=>'+79654597878', 'company'=>'Ромашка'],
        ];
echo count ($contacts);

        function deduplicateContacts($contacts){
                for ($i=0; $i <count($contacts) ; $i++) { 
                              
                for ($j= $i+1; $j <count ($contacts); $j++) { 
                            if ($contacts[$i]['email'] === $contacts[$j]['email']){
                                foreach($contacts[$i] as $key => $item){
                           if ($contacts[$i][$key] == '' || $contacts[$i][$key] == 0){
                              $contacts[$i][$key] == $contacts[$j][$key];
                              echo $contacts[$i][$key].'<br>';
                           }
                         }
                         $contacts = array_filter ($contacts, function ($index) use($j){ //фильтрация массива
                            return $index !== $j;
                         });
                    }
                }
            }
                
             return $contacts;

            }

        $contacts = deduplicateContacts($contacts);
        /*
        print_r ($contacts);
*/
?>