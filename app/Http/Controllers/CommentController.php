<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function doSubmitComment(Request $req)
    {
        $commentContent = $req->comment_content;
        $customerId = Session::get('customer_id');
        $productId = $req->product_id;

        $data = [];
        $data['customer_id'] = $customerId;
        $data['comment_content'] = $commentContent;
        $data['comment_created_at'] = time();

        Comment::insert($data);
        return Redirect::to(Constant::URL_PRODUCT_DETAIL . '/' . $productId);
    }

    public function getListCommentByProductId($productId)
    {
        $listComment = Comment::where('product');
    }

}
