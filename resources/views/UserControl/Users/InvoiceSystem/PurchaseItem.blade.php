@extends('layouts.controlp')

@section('PurchaseItem' , 'active')

@section('content')



<br>

<div class="col-lg-12">
    <div class="card">

        <div class="card-header d-flex align-items-center">
            <h3 class="h4 whitefont  ">Purchase Item</h3>
        </div>
        <p></p>
        <div class="card-body">
            <div class="tab-content">
                <div class="form-group row">

                    <div class="col-sm-9">
                        <div class="form-group">
                            <div class="input-group">
                                <p>
                                     Name : {{$item->name}}
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <div class="input-group">
                                <p>
                                     Decrption : {{$item->deceptionsLong}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <div class="input-group">

                                <p>
                                     Cost : {{$item->cost}}
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <div class="input-group">

                                <div class="d-flex flex-row-reverse"> <input type="button" onclick="PURCHASE()"
                                        value="PURCHASE NOW" id="PURCHASE" class="btn btn-success"></div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection


@section('script')

</script>



<script>
//TODO تحقق من رصيد
//TODO في حال عدم وجود رصيد يقوم بدفع
//TODO في حال وجود رصيد يقوم بقبول الطلب

@endsection
