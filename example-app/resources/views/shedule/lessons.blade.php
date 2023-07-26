<?php
function formatDateString($dateString)
{
    $timestamp = strtotime($dateString);
    setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
    return strftime('%A - %Y-%m-%d', $timestamp);
}
function formatType($type)
{
    if ($type == "Lection")
        return "Лекция";
    if ($type == "Labwork")
        return "Лабораторная работа";
    else
        return "Практика";
}
?>

    <!DOCTYPE html>
<html>
<head>
    <title>Учебный день</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
<h1 style="color: #333; margin-bottom: 20px;text-align: center">Расписание на <?= formatDateString($lessons->first()->date_time) ?></h1>
<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
    <tr>
        <th style="padding: 12px; text-align: center; background-color: #007bff; color: #fff;">Группа</th>
        <th style="padding: 12px; text-align: center; background-color: #007bff; color: #fff;">Часы занятий</th>
        <th style="padding: 12px; text-align: center; background-color: #007bff; color: #fff;">Преподователь</th>
        <th style="padding: 12px; text-align: center; background-color: #007bff; color: #fff;">Дисциплина</th>
        <th style="padding: 12px; text-align: center; background-color: #007bff; color: #fff;">Тип занятия</th>
        <th style="padding: 12px; text-align: center; background-color: #007bff; color: #fff;">Кабинет</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($lessons as $lesson)
        <tr style="text-align: center; background-color: {{ $loop->iteration % 2 == 0 ? '#f2f2f2' : 'inherit' }};">
            <td style="padding: 12px;">{{ $lesson->name_group }}</td>
            <td style="padding: 12px;">{{ $lesson->hours }}</td>
            <td style="padding: 12px;">{{ $lesson->teacher }}</td>
            <td style="padding: 12px;">{{ $lesson->discipline }}</td>
            <td style="padding: 12px;">{{ formatType($lesson->type) }}</td>
            <td style="padding: 12px;">{{ $lesson->room }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
