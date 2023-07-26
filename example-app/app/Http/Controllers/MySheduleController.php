<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MySheduleController extends Controller
{
    //отображение всех расписаний по датам
    public function index()
    {
        $shedules = DB::table('shedules')->select('date')->distinct()->get();
        return view('shedule.index', compact('shedules'));
    }
    //Получаем все даты уроков по одному расписанию
    public function getLessonDates($selectedDate)
    {
        $dates = DB::table('lessons as l')
            ->join('groups as g', 'g.id', '=', 'l.id_group')
            ->join('shedules as s', 's.id', '=', 'g.shedule_id')
            ->where('s.date', $selectedDate)
            ->groupBy('l.date_time')
            ->select('l.date_time')
            ->get();
        return view('shedule.lesson_dates', compact('selectedDate', 'dates'));
    }

    //Получаем уроки по выбранной дате т.е. день
    public function getLessons($selectedDate, $lessonDate)
    {
        $lessons = DB::table('lessons as l')
            ->join('groups as g', 'g.id', '=', 'l.id_group')
            ->join('shedules as s', 's.id', '=', 'g.shedule_id')
            ->where('s.date', $selectedDate)
            ->where('l.date_time', $lessonDate)
            ->select('l.*')
            ->get();
        return view('shedule.lessons', compact('lessons'));
    }
}
