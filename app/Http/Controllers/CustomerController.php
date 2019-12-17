<?php

namespace App\Http\Controllers;

use App\Constant;
use App\Customer;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function showSignInPage()
    {
        return view(Constant::PATH_SIGN_IN);
    }

    public function doSignIn(Request $req)
    {
        $email = $req->email;
        $password = $req->password;

        $customer = Customer::where('customer_email', '=', $email)
            ->where('customer_password', '=', md5($password))
            ->first();

        if ($customer) {
            Session::put('customer_id', $customer->customer_id);
            return Redirect::to(Constant::URL_INDEX);
        } else {
            Session::put('msg_sign_in_fail', 'Sign in fail. Please check again.');
            return Redirect::to(Constant::URL_SIGN_IN);
        }
    }

    public function showSignUpPage()
    {
        return view(Constant::PATH_SIGN_UP);
    }

    public function doSignUp(Request $req)
    {
        $email = $req->email;
        $name = $req->name;
        $address = $req->address;
        $phone = $req->phone;
        $password = $req->password;
        $rePassword = $req->re_password;

        if ($password != $rePassword) {
            Session::put('msg_sign_up_fail', 'Password incorrect.');
            return Redirect::to(Constant::URL_SIGN_IN);
        }

        $data = [];
        $data['customer_email'] = $email;
        $data['customer_name'] = $name;
        $data['customer_address'] = $address;
        $data['customer_phone'] = $phone;
        $data['customer_password'] = md5($password);
        $data['customer_gender'] = '';
        $data['customer_note'] = '';
        $data['customer_created_at'] = time();

        Customer::insert($data);
        Session::put('msg_sign_up_success', 'Sign up successfully. Please sign in.');
        return Redirect::to(Constant::URL_SIGN_IN);
    }

    public function doSignOut()
    {
        Session::forget('customer_id');
        Cart::destroy();
        return Redirect::to(Constant::URL_INDEX);
    }
}
