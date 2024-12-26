<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function crm()
    {
        return view('dashboard.dashboard.crm');
    }

    public function ecommerce()
    {
        return view('dashboard.dashboard.ecommerce');
    }

    public function cryptoCurrency()
    {
        return view('dashboard.dashboard.crypto-currency');
    }

    public function investment()
    {
        return view('dashboard.dashboard.investment');
    }

    public function lms()
    {
        return view('dashboard.dashboard.lms');
    }

    public function nft()
    {
        return view('dashboard.dashboard.nft');
    }

    public function email()
    {
        return view('dashboard.email');
    }

    public function chatMessage()
    {
        return view('dashboard.chat-message');
    }

    public function calendar()
    {
        return view('dashboard.calendar');
    }

    public function kanban()
    {
        return view('dashboard.kanban');
    }

    public function invoiceList()
    {
        return view('dashboard.invoice.list');
    }

    public function invoicePreview()
    {
        return view('dashboard.invoice.preview');
    }

    public function invoiceAdd()
    {
        return view('dashboard.invoice.add');
    }

    public function invoiceEdit()
    {
        return view('dashboard.invoice.edit');
    }

    public function textGenerator()
    {
        return view('dashboard.ai-application.text-generator');
    }

    public function codeGenerator()
    {
        return view('dashboard.ai-application.code-generator');
    }

    public function imageGenerator()
    {
        return view('dashboard.ai-application.image-generator');
    }

    public function voiceGenerator()
    {
        return view('dashboard.ai-application.voice-generator');
    }

    public function videoGenerator()
    {
        return view('dashboard.ai-application.video-generator');
    }

    public function wallet()
    {
        return view('dashboard.crypto-currency.wallet');
    }

    public function typography()
    {
        return view('dashboard.component.typography');
    }

    public function colors()
    {
        return view('dashboard.component.colors');
    }

    public function button()
    {
        return view('dashboard.component.button');
    }

    public function dropdown()
    {
        return view('dashboard.component.dropdown');
    }

    public function alert()
    {
        return view('dashboard.component.alert');
    }

    public function card()
    {
        return view('dashboard.component.card');
    }

    public function carousel()
    {
        return view('dashboard.component.carousel');
    }

    public function avatar()
    {
        return view('dashboard.component.avatar');
    }

    public function progress()
    {
        return view('dashboard.component.progress');
    }

    public function tabs()
    {
        return view('dashboard.component.tabs');
    }

    public function pagination()
    {
        return view('dashboard.component.pagination');
    }

    public function badges()
    {
        return view('dashboard.component.badges');
    }

    public function tooltip()
    {
        return view('dashboard.component.tooltip');
    }

    public function videos()
    {
        return view('dashboard.component.videos');
    }

    public function starRating()
    {
        return view('dashboard.component.star-rating');
    }

    public function tags()
    {
        return view('dashboard.component.tags');
    }

    public function list()
    {
        return view('dashboard.component.list');
    }

    public function radio()
    {
        return view('dashboard.component.radio');
    }

    public function switch()
    {
        return view('dashboard.component.switch');
    }

    public function imageUpload()
    {
        return view('dashboard.component.image-upload');
    }

    public function form()
    {
        return view('dashboard.form');
    }

    public function formLayout()
    {
        return view('dashboard.form.layout');
    }

    public function formValidation()
    {
        return view('dashboard.form.validation');
    }

    public function wizard()
    {
        return view('dashboard.form.wizard');
    }

    public function tableBasic()
    {
        return view('dashboard.table.basic');
    }

    public function tableData()
    {
        return view('dashboard.table.data');
    }

    public function lineChart()
    {
        return view('dashboard.chart.line');
    }

    public function columnChart()
    {
        return view('dashboard.chart.column');
    }

    public function pieChart()
    {
        return view('dashboard.chart.pie');
    }

    public function widget()
    {
        return view('dashboard.widget');
    }

    public function userList()
    {
        return view('dashboard.user.list');
    }

    public function userGrid()
    {
        return view('dashboard.user.grid');
    }

    public function addUser()
    {
        return view('dashboard.user.add');
    }

    public function viewProfile()
    {
        return view('dashboard.user.view-profile');
    }

    public function signIn()
    {
        return view('dashboard.authentication.sign-in');
    }

    public function signUp()
    {
        return view('dashboard.authentication.sign-up');
    }

    public function forgotPassword()
    {
        return view('dashboard.authentication.forgot-password');
    }

    public function gallery()
    {
        return view('dashboard.gallery');
    }

    public function pricing()
    {
        return view('dashboard.pricing');
    }

    public function faq()
    {
        return view('dashboard.faq');
    }

    public function error()
    {
        return view('dashboard.error');
    }

    public function termsCondition()
    {
        return view('dashboard.terms-condition');
    }

    public function company()
    {
        return view('dashboard.setting.company');
    }

    public function notification()
    {
        return view('dashboard.setting.notification');
    }

    public function notificationAlert()
    {
        return view('dashboard.setting.notification-alert');
    }

    public function theme()
    {
        return view('dashboard.setting.theme');
    }

    public function currencies()
    {
        return view('dashboard.setting.currencies');
    }

    public function language()
    {
        return view('dashboard.setting.language');
    }

    public function paymentGateway()
    {
        return view('dashboard.setting.payment-gateway');
    }
}
