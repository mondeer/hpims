<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'RegisterCtrl@register');

Route::post('/register', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@login');



Route::get('/dashboard', function (){
  return view('system.dashboard');
});

Route::get('/patient/enroll', 'PatientCtrl@newPatient');

Route::post('/patient/enroll', 'PatientCtrl@enrollPatient');

Route::get('/patient/view', 'PatientCtrl@viewPatient');
