@if($categories)
  @foreach($categories as $category)
    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category->id}}">
      {{$category->name}}
    </button>
  @endforeach
@endif

