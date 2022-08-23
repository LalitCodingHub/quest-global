@extends('../default-prodetail')

@section('content')
<br><br><br>
@php
        $totalquantity = 0 ;
        $totalamount = 0;
    foreach($cartproduct as $product){
        $totalquantity = $totalquantity+$product->prod_qty;
        $totalamount= $totalamount+$product->productDetail->price*$product->prod_qty;
    }
@endphp
<div class = "header">
    <div class = "headerCenter">
        <a href = "">BAG --------</a>
        <a href = "">ADDRESS --------</a>
        <a href = "">PAYMENT</a>    
    </div>
    <div class = "headerRight">
        <img class = "image2" alt="payment-image" src = "{{asset('images/sprite-secure.png')}}"/>
        <h4 style = "float: right;">100% SECURE</h4>
    </div>
</div>
        <div class = "placeOrder" id= "placeOrder">
            <div class = "grid-placeOrder">
                <p class = "child1">COUPONS</p>
                <p class = "child2"><b style = "color: black;">Apply Coupons</b></p>
                <button class = "child3">APPLY</button>
                <hr class = "child4">
                <p class = "child5">PRICE DETAILS(1 Item)</p>
                <p class = "child6">Total MRP</p>
                <p class = "child7">Rs. {{$totalamount}}</p>
                <p class = "child8">Discount on MRP</p>
                <p class = "child9">- Rs. 0</p>
                <p class = "child10">Coupon Discount</p>
                <button class = "child11">Apply Coupon</button>
                <p class = "child12">Convenience Fee <b style = "color: #ff3f6c;;">Know More</b></p>
                <p class = "child13"><s>Rs99</s>Free</p>
                <hr class = "child14">
                <p class = "child15">Total Amount</p>
                <p class = "child16">Rs. {{$totalamount}}</p>
                <button class = "child17" href="#">PLACE ORDER</button>

            </div>
        </div>
            
            
            
</div>
    <div>   
        <div class = "center" id = "center">
            <div class = "container4">
                <h4>Available Offer</h4>
                <p>
                    . 10% Instant Discount on SBI Credit Cards on a minimum spend of Rs 3000. TCA<br><br>
                    <span id = "tca">...</span><span id = "more">
                    . 5% Unlimited Cashback on Flipkart Axis Bank Ctedit Card TCA<br><br>
                    . 10% Cashback upto Rs 250 on a minimum spend of Rs 1500 with PayZapp TCA<br><br>
                    . Upto Rs 500 Cashback on Mobikwik wallet transaction of min Rs 999. Use code MBK500 on mobikwik TCA<br><br>
                    . Flat Rs 200 Cashback on first Airtel Payments Bank transcation on myntra on a min spend of Rs 2000 TCA</span>
                </p>
                <button id="myBtn">Show More</button>
            </div>
            
            <div class = "total">
                <h3 style = "float: left; font-size: larger; color: black; font-weight: 700;">My Shopping Bag({{$totalquantity}} item)</h3>
                <h3 style = "float: right; font-size: larger; color: black; font-weight: 700;">Total Amount Rs. {{$totalamount}}</h3>
            </div>
            <br><br><br>
            <div class = "par">
                @foreach($cartproduct as $product)
                <div id = "addImages">
                    
                    {{-- $product->productDetail->Productimage->image; --}}

                        <img id = "img2" src = "{{asset('images/'.$product->productDetail->Productimage->image)}}"/>
                        <div class = "child">
                            <p class = "p">{{$product->productDetail->name}}<br>
                                {{$product->productDetail->description}}<h5>Sold By : Vision Star</h5></p>
                            <select name="size" id="size">
                                <option value="SIZE:L">SIZE: L</option>
                                <option value="SIZE:M">SIZE: M</option>
                                <option value="SIZE:S">SIZE: S</option>
                                <option value="SIZE:Xl">SIZE: XL</option>
                            </select>
                            <select name="quantity" id="quantity">
                                <option value="{{$product->prod_qty}}">Qty: {{$product->prod_qty}}</option>
                               
                            </select>
                            
                            <h6 style = "color: cornflowerblue;">Delivery By 28 JUL 2021</h6>
                            
                        </div>
                        <div>
                            <p id = "discount">Rs. {{$product->productDetail->price}}</p><br>
                            <p id = "discount">Total: Rs. {{$product->productDetail->price*$product->prod_qty}}</p>
                        </div>
                </div>
                @endforeach
            </div>
           
    </div>             

</div>
@endsection