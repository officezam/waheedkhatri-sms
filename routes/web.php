<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('backend.add_mosque');})->name('add_mosque_form');
Route::get('/',  'MosqueController@mosqueRecord');
Route::get('add-time', function () {return view('backend.add_time');})->name('add_time_form');
Route::get('update-time/{namaz_id}', 'MosqueController@getNamazTime')->name('updae-time');
Route::get('delete-mosque-data/{mosque_id}', 'MosqueController@deleteMosqueData')->name('delete-mosque-data');

Route::post('Add-Mosque', 'MosqueController@saveMosque')->name('add_mosque');
Route::get('Mosque', 'MosqueController@mosqueRecord')->name('mosque_record');
Route::post('save-namaz-time', 'MosqueController@saveNamazTime');

Route::get('add-event', 'EventController@eventAdd')->name('add_event_form');
Route::post('save-event-time', 'EventController@saveEventTime');
Route::get('Events', 'EventController@eventsRecord')->name('events_record');
Route::get('updae-event-time/{event_id}', 'EventController@getEventTime')->name('updae-event-time');
Route::get('delete-event-data/{event_id}', 'EventController@deleteEventData')->name('delete-event-data');


Route::get('subscriber', 'SubscribeUserController@subscriberRecod')->name('subscriber-data');
Route::get('subscribe-user', 'SubscribeUserController@index')->name('subscribe_user');
Route::post('subscribe-user', 'SubscribeUserController@saveSubscriber')->name('save_subscriber');
Route::get('delete-subscriber-data/{user_id}', 'SubscribeUserController@deleteSubscriber')->name('delete-subscriber-data');

Route::get('sms-template', 'SmsSendController@smsTemplate')->name('sms_template');
Route::post('sms-template-update', 'SmsSendController@updateTemplate')->name('tempalte_update');

Route::get('send-sms', 'SmsSendController@index')->name('send_sms');
Route::get('sms-sending', 'SmsSendController@smsSending')->name('sending_sms');