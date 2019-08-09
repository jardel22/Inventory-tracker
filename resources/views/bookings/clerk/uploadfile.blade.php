@extends('layouts.clerkapp')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Upload a file</div>
    </div>
    

    <br>
    {!! Form::open(['url' => '/uploadfile','files'=>'true']) !!}
        
        <div class="form-group">
        {{__('Select the file to upload')}}
        </div>
        
        <div class="form-group">
            {{Form::file('inventoryReport')}}
        </div>

        <div class="form-group">
            {{Form::submit('Upload File')}}
        </div>
    {!! Form::close() !!}

        {{-- <div class="form-group">
            {{Form::label('time', 'What time would you like to book?')}} <br>
            {{Form::time('time', 'What time would you like to book?', ['class'=>'form-control timepicker-lg'])}}
        </div>

        <div class="form-group">
            {{Form::label('addressLine1', 'What is the first line of your address?')}}
            {{Form::text('addressLine1', '', ['class'=>'form-control', 'placeholder' => 'Address Line 1'])}}
        </div>

        <div class="form-group">
            {{Form::label('city', 'Please enter the city of the property')}}
            {{Form::text('city', '', ['class'=>'form-control', 'placeholder' => 'City'])}}
        </div>

        <div class="form-group">
            {{Form::label('postcode', 'Please enter the postcode of the property')}}
            {{Form::text('postcode', '', ['class'=>'form-control', 'placeholder' => 'Postcode'])}}
        </div>

        <div class="form-group">
            {{Form::label('bedrooms', 'Number of bedrooms')}}
            {{Form::select('bedrooms', array(
                'Studio' => 'Studio',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10'),'', ['class' => 'form-control'] )}}
        </div>  

        <div class="form-group">
            {{Form::label('garage', 'Does this property have a garage?')}}
            {{Form::select('garage', array(
                'Yes' => 'Yes',
                'No' => 'No' ),'', ['class' => 'form-control'] )}}
        </div>

        <div class="form-group">
            {{Form::label('furnished', 'Is this property furnished?')}}
            {{Form::select('furnished', array(
                'Yes' => 'Yes',
                'No' => 'No' ),'', ['class' => 'form-control'] )}}
        </div>

        <div class="form-group">
            {{Form::label('electricityMeterLocation', 'Please enter the location of the electricity meter')}}
            {{Form::text('electricityMeterLocation', '', ['class'=>'form-control', 'placeholder' => 'Electricity Meter Location'])}}
        </div>

        <div class="form-group">
            {{Form::label('gasMeterLocation', 'Please enter the location of the gas meter')}}
            {{Form::text('gasMeterLocation', '', ['class'=>'form-control', 'placeholder' => 'Gas Meter Location'])}}
        </div>

        <div class="form-group">
            {{Form::label('waterMeterLocation', 'Please enter the location of the water meter')}}
            {{Form::text('waterMeterLocation', '', ['class'=>'form-control', 'placeholder' => 'Water Meter Location'])}}
        </div>

        <div class="form-group">
            {{Form::label('purchaseOrderNumber', 'Please enter the purchase order number')}}
            {{Form::text('purchaseOrderNumber', '', ['class'=>'form-control', 'placeholder' => 'Purchase Order Number'])}}
        </div>

        <div class="form-group">
            {{Form::label('specialInstructions', 'Please enter any special instructions')}}
            {{Form::text('specialInstructions', '', ['class'=>'form-control', 'placeholder' => 'Special Instructions: e.g. alarm code'])}}
        </div>


        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}} --}}
@endsection