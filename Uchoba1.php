//Создать массив из 5 дат. Скриптом определить сколько дней находится в пределах между двумя соседними датами
<!-- date = ['31-12-2018', '16-01-2019', '20-02-2019', '21-02-2019', '08-03-2019'];

for ($i = 0; $i + 1 < count($date); $i++) {
    $startDate = new DateTime($date[$i]);
    $endDate = new DateTime($date[$i + 1]);
    $int = $startDate->diff($endDate);
    echo '<h5>' . $date[$i] . ' - ' . $date[$i + 1] . ' - ' . $int->format('%d days') . '</h5>';
}
 -->
