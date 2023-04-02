<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Contact;
use App\Http\Requests\InquiryRequest;

class DepartmentController extends Controller
{
    /**
     * 問い合わせ情報の入力画面
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function inquiry()
    {
        $departments = Department::get();
        return view("inquiry", ['departments' => $departments]);
    }

    /**
     * 問い合わせ情報をデータベースに保存
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function send(Contact $contact, InquiryRequest $request)
    {
        $contact->create([
            'department_id' =>  $request->name,
            'name' =>  $request->inquiry_name,
            'email' =>  $request->email,
            'content' =>  $request->content,
            'age' =>  $request->age,
            'gender' =>  $request->gender,
        ]);
        return redirect()->route('inquiry.index');
    }

    /**
     * 問い合わせ情報の一覧を表示
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $contacts = Contact::with('department')->get();
        return view("index", compact('contacts'));
    }
}
