@component('mail::message')

  # Order invoice

  ## To: {{$customer['username']}} <br>

  ### Address: {{$customer['address']}}<br>

  ### Phone: {{$customer['phone_number']}}<br>

@component('mail::table')
  | #                | Product          | Price     | Quanlity        | Total        | Status       |
  | ---------------- |:----------------:| ------------:| ------------:| ------------:| ------------:|
@foreach($ordersMail as $order)
  |#{{$order->code}} |{{$order->product}}|{{$order->price}}$|{{$order->quality}}|{{$order->total}}$|{{$order->status}}|
@endforeach
@endcomponent
<br>

Thank you for your business,<br>
{{ config('app.name') }}
@endcomponent
