<!DOCTYPE html>
<html>
<head>
    <title>Дни</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
<div style="width: 80%; margin: 40px;text-align: center;justify-content: center">
    <h1 style="color: #333; margin-bottom: 20px;">Даты, в которых будут проходить занятия</h1>
    <label for="selected_lesson_date" style="display: block; margin-bottom: 10px;">Выберите дату:</label>
    <select name="selected_lesson_date" id="selected_lesson_date" style="margin-bottom: 20px; background-color: #fff; padding: 8px; border: 2px solid #007bff; border-radius: 5px; font-size: 16px; color: #333;">
        @foreach ($dates as $LessonDay)
            <option value="{{ $LessonDay->date_time }}">{{ $LessonDay->date_time }}</option>
        @endforeach
    </select>
    <a id="getDay" href="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>/<?=$dates->first()->date_time?>"
       style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Перейти к дню</a>
</div>
<script>
    document.getElementById('selected_lesson_date').addEventListener('change', function() {
        const myLink = document.getElementById('getDay');
        myLink.href = document.URL + "/" + this.value;
    });
</script>
</body>
</html>
