{{ csrf_field() }}

<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
    <label for="contact" class="col-md-4 control-label">Contact</label>
    <div class="col-md-12">
        <select name="contact" id="contact" class="form-control">
            <option value="">Please select...</option>
            @foreach($contacts as $contact)
                <option value="{{ $contact->id }}"
                    {{ $contact->id == old('contact', $contact->id) ? ' selected' : ''}}>
                    {{ $contact->first_name }}
                    {{ $contact->last_name }} From:
                    {{ $contact->company->name }}
                </option>
            @endforeach
        </select>
        @if ($errors->has('contact'))
            <span class="help-block">
                <strong>{{ $errors->first('contact') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('product') ? ' has-error' : '' }}">
    <label for="product" class="col-md-4 control-label">Product</label>
    <div class="col-md-12">
        <input id="product" type="text" class="form-control" name="product"
               value="{{ old('product', $order->product) }}">
        @if ($errors->has('product'))
            <span class="help-block">
                <strong>{{ $errors->first('product') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    <label for="price" class="col-md-4 control-label">Price Offer</label>
    <div class="col-md-12">
        <input id="price" type="text" class="form-control" name="price"
               value="{{ old('price', $order->price) }}">
        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
    </div>
</div>

