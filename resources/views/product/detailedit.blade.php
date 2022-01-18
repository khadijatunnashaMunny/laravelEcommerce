<div>
    <form action={{url('/updatedetail/'.$product->id)}} method="POST">
        @csrf
        <input type="text" name="status" placeholder="update  status" value="{{$product->status}}">
        <input type="text" name="payment_status" placeholder="update  payment status" value="{{$product->payment_status}}">

        <button type="submit" name="submit" value="submit">submit</button>
    </form>
    <a href="/admin_get_product">
        <button>Back</button>
    </a>

</div>