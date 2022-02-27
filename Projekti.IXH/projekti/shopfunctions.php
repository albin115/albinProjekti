<?php 

function component($productname,$productprice,$productimg,$productid){
    $element = "
    <div class=\"wrapper\">
  <div class=\"outer\">
    <div class=\"content animated fadeInLeft\">
      <span class=\"bg animated fadeInDown\">EXCLUSIVE</span>
      <h1 class=\"h1Card\"><br/> $productname</h1>
      <p class=\"pCard\">Jordan's popularity is because it offers a certain exclusivity level,incomparable to other footwear
      of its type. These shoes are manufactured with extremely high-quality materials, including full-grain 
      calfskin and premium leather uppers. With these materials being used, there's a creation of a sense of durability.</p>
      
      <div class=\"buttonCard\">
        <a>$$productprice</a><a class=\"cart-btn\" href=\"#\"><i class=\"cart-icon ion-bag\"></i>ADD TO CART</a>
      </div>
      
    </div>
    <img src=\"$productimg\" width=\"300px\" class=\"animated fadeInRight\" id=\"imgCard\">
  </div>
  <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
</div>
    ";
    echo $element;
}

?>