<!DOCTYPE html>
<html>
<head>
    <title>Расписания</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
<div style="width: 80%; margin: 40px;text-align: center;justify-content: center">
    <h1 style="color: #333; margin-bottom: 20px;">Расписания</h1>
    <label for="selected_date" style="display: block; margin-bottom: 10px;">Выбирите рсписание по дате</label>
    <select name="selected_date" id="selected_date" style="margin-bottom: 20px; background-color: #fff; padding: 8px; border: 2px solid #007bff; border-radius: 5px; font-size: 16px; color: #333;">
        @foreach ($shedules as $schedule)
            <option value="{{ $schedule->date }}">{{ $schedule->date }}</option>
        @endforeach
    </select>
    <a id="getShedule" href="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>/<?=$shedules->first()->date.'/lessons'?>"
       style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Перейти к расписанию</a>
</div>
<script>
    document.getElementById('selected_date').addEventListener('change', function() {
        const myLink = document.getElementById('getShedule');
        myLink.href = document.URL + this.value+"/lessons";
    });
</script>
</body>
</html>
