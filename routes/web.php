<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', [PageController::class, 'loginExecutive']);

Route::get('/login/executive',            [PageController::class, 'loginExecutive']);
Route::post('/login/executive',           [AuthController::class, 'loginExecutiveAuth']);

Route::get('/dashboard',                  [PageController::class, 'dashbordCount']);
Route::post('/dashboard',                 [PageController::class, 'dashbordCount']);


Route::get('/profile',                    [ProfileController::class, 'profileView']);
Route::post('/profile/update',            [ProfileController::class, 'profileUpdate']);

// Route::get('/members/allMember',          [PageController::class, 'showAllMembersList']);
Route::get('/members/executive',          [MemberController::class, 'executiveList']);
Route::get('/members/volunteer',          [MemberController::class, 'volunteerList']);
Route::post('/members/add',               [MemberController::class, 'addMember']);
Route::get('/members/add',                [PageController::class, 'addMember']);

Route::get('/events/allEvents',           [EventController::class, 'allEvents']);
Route::get('/events/create',              [PageController::class, 'createEvent']);
Route::post('/events/create/submit',      [EventController::class, 'createEventSubmit']);
Route::get('/events/manage',              [PageController::class, 'manageEvents']);
Route::get('/events/ongoing',             [PageController::class, 'ongoingEvents']);

Route::get('/events/archieve',            [PageController::class, 'archieveEvents']);
// ESPENSE _______------EXPENSE 






Route::get('/events/expenseLog',          [EventController::class, 'expenseLog']);
Route::post('/events/expenseLog/submit',  [EventController::class, 'expenseLogSubmit']);
Route::get('/events/fundingLog',          [EventController::class, 'fundingLog']);
Route::post('/events/fundingLog/submit',  [EventController::class, 'fundingLogSubmit']);


Route::get('/donation/internal',          [DonationController::class, 'donationInternal']);
Route::post('/donation/internal/submit',  [DonationController::class, 'donationInternalSubmit']);
Route::get('/donation/external',          [DonationController::class, 'donationExternal']);
Route::post('/donation/external/submit',  [DonationController::class, 'donationExternalSubmit']);







Route::get('/events/eventStatement',      [EventController::class, 'eventStatement']);
Route::POST('/events/eventStatementPrint', [EventController::class, 'eventStatementPrint']);
Route::get('/events/eventFinancialLog/expense', [EventController::class, 'eventFinancialLogExpense']);
Route::get('/events/eventFinancialLog/funding', [EventController::class, 'eventFinancialLogFunding']);


Route::get('/notice/create', [NoticeController::class, 'noticeCreatePage']);
Route::POST('/notice/create/submit', [NoticeController::class, 'noticeCreatePageSubmit']);
Route::get('/notice/archieve', [NoticeController::class, 'noticeArchieve']);
Route::get('/notice/read/{id}', [NoticeController::class, 'noticeRead']);

Route::get('/application/view', [PageController::class, 'applicationView']);
Route::get('/application/read', [PageController::class, 'applicationRead']);
Route::get('/application/feedback', [PageController::class, 'applicationFeedback']);


Route::get('/financial/internalDonationLog', [DonationController::class, 'internalDonationLog']);
Route::get('/financial/externalDonationLog', [DonationController::class, 'externalDonationLog']);

Route::get('/availableVolunteer', [PageController::class, 'availableVolunteer']);


// volunteer

Route::get('/login/volunteer', [PageController::class, 'loginVolunteer']);
Route::post('/login/volunteer', [AuthController::class, 'loginVolunteerAuth']);


Route::get('/events/showEvent/ongoing', [EventController::class, 'ongoingEvents']);
Route::get('/events/showEvent/archieve', [EventController::class, 'archieveEvents']);

Route::get('/notice/showNotice', [NoticeController::class, 'vNoticeList']);
Route::get('/notice/readNotice/{id}', [NoticeController::class, 'vNoticeRead']);

Route::get('/my-free-time', [PageController::class, 'myFreeTime']);
Route::get('/sent-application', [PageController::class, 'sentApplication']);


Route::get('/logout', [AuthController::class, 'logout']);
