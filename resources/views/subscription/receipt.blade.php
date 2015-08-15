@extends('layouts.main')

@section('content')
    <br><br><br>
    @if (Session::has('flash_notification.message'))
        <div class="alert alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
    @if (Session::has('errors'))

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
                @foreach(Session::get('errors')->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3 contenteditable="true" class="text-primary">Payment Details</h3>
    <div class="row">

            <div class="col-md-6">
                <div class="thumbnail">

                    <div class="caption">
                        <h3>
                            Payment id {{ $payment->id }}
                        </h3>
                        @foreach($payment->getTransactions() as $transaction)
                            <p>
                              Invoice Number  {{ $transaction->getInvoiceNumber() }}
                            </p>
                        <p>
                            Description {{ $transaction->getDescription() }}
                        </p>
                        <p>
                            Currency/Amount {{ $transaction->getAmount()->getCurrency()." ".$transaction->getAmount()->getTotal() }}
                        </p>
                        @endforeach
                        <p>

                        </p>
                    </div>
                </div>
            </div>

    </div>
@endsection