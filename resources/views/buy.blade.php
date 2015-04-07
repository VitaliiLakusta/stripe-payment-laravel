@extends('layouts.default')

@section('content')
    <h1>Buy for $10</h1>

    {!! Form::open(['id' => 'billing-form']) !!}

        <div class="form-group">
            <label for="card-number">Card Number</label>
            <input type="text" data-stripe="number" class="form-control" id="card-number" placeholder="Enter card number">
        </div>
        <div class="form-group">
            <label for="cvc">CVC Number</label>
            <input type="text" data-stripe="cvc" class="form-control" id="cvc" placeholder="CVC Number">
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="expiration">Expiration Month</label>
                    {!! Form::selectMonth(null, 1 ,['class' => 'form-control',
                        'id' => 'expiration', 'data-stripe' => 'exp-month']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="expiration">Expiration Year</label>
                    {!! Form::selectYear(null, date('Y'), date('Y')+10, null, ['class' => 'form-control',
                    'data-stripe' => 'exp-year']) !!}
                </div>
            </div>
        </div>

        {!! Form::submit('Buy Now', ['class' => 'btn btn-primary']) !!}

    <div class="payment-errors"></div>
    {!! Form::close() !!}

@stop

@section('footer')
    <script src="/js/billing.js"></script>
@stop