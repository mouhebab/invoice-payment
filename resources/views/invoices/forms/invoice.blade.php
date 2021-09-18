<div class="form-group">
    <label>Product</label>
    <select name="product_id" class="form-control">
        @foreach($products as $key => $name)
            <option value="{{ $key }}" {{ old('product_id', $invoice->product_id) == $key ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Amount</label>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control" name="amount" value="{{ old('amount', $invoice->getCurrencyFormat($invoice->amount)) }}">
    </div>
</div>

<div class="form-group">
    <label>Due At</label>
    <input type="text" class="form-control" name="due_at" value="{{ old('due_at', $invoice->due_at) }}">
</div>