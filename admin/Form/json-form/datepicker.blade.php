<!-- Basic text input -->
<?php
$tital= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset


@isset($value_key)
<div class="form-group item" data-number="{{$value_key}}">
    <div class="col-lg-12">
        <input type="text" name="{{$jsonName}}[{{$value_key}}][{{$inputName}}]" id="datepicker-{{$value_key}}" value="{{$value}}" class="form-control daterange-basic" placeholder="{{__('Eg: When and where does the tour end?')}}">
    </div>
</div>
@else
<div class="form-group item" data-number="__number__">
    <div class="col-lg-12">
        <input type="text" __name__="{{$jsonName}}[__number__][{{$inputName}}]" id="datepicker-__number__"  value="{{$value}}" class="form-control daterange-basic" placeholder="{{__('Eg: When and where does the tour end?')}}">
    </div>
</div>
@endisset
        {{-- dd($attributes); --}}

<!-- /basic text input -->
