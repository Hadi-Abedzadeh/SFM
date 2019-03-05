<?php

namespace Modules\Card;


use Modules\Card\Models\Card;

class Helper
{
    public static function create_box($id)
    {
        $cards = Card::wherePage_id($id)->whereActive(1)->get();
        foreach ($cards as $card) {
            echo "<div class='col-lg-3'>
                      <div class='panel panel-default'>
                        <div class='panel-heading'><h4>$card->title</h4></div>
                        <div class='panel-body'>$card->body</div>
                      </div>
                    </div>";
        }
    }

    public static function create_box_first($id)
    {
        $cards = Card::wherePage_id($id)->whereActive(1)->get();
        foreach ($cards as $card) {
            echo "<div class='productimg'><img src='$card->imgUrl' draggable='false'></div>
            <div class='productcontent'>
                <h1>$card->title</h1>
                <p>$card->body</p>
                <a href='#' class='btn'>VIEW MORE</a>
            </div>";
        }
    }

    public static function create_box_first_fa($id)
    {
        $cards = Card::wherePage_id($id)->whereActive(1)->get();
        foreach ($cards as $card) {
            echo "
            <div class=\"bg-obj-top\"><img src=\"/sfm-fa/assets/images/sample/photo-2.jpg\" data-speed=\"-1\" class=\"img-parallax\" alt=\"\" title=\"\"></div>
            <div class=\"bg-obj-top-left\"><img src=\"/sfm-fa/assets/images/sample/path-1.svg\" alt=\"\" title=\"\" width=\"481px\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"content\">
                        <h3>$card->title</h3>
                        <p>
                        $card->body
                        </p>
                        <a href=\"#\">اطلاعات بیشتر</a>
                    </div>
                    <div class=\"thumbnail tekoonbede\">
                        <img src=\"/sfm-fa/assets/images/sample/Product-head.png\" alt=\"\" title=\"\">
                    </div>
                </div>
            </div>
            ";
        }
    }

    public static function create_box_second($id)
    {
        $cards = Card::wherePage_id($id)->whereActive(1)->get();
        foreach ($cards as $card) {
            echo "<div class='product'>
                    <div class='productthumb'><img src='$card->imgUrl' draggable='false'></div>
                    <div class='producttitle'>$card->title</div>
                    <a href='#' class='productmore'>VIEW MORE</a>
                </div>";
        }
    }

    public static function create_box_news($id)
    {
        $cards = Card::wherePage_id($id)->whereActive(1)->get();
        foreach ($cards as $card) {
            echo "<div class='newsproduct'>
                    <div class='newsproductthumb'><img src='$card->imgUrl' draggable='false'></div>
                    <div class='newsproductcontent'>
                        <h4>$card->title</h4>
                        <p>$card->body</p>
                        <a href='#' class='newsproductmore'>VIEW MORE</a>
                    </div>
                    </div>
                    ";

        }
    }
}
