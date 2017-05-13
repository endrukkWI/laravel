{{$customer->name}}
<ul>
@foreach($customer->orders as $order)
    <li>{{$order->name}}</li>

@endforeach
</ul>