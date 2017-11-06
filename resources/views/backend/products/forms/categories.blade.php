<div class="row">
 <div class="col-md-12">
  <h5 class="title">Categorías:</h5>
  <div class="form-group">
   @foreach ($cat as $c)
    <div class="checkbox checkbox-inline">
     <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
     @if (isset($prod))
     {!! Form::checkbox('categories[]', $c -> id ,$prod->categories->contains( $c -> id)) !!}
     @else
     {!! Form::checkbox('categories[]', $c -> id , false) !!}
     @endif
     {!! Form::label( $c -> category_name ) !!}
    </div>
   @endforeach
  </div>
 </div>
</div>
